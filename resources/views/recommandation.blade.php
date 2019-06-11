@extends('template')

@section('titre')
Gazzar - Recommendation
@endsection


@section('contenu')
<div class="container mt-5">
  <div class="row">
    <div class="col-0">
      <img src="img/point.svg" alt="Point du logo" width="25rem" id="point">
    </div>   
    <div class="col col-sm-6 col-md-5 col-xl-3">
      <h2>Nos Recommandations</h2>
    </div>
    <div class="col-12 col-sm">
      <hr class="titre-point">  
    </div>
  </div>  
  <div class="row">
    <div class="col-12">
    <p>La maison Gazzar privilégie le goût avant-tout, vous trouverez sur cette page une séléction de nos meilleurs vins. N'hésitez pas à vous laisser surprendre par vos papilles, que ce soit pour un diner entre amis ou à l'occasion d'un apéro. 
    <br/><br/>Faites nous confiance, ces vins ne vous laisseront pas indifférent. </p>
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
                        @if(Cart::instance('wishlist')->filterHeart($result['nom']) === true)
                          <form action="{{route('wishlist.store')}}" method="POST">
                        @else
                          <form action="{{route('wishlist.store')}}" method="POST">
                        @endif
                            {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$result['id']}}">
                                <input type="hidden" name="nom" value="{{$result['nom']}}">
                                <input type="hidden" name="prix" value="{{$result["prixprods"][0]["prix"]}}">
                                @if(Cart::instance('wishlist')->filterHeart($result['nom']) === true)
                                <button type="submit" class="btn btn-outline-primary mr-3"><i class="fas fa-heart"></i></button>
                                @else
                                <button type="submit" class="btn btn-outline-primary mr-3"><i class="far fa-heart"></i></button>
                                @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endforeach
    </div>
</div>
@endsection