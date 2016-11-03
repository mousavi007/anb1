<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kala extends Model
{
    public function group_kala()
    {
        return $this->belongsTo('App\Group_kala');
    }

    public function room()
    {
        return $this->belongsTo('App\Room')->withTimestamps();
    }

    public function roomname()
    {
        return Room::where('id', $this->room_id)->first();
    }
}