<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function util() {
        return $this->belongsTo('App\Util');
    }
}
