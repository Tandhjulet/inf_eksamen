<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Election;
use App\Models\Party;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(Request $req)
    {
        $currentlyVotingOn = Election::where('active', true)->whereHas('voters', function ($q) {
            $q->where('user_id', Auth::id());
            $q->whereNotNull('token');
        })->first();

        if (!$currentlyVotingOn) {
            $election = Election::where('active', true)->whereDoesntHave('voters', function ($q) {
                $q->where('user_id', Auth::id());
            })->first();

            if ($election)
                $election->voters()->attach(Auth::id());

            return Inertia::render('Dashboard', [
                'election' => $election,
                'parties' => Party::with('candidates')->get(),
            ]);
        }

        return Inertia::render('Dashboard', [
            'election' => $currentlyVotingOn,
            'parties' => Party::with('candidates')->get(),
        ]);
    }

    public function vote(Request $req)
    {
        $validated = $req->validate([
            'candidate_id' => ['required', 'integer'],
            'election_id' => ['required', 'integer'],
        ]);

        $electionId = $validated['election_id'];
        $election = Election::where('id', $electionId)
            ->where('active', true)
            ->sole();

        if (!$election)
            return redirect()->back();

        $voter = $election->voters()
            ->where('user_id', Auth::id())
            ->first();

        $token = $voter?->pivot?->token;

        if (!$token)
            return redirect()->back();

        $candidate = Candidate::where('id', $validated['candidate_id'])->sole();
        DB::table('candidate_election')->insert([
            'candidate_id' => $candidate->id,
            'token' => $token,
            'election_id' => $election->id,
        ]);

        $election->voters()->updateExistingPivot($election->id, [
            'token' => null,
        ]);

        return to_route('dashboard');
    }
}
