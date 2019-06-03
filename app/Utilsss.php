<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Util extends Model
{
    public function vin() {
        return $this->belongsToMany('App\Vin');
    }

    public function note() {
        return $this->hasMany('App\Note');
    }

    public function comm() {
        return $this->hasMany('App\Comm');
    }

    public function art() {
        return $this->belongsToMany('App\Art');
    }
}
