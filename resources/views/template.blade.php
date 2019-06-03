<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <title>@yield('titre')</title>

    <link href="/public/css/style.css" rel="stylesheet">
    <link href="/public/css/app.css" rel="stylesheet">
    <link href="/vendor/components/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-between">
        <a href="home"><img class=" ml-3 mt-3" src="/public/img/gazzar-logo.svg" alt="Logo Gazzar" id="logo-top"></a>

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
                


              
              <div class="col-sm-8">

 
                        
                            <a href="creation">Créer un compte</a>
                            <span> | </span>
                            <a href="login">Connexion</a>

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
                    <a class="nav-link" href="home">Accueil</a>
                </li>
                @if (Request::is('carton-decouverte'))
                <li class="nav-item dropdown active">
                @else
                 <li class="nav-item dropdown">
                @endif 
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nos vins</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Rouge</a>
                        <a class="dropdown-item" href="#">Blanc</a>
                        <a class="dropdown-item" href="#">Rosé</a>
                        <a class="dropdown-item" href="#">Mousseux</a>
                        <a class="dropdown-item" href="#">Bio</a>
                        <a class="dropdown-item" href="#">Recommendations</a>
                        <a class="dropdown-item" href="#">Nouveautés</a>
                        <a class="dropdown-item" href="#">Promotions</a>
                        <a class="dropdown-item" href="#">Fins de séries</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="carton-decouverte">Carton découverte</a>
                    </div>
                </li>
                @if (Request::is('blog') | Request::is('galerie') | Request::is('presse') | Request::is('newsletter'))
                <li class="nav-item dropdown active">
                @else
                 <li class="nav-item dropdown">
                @endif    
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actualités</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="blog">Blog</a>
                            <a class="dropdown-item" href="galerie">Galerie</a>
                            <a class="dropdown-item" href="presse">Presse</a>
                            <a class="dropdown-item" href="newsletter">Newsletter</a>
                        </div>
                </li>
                @if (Request::is('valeurs') | Request::is('cgv'))
                <li class="nav-item dropdown active">
                @else
                 <li class="nav-item dropdown">
                @endif   
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">A propos</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="valeurs">Nos valeurs</a>
                        <a class="dropdown-item" href="cgv">Conditions générales de ventes</a>
                    </div>
                </li>
                @if (Request::is('contact') | Request::is('map'))
                <li class="nav-item dropdown active">
                @else
                 <li class="nav-item dropdown">
                @endif 
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="contact">Formulaire de contact</a>
                        <a class="dropdown-item" href="map">Où nous trouver ?</a>
                    </div>
                </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" id="cart">
                         <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="#"><i class="far fa-heart"></i></a>
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
            <a href="home"><img id="logo-bottom" class="col-lg-2 mt-3" src="/public/img/logo_gazzar_white.svg" alt="Logo Gazzar en blanc"></a>
          </div>
        </div>
    </div>
</footer>
  <script src="/vendor/components/jquery/jquery.slim.min.js"></script>
  <script src="/vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>   
</body>
</html>