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

    public function carton() {
        return $this->belongsToMany('App\Carton', 'cartonvins','idVin', 'idCarton');
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

    //Obtenir toutes les données relatives aux vins stockés en BD
    public static function getData($order){

        $results=Vin::all();

        if($order=='asc') {
            $results = $results->sortBy(function ($vin) {
                return $vin->prixprods[0]->prix;
            });
        }

        if($order=='desc'){
            $results = $results->sortByDesc(function ($vin) {
                return $vin->prixprods[0]->prix;
            });
        }

        $results->load( 'stock','condi',
            'type','prod',
            'cepa','carton',
            'cont', 'met',
            'util', 'cotas',
            'photos', 'notes',
            'comms', 'prixprods');

        return $results;
    }

    //Trouve un ou plusieurs vin(s) par type et selon un ordre
    public static function findWineByTypeAndOrder($type, $order){

        $results = Vin::whereHas('type', function($query) use ($type){
            $query->where('label', 'like', $type);
        })->get();

        if($order == 'asc') {
            $results = $results->sortBy(function ($vin) {
                return $vin->prixprods[0]->prix;
            });
        }

        if($order == 'desc') {
            $results = $results->sortByDesc(function ($vin) {
                return $vin->prixprods[0]->prix;
            });
        }
        return $results;
    }

    //Trouve un ou plusieurs vin(s) en fonction d'un boolean et selon un ordre
    public static function findWineByBooleanAndOrder($type,$order){

        $results = Vin::select('*')
            ->where($type,"=",1)
            ->get();

        if($order == 'asc') {
            $results = $results->sortBy(function ($vin) {
                return $vin->prixprods[0]->prix;
            });
        }

        if($order == 'desc') {
            $results = $results->sortByDesc(function ($vin) {
                return $vin->prixprods[0]->prix;
            });
        }
        return $results;
    }

    //Trouve un ou plusieurs vin(s) si ils sont en fins de série
    public static function findFins($order){

        $results = Vin::whereHas('stock', function($query) {
            $query->where('nbrUnite', '<=', 5);
        })->get();

        if($order == 'asc') {
            $results = $results->sortBy(function ($vin) {
                return $vin->prixprods[0]->prix;
            });
        }

        if($order == 'desc') {
            $results = $results->sortByDesc(function ($vin) {
                return $vin->prixprods[0]->prix;
            });
        }

        return $results;
    }

}
