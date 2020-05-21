<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $fillable = ['content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function like_users()
    {
        return $this->belongsToMany(User::class, 'like','post_id','user_id')->withTimestamps();
    }
}
