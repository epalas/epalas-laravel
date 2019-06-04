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
{{--
{{$data['nom']}} - {{$data['annee']}} - {{$data['label']}} 
{{$data['condi']['type']}} - {{$data['prod']['region']}} - {{$data['prod']['pays']}} - {{$data['prod']['nom']}}
{{$data['cotas'][0]['nom']}} : {{$data['cotas'][0]['note']}} / {{$data['cotas'][0]['echelle']}}
{{$data['notes'][0]['nbrEtoiles']}}
--}}

<style>
img{width: 40px;}
.card-body{columns:2 200 px;}
</style>
<div class="card" style="width: 16rem;">

  <div class="card-body p-3">
    
    <div class="row" id="carte">
      <div class="container">
        <div class="row">
          <div class="col-3">
          <img src="{{$data['photos'][0]['url']}}" alt="{{$data['nom']}}">
          </div>
          <div class="col-9">
            <h4 class="card-title">{{$data['nom']}}</h4>
            <p class="card-text">
              <p>{{$data['prod']['region']}} - {{$data['prod']['pays']}}</p> 
              <p>{{$data['prod']['nom']}}</p> 
              <p>{{$data['label']}} / <span class="annee">{{$data['annee']}}</span></p> 
              <span class="prix"><b>{{$data['prixProduit']}}</b></span> <span>CHF</span>
            </p>
          </div>
        </div>
      </div>
  </div>

  </div>

    <div class="card-header">
      <div class="row justify-content-between">
        <a class="nav-link" href="#">
{{--
@switch($data->nbrEtoiles)
		@case(1)
			@for ($i = 0; $i < 1; $i++)
				<i class="far fa-star"></i>
			@endfor
    @break

    @case(2)
			@for ($i = 0; $i < 2; $i++)
				<i class="far fa-star"></i>
			@endfor
		@break
				
		@case(3)
			@for ($i = 0; $i < 3; $i++)
				<i class="far fa-star"></i>
			@endfor
		@break
				
		@case(4)
			@for ($i = 0; $i < 4; $i++)
				<i class="far fa-star"></i>
			@endfor
		@break
				
		@case(5)
			@for ($i = 0; $i < 5; $i++)
				<i class="far fa-star"></i>
			@endfor
		@break		

    @default
			@for ($i = 0; $i < 5; $i++)
				<i class="far fa-star"></i>
			@endfor
@endswitch
--}}
			
			</a> <a class="nav-link" href="#"><i class="far fa-heart"></i></a>
      </div>
    </div>

</div>
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