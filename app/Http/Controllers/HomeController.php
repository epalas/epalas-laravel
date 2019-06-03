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
        $vins = Vin::inRandomOrder()->take(8)->get(); 

        return view('accueil2')->with('vins', $vins);
/*      $vins = Vin::with(['cotas'])->first()->inRandomOrder()->take(8)->get();
        $vins = Vin::select('vins', 'cotas')->join('cotas', 'vins.id', '=', 'cotas.idVin')
        ->select('cotas.nom')->where('vins.id', '=', 'cotas.idVin')->inRandomOrder()->take(8)->get();  */ 

        

    }
}
