<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cont extends Model
{
    public function vin() {
        return $this->belongsToMany('App\Vin', 'contvins','idCont','idVin');
    }
}
 