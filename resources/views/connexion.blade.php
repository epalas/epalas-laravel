@extends('template')

@section('titre')
Gazzar - Connexion
@endsection

@section('contenu')
<div class="container">
  <div class="row">
    <div class="space bg-white col-12 col-sm-8 offset-sm-2 rounded text-center">
      <p class="mt-2">
        <a href="#">Vous n'avez pas encore de compte ? ></a>
      </p>
      <h1 class="mt-3">Se connecter</h1>
      <hr class="hr-titre">
          
          {{-- formulaire de connexion--}}
          <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 mt-1">
            <form>
              <div class="input-group mt-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                </div>
                <input name="username" type="text" class="form-control" placeholder="Nom d'utilisateur">
              </div>
              <div class="input-group mt-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-lock"></i></div>
                </div>
               <input name="mdp" type="password" class="form-control" placeholder="Mot de passe">
              </div>
              <button type="submit" class="btn btn-primary mr-auto mt-3 mb-5">Connexion</button>
            </form> 
          </div>       
      </div>
    </div>
  </div>
</div>
@endsection