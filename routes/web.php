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

Route::get('/produit', function () {
    return redirect('catalogue');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/map', function () {
    return view('map');
})->name('map');

Route::get('/valeurs', function () {
    return view('valeurs');
})->name('valeurs');


Route::get('/cgv', ['as' => 'cgv', function () {
    return view('cgv');
}]);

Route::get('/newsletter', function () {
    return view('newsletter');
})->name('newsletter');

Route::get('/carton-decouverte', function () {
    return view('carton-decouverte');
})->name('carton-decouverte');

Route::get('/presse', function () {
    return view('presse');
})->name('presse');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/galerie', function () {
    return view('galerie');
})->name('galerie');

Route::get('/catalogue', 'Catalogue@afficheCatalogue')->name('catalogue');

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

Route::get('/produit/{id}', ['uses' =>'ProductController@index']);

Route::get('home', [ 'uses'=> 'HomeController@index', 'as'=>'home']);

Route::get('recommandations', [ 'uses'=> 'RecommController@index', 'as'=>'recommandations']);

Route::get('/', function(){
    return redirect('home');
});

Auth::routes();

//Route::get('/customer', function () {
//    return view('customer-account');
// })->middleware('auth')->name('customer');

Route::get('/customer', 'UtilController@index')->name('customer')->middleware('auth');

Route::get('deconnexion', [ 'uses'=> '\App\Http\Controllers\Auth\LoginController@logout', 'as'=>'deconnexion']);

Route::get('/cart', 'CartController@index')->name('cart.index');

Route::post('/cart', 'CartController@store')->name('cart.store');

Route::delete('/cart/{item}', 'CartController@destroy')->name('cart.destroy');

Route::get('empty', function(){ //PROVISOIRE
    Cart::destroy();
});