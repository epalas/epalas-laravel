@extends('template')

@section('titre')
Gazzar - Accueil
@endsection


@section('contenu')

{{-- Slider --}}
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/public/img/slider1.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
          <button type="button" class="btn-lg btn-primary mr-auto mt-3 mb-5">Profiter des promotions du moments !</button>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/public/img/slider2.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <button type="button" class="btn-lg btn-primary mr-auto mt-3 mb-5">Profiter des promotions du moments !</button>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/public/img/slider3.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
          <button type="button" class="btn-lg btn-primary mr-auto mt-3 mb-5">Profiter des promotions du moments !</button>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/public/img/slider4.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
          <button type="button" class="btn-lg btn-primary mr-auto mt-3 mb-5">Profiter des promotions du moments !</button>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/public/img/slider5.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
          <button type="button" class="btn-lg btn-primary mr-auto mt-3 mb-5">Profiter des promotions du moments !</button>
      </div>
    </div>

  </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

{{-- Contenu --}}
<div class="container mt-5">
  <div class="row">
    <div class="col-0">
      <img src="/public/img/point.svg" alt="Point du logo" width="25rem" id="point">
    </div>   
    <div class="col col-sm-3">
      <h2>Nos recommendations</h2>
    </div>
    <div class="col-12 col-sm">
      <hr class="titre-point">  
    </div>
  </div>  

{{-- Mettre petite encarte de vin --}}
@foreach($datas as $data)
  <img src="{{$data->url}}" alt="{{$data->nom}}">
  {{$data->nom}} - {{$data->annee}}  {{$data->idCondi}} <br>
  {{$data->pays}} - {{$data->region}} <br>
  {{$data->prodNom}} {{$data->prix}} <br>
@endforeach


<div class="row">
  <div class="col-auto ml-auto">
    <button type="button" class="btn btn-primary mt-3 mb-5">En savoir plus</button>
  </div>
</div>


  <div class="row">
    <div class="col-0">
      <img src="/public/img/point.svg" alt="Point du logo" width="25rem" id="point">
    </div>   
    <div class="col col-sm-2">
      <h2>Nouveautés</h2>
    </div>
    <div class="col-12 col-sm">
      <hr class="titre-point">  
    </div>
  </div>  

{{-- Mettre petite encarte de vin --}}

<div class="row">
  <div class="col-auto ml-auto">
    <button type="button" class="btn btn-primary mt-3 mb-5">En savoir plus</button>
  </div>
</div>
  


</div>




@endsection