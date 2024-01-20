<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\UserGame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GamesController extends Controller
{
    public function index() {
        $user = Auth::user();

        $games = Game::all();
        $user_games = $user ? UserGame::where('user_id', '=', $user->id)->get() : [];

        return view('home.index', [
            'games' => $games,
            'user_games' => $user_games
        ]);
    }
}
