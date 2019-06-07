<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vin;
use Gloudemans\Shoppingcart\Facades\Cart;
use Auth;
use Mail;

class confirmEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function sendEmail() {

    $datas['user'] = Auth::user();
    $datas['cart'] = Cart::content();
    $datas['total'] = Cart::total();

<<<<<<< HEAD
    return view('viewEmail')->with('datas', $datas);

    Mail::send('viewEmail', $datas, function($message) {
        $message->to('epalas.agency@gmail.com')->subject('Confirmation de commande')->from('info@gazzar.ch','Gazzar Vins');    
=======
    Mail::send('viewEmail', $datas, function($message) {
        $message->to(Auth::user()->email)->subject('Confirmation de commande')->from('info@gazzar.ch','Gazzar Vins');    
>>>>>>> 818e4d6e81b9af0b15ca032195c01df3a67dd67d
    });

    Cart::destroy();
    
    return view('confirmEmail');
    }
    
}
