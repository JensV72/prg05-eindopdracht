<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Player;
use App\Models\Team;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $players = Player::all();
        $users = User::all();
        $teams = Team::all();
        $nextGame = Game::where('game_date', '>=', now()->timestamp * 1000)
        ->orderBy('game_date', 'asc')
            ->first();

        if ($nextGame) {
            $gameDate = Carbon::createFromTimestampMs($nextGame->game_date)->format('F j');
        } else {
            $gameDate = 'No upcoming games';
        }
//        $lastGame = Game::where('game_date', '=<', now()->timestamp * 1000)
//            ->orderBy('game_date', 'asc')
//            ->first();

        $sorted = $teams->sortByDesc(function ($team) {
            return [
                $team->points,
                $team->goal_difference,
                $team->goals_scored
            ];
        });
        $sorted->values()->all();
        return view('dashboard.index',[
            'sorted'=> $sorted,
            'players' => $players,
            'next_game' => $nextGame,
            'game_date' => $gameDate,
//            'last_game' => $lastGame,
            'users' => $users,
            'teams' => $teams,
        ]);
    }

    public function overview(Request $request)
    {
        $players = Player::all();
        $users = User::all();
        $teams = Team::all();
        $games = Game::all();
        $title = $request->get('title');
        $name = $request->get('name');
        $sorted = $teams->sortByDesc(function ($team) {
            return [
                $team->points,
                $team->goal_difference,
                $team->goals_scored
            ];
        });
        $sorted->values()->all();
        return view('dashboard.overview', [
            'title' => $title,
            'name'=> $name,
            'sorted'=>$sorted,
            'players' => $players,
            'users' => $users,
            'games' => $games,
        ]);
    }



}
