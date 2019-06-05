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
          <form action="{{route('cart.store')}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{ $x['id'] }}">
            <input type="hidden" name="nom" value="{{ $x['nom'] }}">
            <input type="hidden" name="prix" value="{{ $x['prixprods'][0]['prix'] }}">
            <button type="submit" class="btn btn-primary col-6 col-sm-12">Ajouter au panier <i class="fas fa-shopping-cart"></i></button>
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
        <p>Cotation : {{ $x['cotas'][0]['note'] }} / {{ $x['cotas'][0]['echelle'] }} {{ $x['cotas'][0]['nom'] }}</p>
        <hr>
        <p>
          {{ $x['description'] }}
        </p>
        <hr>
        <p>Degrès d'alcool : {{ $x['alcool'] }} %</p>
        <p>Cépages : {{ $x['cepa'][0]['label'] }}</p>
        <p>Apogée : {{ $x['apogee'] }}</p>
        <p>Température de conservation : {{ $x['tempCons'] }}°C</p>
        <p>Température de service : {{ $x['tempServ'] }}°C</p>
        <p>Mets d'accompagnement : {{ $x['met'][0]['label'] }}</p>
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
          <form action="" method="post">
            {{ csrf_field() }}
            <div class="row">
              <div class="form-group col-6 col-sm-3">
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
          <div class="row">
            <div class="mt-2 col-3">
              <p class="bold short-line">{{ $x['util'][0]['nom'] }}</p>
              <p><time>{{ date('d.m.Y', strtotime($x['comms'][0]['date'])) }}</time></p>
            </div>
            <div class="mt-2 col-9">
              <p class="bold short-line">{{ $x['comms'][0]['titre'] }}</p>
              <p>{{ $x['comms'][0]['contenu'] }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection