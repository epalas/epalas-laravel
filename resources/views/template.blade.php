<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#a51c2a">

    <title>@yield('titre')</title>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fonts/font-awesome/css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
</head>
<body>
    <div class="container">
        <div class="row justify-content-between">

        <a href="{{route('home')}}"><img class="ml-3 mt-3" src="{{ asset('img/gazzar-logo.svg') }}" alt="Logo Gazzar" id="logo-top"></a>

            <div class="col-lg-6 mt-3">
              <div class="row">

                <div class="col-sm-4 mt-sm-5 langues text-sm-right">        
                  <a class="active" href="#">FR</a>             
                  <span> | </span>
                  <a href="#">DE</a>
                  <span> | </span>
                  <a href="#">EN</a>
                  <span> | </span>
                  <a href="#">IT</a>
                </div>  

              @if(Auth::check())
                <div class="col-sm-8">
                    <a href="{{ route('customer') }}"><i class="fas fa-user"></i></i> {{Auth::user()->prenom}} {{Auth::user()->nom}}</a>
                      <span> | </span>
                    <a href="{{ route('deconnexion') }}">Se déconnecter</a>
              @else 

              <div class="col-sm-8">
                            <a href="{{ route('register') }}">Créer un compte</a>
                            <span> | </span>
                            <a href="{{ route('login') }}">Connexion</a>
              @endif
                <div class="input-group mb-3">
                <input type="search" class="form-control" placeholder="Recherche" aria-label="Recherche" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                   <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                </div>
              </div>
              </div>
            </div>
        </div>
    </div>
    {{-- Navigation --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary static-top">
        <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mr-auto">

                @if (Request::is('home'))
                <li class="nav-item dropdown active">
                @else
                 <li class="nav-item dropdown">
                @endif 

                    <a class="nav-link" href="{{route('home')}}">Accueil</a>

                </li>
                <li class="nav-item dropdown">
                @if (Request::is('carton-decouverte') | Request::is('catalogue') | Request::is('catalogue/*') | Request::is('recommandations'))
                <a class="nav-link active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nos vins</a>
                @else
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nos vins</a>
                @endif 
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        {{-- TODO Gestion de la navigation si dans le cata --}}
                        @if (Request::is('catalogue') | Request::is('catalogue/asc') | Request::is('catalogue/dsc') )
                        <a class="dropdown-item active" href="{{route('catalogue')}}">Tous les vins</a>
                        @else
                        <a class="dropdown-item" href="{{route('catalogue')}}">Tous les vins</a>
                        @endif
                        @if (Request::is('catalogue/rouges') | Request::is('catalogue/rouges/*'))
                        <a class="dropdown-item active" href="{{route('catalogueFilter', ['filtre' => 'rouges'])}}">Rouges</a>
                        @else
                        <a class="dropdown-item" href="{{route('catalogueFilter', ['filtre' => 'rouges'])}}">Rouges</a>
                        @endif
                        @if (Request::is('catalogue/blancs') | Request::is('catalogue/blancs/*'))
                        <a class="dropdown-item active" href="{{route('catalogueFilter', ['filtre' => 'blancs'])}}">Blancs</a>
                        @else
                        <a class="dropdown-item" href="{{route('catalogueFilter', ['filtre' => 'blancs'])}}">Blancs</a>
                        @endif
                        @if (Request::is('catalogue/roses') | Request::is('catalogue/roses/*'))
                        <a class="dropdown-item active" href="{{route('catalogueFilter', ['filtre' => 'roses'])}}">Rosés</a>
                        @else
                        <a class="dropdown-item" href="{{route('catalogueFilter', ['filtre' => 'roses'])}}">Rosés</a>
                        @endif
                        @if (Request::is('catalogue/mousseux') | Request::is('catalogue/mousseux/*'))
                        <a class="dropdown-item active" href="{{route('catalogueFilter', ['filtre' => 'mousseux'])}}">Mousseux</a>
                        @else
                        <a class="dropdown-item" href="{{route('catalogueFilter', ['filtre' => 'mousseux'])}}">Mousseux</a>
                        @endif
                        @if (Request::is('catalogue/bios') | Request::is('catalogue/bios/*') )
                        <a class="dropdown-item active" href="{{route('catalogueFilter', ['filtre' => 'bios'])}}">Bio</a>
                        @else
                        <a class="dropdown-item" href="{{route('catalogueFilter', ['filtre' => 'bios'])}}">Bio</a>
                        @endif
                        @if (Request::is('catalogue/primeurs') | Request::is('catalogue/primeurs/*'))
                        <a class="dropdown-item active" href="{{route('catalogueFilter', ['filtre' => 'primeurs'])}}">Primeurs</a>
                        @else
                        <a class="dropdown-item" href="{{route('catalogueFilter', ['filtre' => 'primeurs'])}}">Primeurs</a>
                        @endif
                        @if (Request::is('catalogue/promotions') | Request::is('catalogue/promotions/*'))
                        <a class="dropdown-item active" href="{{route('catalogueFilter', ['filtre' => 'promotions'])}}">Promotions</a>
                        @else
                        <a class="dropdown-item" href="{{route('catalogueFilter', ['filtre' => 'promotions'])}}">Promotions</a>
                        @endif
                        @if (Request::is('catalogue/nouveautes') | Request::is('catalogue/nouveautes/*'))
                        <a class="dropdown-item active" href="{{route('catalogueFilter', ['filtre' => 'nouveautes'])}}">Nouveautés</a>
                        @else
                        <a class="dropdown-item" href="{{route('catalogueFilter', ['filtre' => 'nouveautes'])}}">Nouveautés</a>
                        @endif
                        @if (Request::is('catalogue/fins') | Request::is('catalogue/fins/*'))
                        <a class="dropdown-item active" href="{{route('catalogueFilter', ['filtre' => 'fins'])}}">Fins de série</a>
                        @else
                        <a class="dropdown-item" href="{{route('catalogueFilter', ['filtre' => 'fins'])}}">Fins de série</a>
                        @endif

                        <div class="dropdown-divider"></div>
                        @if (Request::is('recommandations'))
                        <a class="dropdown-item active" href="{{route('recommandations')}}">Recommendations</a>
                        @else
                        <a class="dropdown-item" href="{{route('recommandations')}}">Recommendations</a>
                        @endif
                        @if (Request::is('carton-decouverte'))
                        <a class="dropdown-item active" href="{{route('carton-decouverte')}}">Carton découverte</a>
                        @else
                        <a class="dropdown-item" href="{{route('carton-decouverte')}}">Carton découverte</a>
                        @endif

                    </div>
                </li>
                <li class="nav-item dropdown">
                @if (Request::is('blog') | Request::is('galerie') | Request::is('presse') | Request::is('newsletter'))
                <a class="nav-link active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actualités</a>
                @else
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actualités</a>
                @endif    

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        @if (Request::is('blog'))
                        <a class="dropdown-item active" href="{{route('blog')}}">Blog</a>
                        @else
                        <a class="dropdown-item" href="{{route('blog')}}">Blog</a>
                        @endif
                        @if (Request::is('galerie'))
                        <a class="dropdown-item active" href="{{route('galerie')}}">Galerie</a>
                        @else
                        <a class="dropdown-item" href="{{route('galerie')}}">Galerie</a>
                        @endif
                        @if (Request::is('presse'))
                        <a class="dropdown-item active" href="{{route('presse')}}">Presse</a>
                        @else
                        <a class="dropdown-item" href="{{route('presse')}}">Presse</a>
                        @endif
                        @if (Request::is('newsletter'))
                        <a class="dropdown-item active" href="{{route('newsletter')}}">Newsletter</a>
                        @else
                        <a class="dropdown-item" href="{{route('newsletter')}}">Newsletter</a>
                        @endif                        

                        </div>
                </li>
                <li class="nav-item dropdown">
                @if (Request::is('valeurs') | Request::is('cgv'))
                <a class="nav-link active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">A propos</a>
                @else
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">A propos</a>
                @endif   

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        @if (Request::is('valeurs'))
                        <a class="dropdown-item active" href="{{route('valeurs')}}">Nos valeurs</a>
                        @else
                        <a class="dropdown-item" href="{{route('valeurs')}}">Nos valeurs</a>
                        @endif
                        @if (Request::is('cgv'))
                        <a class="dropdown-item active" href="{{route('cgv')}}">Conditions générales de ventes</a>
                        @else
                        <a class="dropdown-item" href="{{route('cgv')}}">Conditions générales de ventes</a>
                        @endif    
                        
                    </div>
                </li>
                <li class="nav-item dropdown">
                @if (Request::is('contact') | Request::is('map'))
                <a class="nav-link active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact</a>
                @else
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact</a> 
                @endif 

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        @if (Request::is('contact'))
                        <a class="dropdown-item active" href="{{route('contact')}}">Formulaire de contact</a>
                        @else
                        <a class="dropdown-item" href="{{route('contact')}}">Formulaire de contact</a>
                        @endif
                        @if (Request::is('map'))
                        <a class="dropdown-item active" href="{{route('map')}}">Où nous trouver ?</a>
                        @else
                        <a class="dropdown-item" href="{{route('map')}}">Où nous trouver ?</a>
                        @endif   

                    </div>
                </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    @if (Request::is('cart'))
                      <li class="nav-item active" id="cart">
                    @else
                      <li class="nav-item" id="cart">
                    @endif 

                    @if(Cart::instance('default')->count() > 0)
                      <a id="notifCart"  data-count="{{Cart::instance('default')->count()}}" class="nav-link" href="{{route('cart.index')}}"><i  class="fas fa-shopping-cart"></i></a>
                    @else
                      <a data-count="{{Cart::instance('default')->count()}}" class="nav-link" href="{{route('cart.index')}}"><i  class="fas fa-shopping-cart"></i></a>
                    @endif
                    </li>
                    @if (Request::is('wishlist'))
                      <li class="nav-item active" id="wishlist">
                    @else
                      <li class="nav-item" id="wishlist">
                    @endif 
                    @if(Cart::instance('wishlist')->count() > 0)
                    <a class="nav-link" href="{{route('wishlist.index')}}"><i class="fas fa-heart"></i></a>
                    @else
                    <a class="nav-link" href="{{route('wishlist.index')}}"><i class="far fa-heart"></i></a>
                    @endif
                    </li>
                </ul>
        </div>
    </div>
  </nav>

@yield('contenu')
{{-- Footer --}}
 <footer class="sticky bg-primary p-3 mt-5">
    <div class="container">
        <div class="row">
          <div class="col-3 mt-3">
            {{-- icones réseaux sociaux --}}
            <p id="link-reseaux">
                <a href="#"><i  class="fab fa-facebook fa-2x pr-4 text-white " ></i></a>
                <a href="#"><i class="fab fa-instagram fa-2x pr-4 text-white" ></i></a>
                <a href="#"><i class="fab fa-twitter-square fa-2x pr-4 text-white"></i></a>
                <a href="#"><i class="fab fa-linkedin fa-2x pr-4 text-white"></i></a>
            </p>
          </div>
        {{-- infos et adresse --}}
          <div class="col-5 mt-1">
            <address class="text-white">
              <i class="fas fa-phone pb-2 pr-4"></i>021 691 86 71</br>
              <i class="fas fa-map-marker-alt pr-4"></i>Elie Gazzar S.A. Chemin du Dévent  1024 Ecublens • Suisse</p>
            </address>
          </div>
         {{-- payments --}}
          <div class="col-2 text-white fa-2x pl-5"> 
              <i class="fab fa-cc-visa"></i>
              <i class="fab fa-cc-mastercard"></i>
          </div> 
            
           
          {{-- logo --}}
          <div class="col-2 text-right">
            <a href="{{route('home')}}"><img id="logo-bottom" class="col-lg-2 mt-3" src="{{ asset('img/logo_gazzar_white.svg') }}" alt="Logo Gazzar en blanc"></a>
          </div>
        </div>
    </div>
</footer>
  <script src="{{ asset('js/jquery/jquery.slim.min.js') }}"></script>
  <script src="{{ asset('css/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>   
  <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>

