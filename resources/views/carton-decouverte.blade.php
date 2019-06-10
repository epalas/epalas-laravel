@extends('template')

@section('titre')
  Gazzar - Carton Découverte
@endsection

@section('contenu')
  <div class="container mt-5">
    <h1 class="mb-5">Carton Découverte</h1>
    <div class="row">
      <div class="col-8 col-md-6">
        <img src="img/carton.png" alt="Carton découverte" class="img-fluid">
      </div>
      <div class="col-12 col-sm-6 mb-5">
        <div class="row mb-5">
          <div class="col-0">
            <img src="img/point.svg" alt="Point du logo" width="25rem" id="point">
          </div>
          <div class="col col-sm-8">
            <h2>Osez tester de nouvelles saveurs</h2>
          </div>
          <div class="col-12 col-xl-3">
            <hr class="titre-point">
          </div>

          {{--
            Audric essaie de faire du front-end
          --}}
          <p>Vous n'arrivez pas à vous décider parmi toutes les bouteilles du catalogue ? Rassurez-vous, vous êtes bien au bon endroit.</p>
          <p>Le principe du carton découverte est assez simple, renseignez-nous :</p>
          <ul>
            <li>Une quantité de bouteilles</li>
            <li>Un prix maximum pour le carton</li>
            <li>Le(s) type(s) de vin désiré(s)</li>
          </ul>
          <p>Gazzar et le hasard s'occuperont ensuite du reste pour vous offrir une découverte de qualité.   </p>
          <div class="input-group">

            <form action="{{route('carton')}}" method="post">
              @csrf

              <label for="quantity">Quantité de bouteilles</label>
              <select class="custom-select col-12 col-sm-12 col-md-2 col-lg-2 mb-2 mr-2" name="quantity" id="quantity">
                <option value="3">3</option>
                <option selected value="6">6</option>
                <option value="12">12</option>
              </select>

              <label for="prixMax">Prix maximum</label>
              <input type="number" name="prixMax" value="CHF" placeholder="300 CHF" min="150">

              <p>Séléctionnez ci-dessous le(s) type(s) de vin que vous désirez dans votre carton découverte :</p>

              <div>
                <input type="checkbox" id="rouge" name="rouge">
                <label for="scales">Rouge</label>
              </div>
              <div>
                <input type="checkbox" id="blanc" name="blanc">
                <label for="horns">Blanc</label>
              </div>
              <div>
                <input type="checkbox" id="rose" name="rose">
                <label for="horns">Rosé</label>
              </div>
              <div>
                <input type="checkbox" id="mousseux" name="mousseux">
                <label for="horns">Mousseux</label>
              </div>

              <button type="submit" class="btn btn-primary mr-auto mt-3 mb-5">Commander</button>
          </div>
          </form>

        </div>
        </div>
      </div>
    </div>
    {{-- Deuxième partie--}}

    <div class="col-12 col-sm-6">
      <div class="row">
        <div class="col-0">
          <img src="img/point.svg" alt="Point du logo" width="25rem" id="point">
        </div>
        <div class="col col-sm-3">
          <h2>Tarification</h2>
        </div>
        <div class="col-12 col-xl-8">
          <hr class="titre-point">
        </div>
        <p>Carton découverte à <strong>3</strong> bouteilles :</p>
        <ul>
          <li>Prix minimum/maximum : 75 CHF / 750 CHF</li>
        </ul>
        <p>Carton découverte à <strong>6</strong> bouteilles :</p>
        <ul>
          <li>Prix minimum/maximum : 150 CHF / 1'500 CHF</li>
        </ul>
        <p>Carton découverte à <strong>12</strong> bouteilles :</p>
        <ul>
          <li>Prix minimum/maximum : 300 CHF / 3'000 CHF</li>
        </ul>
      </div>
    </div>
    <div class="col-8 col-md-6 pt-5">
      <p>Le prix moyen des bouteilles est calculé en fonction du prix maximum et de la quantité saisie pour le carton découverte. Le format des bouteilles est de 75cl.</p>
      <p>Afin de conserver le mystère autour de son contenu, le récapitulatif des bouteilles est uniquement consultable à la livraison.</p>
    </div>
  </div>
  </div>
@endsection