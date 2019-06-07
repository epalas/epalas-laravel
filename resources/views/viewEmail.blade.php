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
       <h1>Merci pour votre commande {{ $user['prenom']}} {{ $user['nom'] }} !</h1>
       <h2>Voici le récapitulatif de cette dernière : </h2>

       @foreach($cart as $item)
        <p>{{$item->name}} {{$item->qty}} x {{$item->price}}.-<span>Sous-total : {{$item->qty * $item->price}} .-</span></p></p>
        <hr>
        @endforeach
        
        <p><span>Total de la commande TTC : {{ $total }} .-</span>
        <h2>Adresse de livraison :</h2>
        <p>{{ $user['prenom']}} {{ $user['nom'] }}</p>
        <p>{{ $user['adresse']}}</p>
        <p>{{ $user['ville']}} {{ $user['cp']}}</p>
        <p>{{ $user['pays']}}</p>

   </body>
</html>   