




@extends('template')

@section('titre')
Gazzar - Inscription
@endsection

@section('contenu')
<div class="container">
  <div class="row">
    <div class="space bg-white col-12 col-sm-8 offset-sm-2 rounded text-center">
      <p class="mt-2">
        <a href="login">Vous avez déjà un compte ? ></a>
      </p>
      <h1 class="mt-3">Création d'un compte</h1>
      <hr class="hr-titre">
          
          {{-- formulaire d'inscription--}}
          <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 mt-1">
            <form method="POST" action="{{ route('register') }}">
        		{{ csrf_field() }}

			<div class="{{ $errors->has('name') ? ' has-error' : '' }}">
			<input name="prenom" type="text" class="form-control mt-2" value="{{ old('prenom') }}" placeholder="Prénom">
			@if ($errors->has('prenom'))
			<span class="help-block">
			<strong>{{ $errors->first('prenom') }}</strong>
			</span>
			@endif
			</div>
			<div class="{{ $errors->has('name') ? ' has-error' : '' }}">
			<input name="nom" type="text" class="form-control mt-2" value="{{ old('nom') }}" placeholder="Nom">
			@if ($errors->has('nom'))
			<span class="help-block">
			<strong>{{ $errors->first('nom') }}</strong>
			</span>
			@endif
			</div>
			<div class="{{ $errors->has('name') ? ' has-error' : '' }}">
          	<input name="email" type="email" class="form-control mt-2" value="{{ old('email') }}" placeholder="Adresse E-mail">
			@if ($errors->has('email'))
			<span class="help-block">
			<strong>{{ $errors->first('email') }}</strong>
			</span>
			@endif
			</div>
			<div class="{{ $errors->has('name') ? ' has-error' : '' }}">
          	<input name="adresse" type="text" class="form-control mt-2" value="{{ old('adresse') }}" placeholder="Rue">
			@if ($errors->has('adresse'))
			<span class="help-block">
			<strong>{{ $errors->first('adresse') }}</strong>
			</span>
			@endif
			</div>
			<div class="{{ $errors->has('name') ? ' has-error' : '' }}">
          	<input name="cp" type="number" class="form-control mt-2" value="{{ old('cp') }}" placeholder="Code Postal">
			@if ($errors->has('cp'))
			<span class="help-block">
			<strong>{{ $errors->first('cp') }}</strong>
			</span>
			@endif
			</div>
			<div class="{{ $errors->has('name') ? ' has-error' : '' }}">
			<input name="ville" type="text" class="form-control mt-2" value="{{ old('ville') }}" placeholder="Ville">
			@if ($errors->has('ville'))
			<span class="help-block">
			<strong>{{ $errors->first('ville') }}</strong>
			</span>
			@endif
			</div>
			<div class="{{ $errors->has('name') ? ' has-error' : '' }}">
          	<input name="pays" type="text" class="form-control mt-2" value="{{ old('pays') }}" placeholder="Pays">
			@if ($errors->has('pays'))
			<span class="help-block">
			<strong>{{ $errors->first('pays') }}</strong>
			</span>
			@endif
			</div>
			<div class="{{ $errors->has('name') ? ' has-error' : '' }}">
 			<input name="mdp" type="password" class="form-control mt-2" value="{{ old('mdp') }}" placeholder="Mot de passe">
			@if ($errors->has('mdp'))
			<span class="help-block">
			<strong>{{ $errors->first('mdp') }}</strong>
			</span>
			@endif
			</div>
			<input name="mdp_confirmation" type="password" class="form-control mt-2" placeholder="confirmation du mot de passe">
              
              


              

             



              <button type="submit" class="btn btn-primary mr-auto mt-3 mb-5">Créer un compte</button>
            </form> 
          </div>       
      </div>
    </div>
  </div>
</div>
@endsection