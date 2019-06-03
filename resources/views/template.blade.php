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
        <img class="col-lg-2 mt-3" src="/public/img/gazzar-logo.svg" alt="Logo Gazzar" id="logo-top">
            <div class="col-lg-3 mt-3">
                        
                            <a href="#">Créer un compte</a>
                            <span> | </span>
                            <a href="#">Connexion</a>
                             
                <div class="input-group mb-3">
                <input type="search" class="form-control" placeholder="Recherche" aria-label="Recherche" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></span>
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
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('accueil') }}">Accueil
                    <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
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
                        <a class="dropdown-item" href="#">Carton découverte</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actualités</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Blog</a>
                            <a class="dropdown-item" href="#">Galerie</a>
                            <a class="dropdown-item" href="#">Presse</a>
                            <a class="dropdown-item" href="#">Newsletter</a>
                        </div>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">A propos</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Nos valeurs</a>
                        <a class="dropdown-item" href="{{ route('cgv') }}">Conditions générales de ventes</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Formulaire de contact</a>
                        <a class="dropdown-item" href="#">Où nous trouver ?</a>
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
            <a href="#"><img id="logo-bottom" class="col-lg-2 mt-3" src="/public/img/logo_gazzar_white.svg" alt="Logo Gazzar en blanc"></a>
          </div>
        </div>
    </div>
</footer>

  <script src="/vendor/components/jquery/jquery.slim.min.js"></script>
  <script src="/vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>   
</body>
</html>