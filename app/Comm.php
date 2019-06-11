<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Comm extends Model
{
    protected $table = 'comms';

    public $timestamps = false;

    public function util(){
        return $this->belongsToMany('App\Util');
    }

    public function vin(){
        return $this->belongsToMany('App\Vin');
    }

    public static function findWinesComm($id){
        $comments = DB::select('SELECT comms.titre as titreComm, contenu, utils.nom, utils.prenom, utils.urlPhoto, date FROM `comms` 
                                      INNER JOIN vins ON comms.idVin = vins.id 
                                      INNER JOIN utils ON comms.idUtil = utils.id 
                                      WHERE vins.id =' . $id, array());

        return $comments;
    }

}
