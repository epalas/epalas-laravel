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


//Contact
Route::get('/contact',['as' => 'contact', function () {
    return view('contact');
}]);

Route::get('/map', ['as' => 'map',function () {
    return view('map');
}]);

//Inscription
Route::get('/creation', function () {
    return view('inscription');
});

//A propos
Route::get('/valeurs',['as' => 'valeurs', function () {
    return view('valeurs');
}]);

Route::get('/cgv', ['as' => 'cgv', function () {
    return view('cgv');
}]);

//Accueil
Route::get('/home', ['as' => 'home', function () {
    return view('accueil2');
}]);

Route::get('/', function () {
    return view('accueil2');
});

Route::get('home', [ 'uses'=> 'HomeController@index', 'as'=>'home']);


//Carton découverte
Route::get('/carton-decouverte', function () {
    return view('carton-decouverte');
})->name('carton-decouverte');

//Actualités
Route::get('/presse', ['as' => 'presse',function () {
    return view('presse');
}]);

Route::get('/blog', ['as' => 'blog', function () {
    return view('blog');
}]);

Route::get('/galerie', ['as' => 'galerie', function () {
    return view('galerie');
}]);

Route::get('/newsletter', ['as' => 'newsletter', function () {
    return view('newsletter');
}]);

//Recommmandations
Route::get('recommandations', [ 'uses'=> 'RecommController@index', 'as'=>'recommandations']);

//Galerie
Route::get('/image/{id}', function ($id) {
    return view('image')->with('id', $id);
})->name('image');

//Catalogue
Route::get('/catalogue', ['as' => 'catalogue','uses' => 'Catalogue@afficheCatalogue', ]);

Route::get('/catalogue/{order}', ['as' => 'catalogueOrder','uses' => 'Catalogue@afficheCatalogue'])
    ->where(['order' => 'asc|desc']);

Route::get('/catalogue/{filtre}', ['uses' =>'Catalogue@filtreCatalogue', 'as' => 'catalogueFilter'])
    ->where(['filtre' => 'rouges|blancs|roses|mousseux|bios|primeurs|nouveautes|promotions|fins']);

Route::get('/catalogue/{filtre}/{order}', ['uses' =>'Catalogue@filtreCatalogue', 'as' => 'catalogueFilterOrder'])
    ->where(['filtre' => 'rouges|blancs|roses|mousseux|bios|primeurs|nouveautes|promotions|fins'], ['order' => 'asc|desc']);

Route::post('/carton-decouverte', ['uses' => 'cartonController@addToCart', 'as' => 'carton']);

//Panier
Route::get('/cart',['as' => 'cart', function (){
    return view('cart');
}]);

Route::get('/cart', 'CartController@index')->name('cart.index');

Route::post('/cart', 'CartController@store')->name('cart.store');

Route::delete('/cart/{item}', 'CartController@destroy')->name('cart.destroy');


//Wishlist
Route::get('/wishlist', 'WishlistController@index')->name('wishlist.index');

Route::post('/wishlist', 'WishlistController@store')->name('wishlist.store');

Route::delete('/wishlist/{item}', 'WishlistController@destroy')->name('wishlist.destroy');

//Page produit
Route::get('/produit/{id}', [
    'uses' =>'ProductController@index',
    'comms' => 'CommentController@index'
]);

Route::get('/produit', function () {
    return redirect('catalogue');
});

Route::get('/produit', 'Catalogue@afficheCatalogue');

Route::get('/produit', 'ProductController@index');

Route::get('/produit/{id}', ['uses' =>'ProductController@index','as' => 'produit']);

Route::post('/produit', 'CommentController@store')->name('comment.store');

//Routes client
Auth::routes();

Route::get('/customer', ['as' => 'customer', function () {
    return view('customer-account');
}])->middleware('auth');

Route::get('deconnexion', ['uses' => '\App\Http\Controllers\Auth\LoginController@logout', 'as' => 'deconnexion']);

Route::get('/recap', 'RecapCommController@index')->name('recap.index');

Route::get('/customer', 'UtilController@index')->name('customer')->middleware('auth');

Route::get('/password', ['as' => 'password', function () {
    return view('auth/passwords/reset');
}])->middleware('auth');

//Email confirmation
Route::get('/confirmation', 'confirmEmailController@sendEmail')->name('email');



