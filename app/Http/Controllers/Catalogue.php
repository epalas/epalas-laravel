<?php

namespace App\Http\Controllers;

use App\Vin;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class Catalogue extends Controller
{
    public function afficheCatalogue(){

        $results = Vin::getData('asc');
        return view('filtres')->with('results', $results);

    }

    public function filtreCatalogue($filtre)
    {

        switch ($filtre) {
            case "rouges":
                $filtered_results = Vin::findRedWine();
                return view('filtres')->with('results', $filtered_results);
                break;

            case "blancs":
                $filtered_results = Vin::findWhiteWine();
                return view('filtres')->with('results', $filtered_results);
                break;

            case "roses":
                $filtered_results = Vin::findRoseWine();
                return view('filtres')->with('results', $filtered_results);
                break;

            case "mousseux":
                $filtered_results = Vin::findMousseuxWine();
                return view('filtres')->with('results', $filtered_results);
                break;

            case "bios":
                $filtered_results = Vin::findBio();
                return view('filtres')->with('results', $filtered_results);
                break;

            case "primeurs":
                $filtered_results = Vin::findPrimeur();
                return view('filtres')->with('results', $filtered_results);
                break;

        }



    }
}
