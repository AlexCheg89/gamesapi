<?php

namespace App\Http\Controllers;

use App\Http\Resources\GameResource;
use Illuminate\Database\Console\ShowCommand;
use Illuminate\Http\Request;

use App\Models\Game;

use App\Http\Resources\GameCollection;

class GameController extends Controller
{
    public function index() {
        //$games = Game::all();

        //return view('games', ['games' => $games]);
        return new GameCollection(Game::all());
    }

    public function show(Request $request, Game $game)
    {
        return new GameResource($game);
    }

    // public function store(Request $request) {
    //     $validated = $request->validate([
    //         'title' => 'required|string|max:255',
    //         'developer' => 'required|string|max:255',
    //         'genres' => 'required|array',
    //         'description' => 'nullable|string',
    //         'pathimage' => 'nullable|string',
    //     ]);

    //     $game = Game::create($validated);

    //     return response() ->json($game, 201);
    // }

    // public function show($id) {
    //     $game = Game:: find($id);
    //     if (!$game) {
    //         return response()->json(['message' => 'Game not found'], 404);
    //     }

    //     return $game;
    // }

    // public function update(Request $request, $id) {
    //     $game = Game::find($id);
    //     if (!$game) {
    //         return response()->json(['message' => 'Game not found'], 404);
    //     }

    //     $validated = $request->validate([
    //         'title' => 'required|string|max:255',
    //         'developer' => 'required|string|max:255',
    //         'genres' => 'required|array',
    //         'description' => 'nullable|string',
    //         'pathimage' => 'nullable|string',
    //     ]);

    //     $game->update($validated);

    //     return $game;
    // }

    // public function destroy($id) {
    //     $game = Game::find($id);

    //     if (!$game) {
    //         return response()->json(['message' => 'Game not found'], 404);
    //     }

    //     $game->delete();

    //     return response()->json(['message' => 'Game deleted successfully']);
    // }

    // public function getByGenre($genre) {
    //     $games = Game::whereJsonContains('genres', $genre)->get();
    //     return $games;
    // }
}
