<?php

namespace App\Http\Controllers;

use App\Models\Party;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(Request $req)
    {
        return Inertia::render('Dashboard', [
            'parties' => Party::with('candidates')->get(),
        ]);
    }
}
