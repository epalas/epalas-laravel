<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comm extends Model
{
    public function util() {
        return $this->belongsToMany('App\Util');
    }
}
