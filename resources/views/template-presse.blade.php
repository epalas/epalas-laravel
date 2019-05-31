@extends('template')

@section('titre')
Gazzar - Presse
@endsection

@section('contenu')
<div class="container mt-5">
  <h1 class="mb-5">Presse</h1>  
    <div class="row">
      <div class="col-0">
        <img src="/public/img/point.svg" alt="Point du logo" width="25rem" id="point">
      </div> 
      <div class="col col-sm-2">
        <h2>Journaux</h2>
      </div>
      <div class="col-12 col-sm">
        <hr class="titre-point">  
      </div>
    </div>
    @yield('journal')                 
</div>
@endsection