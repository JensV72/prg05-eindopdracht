<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        request()->validate([
            'team' => ['required'],
            'played' => ['required', 'min:1'],
            'wins' => ['required', 'min:1'],
            'draws' => ['required', 'min:1'],
            'losses' => ['required', 'min:1'],
            'goals_scored' => ['required', 'min:1'],
            'goal_difference' => ['required', 'min:1'],
            'points' => ['required', 'min:1']
        ]);
        Team::create([
            'team' => request('team'),
            'played' => request('played'),
            'wins' => request('wins'),
            'draws' => request('draws'),
            'losses' => request('losses'),
            'goals_scored' => request('goals_scored'),
            'goal_difference' => request('goal_difference'),
            'points' => request('points')
        ]);
        return redirect()->route('dashboard.overview', ['title' => 'Team Overview', 'name' => 'team']);
    }


    public function edit(Team $team)
    {
        return view('teams.edit', [
            'team' => $team,
        ]);

    }

    public function update(Team $team)
    {
        request()->validate([
            'team' => ['required'],
            'played' => ['required', 'min:1'],
            'wins' => ['required', 'min:1'],
            'draws' => ['required', 'min:1'],
            'losses' => ['required', 'min:1'],
            'goals_scored' => ['required', 'min:1'],
            'goal_difference' => ['required', 'min:1'],
            'points' => ['required', 'min:1']
        ]);
        $team->update([
            'team' => request('team'),
            'played' => request('played'),
            'wins' => request('wins'),
            'draws' => request('draws'),
            'losses' => request('losses'),
            'goals_scored' => request('goals_scored'),
            'goal_difference' => request('goal_difference'),
            'points' => request('points')
        ]);
        return redirect()->route('dashboard.overview', ['title' => 'Team Overview', 'name' => 'team']);
    }

    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('dashboard.overview', ['title' => 'Team Overview', 'name' => 'team']);
    }
}
