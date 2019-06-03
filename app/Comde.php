<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comde extends Model
{
    public function redu() {
        return $this->belongsToMany('App\Redu');
    }

    public function comde() {
        return $this->hasMany('App\Paim');
    }
}
}
