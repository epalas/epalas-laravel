<!DOCTYPE html>
   <html lang="fr">
   <head>
       <meta charset="UTF-8">
       <title>Confirmation de commande</title>
       <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri&display=swap" rel="stylesheet">
       <style>
           img {
            width: 15rem;
            padding: 0.5rem;
           }
           span {
            float: right;
            font-weight: bold;
           }
       </style>
   </head>
   <body style="font-family: Arial, Helvetica, sans-serif;">
        <img src="{{ asset('img/gazzar-logo.svg') }}" alt="Logo Gazzar" >
        <hr style="color: #A51B29; height: 2rem; background-color: #A51B29 " >
       <h1>Merci pour votre inscription {{ $user['prenom']}} {{ $user['nom'] }} !</h1>
       <h2>Bienvenu au sein de la communauté de Gazzar !</h2>
        <hr>
        <h2>Voici vos informations de compte :</h2>
        <hr>
        <h3>Adresse email permettant d'accéder à votre compte :</h3>
        <p>{{ $user['email']}}</p>
        <p>Gardez précieusement votre mot de passe et ne le transmettez en aucun cas !</p>
        <hr>
        <h3>Adresse de livraison :</h3>
        <p>{{ $user['prenom']}} {{ $user['nom'] }}</p>
        <p>{{ $user['adresse']}}</p>
        <p>{{ $user['ville']}} {{ $user['cp']}}</p>
        <p>{{ $user['pays']}}</p>

   </body>
</html>   