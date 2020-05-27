<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    
     protected $fillable = ['country_id','information','name'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
