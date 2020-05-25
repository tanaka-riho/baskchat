<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class GamesController extends Controller
{
    public function index()
    {
        $data = [];
            $user = \Auth::user();
            $games = Game::all(); // 全件取得
            
         $data = [
                'user' => $user,
                'games' => $games,
            
            ];
        

        return view('game.games', $data);
    }
    
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'country' => 'required|max:191',
            'result' => 'required|max:191',
        ]);

        $request->user()->posts()->create([
            'content' => $request->content,
        ]);

        return back();
    }
    
    public function destroy($id)
    {
        $post = \App\Post::find($id);

        if (\Auth::id() === $post->user_id) {
            $post->delete();
        }

        return back();
    }
}
