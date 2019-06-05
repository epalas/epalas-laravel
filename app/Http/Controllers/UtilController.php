<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util;
use Auth;

class UtilController extends Controller
{
    public function index() {

    	$id = Auth::user()->id;
    	$x = Util::find($id);

        return view('customer-account')->with('x', $x);
    }
}