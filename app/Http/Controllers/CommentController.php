<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comm;
use Auth;

class CommentController extends Controller
{

    public function afficheComments(){
        $results = Comm::findWinesComm();
        return view('filtres')->with('results', $results);
    }

    public function store(Request $request)
    {
        $comment = new Comm();
        $comment->idVin = $request->request->get('idVin');
        $comment->idUtil = Auth::user()->id;
        $comment->titre = $request->request->get('titre');
        $comment->contenu = $request->request->get('contenu');
        $comment->date = date('Y-m-d H:i:s');
        $comment->save();

        return redirect(url()->previous());
    }
}
