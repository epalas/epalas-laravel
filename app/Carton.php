<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carton extends Model
{
    public function vin() {
        return $this->belongsToMany('App\Vin','cartonvins','idCarton','idVin');
    }
}
