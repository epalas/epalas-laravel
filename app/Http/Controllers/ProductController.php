<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contvin;
use App\Vin;
use App\Prixprod;

class ProductController extends Controller
{
    public function index() {
        // select all from vin
        $vins = Vin::all();
        // select all from prixprod
        $prix = Prixprod::all();
        // id du vin à récupérer depuis la vue filtres
        $id = 4;
        // select contenant from vin where id
        $contVinId = Contvin::select('idCont')->where('idVin', $id);

        dd($contVinId);
//        Table::select('name','surname')->where('id', 1)->get();

        return view('produit', compact('vins'))->with(
            [
                'id' => $id,
                'prix' => $prix,
                'contVin' => $contVin
            ]
        );
    }
}
