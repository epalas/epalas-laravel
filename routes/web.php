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
use Gloudemans\Shoppingcart\Facades\Cart; //PROVISOIRE
/*
Route de Steve pour tester les pages implémentés
*/

Route::get('/template', function () {
    return view('template');
});

Route::get('/produit', 'Catalogue@afficheCatalogue');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/map', function () {
    return view('map');
});

Route::get('/creation', function () {
    return view('inscription');
});

Route::get('/valeurs', function () {
    return view('valeurs');
});

Route::get('/home', function () {
    return view('accueil2');
});

Route::get('/', function () {
    return view('accueil2');
});

/*
Route de Lucien pour tester les pages implémentées
*/

Route::get('/cgv', ['as' => 'cgv', function () {
    return view('cgv');
}]);

Route::get('/newsletter', function () {
    return view('newsletter');
});


Route::get('/carton-decouverte', function () {
    return view('carton-decouverte');
});

Route::get('/presse', function () {
    return view('presse');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/galerie', function () {
    return view('galerie');
});

Route::get('/catalogue', 'Catalogue@afficheCatalogue');


Route::get('/catalogue/{filtre}', ['uses' =>'Catalogue@filtreCatalogue'])
    ->where(['filtre' => 'rouges|blancs|roses|mousseux|bios|primeurs|nouveautes|promotions|fin']);

Route::get('/cart', function () {
    return view('cart');
});

/*
Route d'Adrien pour tester les pages implémentés
*/


Route::get('/carte_vin', function () {
    return view('carte_vin');
});


Route::get('/ajax', function () {
    return view('filtres_ajax_test');
});

Route::get('/produit', 'ProductController@index');

Route::get('/produit/{id}', ['uses' =>'ProductController@index']);


Route::get('home', [ 'uses'=> 'HomeController@index', 'as'=>'home']);

Route::get('recommandations', [ 'uses'=> 'RecommController@index', 'as'=>'recommandations']);

Route::get('/', function(){
    return redirect('home');
});

Auth::routes();

Route::get('/customer', function () {
    return view('customer-account');
})->middleware('auth');

Route::get('deconnexion', '\App\Http\Controllers\Auth\LoginController@logout');
/*
Route::get('/login', '\App\Http\Controllers\Auth\LoginController@login');

Route::get('/', function(){
    return redirect('home');
});
*/

Route::get('/cart', 'CartController@index')->name('cart.index');

Route::post('/cart', 'CartController@store')->name('cart.store');

Route::get('empty', function(){ //PROVISOIRE
    Cart::destroy();
});