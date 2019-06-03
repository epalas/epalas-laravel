<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cota extends Model
{
    public function vin() {
		return $this->belongsTo('App\Vin');
	}
}
