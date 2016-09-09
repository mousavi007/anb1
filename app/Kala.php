<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kala extends Model
{
    public function group_kala() {
        return $this->belongsTo('App\Group_kala');
    }
    public function room() {
        return $this->belongsToMany('App\Room', 'kala_room', 'kala_id', 'room_id')->withPivot('code_amval','type')->withTimestamps();
    }
}
