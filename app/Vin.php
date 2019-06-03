<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vin extends Model
{

    protected $table = 'vins';

    public function stock() {
        return $this->belongsTo('App\Stock');
    }

    public function condi() {
        return $this->belongsTo('App\Condi');
    }

    public function type() {
        return $this->belongsTo('App\Type');
    }

    public function prod() {
        return $this->belongsTo('App\Prod');
    }

    public function cepa() {
        return $this->belongsToMany('App\Cepa');
    }

    public function cont() {
        return $this->belongsToMany('App\Cont');
    }

    public function met() {
        return $this->belongsToMany('App\Met');
    }

    public function util() {
        return $this->belongsToMany('App\Util');
    }

    public function cotas(){
        return $this->hasMany('App\Cota');
    }

}
