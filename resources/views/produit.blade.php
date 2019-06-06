@extends('template')

@section('titre')
Gazzar | {{ $x['nom'] }}
@endsection

@section('contenu')
<div class="">
  <div class="container mt-5">
    <a href="{{ url()->previous() }}" class="btn btn-primary" role="button"><</a>
    <div class="row">
      <div class="col-3">
        <img src="{{ $x['photos'][0]['url'] }}" alt="test vin" class="img-fluid">
      </div>
      <div class="col-9">
        <div id="titreProduit">
          <h1>{{ $x['nom'] }}</h1>
          <h2>
            @if($x['titre'])
              {{ $x['annee'] }} | {{ $x['titre'] }}
            @else
              {{ $x['annee'] }}
            @endif
          </h2>
        </div>
        <p>
          {{ $x['prod']['pays'] }}<br>
          {{--Haut-Médoc<br>--}}
          {{ $x['cont'][0]['volume'] }} L<br>
        </p>
        <h2>{{ $x['prixprods'][0]['prix'] }} CHF</h2>
        <div class="row mt-4">
          <div class="input-group col-12 col-sm-4 col-md-2 col-lg-2 mb-2">
            <select class="custom-select" id="inputCart">
              <option selected>6</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
          <form action="{{route('cart.store')}}" method="POST" class="col">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{ $x['id'] }}">
            <input type="hidden" name="nom" value="{{ $x['nom'] }}">
            <input type="hidden" name="prix" value="{{ $x['prixprods'][0]['prix'] }}">
            <button type="submit" class="btn btn-primary col-12 col-sm-12 col-md-6 col-lg-4 mb-2 mr-2">Ajouter au panier<i class="fas fa-shopping-cart"></i></button>
            <button type="button" class="btn btn-outline-primary col-12 col-sm-12 col-md-2 col-lg-1 mb-2"><i class="far fa-heart"></i></button>
          </form>
        </div>
        <p class="mt-4 text-primary">
          @switch($x['notes'][0]['nbrEtoiles'])
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
        <p><span class="bold">Cotation :</span> {{ $x['cotas'][0]['note'] }} / {{ $x['cotas'][0]['echelle'] }} {{ $x['cotas'][0]['nom'] }}</p>
        <hr>
        <p>
          {{ $x['description'] }}
        </p>
        <hr>
        <p><span class="bold">Degrès d'alcool :</span> {{ $x['alcool'] }} %</p>
        <p><span class="bold">Cépages :</span> {{ $x['cepa'][0]['label'] }}</p>
        <p><span class="bold">Apogée :</span> {{ $x['apogee'] }}</p>
        <p><span class="bold">Température de conservation :</span> {{ $x['tempCons'] }}°C</p>
        <p><span class="bold">Température de service :</span> {{ $x['tempServ'] }}°C</p>
        <p><span class="bold">Mets d'accompagnement :</span> {{ $x['met'][0]['label'] }}</p>
        <hr>
        <p><span class="bold">Disponibilité :</span> {{ $x['stock']['nbrUnite'] }} bouteilles en stock </p>
        @if(Auth::check())
          <div class="row">
            <div class="input-group-prepend col-1">
              <span class="input-group-text">Noter ce vin</span>
            </div>
            <form action="POST" id="rate-form" class="rating col-8 ml-auto mt-auto">
              {{ csrf_field() }}
              <input type="radio" id="star5" name="rating" value="5" /><label for="star5"><i class="fas fa-star"></i></label>
              <input type="radio" id="star4" name="rating" value="4" /><label for="star4"><i class="fas fa-star"></i></label>
              <input type="radio" id="star3" name="rating" value="3" /><label for="star3"><i class="fas fa-star"></i></label>
              <input type="radio" id="star2" name="rating" value="2" /><label for="star2"><i class="fas fa-star"></i></label>
              <input type="radio" id="star1" name="rating" value="1" /><label for="star1"><i class="fas fa-star"></i></label>
            </form>
          </div>
          <hr>
          <form action="{{route('comment.store')}}" method="post">
            {{ csrf_field() }}
            <div class="row">
              <div class="form-group col-6 col-sm-3">
                <input type="hidden" name="idVin" value="{{ $x['id'] }}">
                <input type="text" name="titre" class="form-control" id="title" placeholder="Titre...">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-12">
                <textarea class="form-control" name="contenu" id="commentairee" rows="3" placeholder="Commentaire..."></textarea>
              </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary justifiy-content-end">Envoyer</button>
          </form>
          <hr>
          @endif
          @foreach($comments as $comment)
          <hr>
          <div class="row">
            <div class="mt-2 col-4 col-sm-3">
              <p class="bold short-line">{{ $comment->prenom }} {{ $comment->nom }}</p>
              <p><time>{{ date('d.m.Y', strtotime($comment->date)) }}</time></p>
            </div>
            <div class="mt-2 col-8 col-sm-9">
              <p class="bold short-line">{{ $comment->titreComm }}</p>
              <p>{{ $comment->contenu }}</p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection