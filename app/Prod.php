<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prod extends Model
{
    public function vin() {
        return $this->hasMany('App\Vin','idProd');
    }
}
