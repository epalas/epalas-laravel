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

/*
Route de Steve pour tester les pages implémentés
*/

Route::get('/template', function () {
    return view('template');
});

Route::get('/produit', function () {
    return view('produit');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/map', function () {
    return view('map');
});

Route::get('/creation', function () {
    return view('inscription');
});
/*
Route::get('/login', function () {
    return view('login');
});
*/
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
Route de Lucien pour tester les pages implémentés
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


Route::get('/catalogue/{filtres}', function ($url) {

    return view('catalogues');

})->where(['filtre' => 'rouge|blanc|rose|mousseux|bio|primeur|nouveautes|promotions|fin|tous']);

/*
Route d'Adrien pour tester les pages implémentés
*/

Route::get('/catalogue', 'Catalogue@afficheCatalogue');

Route::get('/carte_vin', function () {
    return view('carte_vin');
});

Route::get('/produit', 'ProductController@index');

Route::get('/produit/{id}', ['uses' =>'ProductController@index']);

Route::get('home', [ 'uses'=> 'HomeController@index', 'as'=>'home']);

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

