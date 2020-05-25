<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
     protected $fillable = ['country_id','result'];

    public function vote()
    {
        return $this->belongsToMany(Vote::class,'country_id','user_id','games_id')->withTimestamps();
    }
    
}
