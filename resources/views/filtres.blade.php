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
        @if (Request::is('rouge'))
        <button type="button" class="btn btn-light active" id="red" ><img src="img/pictos/picto_color/red.svg" alt="Rouge"/><br/>Rouges</button>
        @else
        <button type="button" class="btn btn-light" id="red" ><img src="img/pictos/vin.svg" alt="Rouge"/><br/>Rouges</button>
        @endif 
        @if (Request::is('blanc'))
        <button type="button" class="btn btn-light active" id="white"><img src="img/pictos/picto_color/white.svg" alt="Blanc" /><br/>Blancs</button>
        @else
        <button type="button" class="btn btn-light" id="white"><img src="img/pictos/vin.svg" alt="Blanc" /><br/>Blancs</button>
        @endif 
        @if (Request::is('rose'))
        <button type="button" class="btn btn-light active" id="rosy"><img src="img/pictos/picto_color/rosy.svg" alt="Rosé"/><br/>Rosés</button>
        @else
        <button type="button" class="btn btn-light" id="rosy"><img src="img/pictos/vin.svg" alt="Rosé"/><br/>Rosés</button>
        @endif 
        @if (Request::is('mousseux'))
        <button type="button" class="btn btn-light active" id="mouss"><img src="img/pictos/picto_color/champain.svg" alt="Mousseux"/><br/>Mousseux</button>
        @else
        <button type="button" class="btn btn-light" id="mouss"><img src="img/pictos/mousseux.svg" alt="Mousseux"/><br/>Mousseux</button>
        @endif 
        @if (Request::is('bio'))
        <button type="button" class="btn btn-light active" id="bio"><img src="img/pictos/picto_color/bio-green.svg" alt="Bio"/><br/>Bio</button>
        @else
        <button type="button" class="btn btn-light" id="bio"><img src="img/pictos/bio.svg" alt="Bio"/><br/>Bio</button>
        @endif 
        @if (Request::is('primeur'))
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

{{-- 
@foreach ($produits as $produit)  
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$produit.title}}</h5>
    <p class="card-text">{{$produit.descr}}</p>
    <a href="#" class="btn btn-primary">ratings</a>
    <a href="#" class="btn btn-primary">favorit</a>
  </div>
</div>
@endforeach
--}}

@endsection