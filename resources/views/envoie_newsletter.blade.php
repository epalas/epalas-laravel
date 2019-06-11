@extends('template')

@section('titre')
Gazzar - Success Newsletter
@endsection



@section('contenu')
<div class="container">
  <div class="row">
    <div class="space bg-white col-12 col-sm-8 offset-sm-2 rounded text-center">
      <h1><i class="fas fa-smile-wink fa-2x mt-4 mr-2"></i><i class="fas fa-wine-glass-alt fa-2x mt-4"></i></h1>
      <p class="mt-4">Merci de votre inscription ! Vous serez informé des dernières nouveautés</p>
      <a class="btn btn-primary mt-3 mb-5" href="{{route('home')}}">Retourner à l'accueil</a>
    </div>
  </div>
</div>
@endsection