<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function fard()
    {
        return $this->belongsTo('App\Fard');
    }
    public function kala() {
        return $this->hasMany('App\Kala', 'kala_room')->withTimestamps();
    }
}