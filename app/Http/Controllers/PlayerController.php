<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Position;
use App\Models\Postion;
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

        if ($positionId) {
            $players = Player::where('position_id', $positionId)->get();
        } else {
            $players = Player::all();
        }

        $keepers = $players->filter(function (\App\Models\Player $value) {
            return $value->position_id == 1;});
        $defenders = $players->filter(function (\App\Models\Player $value) {
            return $value->position_id == 2;});
        $midfielders = $players->filter(function (\App\Models\Player $value) {
            return $value->position_id == 3;});
        $attackers = $players->filter(function (\App\Models\Player $value) {
            return $value->position_id == 4;});
        return view('players.team',[
            'keepers'=>$keepers,
            'players' => $players,
            'defenders'=>$defenders,
            'midfielders'=>$midfielders,
            'attackers'=>$attackers,
            'selectedPosition' => $positionId,
            'positions'=>$positions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {

        return view('players.details',['player'=>$player]);//
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Player $player)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        //
    }
}
