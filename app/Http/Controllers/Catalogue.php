<?php

namespace App\Http\Controllers;

use App\Vin;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class Catalogue extends Controller
{
    public function afficheCatalogue($order = 'asc'){

        $results = Vin::getData($order);

        return view('filtres')->with('results', $results);

    }

    public function filtreCatalogue($filtre,$order = "asc")
    {

        switch ($filtre) {
            case "rouges":
                if($order == "asc") {
                    $filtered_results = Vin::findWineByTypeAndOrder("Rouge", "asc");
                }else{
                    $filtered_results = Vin::findWineByTypeAndOrder("Rouge", "desc");
                }
                break;

            case "blancs":
                if($order == "asc") {
                    $filtered_results = Vin::findWineByTypeAndOrder("Blanc","asc");
                }else{
                    $filtered_results = Vin::findWineByTypeAndOrder("Blanc", "desc");
                }
                break;

            case "roses":
                if($order == "asc") {
                    $filtered_results = Vin::findWineByTypeAndOrder("Rosé","asc");
                }else{
                    $filtered_results = Vin::findWineByTypeAndOrder("Rosé","desc");
                }
                break;

            case "mousseux":
                if($order == "asc") {
                    $filtered_results = Vin::findWineByTypeAndOrder("Mousseux","asc");
                }else{
                    $filtered_results = Vin::findWineByTypeAndOrder("Mousseux","desc");
                }
                break;

            case "bios":
                if($order == "asc") {
                    $filtered_results = Vin::findWineByBooleanAndOrder("estBio", "asc");
                }else{
                    $filtered_results = Vin::findWineByBooleanAndOrder("estBio", "desc");
                }
                break;

            case "primeurs":
                if($order == "asc") {
                    $filtered_results = Vin::findWineByBooleanAndOrder("estPrimeur","asc");
                }else{
                    $filtered_results = Vin::findWineByBooleanAndOrder("estPrimeur", "desc");
                }
                break;

            case "promotions":
                if($order == "asc") {
                    $filtered_results = Vin::findWineByBooleanAndOrder("estPromo","asc");
                }else{
                    $filtered_results = Vin::findWineByBooleanAndOrder("estPromo", "desc");
                }
                break;

            case "nouveautes":
                if($order == "asc") {
                    $filtered_results = Vin::findWineByBooleanAndOrder("estNouveau","asc");
                }else{
                    $filtered_results = Vin::findWineByBooleanAndOrder("estNouveau", "desc");
                }
                break;

            case "fins":
                if($order == "asc") {
                    $filtered_results = Vin::findFins("asc");
                }else{
                    $filtered_results = Vin::findFins("desc");
                }
                break;
        }

        return view('filtres')->with('results', $filtered_results);

    }
}
