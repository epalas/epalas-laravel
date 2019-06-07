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

Route::get('/produit', 'Catalogue@afficheCatalogue');

Route::get('/contact',['as' => 'contact', function () {
    return view('contact');
}]);

Route::get('/map', ['as' => 'map',function () {
    return view('map');
}]);

Route::get('/creation', function () {
    return view('inscription');
});

Route::get('/valeurs',['as' => 'valeurs', function () {
    return view('valeurs');
}]);

Route::get('/home', ['as' => 'home', function () {
    return view('accueil2');
}]);

Route::get('/', function () {
    return view('accueil2');
});

/*
Route de Lucien pour tester les pages implémentées
*/

Route::get('/cgv', ['as' => 'cgv', function () {
    return view('cgv');
}]);

Route::get('/newsletter', ['as' => 'newsletter', function () {
    return view('newsletter');
}]);

Route::get('/carton-decouverte', function () {
    return view('carton-decouverte');
})->name('carton-decouverte');

Route::get('/presse', ['as' => 'presse',function () {
    return view('presse');
}]);

Route::get('/blog', ['as' => 'blog', function () {
    return view('blog');
}]);

Route::get('/galerie', ['as' => 'galerie', function () {
    return view('galerie');
}]);

Route::get('/catalogue', ['as' => 'catalogue','uses' => 'Catalogue@afficheCatalogue', ]);

Route::get('/catalogue/{order}', ['as' => 'catalogueOrder','uses' => 'Catalogue@afficheCatalogue'])
    ->where(['order' => 'asc|desc']);

Route::get('/catalogue/{filtre}', ['uses' =>'Catalogue@filtreCatalogue', 'as' => 'catalogueFilter'])
    ->where(['filtre' => 'rouges|blancs|roses|mousseux|bios|primeurs|nouveautes|promotions|fins']);

Route::get('/catalogue/{filtre}/{order}', ['uses' =>'Catalogue@filtreCatalogue', 'as' => 'catalogueFilterOrder'])
    ->where(['filtre' => 'rouges|blancs|roses|mousseux|bios|primeurs|nouveautes|promotions|fins'], ['order' => 'asc|desc']);

Route::get('/cart',['as' => 'cart', function (){
    return view('cart');
}]);

    /*
    Route d'Adrien pour tester les pages implémentés
    */

Route::get('/image/{id}', function ($id) {
    return view('image')->with('id', $id);
})->name('image');

Route::get('/carte_vin', function () {
    return view('carte_vin');
});

    Route::get('/carte_vin', function () {
        return view('carte_vin');
    });

    Route::get('/ajax', function () {
        return view('filtres_ajax_test');
    });

    Route::get('/produit/{id}', [
        'uses' =>'ProductController@index',
        'comms' => 'CommentController@index'
    ]);

Route::get('/produit', 'ProductController@index');

Route::get('/produit/{id}', ['uses' =>'ProductController@index','as' => 'produit']);

Route::get('home', [ 'uses'=> 'HomeController@index', 'as'=>'home']);

    Route::get('/produit', 'ProductController@index');

    Route::get('/produit/{id}', ['uses' =>'ProductController@index','as' => 'produit']);

    Route::get('home', [ 'uses'=> 'HomeController@index', 'as'=>'home']);

    Route::get('recommandations', [ 'uses'=> 'RecommController@index', 'as'=>'recommandations']);

    Route::get('/', function(){
        return redirect('home');
    });

    Auth::routes();

Route::get('/customer', ['as' => 'customer', function () {
    return view('customer-account');
}])->middleware('auth');

Route::get('deconnexion', ['uses' => '\App\Http\Controllers\Auth\LoginController@logout', 'as' => 'deconnexion']);

    Route::get('/customer', ['as' => 'customer', function () {
        return view('customer-account');
    }])->middleware('auth');

    Route::get('deconnexion', ['uses' => '\App\Http\Controllers\Auth\LoginController@logout', 'as' => 'deconnexion']);

    Route::get('/cart', 'CartController@index')->name('cart.index');

    Route::post('/cart', 'CartController@store')->name('cart.store');

    Route::delete('/cart/{item}', 'CartController@destroy')->name('cart.destroy');

Route::get('/wishlist', 'WishlistController@index')->name('wishlist.index');

Route::post('/wishlist', 'WishlistController@store')->name('wishlist.store');

Route::delete('/wishlist/{item}', 'WishlistController@destroy')->name('wishlist.destroy');

Route::get('/recap', 'RecapCommController@index')->name('recap.index');

//Route::get('/customer', function () {
//    return view('customer-account');
// })->middleware('auth')->name('customer');

Route::get('/customer', 'UtilController@index')->name('customer')->middleware('auth');

Route::get('deconnexion', [ 'uses'=> '\App\Http\Controllers\Auth\LoginController@logout', 'as'=>'deconnexion']);

Route::get('empty', function(){ //PROVISOIRE
    Cart::destroy();
});

// commentaires
Route::post('/produit', 'CommentController@store')->name('comment.store');

Route::get('/recap_commande', function () {
    return view('recap_commande');
})->name('recap_commande');