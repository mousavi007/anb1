<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group_kala extends Model
{
    public function kala() {
        return $this->hasMany('App\Kala');
    }
}
