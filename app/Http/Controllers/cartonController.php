<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartonDRequest;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class cartonController extends Controller
{
    public function addToCart(CartonDRequest $request){

        $prix = $request->input('prixMax');

        $quantity = $request->input('quantity');

        if($quantity == 3){
            Cart::add(['id' => 1, 'name' => 'Carton découverte : 3 bouteilles', 'qty' => 1, 'price' => $prix,'weight' => 0, 'options' => ['quantity' => $quantity]])
                ->associate('App/Carton');
        }elseif($quantity == 6){
            Cart::add(['id' => 2, 'name' => 'Carton découverte : 6 bouteilles', 'qty' => 1, 'price' => $prix,'weight' => 0, 'options' => ['quantity' => $quantity]])
                ->associate('App/Carton');

        }elseif($quantity == 12){
            Cart::add(['id' => 3, 'name' => 'Carton découverte : 12 bouteilles', 'qty' => 1, 'price' => $prix,'weight' => 0, 'options' => ['quantity' => $quantity]])
                ->associate('App/Carton');

        }

        return redirect()->route('cart.index');
    }
}
