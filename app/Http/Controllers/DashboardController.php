<?php

namespace App\Http\Controllers;

use App\Models\Election;
use App\Models\Party;
use App\Models\User;
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
}
