<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        // select all from vin
        $vins = \App\Vin::all();
        // select all from prixprod
        $prix = \App\Prixprod::all();
        // id du vin à récupérer depuis la vue filtres
        $id = 4;
        // select contenant from vin where id
        $contVin = \App\Contvin::all()
            ->where('id', 2);

        return view('produit', compact('vins'))->with(
            [
                'id' => $id,
                'prix' => $prix,
                'contVin' => $contVin
            ]
        );
    }
}
