<?php

namespace App\Http\Controllers;

use App\Vin;
use App\Cota;
use Illuminate\Http\Request;

class RecommController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=Vin::inRandomOrder()->take(10)->get();

        $datas->load( 'stock','condi',
        'type','prod',
        'cepa','cont',
        'met','util',
        'cotas','photos',
        'notes','prixprods');

        return view('recommandation')->with('datas', $datas);

    }
}