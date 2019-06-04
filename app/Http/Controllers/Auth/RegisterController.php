<?php

namespace App\Http\Controllers\Auth;

use App\Util;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{


    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/customer';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:utils',
            'mdp' => 'required|string|min:6|confirmed',
            'adresse' => 'required|string|max:255',
            'cp' => 'required|numeric|min:4',
            'ville' => 'required|string|max:255',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return Util::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'adresse' => $data['adresse'],
            'cp' => $data['cp'],
            'ville' => $data['ville'],
            'pays' => $data['pays'],
            'mdp' => $data['mdp'],
            'admin' => 0,
            'urlPhoto' => "https://img.icons8.com/windows/420/gender-neutral-user.png",
        ]);
    }
}