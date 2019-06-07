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

    return view('viewEmail')->with('datas', $datas);

    Mail::send('viewEmail', $datas, function($message) {
        $message->to('epalas.agency@gmail.com')->subject('Confirmation de commande')->from('info@gazzar.ch','Gazzar Vins');    
    });

    Cart::destroy();
    
    return view('confirmEmail');
    }
    
}
