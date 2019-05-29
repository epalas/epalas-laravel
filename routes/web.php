<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as' => 'accueil', function () {
    return view('accueil');
}]);

Route::get('nos-vins', ['as' => 'nos-vins', function () {
    return view('accueil');
}]);

Route::get('actualites', ['as' => 'actualites', function () {
    return view('accueil');
}]);

Route::get('a-propos', ['as' => 'a-propos', function () {
    return view('accueil');
}]);

Route::get('contact', ['as' => 'contact', function () {
    return view('accueil');
}]);

Route::get('compte', ['as' => 'compte', function () {
    return view('accueil');
}]);

Route::get('inscription', ['as' => 'inscription', function () {
    return view('accueil');
}]);

Route::get('connexion', ['as' => 'connexion', function () {
    return view('accueil');
}]);

Route::get('panier', ['as' => 'panier', function () {
    return view('accueil');
}]);

Route::get('wishlist', ['as' => 'wishlist', function () {
    return view('accueil');
}]);