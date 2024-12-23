<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Standing;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $players = Player::all();
        $users = User::all();
        $teams = Standing::all();
        $sorted = $teams->sortByDesc(function ($team) {
            return [
                $team->points,
                $team->goal_difference,
                $team->goals_scored
            ];
        });
        $sorted->values()->all();
        return view('dashboard.dashboard',[
            'sorted'=> $sorted,
        'players' => $players,
            'users' => $users,
            'teams' => $teams,
        ]);
    }

    public function overview(Request $request)
    {
        $players = Player::all();
        $users = User::all();
        $teams = Standing::all();
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
        ]);
    }
}
