<?php

namespace App\Http\Controllers;

use App\Vin;
use App\Cota;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$vins = Vin::inRandomOrder()->get(); 

        $datas = Vin::selectRaw('vins.nom,
                                    vins.annee,
                                    vins.description,
                                    vins.alcool,
                                    vins.apogee,
                                    vins.tempCons,
                                    vins.tempServ,
                                    vins.titre,
                                    vins.finDeSerie,
                                    vins.estBio,
                                    vins.estPrimeur,
                                    
                                    condis.nbrUnite,
                                    condis.type,
                                    
                                    prods.nom as prodNom,
                                    prods.pays,
                                    prods.region,
                                    prods.url,
                                    
                                    types.label,
                                    
                                    stocks.nbrUnite,
                                    
                                    photos.url,
                                    
                                    prixprods.prix,
                                    
                                    notes.nbrEtoiles')

                ->join('condis', 'vins.idCondi', '=', 'condis.id')
                ->join('prods', 'vins.idProd', '=', 'prods.id')
                ->join('types', 'vins.idType', '=', 'types.id')
                ->join('stocks', 'vins.idStock', '=', 'stocks.id')
                ->join('photos', 'photos.idVin', '=', 'vins.id')
                ->join('prixprods', 'prixprods.idVin', '=', 'vins.id')
                ->join('notes', 'notes.idVin', '=', 'vins.id')
                ->inRandomOrder()->take(8)->get();

        return view('accueil2')->with('datas', $datas);

    }
}
