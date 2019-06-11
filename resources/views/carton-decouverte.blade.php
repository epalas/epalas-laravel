@extends('template')

@section('titre')
  Gazzar - Carton Découverte
@endsection

@section('contenu')
  <div class="container mt-5">
    <div class="col-12">
    <h1 class="mb-5">Carton Découverte</h1>
    <div class="row">
      <div class="col-12 col-md-6 col-xl-6">
        <img src="img/carton.png" alt="Carton découverte" class="img-fluid mt-n5">
        <div class="row">
        <div class="col-0">
          <img src="img/point.svg" alt="Point du logo" width="25rem" id="point">
        </div>
        <div class="col col-xl-3">
          <h2>Tarification</h2>
        </div>
        <div class="col-12 col-xl-7">
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
      <div class="col-12 col-md-6 col-xl-6 mb-5">
        <div class="row mb-5">
          <div class="col-0">
            <img src="img/point.svg" alt="Point du logo" width="25rem" id="point">
          </div>
          <div class="col col-xl-8">
            <h2>Osez tester de nouvelles saveurs</h2>
          </div>
          <div class="col-12 col-xl-3">
            <hr class="titre-point">
          </div>

          <p>Vous n'arrivez pas à vous décider parmi toutes les bouteilles du catalogue ? Rassurez-vous, vous êtes bien au bon endroit.</p>
          <p>Le principe du carton découverte est assez simple, renseignez-nous :</p>
          <ul>
            <li>Une quantité de bouteilles</li>
            <li>Une limite de prix</li>
            <li>Le(s) type(s) de vin désiré(s)</li>
          </ul>
          <p class="mb-3">Gazzar et le hasard s'occuperont ensuite du reste pour vous offrir une découverte de qualité.</p>

          <div class="col-0">
          <img src="img/point.svg" alt="Point du logo" width="25rem" id="point">
        </div>
        <div class="col col-xl-5">
          <h2>Passez commande !</h2>
        </div>
        <div class="col-12 col-xl-6">
          <hr class="titre-point">
        </div>
              <p>Le prix moyen des bouteilles est calculé en fonction de la limite de prix et de la quantité saisie pour le carton découverte. Le format des bouteilles est de 75cl.</p>
      <p>Afin de conserver le mystère autour de son contenu, le récapitulatif des bouteilles est uniquement consultable à la livraison.</p>
            <form action="{{route('carton')}}" method="post">
              @csrf
               <div class="input-group">
              <label for="quantity" class="mt-1">Quantité de bouteilles</label>
              <select class="custom-select col-12 col-xl-3 mb-2 ml-2" name="quantity" id="quantity">
                <option value="3">3</option>
                <option selected value="6">6</option>
                <option value="12">12</option>
              </select>
              </div> 
              <div class="row">
                <div class="input-group col-12 mb-2">

              <label for="prixMax" class="mt-1">Limite de prix</label>
              <input type="number" class="form-control col-12 col-xl-3 ml-2" name="prixMax" value="CHF" placeholder="300" min="150" max="3000">
                <div class="input-group-append">
                  <span class="input-group-text">CHF</span>
                </div>
              </div>
              </div>
              <span class="alert-warning">{{$errors->first('prixMax')}}</span>
              <p>Séléctionnez ci-dessous le(s) type(s) de vin que vous désirez dans votre carton découverte :</p>
              <div class="row">
              <div class="col-2">
                <input type="checkbox" id="rouge" name="rouge">
                <img src="{{asset('img/pictos/picto_color/red.svg')}}" alt="picto vin rouge" width="20rem">
                <label for="scales">Rouge</label>
              </div>
              <div class="col-2">
                <input type="checkbox" id="blanc" name="blanc">
                <img src="{{asset('img/pictos/picto_color/white.svg')}}" alt="picto vin rouge" width="20rem">
                <label for="horns">Blanc</label>
              </div>
              <div class="col-2">
                <input type="checkbox" id="rose" name="rose">
                <img src="{{asset('img/pictos/picto_color/rosy.svg')}}" alt="picto vin rouge" width="20rem">
                <label for="horns">Rosé</label>
              </div>
              <div class="col-2">
                <input type="checkbox" id="mousseux" name="mousseux">
                <img src="{{asset('img/pictos/picto_color/champain.svg')}}" alt="picto vin rouge" width="20rem">
                <label for="horns">Mousseux</label>
              </div>
              <button type="submit" class="btn btn-primary mt-3 mb-5 ml-4">Commander</button>
                <span class="alert-warning">{{$errors->first('noType')}}</span>
              </div>          
          </form>
    </div>
      </div>
    </div>
</div>
</div>
</div>
</div>
@endsection
