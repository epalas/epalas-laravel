@extends('template')

@section('titre')
Gazzar - Connexion
@endsection

@section('contenu')
<div class="container">
  <div class="row">
    <div class="space bg-white col-12 col-sm-8 offset-sm-2 rounded text-center">
      <h1><i class="fas fa-smile-wink fa-2x mt-4 mr-2"></i><i class="fas fa-wine-glass-alt fa-2x mt-4"></i></h1>
      <p class="mt-4">Merci pour votre commande ! Un mail de confirmation vous a été envoyé.</p>
      <a class="btn btn-primary mt-3 mb-5" href="{{route('catalogue')}}">Retourner au catalogue</a>
    </div>
  </div>
</div>
@endsection