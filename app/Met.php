<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Met extends Model
{
    public function vin() {
        return $this->belongsToMany('App\Vin');
    }
}
