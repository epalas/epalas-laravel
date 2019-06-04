<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prixprod extends Model
{
    public function vin() {
        return $this->belongsTo('App\Vin');
    }

}
