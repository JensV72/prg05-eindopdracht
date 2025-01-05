<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Position;
use App\Models\Postion;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {   $searched = false;

        $positions = Position::all();

        $positionId = $request->input('position_id');

        $playersQuery = Player::query();

        if ($positionId) {
            $playersQuery->where('position_id', $positionId);
        }

        if ($request->has('search') && $request->input('search') !== '') {
            $searched = true;
            $searchTerm = $request->input('search');
            $playersQuery->where(function ($query) use ($searchTerm) {
                $query->where('firstname', 'like', '%' . $searchTerm . '%')
                    ->orWhere('lastname', 'like', '%' . $searchTerm . '%');
            });
        }

        $players = $playersQuery->get();

        return view('players.index', [
            'searched' => $searched,
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
    public function store(Request $request)
    {
        $userID = auth()->id();

        $request->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'position_id' => ['required'],
            'goals' => ['required'],
            'assist' => ['required'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image')->storePublicly('players', 'public');
        } else {
            $image = null;
        }

        Player::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'user_id' => $userID,
            'position_id' => $request->input('position_id'),
            'goals' => $request->input('goals'),
            'assist' => $request->input('assist'),
            'image' => $image,
        ]);

        $deeperValidation = Player::where('user_id', Auth::user()->id)
            ->count();

        if (Auth::user()->admin) {
            return redirect()->route('dashboard.overview', ['title' => 'Players Overview', 'name' => 'player']);
        } elseif ($deeperValidation <= 2) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('dashboard.overview', ['title' => 'Players Overview', 'name' => 'player']);
        }
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
        if ($player->user_id == Auth::id() || Auth::user()->admin){
        return view('players.edit', [
            'player'=>$player,
            'positions'=>$positions
        ]);
        }
        else {
            abort(403, 'Unauthorized action.');}

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

        $deeperValidation = Player::where('user_id', Auth::user()->id)
            ->count();

        if (Auth::user()->admin){
            return redirect()->route('dashboard.overview', ['title' => 'Players Overview', 'name' => 'player']);
        }
        elseif ($deeperValidation <= 2){
            return redirect()->route('dashboard');
        }
        else {
            return redirect()->route('dashboard.overview', ['title' => 'Players Overview', 'name' => 'player']);
        }
    }
}
