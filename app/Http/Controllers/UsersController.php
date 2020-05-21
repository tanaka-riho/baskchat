<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Post;// 追加

class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(10);

        return view('users.index', [
            'users' => $users,
        ]);
    }
    
    public function show($id)
    {
        $user = User::find($id);
        
        $posts = $user->posts()->orderBy('created_at', 'desc')->paginate(10);

        $data = [
            'user' => $user,
            'posts' => $posts,
        ];

        $data += $this-> counts ($user);

        return view('users.show', $data);
    }
    
    public function likes($id)
    {
        $user = User::find($id);
        $likes = $user->likes()->paginate(10);
        
        $data = [
            'user' => $user,
            'posts' => $likes,
        ];
        
        $data += $this->counts($user);
        
        return view('users.likes',$data);
    }
    
}