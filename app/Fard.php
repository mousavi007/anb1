<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fard extends Model
{
    public function room() {
        return $this->hasMany('App\Room');
    }
}
