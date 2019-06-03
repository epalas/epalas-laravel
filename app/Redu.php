<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Redu extends Model
{
    public function comde() {
        return $this->belongsToMany('App\Comde');
    }
}
