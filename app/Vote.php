<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
     protected $fillable = ['country_id', 'user_id','game_id'];

    
    
}
