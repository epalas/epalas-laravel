@extends('template')

@section('titre')
Gazzar - Accueil
@endsection


@section('contenu')

{{-- Slider --}}
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/slider5.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block mb-5">
          <a href="{{route('catalogue', ['filtre' => 'promotions'])}}" class="link-slider p-4 btn-lg btn-primary mr-auto mt-3 mb-5">Profiter des promotions du moments !</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slider2.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block mb-5">
          <a href="{{ route('recommandations') }}" class="link-slider p-4 btn-lg btn-primary mr-auto mt-3 mb-5">Découvrer notre séléction de recommandations !</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slider3.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block mb-5">
          <a href="{{ route('carton-decouverte') }}" class="link-slider p-4 btn-lg btn-primary mr-auto mt-3 mb-5">Tester notre carton découverte !</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slider4.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block mb-5">
          <a href="{{route('catalogue', ['filtre' => 'nouveautes'])}}" class="link-slider p-4 btn-lg btn-primary mr-auto mt-3 mb-5">Jeter un oeil aux nouveautés !</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slider1.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block mb-5">
          <a href="{{route('catalogue', ['filtre' => 'bios'])}}" class="link-slider p-4 btn-lg btn-primary mr-auto mt-3 mb-5">Envie d'étancher votre soif de vins bio ?</a>
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
      <img src="img/point.svg" alt="Point du logo" width="25rem" id="point">
    </div>   
    <div class="col col-sm-6 col-md-5 col-xl-3">
      <h2>Nos recommendations</h2>
    </div>
    <div class="col-12 col-sm">
      <hr class="titre-point">  
    </div>
  </div>  


    <div class="row">
        @foreach($datas as $result)
        {{-- Template pour chaque card --}}
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-3">
            <div class="card h-100">
                <div class="card-body p-3">
                    <div class="row" id="carte">
                        <a href="produit/{{ $result['id'] }}">

                            <div class="container">
                                <div class="row">
                                    <div class="col-3">
                                        <img class="wine-card" src="{{ asset($result["photos"][0]['url']) }}" alt="{{ $result["photos"][0]['alt'] }}">
                                    </div>
                                    <div class="col-9">
                                        <h4 class="card-title">{{$result["nom"]}}</h4>
                                        <p class="card-text">
                                        <p>{{$result["prod"]["region"]}} - {{$result["prod"]["pays"]}}</p>
                                        <p>{{$result["prod"]["nom"]}}</p>
                                        <p>{{$result["cont"][0]["volume"]}} L / <span class="annee">{{ $result["annee"] }}</span></p>
                                        <span class="prix"><b>{{ $result["prixprods"][0]["prix"] }}</b></span> <span>CHF</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card-header">
                    <div class="row justify-content-between">
                        <p class="ml-2 mt-2 text-primary">
                        
                          @switch($result['notes'][0]['nbrEtoiles'])
                            @case(1)
                            @for ($i = 0; $i < 1; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            @break

                            @case(2)
                            @for ($i = 0; $i < 2; $i++)
                              <i class="fas fa-star"></i>
                            @endfor
                              <i class="far fa-star"></i>
                              <i class="far fa-star"></i>
                              <i class="far fa-star"></i>
                            @break

                            @case(3)
                            @for ($i = 0; $i < 3; $i++)
                              <i class="fas fa-star"></i>
                            @endfor
                              <i class="far fa-star"></i>
                              <i class="far fa-star"></i>
                            @break

                            @case(4)
                            @for ($i = 0; $i < 4; $i++)
                              <i class="fas fa-star"></i>
                            @endfor
                              <i class="far fa-star"></i>
                            @break

                            @case(5)
                            @for ($i = 0; $i < 5; $i++)
                              <i class="fas fa-star"></i>
                            @endfor
                            @break

                            @default
                            @for ($i = 0; $i < 5; $i++)
                              <i class="fas fa-star"></i>
                            @endfor
                          @endswitch
                        </p>
                        <a class="nav-link" href="#"><i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div>
        </div>
@endforeach
    </div>


<div class="row">
  <div class="col-auto ml-auto">
    <a class="btn btn-primary mt-3 mb-5" href="{{ route('recommandations') }}">En savoir plus</a>
  </div>
</div>


  <div class="row">
    <div class="col-0">
      <img src="img/point.svg" alt="Point du logo" width="25rem" id="point">
    </div>   
    <div class="col col-sm-4 col-md-4 col-xl-2">
      <h2>Nouveautés</h2>
    </div>
    <div class="col-12 col-sm">
      <hr class="titre-point">  
    </div>
  </div>  

    <div class="row">
        @foreach($datas as $result)
        {{-- Template pour chaque card --}}
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-3">
            <div class="card h-100">
                <div class="card-body p-3">
                    <div class="row" id="carte">
                        <a href="produit/{{$result["id"]}}">
                            <div class="container">
                                <div class="row">
                                    <div class="col-3">
                                        <img class="wine-card" src="{{$result["photos"][0]['url']}}" alt="{{$result["photos"][0]['alt']}}">
                                    </div>
                                    <div class="col-9">
                                        <h4 class="card-title">{{$result["nom"]}}</h4>
                                        <p class="card-text">
                                        <p>{{$result["prod"]["region"]}} - {{$result["prod"]["pays"]}}</p>
                                        <p>{{$result["prod"]["nom"]}}</p>
                                        <p>{{$result["cont"][0]["volume"]}}L / <span class="annee">{{$result["annee"]}}</span></p>
                                        <span class="prix"><b>{{$result["prixprods"][0]["prix"]}}</b></span> <span>CHF</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card-header">
                    <div class="row justify-content-between">
                        <p class="ml-2 mt-2 text-primary">
                        
                          @switch($result['notes'][0]['nbrEtoiles'])
                            @case(1)
                            @for ($i = 0; $i < 1; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            @break

                            @case(2)
                            @for ($i = 0; $i < 2; $i++)
                              <i class="fas fa-star"></i>
                            @endfor
                              <i class="far fa-star"></i>
                              <i class="far fa-star"></i>
                              <i class="far fa-star"></i>
                            @break

                            @case(3)
                            @for ($i = 0; $i < 3; $i++)
                              <i class="fas fa-star"></i>
                            @endfor
                              <i class="far fa-star"></i>
                              <i class="far fa-star"></i>
                            @break

                            @case(4)
                            @for ($i = 0; $i < 4; $i++)
                              <i class="fas fa-star"></i>
                            @endfor
                              <i class="far fa-star"></i>
                            @break

                            @case(5)
                            @for ($i = 0; $i < 5; $i++)
                              <i class="fas fa-star"></i>
                            @endfor
                            @break

                            @default
                            @for ($i = 0; $i < 5; $i++)
                              <i class="fas fa-star"></i>
                            @endfor
                          @endswitch
                        </p>
                        <a class="nav-link" href="#"><i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div>
        </div>
@endforeach
    </div>

<div class="row">
  <div class="col-auto ml-auto">
    <a class="btn btn-primary mt-3 mb-5" href="{{route('catalogue', ['filtre' => 'nouveautes'])}}">En savoir plus</a>
  </div>
</div>
  


</div>
@endsection