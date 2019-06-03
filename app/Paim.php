<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paim extends Model
{
    public function comde() {
        return $this->belongsTo ('App\Comde');
    }
}
