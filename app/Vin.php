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

        /*
        $results->with(['stock' => function($q){
                    $q->with(['condi' => function($q){
                        $q->with(['type' => function($q) {
                            $q->with(['prod' => function($q){
                                $q->with(['cepa' => function($q){
                                    $q->with(['cont' => function($q){
                                        $q->with(['met' => function($q){
                                            $q->with(['util' => function($q){
                                                $q->with(['cotas' => function($q){
                                                    $q->with(['photos' => function($q){
                                                        $q->with(['notes' => function($q){
                                                            $q->with(['comms' => function($q){
                                                                $q->with(['prixprods' => function($q){
                                                                    $q->orderBy('prix', 'asc');
                                                                }])->orderBy('prix','asc');
                                                            }])->orderBy('prix','asc');
                                                        }])->orderBy('prix','asc');
                                                    }])->orderBy('prix','asc');
                                                }])->orderBy('prix','asc');
                                            }])->orderBy('prix','asc');
                                        }])->orderBy('prix','asc');
                                    }])->orderBy('prix','asc');
                                }])->orderBy('prix','asc');
                            }])->orderBy('prix','asc');
                        }])->orderBy('prix','asc');
                    }])->orderBy('prix','asc');
                }]);
        */

        /*$results->load(['prixprods',function($q){
            $q->orderBy('prix','asc');
        }]);
        */

        $results->load( 'stock','condi',
                                'type','prod',
                                'cepa','cont',
                                'met','util',
                                'cotas','photos',
                                'notes', 'comms',
                                'prixprods');

        return $results;
    }

    public static function findRedWine(){

        $results = Vin::whereHas('type', function($query) {
            $query->where('label', 'like', 'Rouge');
        })
            //->with('type')
            ->get();

        return $results;
    }

    public static function findWhiteWine(){

        $results = Vin::whereHas('type', function($query) {
            $query->where('label', 'like', 'Blanc');
        })
            //->with('type')
            ->get();

        return $results;
    }

    public static function findRoseWine(){

        $results = Vin::whereHas('type', function($query) {
            $query->where('label', 'like', 'Rosé');
        })
            //->with('type')
            ->get();

        return $results;
    }

    public static function findMousseuxWine(){

        $results = Vin::whereHas('type', function($query) {
            $query->where('label', 'like', 'Mousseux');
        })
            //->with('type')
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

    public static function findPromotions(){

        $results = Vin::select('*')
            ->where("estPromo","=",1)
            ->get();

        return $results;
    }

    public static function findNouveautes(){

        $results = Vin::select('*')
            ->where("estNouveau","=",1)
            ->get();

        return $results;
    }

    public static function findFins(){

        $results = Vin::whereHas('stock', function($query) {
            $query->where('nbrUnite', '<=', 5);
        })
            //->with('type')
            ->get();

        return $results;
    }

}
