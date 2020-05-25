<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vote;

class VotesController extends Controller
{
    public function index()
    {
        $data = [];
            $user = \Auth::user();
            $posts = Vote::all(); // 全件取得
        
        
            $data = [
                'user' => $user,
                'votes' => $votes,
            
            ];
        
        
        return view('votes.index', $data);
    }
    
    public function store(Request $request, $id)
    {
        \Auth::user()->vote($id);
        return back();
    }

    public function destroy($id)
    {
        \Auth::user()->unvote($id);
        return back();
    }
}
