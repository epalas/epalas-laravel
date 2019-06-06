@extends('template')

@section('titre')
Gazzar - Image
@endsection

@section('contenu')

<div class="container mt-5">
      <div class="row">
  <div class="col-1 mr-2">
    <a href="{{ url()->previous() }}" class="btn btn-primary" role="button"><</a>
  </div>
      <div class="col-3">
        <img src="{{ asset("img/galerie/galerie$id.jpg") }}" alt="image de la galerie" width="395%">
      </div>
  </div> 
</div> 
         
@endsection