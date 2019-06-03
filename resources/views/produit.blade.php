@extends('template')

@section('titre')
Fiche Produit (mettre le nom du produit en variable)
@endsection

@section('contenu')
<div class="">
  <div class="container mt-5">
    <button type="button" class="btn btn-primary"><</button>
    <div class="row">
      <div class="col-3">
        <img src="/public/img/test-vin.jpg" alt="test vin" class="img-fluid">
      </div>
      <div class="col-9">
        <div id="titreProduit">
          <h1>{{ $vins[$id]->nom }}</h1>
          <h2>
            @if($vins[$id]->titre)
              {{ $vins[$id]->annee }} - {{ $vins[$id]->titre }}
            @else
              {{ $vins[$id]->annee }}
            @endif
          </h2>
        </div>
        <p>
          Bordeaux - France<br>
          Haut-Médoc<br>
          {{ $contVin }}<br>
        </p>
        <h2>{{ $prix[$id]->prix }}</h2>
        <div class="row mt-4">
          <div class="input-group col-3 col-sm-2">
            <select class="custom-select" id="inputCart">
              <option selected>6</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
          <button type="button" class="btn btn-primary col-6 col-sm-3">Ajouter au panier <i class="fas fa-shopping-cart"></i></button>
          <button type="button" class="btn btn-outline-primary col-2 col-sm-1 ml-3"><i class="far fa-heart"></i></button>
        </div>
        <p class="mt-4 text-primary">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </p>
        <p>Cotation : 97/100 Parker</p>
        <hr>
        <p>
          Le Château Coller-la-petite doit principalement sa réputation à un terroir exceptionnel qui lui apporte des caractéristiques aromatiques originales. Il est issu des plus vieilles vignes du domaine (35 ans d’âge moyen), situées au cœur du terroir historique, qui fait environ 45 hectares. Il a bénéficié également depuis la fin des années 90 de la volonté de l’équipe dirigeante d’améliorer la qualité en introduisant de nombreuses innovations dans le vignoble comme aux chais. Ainsi, depuis 1997, un cuvier neuf et spacieux composé d’1/3 de cuves de bois, 1/3 de cuves de béton, et 1/3 de cuves inox, a été mis en place.
        </p>
        <hr>
        <p>Degrès d'alcool :</p>
        <p>Cépages :</p>
        <p>Apogée :</p>
        <p>Température de conservation :</p>
        <p>Température de service :</p>
        <p>Mets d'accompagnement :</p>
        <hr>
          <div class="row">
            <div class="input-group-prepend col-1">
              <span class="input-group-text">Noter ce vin</span>
            </div>
            <div class="rating col-8 ml-auto mt-auto">
              <input type="radio" id="star5" name="rating" value="5" /><label for="star5"><i class="fas fa-star"></i></label>
              <input type="radio" id="star4" name="rating" value="4" /><label for="star4"><i class="fas fa-star"></i></label>
              <input type="radio" id="star3" name="rating" value="3" /><label for="star3"><i class="fas fa-star"></i></label>
              <input type="radio" id="star2" name="rating" value="2" /><label for="star2"><i class="fas fa-star"></i></label>
              <input type="radio" id="star1" name="rating" value="1" /><label for="star1"><i class="fas fa-star"></i></label>
            </div>
          </div>
          <hr>
          <form>
            <div class="row">
              <div class="form-group col-6 col-sm-3">
                <input type="text" class="form-control" id="title" placeholder="Titre...">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-12">
                <textarea class="form-control" id="commentairee" rows="3" placeholder="Commentaire..."></textarea>
              </div>
            </div>
            <button type="submit" class="btn btn-primary justifiy-content-end">Envoyer</button>
          </form>
          <hr>
          <div class="row">
            <div class="col-3">
              <p>Pedro<br>
                <time>17/12/2018</time>
              </p>
            </div>
            <div class="col-9">
              <p>Vin génial. Bonne surprise pour ce vin en promotion actuellement.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>              
@endsection