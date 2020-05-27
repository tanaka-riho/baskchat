<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['country'];
    
    public function player()
    {
        return $this->hasMany(Player::class);
    }
}