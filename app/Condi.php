<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condi extends Model
{
    public function vin() {
        return $this->hasMany('App\Vin');
    }
}
