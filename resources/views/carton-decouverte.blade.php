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
            <h2>Osez testez de nouvelles saveurs</h2>
          </div>
          <div class="col-12 col-xl-3">
            <hr class="titre-point">
          </div>

          {{--
            Audric essaie de faire du front-end
          --}}
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisinci</p>
          <div class="input-group">

            <form action="{{route('carton')}}" method="post">
              @csrf

              <label for="quantity">Quantité de bouteilles</label>
              <select class="custom-select col-12 col-sm-12 col-md-2 col-lg-2 mb-2 mr-2" name="quantity" id="quantity">
                <option value="3">3</option>
                <option selected value="6">6</option>
                <option value="12">12</option>
              </select>

              <label for="prixMax">Prix maximum(CHF)</label>
              <input type="number" name="prixMax" value="CHF">

              <p>Séléctionnez ci-dessous le(s) type(s) de vin que ne vous désirez pas dans votre carton découverte :</p>

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
          <h2>Contenu</h2>
        </div>
        <div class="col-12 col-xl-8">
          <hr class="titre-point">
        </div>
        <ul>
          <li>Dézaley Grand Cru "La Gueniettaz", Chasselas 70cl</li>
          <li>St-Saphorin "Le Roc Noir", Chasselas 70cl</li>
          <li>Chardonne "Viognier", 70cl</li>
          <li>Saphorin "Cornalis", Assemblage 70cl</li>
          <li>Dôle de Salquenen, 75cl</li>
          <li>Aphrodine, Petite Arvine, 75cl</li>
        </ul>

      </div>
    </div>

    <div class="col-8 col-md-6 pt-5">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit volupt</p>
    </div>
  </div>
  </div>
@endsection