<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    
    

    public function likes()
    {
        return $this->belongsToMany(Post::class, 'like','user_id','post_id')->withTimestamps();
    }

    public function like($postId)
    {
        //既にお気に入りしているか確認
        $exist=$this->is_like($postId);
        
        if ($exist) {
        //既にお気に入りしていればなにもしない
        return false;
        }else{
        //未お気に入りであればする
        $this->likes()->attach($postId);
        return true;
        }
    }
    
    public function unlike($postId)
    {
        //既にお気に入りしているか確認
        $exist=$this->is_like($postId);
       
        if($exist){
        //既にお気に入りしていれば外す
        $this->likes()->detach($postId);
        return true;
        }else{
        //未お気に入りであればなにもしない
        return false;
        }
    }
    
    public function is_like($postId)
    {
        return $this->likes()->where('post_id', $postId)->exists();
    }
    
    public function votes()
    {
        return $this->belongsToMany(Game::class, 'vote','user_id','game_id','country_id')->withTimestamps();
    }

    public function vote($gameId)
    {
        //既にお気に入りしているか確認
        $exist=$this->is_vote($gameId);
        
        if ($exist) {
        //既にお気に入りしていればなにもしない
        return false;
        }else{
        //未お気に入りであればする
        $this->votes()->attach($gameId);
        return true;
        }
    }
    
    public function unvote($gameId)
    {
        //既にお気に入りしているか確認
        $exist=$this->is_vote($gameId);
       
        if($exist){
        //既にお気に入りしていれば外す
        $this->votes()->detach($gameId);
        return true;
        }else{
        //未お気に入りであればなにもしない
        return false;
        }
    }
    
    public function is_vote($gameId)
    {
        return $this->votes()->where('game_id', $gameId)->exists();
    }
}
