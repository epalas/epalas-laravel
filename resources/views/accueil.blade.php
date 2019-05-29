<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil</title>
</head>
<header>
    <nav>
        <ul>
            <li><a href="{{ url('/') }}">Accueil</a></li>
            <li><a href="{{ url('/nos-vins') }}">Nos vins</a></li>
            <li><a href="{{ url('/actualites') }}">Actualités</a></li>
            <li><a href="{{ url('/a-propos') }}">A propos</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
            <li><a href="{{ url('/compte') }}">Compte</a></li>
            <li><a href="{{ url('/inscription') }}">Inscription</a></li>
            <li><a href="{{ url('/connexion') }}">Connexion</a></li>
            <li><a href="{{ url('/panier') }}">Panier</a></li>
            <li><a href="{{ url('/wishlist') }}">Wishlist</a></li>
        </ul>
    </nav>
</header>
<body>

</body>
</html>
