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
        <button type="button" class="btn btn-light active" id="red" ><img src="img/pictos/picto_color/red.svg" alt="Rouge"/><br/>Rouges</button>
        @else
        <button type="button" class="btn btn-light" id="red" ><img src="img/pictos/vin.svg" alt="Rouge"/><br/>Rouges</button>
        @endif 
        @if (Request::is('catalogue/blancs'))
        <button type="button" class="btn btn-light active" id="white"><img src="img/pictos/picto_color/white.svg" alt="Blanc" /><br/>Blancs</button>
        @else
        <button type="button" class="btn btn-light" id="white"><img src="img/pictos/vin.svg" alt="Blanc" /><br/>Blancs</button>
        @endif 
        @if (Request::is('catalogue/roses'))
        <button type="button" class="btn btn-light active" id="rosy"><img src="img/pictos/picto_color/rosy.svg" alt="Rosé"/><br/>Rosés</button>
        @else
        <button type="button" class="btn btn-light" id="rosy"><img src="img/pictos/vin.svg" alt="Rosé"/><br/>Rosés</button>
        @endif 
        @if (Request::is('catalogue/mousseux'))
        <button type="button" class="btn btn-light active" id="mouss"><img src="img/pictos/picto_color/champain.svg" alt="Mousseux"/><br/>Mousseux</button>
        @else
        <button type="button" class="btn btn-light" id="mouss"><img src="img/pictos/mousseux.svg" alt="Mousseux"/><br/>Mousseux</button>
        @endif 
        @if (Request::is('catalogue/bios'))
        <button type="button" class="btn btn-light active" id="bio"><img src="img/pictos/picto_color/bio-green.svg" alt="Bio"/><br/>Bio</button>
        @else
        <button type="button" class="btn btn-light" id="bio"><img src="img/pictos/bio.svg" alt="Bio"/><br/>Bio</button>
        @endif 
        @if (Request::is('catalogue/primeurs'))
        <button type="button" class="btn btn-light active" id="prim"><img src="img/pictos/picto_color/primeur-color.svg" alt="Primeur"/><br/>Primeurs</button>
        @else
        <button type="button" class="btn btn-light" id="prim"><img src="img/pictos/primeur.svg" alt="Primeur"/><br/>Primeurs</button>
        @endif 
        @if (Request::is('promotions'))
        <button type="button" class="btn btn-light active" id="promo"><img src="img/pictos/picto_color/promo-red.svg" alt="Promo"/><br/>Promo</button>
        @else
        <button type="button" class="btn btn-light" id="promo"><img src="img/pictos/promo.svg" alt="Promo"/><br/>Promo</button>
        @endif 
        @if (Request::is('nouveautes'))
        <button type="button" class="btn btn-light active" id="new"><img src="img/pictos/picto_color/new-red.svg" alt="Nouveau"/><br/>Nouveaux</button>
        @else
        <button type="button" class="btn btn-light" id="new"><img src="img/pictos/nouveau.svg" alt="Nouveau"/><br/>Nouveaux</button>
        @endif 
        @if (Request::is('fin'))
        <button type="button" class="btn btn-light" id="end"><img src="img/pictos/picto_color/end-red.svg" alt="Fin de série"/><br/>Fins de série</button>
        @else
        <button type="button" class="btn btn-light" id="end"><img src="img/pictos/fin.svg" alt="Fin de série"/><br/>Fins de série</button>
        @endif 
        </div>   
    </div>
    <div id="row">
    <div class="col-12">
        <div class="btn-group mt-2" role="group">
            <button type="button" class="btn btn-primary" disabled>Pays</button>
            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tous les pays
                </button>

                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <?php /* recherche en BD sur les pays disponibles */?>
                    <a class="dropdown-item" href="#">Suisse</a>
                    <a class="dropdown-item" href="#">Italie</a>
                    <a class="dropdown-item" href="#">Espagne</a>
                </div>
            </div>
        </div>
        <div class="btn-group mt-2" role="group" >
            <button type="button" class="btn btn-primary" disabled>Régions</button>
            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Toutes les Régions
                </button>

                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <?php /* recherche en BD sur les régions disponibles */ ?>
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

                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <?php /* recharge les articles en ASC ou DESC*/ ?>
                    <a class="dropdown-item" href="#">Prix croissant</a>
                    <a class="dropdown-item" href="#">Prix décroissant</a>
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
@endsection

@section('article')

{{-- @yield('carte') <- Ca marche pas mdr --}}

@foreach($results as $result)
{{-- Template pour chaque card --}}
    <div class="card" style="width: 16rem;">

        <div class="card-body p-3">

            <div  class="row" id="carte">
                <a href="produit/{{$result["id"]}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-3">
                                <img src="{{$result["photos"][0]['url']}}" alt="{{$result["photos"][0]['alt']}}">
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
                <a class="nav-link" href="#">
</a> <a class="nav-link" href="#"><i class="far fa-heart"></i></a>
</div>
</div>

</div>
@endforeach

@endsection

