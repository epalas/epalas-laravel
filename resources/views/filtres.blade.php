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

        @if (Request::is('catalogue/rouges'))
        <a href="{{route('catalogue', ['filtre' => 'rouges'])}}" class="btn btn-light bg-white active" id="red" ><img src="{{asset('img/pictos/picto_color/red.svg')}}" alt="Rouge"/><br/>Rouges</a>

        @else
        <a href="{{route('catalogue', ['filtre' => 'rouges'])}}" class="btn btn-light bg-white" id="red" ><img src="{{asset('img/pictos/vin.svg')}}" alt="Rouge"/><br/>Rouges</a>

        @endif 

        @if (Request::is('catalogue/blancs'))
        <a href="{{route('catalogue', ['filtre' => 'blancs'])}}" class="btn btn-light bg-white active" id="white"><img src="{{asset('img/pictos/picto_color/white.svg')}}" alt="Blanc" /><br/>Blancs</a>

        @else
        <a href="{{route('catalogue', ['filtre' => 'blancs'])}}" class="btn btn-light bg-white" id="white"><img src="{{asset('img/pictos/vin.svg')}}" alt="Blanc" /><br/>Blancs</a>
        @endif 

        @if (Request::is('catalogue/roses'))
        <a href="{{route('catalogue', ['filtre' => 'roses'])}}" class="btn btn-light bg-white active" id="rosy"><img src="{{asset('img/pictos/picto_color/rosy.svg')}}" alt="Rosé"/><br/>Rosés</a>

        @else
        <a href="{{route('catalogue', ['filtre' => 'roses'])}}" class="btn btn-light bg-white" id="rosy"><img src="{{asset('img/pictos/vin.svg')}}" alt="Rosé"/><br/>Rosés</a>
        @endif 

        @if (Request::is('catalogue/mousseux'))
        <a href="{{route('catalogue', ['filtre' => 'mousseux'])}}" class="btn btn-light bg-white active" id="mouss"><img src="{{asset('img/pictos/picto_color/champain.svg')}}" alt="Mousseux"/><br/>Mousseux</a>

        @else
        <a href="{{route('catalogue', ['filtre' => 'mousseux'])}}" class="btn btn-light bg-white" id="mouss"><img src="{{asset('img/pictos/mousseux.svg')}}" alt="Mousseux"/><br/>Mousseux</a>
        @endif 

        @if (Request::is('catalogue/bios'))
        <a href="{{route('catalogue', ['filtre' => 'bios'])}}" class="btn btn-light bg-white active" id="bio"><img src="{{asset('img/pictos/picto_color/bio-green.svg')}}" alt="Bio"/><br/>Bio</a>

        @else
        <a href="{{route('catalogue', ['filtre' => 'bios'])}}" class="btn btn-light bg-white" id="bio"><img src="{{asset('img/pictos/bio.svg')}}" alt="Bio"/><br/>Bio</a>
        @endif 

        @if (Request::is('catalogue/primeurs'))
        <a href="{{route('catalogue', ['filtre' => 'primeurs'])}}" class="btn btn-light bg-white active" id="prim"><img src="{{asset('img/pictos/picto_color/primeur-color.svg')}}" alt="Primeur"/><br/>Primeurs</a>

        @else
        <a href="{{route('catalogue', ['filtre' => 'primeurs'])}}" class="btn btn-light bg-white" id="prim"><img src="{{asset('img/pictos/primeur.svg')}}" alt="Primeur"/><br/>Primeurs</a>
        @endif 
        @if (Request::is('catalogue/promotions'))
        <a href="{{route('catalogue', ['filtre' => 'promotions'])}}" class="btn btn-light bg-white active" id="promo"><img src="{{asset('img/pictos/picto_color/promo-red.svg')}}" alt="Promo"/><br/>Promotions</a>
        @else
        <a href="{{route('catalogue', ['filtre' => 'promotions'])}}" class="btn btn-light bg-white" id="promo"><img src="{{asset('img/pictos/promo.svg')}}" alt="Promo"/><br/>Promotions</a>
        @endif 
        @if (Request::is('catalogue/nouveautes'))
        <a href="{{route('catalogue', ['filtre' => 'nouveautes'])}}" class="btn btn-light bg-white active" id="new"><img src="{{asset('img/pictos/picto_color/new-red.svg')}}" alt="Nouveau"/><br/>Nouveautés</a>
        @else
        <a href="{{route('catalogue', ['filtre' => 'nouveautes'])}}" class="btn btn-light bg-white" id="new"><img src="{{asset('img/pictos/nouveau.svg')}}" alt="Nouveau"/><br/>Nouveautés</a>
        @endif 
        @if (Request::is('catalogue/fins'))
        <a href="{{route('catalogue', ['filtre' => 'fins'])}}" class="btn btn-light bg-white active" id="fins"><img src="{{asset('img/pictos/picto_color/end-red.svg')}}" alt="Fin de série"/><br/>Fins de série</a>
        @else
        <a href="{{route('catalogue', ['filtre' => 'fins'])}}" class="btn btn-light bg-white" id="fins"><img src="{{asset('img/pictos/fin.svg')}}" alt="Fin de série"/><br/>Fins de série</a>
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
            <div class="btn-group" role="group" id="grpRegions">
                <button id="btnGroupDrop1"  type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Toutes les Régions
                </button>

                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" id="regionListe">
                    <?php /* recherche en BD sur les régions disponibles 
                        @foreach($pays as $land)
                        <a class="dropdown-item" href="#" value="{{$land["prod"]["region"]}}">{{$land["region"]["pays"]}}</a>
                        @endforeach 
                    */ ?>
                    <a class="dropdown-item" href="catalogue">Toutes les régions</a>
                    <a class="dropdown-item" href="#">Bourgogne</a>
                    <a class="dropdown-item" href="#">Saxe</a>
                    <a class="dropdown-item" href="#">Loire</a>
                </div>
            </div>
        </div>
        <div class="btn-group mt-2" role="group" >
            <button type="button" class="btn btn-primary" disabled>Prix</button>
            <div class="btn-group" role="group" id="grpPrix">
                <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Croissant
                </button>

                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" id="prixListe">
                    <a class="dropdown-item" href="catalogue/asc">Croissant</a>
                    <a class="dropdown-item" href="catalogue/desc">Décroissant</a>
                </div>
            </div>
        </div>
    </div>    
    </div>
    <div id="row">
    <div class="col-10 mt-3">
        <a href="#search-plus-btn" data-toggle="collapse">Recherche avancée <i class="fas fa-sort-down"></i></a>
        <div id="search-plus-btn" class="collapse">
            <div class="btn-group mt-2" role="group" >
            <button type="button" class="btn btn-primary" disabled>Cépages</button>
                <div class="btn-group" role="group">
                <button id="btnGroupDrop1"  type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tous les cépages
                </button>

                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" id="regionListe">
                    <a class="dropdown-item" href="#">Merlot</a>
                    <a class="dropdown-item" href="#">Cabernet-Sauvignon</a>
                    <a class="dropdown-item" href="#">Syrah</a>
                </div>
            </div>
        </div>  
           <div class="btn-group mt-2" role="group" >
            <button type="button" class="btn btn-primary" disabled>Années</button>
                <div class="btn-group" role="group">
                <button id="btnGroupDrop1"  type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Toutes les années
                </button>

                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" id="regionListe">
                    <a class="dropdown-item" href="#">2014</a>
                    <a class="dropdown-item" href="#">2015</a>
                    <a class="dropdown-item" href="#">2016</a>
                    <a class="dropdown-item" href="#">2017</a>
                </div>
            </div>
        </div> 
           <div class="btn-group mt-2" role="group" >
            <button type="button" class="btn btn-primary" disabled>Mets</button>
                <div class="btn-group" role="group">
                <button id="btnGroupDrop1"  type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tous les mets
                </button>

                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" id="regionListe">
                    <a class="dropdown-item" href="#">Volaille</a>
                    <a class="dropdown-item" href="#">Fromage</a>
                    <a class="dropdown-item" href="#">Viande Rouge</a>
                    <a class="dropdown-item" href="#">Gibier à plume</a>
                </div>
            </div>
        </div> 
           <div class="btn-group mt-2" role="group" >
            <button type="button" class="btn btn-primary" disabled>Contenances</button>
                <div class="btn-group" role="group">
                <button id="btnGroupDrop1"  type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Toutes les contenances
                </button>

                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" id="regionListe">
                    <a class="dropdown-item" href="#">0,75</a>
                    <a class="dropdown-item" href="#">3</a>
                    <a class="dropdown-item" href="#">4,5</a>
                    <a class="dropdown-item" href="#">6</a>
                </div>
            </div>
        </div> 
           <div class="btn-group mt-2" role="group" >
            <button type="button" class="btn btn-primary" disabled>Notes</button>
                <div class="btn-group" role="group">
                <button id="btnGroupDrop1"  type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Toutes les notes
                </button>

                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" id="regionListe">
                    <a class="dropdown-item" href="#"><i class="fas fa-star"></i></a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </a>
                   <a class="dropdown-item" href="#">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </a>
                </div>
            </div>
        </div> 
    </div>



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
                                        <img src="{{asset($result["photos"][0]['url'])}}" alt="{{$result["photos"][0]['alt']}}">
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
                
                            <form action="{{route('wishlist.store')}}" method="POST">
                            {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$result['id']}}">
                                <input type="hidden" name="nom" value="{{$result['nom']}}">
                                <input type="hidden" name="prix" value="{{$result["prixprods"][0]["prix"]}}">
                                <button type="submit" class="btn btn-outline-primary mr-n5"><i class="far fa-heart"></i></button>
                            </form>
                        </p>
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
                $('#grpRegions button').text(region);
            });
        });

        $("#prixListe a").click( function() {
        var prix = $(this).text();
                $('#grpPrix button').text(prix);
        });

    });
    </script>
@endsection

