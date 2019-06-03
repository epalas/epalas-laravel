@extends('template')

@section('titre')
Gazzar - Carte vins
@endsection

@section('contenu')

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
            <img src="img/bouteille.jpg" alt="Card image cap">
          </div>
          <div class="col-9">
            <h4 class="card-title">Château leJaaJ</h4>
            <p class="card-text">
              <p>Bordeaux - France</p> 
              <p>Haut médoc</p> 
              <p>75cl / <span class="annee">2015</span></p> 
              <span class="prix"><b>17,23</b></span> <span>CHF</span>
            </p>
          </div>
        </div>
      </div>

  </div>

  
  </div>

    <div class="card-header">
      <div class="row justify-content-between">
        <a class="nav-link" href="#"><i class="far fa-star"></i></a> <a class="nav-link" href="#"><i class="far fa-heart"></i></a>
      </div>
    </div>

</div>
@endsection