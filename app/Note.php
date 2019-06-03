<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function util() {
        return $this->belongsTo('App\Util');
    }

    public function vin() {
        return $this->belongsTo('App\Note');
    }
}
