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
        return view('dashboard.dashboard',[
        'players' => $players,
            'users' => $users,
            'teams' => $teams,
        ]);
    }

    public function overview(Request $request)
    {
        $players = Player::all();
        $users = User::all();
        $title = $request->get('title');
        $name = $request->get('name');
        return view('dashboard.overview', [
            'title' => $title,
            'name'=> $name,
            'players' => $players,
            'users' => $users,
        ]);
    }
}
