@extends('template')

@section('titre')
Gazzar - Catalogue
@endsection

@section('contenu')
<style>
    img{
        width:50px;
    }
</style>
<div class="container">
    <div class="row">
    <div class="col-10 offset-1">
        <div class="btn-group" role="group">
        <button type="button" class="btn btn-light active"><img src="img/pictos/vin.svg" alt="Rouge"/><br/>Rouge</button>
        <button type="button" class="btn btn-light"><img src="img/pictos/vin.svg" alt="Blanc"/><br/>Blanc</button>
        <button type="button" class="btn btn-light"><img src="img/pictos/vin.svg" alt="Rosé"/><br/>Rosé</button>
        <button type="button" class="btn btn-light"><img src="img/pictos/mousseux.svg" alt="Mousseux"/><br/>Mousseux</button>
        <button type="button" class="btn btn-light"><img src="img/pictos/bio.svg" alt="Bio"/><br/>Bio</button>
        <button type="button" class="btn btn-light"><img src="img/pictos/primeur.svg" alt="Primeur"/><br/>Primeur</button>
        <button type="button" class="btn btn-light"><img src="img/pictos/promo.svg" alt="promo"/><br/>Promo</button>
        <button type="button" class="btn btn-light"><img src="img/pictos/nouveau.svg" alt="Nouveau"/><br/>Nouveaux</button>
        <button type="button" class="btn btn-light"><img src="img/pictos/fin.svg" alt="Fin de série"/><br/>Fin de série</button>
        </div>  
    </div> 
    </div>
    <div id="row">
    <div class="col-10 offset-1">
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-light active">Pays</button>
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
        <div class="btn-group" role="group" >
            <button type="button" class="btn btn-light active">Régions</button>
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
        <div class="btn-group" role="group" >
            <button type="button" class="btn btn-light active">Prix croissant</button>
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
    <div class="col-10 offset-1">
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

