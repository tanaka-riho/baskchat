<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayersController extends Controller
{
    public function index()
    {
        $data = [];
            $players = Player::all(); // 全件取得
            
         $data = [
                'players' => $players,
            
            ];
        

        return view('player.players', $data);
    }
}
