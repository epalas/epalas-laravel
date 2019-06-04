<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vin;

class ProductController extends Controller
{
    public function index($id){
        $x = Vin::find($id);
        $x->load('stock','condi','type','prod','cepa','cont','met','util','cotas', 'photos', 'notes', 'prixprods', 'comms');

        return view('produit')->with('x', $x);
    }
}