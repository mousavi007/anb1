<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupkala extends Model
{
   public function kala() {
        return $this->hasMany('App\Kala');
    }
}
