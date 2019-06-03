<?php

namespace App\Http\Controllers;

use App\Vin;
use Illuminate\Http\Request;

class Catalogue extends Controller
{
    public function afficheCatalogue($filtres = null){

        $results = Vin::inRandomOrder()->take(8)->get();

        return view('filtres')->with('results', $results);

    }
}
