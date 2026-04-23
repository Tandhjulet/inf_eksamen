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
        $election = Election::where('active', true)->whereDoesntHave('voters', function ($q) {
            $q->where('user_id', Auth::id());
        })->first();

        return Inertia::render('Dashboard', [
            'election' => $election,
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
            ->whereDoesntHave('voters', function ($q) {
                $q->where('user_id', Auth::id());
            })
            ->sole();

        if ($election == null)
            return;

        $candidate = Candidate::where('id', $validated['candidate_id'])->sole();
        DB::table('candidate_election_user')->insert([
            'candidate_id' => $candidate->id,
            'user_id' => auth()->id(),
            'election_id' => $election->id,
        ]);

        return to_route('dashboard');
    }
}
