<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vin extends Model
{

    protected $table = 'vins';

    public function stock() {
        return $this->belongsTo('App\Stock','idStock');
    }

    public function condi() {
        return $this->belongsTo('App\Condi','idCondi');
    }

    public function type() {
        return $this->belongsTo('App\Type','idType');
    }

    public function prod() {
        return $this->belongsTo('App\Prod','idProd');
    }

    public function cepa() {
        return $this->belongsToMany('App\Cepa', 'assembs','idVin', 'idCepa');
    }

    public function cont() {
        return $this->belongsToMany('App\Cont','contvins', 'idVin','idCont');
    }

    public function met() {
        return $this->belongsToMany('App\Met','metvins','idVin','idMet');
    }

    public function util() {
        return $this->belongsToMany('App\Util','favos','idVin','idUtil');
    }

    public function cotas(){
        return $this->hasMany('App\Cota', 'idVin', 'id');
    }

    /* Bordel de Audric */

    public static function getData($order){

        $results=Vin::all();

        //->orderBy('vins.nom','asc');

        $results->load('stock','condi','type','prod','cepa','cont','met','util','cotas');

        return $results;

        }

}
