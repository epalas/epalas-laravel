<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util;
use Auth;
use Mail;

class UtilController extends Controller
{
    public function index() {

    	$id = Auth::user()->id;
    	$x = Util::find($id);

    	if (substr(url()->previous(),-8) == 'register') {

		$datas['user'] = Auth::user();

	    Mail::send('viewEmailInscr', $datas, function($message) {
        $message->to(Auth::user()->email)->subject("Confirmation d'inscription")->from('info@gazzar.ch','Gazzar Vins');
    		});
    	}

        return view('customer-account')->with('x', $x);
    }
}