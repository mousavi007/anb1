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
        return $this->belongsToMany('App\Kala', 'kala_room', 'room_id', 'kala_id')->withPivot('code_amval','type')->withTimestamps();
    }
}