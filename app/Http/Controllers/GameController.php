<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Carbon\Carbon;


class GameController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        request()->validate([
            'team' => 'Fainort',
            'pitch' => ['required','min:1'],
            'opponent' => ['required'],
            'game_date' => ['required', 'date']
        ]);

        $gameDateInMs = Carbon::createFromFormat('Y-m-d\TH:i', request('game_date'))->timestamp * 1000;

        Game::create([
            'team' => 'Fainort',
            'pitch' => request('pitch'),
            'opponent' => request('opponent'),
            'result_team' => request('result_team'),
            'result_opponent' => request('result_opponent'),
            'game_date' => $gameDateInMs,
        ]);
        return redirect()->route('dashboard.overview', ['title' => 'games Overview', 'name' => 'game']);
    }


    public function edit(Game $game)
    {
        return view('games.edit', [
            'game' => $game,
        ]);

    }

    public function update(Game $game)
    {
        request()->validate([
            'opponent' => ['required'],
            'pitch' => ['required','min:1'],
            'game_date' => ['required', 'date'],
        ]);
        $gameDateInMs = Carbon::createFromFormat('Y-m-d\TH:i', request('game_date'))->timestamp * 1000;

        $game->update([
            'opponent' => request('opponent'),
            'pitch' => request('pitch'),
            'result_team' => request('result_team'),
            'result_opponent' => request('result_opponent'),
            'game_date' => $gameDateInMs,
        ]);
        return redirect()->route('dashboard.overview', ['title' => 'Games Overview', 'name' => 'game']);
    }

    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('dashboard.overview', ['title' => 'Games Overview', 'name' => 'game']);
    }
}
