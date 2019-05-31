@extends('template')

@section('titre')
Gazzar - Inscription
@endsection

@section('contenu')
<div class="container">
  <div class="row">
    <div class="space bg-white col-12 col-sm-8 offset-sm-2 rounded text-center">
      <p class="mt-2">
        <a href="#">Vous avez déjà un compte ? ></a>
      </p>
      <h1 class="mt-3">Création d'un compte</h1>
      <hr class="hr-titre">
          
          {{-- formulaire d'inscription--}}
          <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 mt-1">
            <form>
              <input name="prenom" type="text" class="form-control mt-2" placeholder="Prénom">
              <input name="nom" type="text" class="form-control mt-2" placeholder="Nom">
              <input name="email" type="email" class="form-control mt-2" placeholder="Adresse E-mail">
              <input name="rue" type="text" class="form-control mt-2" placeholder="Rue">
              <input name="cp" type="number" class="form-control mt-2" placeholder="Code Postal">
              <input name="ville" type="text" class="form-control mt-2" placeholder="Ville">
              <input name="pays" type="text" class="form-control mt-2" placeholder="Pays">
              <input name="mdp" type="password" class="form-control mt-2" placeholder="Mot de passe">
              <input name="confirmmdp" type="password" class="form-control mt-2" placeholder="confirmation du mot de passe">


              <button type="submit" class="btn btn-primary mr-auto mt-3 mb-5">Créer un compte</button>
            </form> 
          </div>       
      </div>
    </div>
  </div>
</div>
@endsection