@extends('template')

@section('titre')
Gazzar - Catalogue
@endsection

@section('contenu')
<style>
    img{
        width:3rem;
    }
</style>

<div class="container">
    <div class="row mt-5 mb-4 mx-auto">
        <div class="btn-group-justified col-12" role="group" id="filter">

        @if (Request::is('catalogue/rouges') || Request::is('catalogue/rouges/asc') || Request::is('catalogue/rouges/desc'))
                <a href="{{route('catalogueFilter', ['filtre' => 'rouges'])}}" class="btn btn-light bg-white active" id="red" ><img src="{{asset('img/pictos/picto_color/red.svg')}}" alt="Rouge"/><br/>Rouges</a>

        @else
        <a href="{{route('catalogueFilter', ['filtre' => 'rouges'])}}" class="btn btn-light bg-white" id="red" ><img src="{{asset('img/pictos/vin.svg')}}" alt="Rouge"/><br/>Rouges</a>

        @endif 

        @if(Request::is('catalogue/blancs') || Request::is('catalogue/blancs/asc') || Request::is('catalogue/blancs/desc'))
        <a href="{{route('catalogueFilter', ['filtre' => 'blancs'])}}" class="btn btn-light bg-white active" id="white"><img src="{{asset('img/pictos/picto_color/white.svg')}}" alt="Blanc" /><br/>Blancs</a>

        @else
        <a href="{{route('catalogueFilter', ['filtre' => 'blancs'])}}" class="btn btn-light bg-white" id="white"><img src="{{asset('img/pictos/vin.svg')}}" alt="Blanc" /><br/>Blancs</a>
        @endif 

        @if (Request::is('catalogue/roses') || Request::is('catalogue/roses/asc') || Request::is('catalogue/roses/desc'))
        <a href="{{route('catalogueFilter', ['filtre' => 'roses'])}}" class="btn btn-light bg-white active" id="rosy"><img src="{{asset('img/pictos/picto_color/rosy.svg')}}" alt="Rosé"/><br/>Rosés</a>

        @else
        <a href="{{route('catalogueFilter', ['filtre' => 'roses'])}}" class="btn btn-light bg-white" id="rosy"><img src="{{asset('img/pictos/vin.svg')}}" alt="Rosé"/><br/>Rosés</a>
        @endif 

        @if (Request::is('catalogue/mousseux') || Request::is('catalogue/mousseux/asc') || Request::is('catalogue/mousseux/desc'))
        <a href="{{route('catalogueFilter', ['filtre' => 'mousseux'])}}" class="btn btn-light bg-white active" id="mouss"><img src="{{asset('img/pictos/picto_color/champain.svg')}}" alt="Mousseux"/><br/>Mousseux</a>

        @else
        <a href="{{route('catalogueFilter', ['filtre' => 'mousseux'])}}" class="btn btn-light bg-white" id="mouss"><img src="{{asset('img/pictos/mousseux.svg')}}" alt="Mousseux"/><br/>Mousseux</a>
        @endif

        @if(Request::is('catalogue/bios') || Request::is('catalogue/bios/asc') || Request::is('catalogue/bios/desc'))
        <a href="{{route('catalogueFilter', ['filtre' => 'bios'])}}" class="btn btn-light bg-white active" id="bio"><img src="{{asset('img/pictos/picto_color/bio-green.svg')}}" alt="Bio"/><br/>Bio</a>

        @else
        <a href="{{route('catalogueFilter', ['filtre' => 'bios'])}}" class="btn btn-light bg-white" id="bio"><img src="{{asset('img/pictos/bio.svg')}}" alt="Bio"/><br/>Bio</a>
        @endif 

        @if(Request::is('catalogue/primeurs') || Request::is('catalogue/primeurs/asc') || Request::is('catalogue/primeurs/desc'))
        <a href="{{route('catalogueFilter', ['filtre' => 'primeurs'])}}" class="btn btn-light bg-white active" id="prim"><img src="{{asset('img/pictos/picto_color/primeur-color.svg')}}" alt="Primeur"/><br/>Primeurs</a>

        @else
        <a href="{{route('catalogueFilter', ['filtre' => 'primeurs'])}}" class="btn btn-light bg-white" id="prim"><img src="{{asset('img/pictos/primeur.svg')}}" alt="Primeur"/><br/>Primeurs</a>
        @endif 
        @if(Request::is('catalogue/promotions') || Request::is('catalogue/promotions/asc') || Request::is('catalogue/promotions/desc'))
        <a href="{{route('catalogueFilter', ['filtre' => 'promotions'])}}" class="btn btn-light bg-white active" id="promo"><img src="{{asset('img/pictos/picto_color/promo-red.svg')}}" alt="Promo"/><br/>Promotions</a>
        @else
        <a href="{{route('catalogueFilter', ['filtre' => 'promotions'])}}" class="btn btn-light bg-white" id="promo"><img src="{{asset('img/pictos/promo.svg')}}" alt="Promo"/><br/>Promotions</a>
        @endif 
        @if(Request::is('catalogue/nouveautes') || Request::is('catalogue/nouveautes/asc') || Request::is('catalogue/nouveautes/desc'))
        <a href="{{route('catalogueFilter', ['filtre' => 'nouveautes'])}}" class="btn btn-light bg-white active" id="new"><img src="{{asset('img/pictos/picto_color/new-red.svg')}}" alt="Nouveau"/><br/>Nouveautés</a>
        @else
        <a href="{{route('catalogueFilter', ['filtre' => 'nouveautes'])}}" class="btn btn-light bg-white" id="new"><img src="{{asset('img/pictos/nouveau.svg')}}" alt="Nouveau"/><br/>Nouveautés
        @endif
        @if(Request::is('catalogue/fins') || Request::is('catalogue/fins/asc') || Request::is('catalogue/fins/desc'))
        <a href="{{route('catalogueFilter', ['filtre' => 'fins'])}}" class="btn btn-light bg-white" id="fins"><img src="{{asset('img/pictos/picto_color/end-red.svg')}}" alt="Fin de série"/><br/>Fins de série</a>
        @else
        <a href="{{route('catalogueFilter', ['filtre' => 'fins'])}}" class="btn btn-light bg-white" id="fins"><img src="{{asset('img/pictos/fin.svg')}}" alt="Fin de série"/><br/>Fins de série</a>
        @endif 
        </div>   
    </div>
    <div id="row">
    <div class="col-12">
        <div class="btn-group mt-2" role="group">
            <button type="button" class="btn btn-primary" disabled>Pays</button>
            <div class="btn-group" role="group" id="grpPays">
                <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tous les pays
                </button>


                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" id="paysListe">
                <?php /* recherche en BD sur les pays disponibles
                    @foreach($pays as $land)
                        <a class="dropdown-item" href="#" value="{{$land["prod"]["pays"]}}">{{$land["prod"]["pays"]}}</a>
                    @endforeach 
                */?>
                    <a class="dropdown-item" href="catalogue">Tous les pays</a>
                    <a class="dropdown-item" href="#" value="France">France</a>
                    <a class="dropdown-item" href="#" value="Italie">Italie</a>
                    <a class="dropdown-item" href="#" value="Suisse">Suisse</a>
                </div>
            </div>
        </div>
        <div class="btn-group mt-2" role="group" >
            <button type="button" class="btn btn-primary" disabled>Régions</button>
            <div class="btn-group" role="group">
                <button id="btnGroupDrop1"  type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Toutes les Régions
                </button>

                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" id="regionListe">
                    <?php /* recherche en BD sur les régions disponibles 
                        @foreach($pays as $land)
                        <a class="dropdown-item" href="#" value="{{$land["prod"]["pays"]}}">{{$land["prod"]["pays"]}}</a>
                        @endforeach 
                    */ ?>
                    <a class="dropdown-item" href="#">Bourgogne</a>
                    <a class="dropdown-item" href="#">Saxe</a>
                    <a class="dropdown-item" href="#">Loire</a>
                </div>
            </div>
        </div>
        <div class="btn-group mt-2" role="group" >
            <button type="button" class="btn btn-primary" disabled>Prix croissant</button>
            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Prix croissant
                </button>

                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" id="prixListe">
                    <?php /* recharge les articles en ASC ou DESC*/ ?>
                        @if(Request::is('catalogue') || Request::is('catalogue/asc') || Request::is('catalogue/desc'))
                            <a class="dropdown-item" href="{{route('catalogueOrder', ['order' => 'asc'])}}">Prix croissant</a>
                            <a class="dropdown-item" href="{{route('catalogueOrder', ['order' => 'desc'])}}">Prix décroissant</a>
                        @elseif (Request::is('catalogue/rouges') || Request::is('catalogue/rouges/asc') || Request::is('catalogue/rouges/desc'))
                            <a class="dropdown-item" href="{{route('catalogueFilterOrder', ['order' => 'asc', "filter" => 'rouges'])}}">Prix croissant</a>
                            <a class="dropdown-item" href="{{route('catalogueFilterOrder', ['order' => 'desc', "filter" => 'rouges'])}}">Prix décroissant</a>
                        @elseif (Request::is('catalogue/blancs') || Request::is('catalogue/blancs/asc') || Request::is('catalogue/blancs/desc'))
                            <a class="dropdown-item" href="{{route('catalogueFilterOrder', ['order' => 'asc', "filter" => 'blancs'])}}">Prix croissant</a>
                            <a class="dropdown-item" href="{{route('catalogueFilterOrder', ['order' => 'desc', "filter" => 'blancs'])}}">Prix décroissant</a>
                        @elseif (Request::is('catalogue/roses') || Request::is('catalogue/roses/asc') || Request::is('catalogue/roses/desc'))
                            <a class="dropdown-item" href="{{route('catalogueFilterOrder', ['order' => 'asc', "filter" => 'roses'])}}">Prix croissant</a>
                            <a class="dropdown-item" href="{{route('catalogueFilterOrder', ['order' => 'desc', "filter" => 'roses'])}}">Prix décroissant</a>
                        @elseif (Request::is('catalogue/mousseux') || Request::is('catalogue/mousseux/asc') || Request::is('catalogue/mousseux/desc'))
                            <a class="dropdown-item" href="{{route('catalogueFilterOrder', ['order' => 'asc', "filter" => 'mousseux'])}}">Prix croissant</a>
                            <a class="dropdown-item" href="{{route('catalogueFilterOrder', ['order' => 'desc', "filter" => 'mousseux'])}}">Prix décroissant</a>
                        @elseif (Request::is('catalogue/bios') || Request::is('catalogue/bios/asc') || Request::is('catalogue/bios/desc'))
                            <a class="dropdown-item" href="{{route('catalogueFilterOrder', ['order' => 'asc', "filter" => 'bios'])}}">Prix croissant</a>
                            <a class="dropdown-item" href="{{route('catalogueFilterOrder', ['order' => 'desc', "filter" => 'bios'])}}">Prix décroissant</a>
                        @elseif (Request::is('catalogue/primeurs') || Request::is('catalogue/primeurs/asc') || Request::is('catalogue/primeurs/desc'))
                            <a class="dropdown-item" href="{{route('catalogueFilterOrder', ['order' => 'asc', "filter" => 'primeurs'])}}">Prix croissant</a>
                            <a class="dropdown-item" href="{{route('catalogueFilterOrder', ['order' => 'desc', "filter" => 'primeurs'])}}">Prix décroissant</a>
                        @elseif (Request::is('catalogue/promotions') || Request::is('catalogue/promotions/asc') || Request::is('catalogue/promotions/desc'))
                            <a class="dropdown-item" href="{{route('catalogueFilterOrder', ['order' => 'asc', "filter" => 'promotions'])}}">Prix croissant</a>
                            <a class="dropdown-item" href="{{route('catalogueFilterOrder', ['order' => 'desc', "filter" => 'promotions'])}}">Prix décroissant</a>
                        @elseif (Request::is('catalogue/nouveautes') || Request::is('catalogue/nouveautes/asc') || Request::is('catalogue/nouveautes/desc'))
                            <a class="dropdown-item" href="{{route('catalogueFilterOrder', ['order' => 'asc', "filter" => 'nouveautes'])}}">Prix croissant</a>
                            <a class="dropdown-item" href="{{route('catalogueFilterOrder', ['order' => 'desc', "filter" => 'nouveautes'])}}">Prix décroissant</a>
                        @elseif (Request::is('catalogue/fins') || Request::is('catalogue/fins/asc') || Request::is('catalogue/fins/desc'))
                            <a class="dropdown-item" href="{{route('catalogueFilterOrder', ['order' => 'asc', "filter" => 'fins'])}}">Prix croissant</a>
                            <a class="dropdown-item" href="{{route('catalogueFilterOrder', ['order' => 'desc', "filter" => 'fins'])}}">Prix décroissant</a>
                        @endif

                </div>
            </div>
        </div>
    </div>    
    </div>
    <div id="row">
    <div class="col-10 mt-3">
        <a href="#">Recherche avancée ></a>
    </div>
    </div>
    </div>
</div>

<div class="container" id="contenant">
    <div class="row">
        @foreach($results as $result)
        {{-- Template pour chaque card --}}
        <div class="carte_vins col-12 col-sm-6 col-md-4 col-lg-3 mt-3" data-pays="{{$result["prod"]["pays"]}}" data-region="{{$result["prod"]["region"]}}">
            <div class="card h-100">
                <div class="card-body p-3">
                    <div class="row" id="carte">
                        <a href="{{ route('produit', ['id' => $result["id"]]) }}">
                            <div class="container">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="{{$result["photos"][0]['url']}}" alt="{{$result["photos"][0]['alt']}}">
                                    </div>
                                    <div class="col-9">
                                        <h4 class="card-title">{{$result["nom"]}}</h4>
                                        <p class="card-text">
                                        <span data-filter="{{$result["prod"]["region"]}}">{{$result["prod"]["region"]}}</span> - {{$result["prod"]["pays"]}}</span>
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
</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type='text/javascript'>
    $(document).ready(function(){
        
        // liste déroulante pays
        $("#paysListe a").click( function() {
        var pays = $(this).text();
            $('.carte_vins').each(function() {
                $(this).hide();
                $('#contenant > div').find("[data-pays='" + pays + "']").show();
                $('#grpPays button').text(pays);
            });
        });

        //liste déroulante region
        $("#regionListe a").click( function() {
        var region = $(this).text();
        $('.carte_vins').each(function() {
                $(this).hide();
                $('#contenant > div').find("[data-region='" + region + "']").show();
            });
        });

    });
    </script>
@endsection

