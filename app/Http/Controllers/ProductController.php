<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vin;
use App\Comm;

class ProductController extends Controller
{
    public function index(Request $request, $id){

        $x = Vin::find($id);
        $x->load('stock','condi','type','prod','cepa','cont','met','util','cotas', 'photos', 'notes', 'prixprods', 'comms');

        $comments = Comm::findWinesComm($id);

//        dd(str_replace($request->url(), $x->nom, $request->fullUrl()));

        return view('produit')->with(['x' => $x, 'comments' => $comments]);
    }
}