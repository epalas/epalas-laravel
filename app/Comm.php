<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comm extends Model
{
    protected $fillable = ['titre', 'contenu', 'date'];

    public $timestamps = false;

    public function util(){
        return $this->belongsToMany('App\Util');
    }

    public function vin(){
        return $this->belongsToMany('App\Vin');
    }
}
