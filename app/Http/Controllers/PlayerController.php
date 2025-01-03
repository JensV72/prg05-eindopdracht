<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Position;
use App\Models\Postion;
use App\Models\User;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $positionId = $request->input('position_id');
        $positions = Position::all();

        $players = $positionId ? Player::where('position_id', $positionId) : Player::query();


        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $players = $players->where('firstname', 'like', '%' . $searchTerm . '%')->orWhere('lastname', 'like', '%' . $searchTerm . '%');
        }

        $players = $players->get();

        return view('players.index', [
            'players' => $players,
            'selectedPosition' => $positionId,
            'positions' => $positions,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $positions= Position::all();
        return view('players.create',[
            'positions'=>$positions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $userID = auth()->id();

        request()->validate([
        'firstname'=>['required'],
            'lastname'=>['required'],
            'position_id'=>['required'],
            'goals'=>['required','min:1'],
            'assist'=>['required','min:1'],
        ]);
        Player::create([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'user_id' => $userID,
            'position_id' => request('position_id'),
            'goals' => request('goals'),
            'assist' => request('assist'),
        ]);
        return redirect()->route('dashboard.overview', ['title' => 'Players Overview', 'name' => 'player']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {

        return view('players.show',['player'=>$player]);//
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player)
    {
        $positions = Position::all();
        return view('players.edit', [
            'player'=>$player,
            'positions'=>$positions
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Player $player)
    {
        request()->validate([
            'firstname'=>['required'],
            'lastname'=>['required'],
            'position_id'=>['required'],
            'goals'=>['required','min:1'],
            'assist'=>['required','min:1'],
        ]);

        $player->update([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'user_id' => 1,
            'position_id' => request('position_id'),
            'goals' => request('goals'),
            'assist' => request('assist'),
        ]);
        return redirect()->route('dashboard.overview', ['title' => 'Players Overview', 'name' => 'player']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        $player->delete();
        return redirect()->route('dashboard.overview', ['title' => 'Players Overview', 'name' => 'player']);
    }
}
