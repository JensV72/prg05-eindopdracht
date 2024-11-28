<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $players = Player::all();
        $users = User::all();
        return view('dashboard',[
        'players' => $players,
            'users' => $users
            ]);
    }
}
