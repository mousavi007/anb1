<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kala extends Model
{
    public function group_kala() {
        return $this->belongsTo('App\Group_kala');
    }
    public function room() {
        return $this->belongsTo('App\Room', 'kala_room')->withTimestamps();
    }
}
