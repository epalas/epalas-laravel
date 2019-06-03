<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cepa extends Model
{
    public function vin() {
        return $this->belongsToMany('App\Vin','assembs','idCepa','idVin');
    }
}
