@extends('template')

@section('titre')
Gazzar - Blog
@endsection

@section('contenu')
<div class="container mt-5">
  <h1 class="mb-5">Blog</h1>  
    <div class="row">
      <div class="col-0">
        <img src="img/point.svg" alt="Point du logo" width="25rem" id="point">
      </div> 
      <div class="col col-sm-5 col-md-4 col-xl-3">
        <h2>Articles publiées</h2>
      </div>
      <div class="col-12 col-sm">
        <hr class="titre-point">  
      </div>
    </div>
    @yield('journal')                 
</div>
@endsection