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

Route::get('/login', function () {
    return view('connexion');
});

Route::get('/valeurs', function () {
    return view('valeurs');
});

Route::get('/home', function () {
    return view('accueil2');
});

/*
Route de Lucien pour tester les pages implémentés
*/

Route::get('/cgv', function () {
    return view('cgv');
});

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

Route::get('/customer-account', function () {
    return view('customer-account');
});








/*
Route de base de Pedro
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

Route::get('contacted', ['as' => 'contacted', function () {
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
