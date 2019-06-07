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

        $datas['new']=Vin::inRandomOrder()->take(4)->get();
        $datas['recom']=Vin::inRandomOrder()->take(4)->get();

        //->orderBy('vins.nom','asc');

        $datas['new']->load( 'stock','condi',
        'type','prod',
        'cepa','cont',
        'met','util',
        'cotas','photos',
        'notes','prixprods');

        $datas['recom']->load( 'stock','condi',
        'type','prod',
        'cepa','cont',
        'met','util',
        'cotas','photos',
        'notes','prixprods');

        return view('accueil2')->with('datas', $datas);

    }
}