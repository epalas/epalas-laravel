@extends('template')

@section('titre')
Gazzar - Galerie Photo
@endsection

@section('contenu')
<div class="container mt-5">
  <h1 class="mb-5">Galerie Photo</h1>  
    <div class="row">
      <div class="col-0">
        <img src="/public/img/point.svg" alt="Point du logo" width="25rem" id="point">
      </div>   
      <div class="col col-sm-5 col-md-4 col-lg-3">
        <h2>Notre cave à vin</h2>
      </div>
      <div class="col-12 col-sm">
        <hr class="titre-point">  
      </div>
    </div> 
    <div class="row mt-5">
      @for ($i = 1; $i < 13; $i++)
      <div class="col-12 col-lg-3 col-md-4 col-6">  
        <a href=" {{route('image', ['id' => $i])}}" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail zoom" src="/public/img/galerie/galerie{{$i}}.jpg" alt="">
            </a>
           
      </div>
       @endfor
 </div>      
</div>
@endsection