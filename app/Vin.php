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

    public function photos(){
        return $this->hasMany('App\Photo', 'idVin', 'id');
    }

    public function notes(){
        return $this->hasMany('App\Note', 'idVin', 'id');
    }

    public function prixprods(){
        return $this->hasMany('App\Prixprod', 'idVin', 'id');
    }

    public function comms(){
        return $this->hasMany('App\Comm', 'idVin', 'id');
    }

    /* Bordel de Audric */

    public static function getData($order){

        $results=Vin::all();

        //->orderBy('vins.nom','asc');

        $results->load( 'stock','condi',
                                'type','prod',
                                'cepa','cont',
                                'met','util',
                                'cotas','photos',
                                'notes','prixprods',
                                'comms');

        return $results;

        }

    public static function findRedWine(){

        $results = Vin::join('types', 'vins.idType', '=', 'types.id')
            ->select('*')
            ->where("types.label","like","Rouge")
            ->get();

        return $results;
    }

    public static function findWhiteWine(){

        $results = Vin::join('types', 'vins.idType', '=', 'types.id')
            ->select('*')
            ->where("types.label","like","Blanc")
            ->get();

        return $results;
    }

    public static function findRoseWine(){

        $results = Vin::join('types', 'vins.idType', '=', 'types.id')
            ->select('*')
            ->where("types.label","like","Rosé")
            ->get();

        return $results;
    }

    public static function findMousseuxWine(){

        $results = Vin::join('types', 'vins.idType', '=', 'types.id')
            ->select('*')
            ->where("types.label","like","Mousseux")
            ->get();

        return $results;
    }

    public static function findBio(){

        $results = Vin::select('*')
            ->where("estBio","=",1)
            ->get();

        return $results;
    }

    public static function findPrimeur(){

        $results = Vin::select('*')
            ->where("estPrimeur","=",1)
            ->get();

        return $results;
    }

}
