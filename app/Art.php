<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    public function util() {
        return $this->belongsTo('App\Util');
    }
}
