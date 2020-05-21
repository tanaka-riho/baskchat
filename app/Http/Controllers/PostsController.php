<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $data = [];
            $user = \Auth::user();
            $posts = Post::all(); // 全件取得
            $posts = Post::paginate(10); // ページ区切りで取得
        
            $data = [
                'user' => $user,
                'posts' => $posts,
            
            ];
        
        
        return view('welcome', $data);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:191',
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
