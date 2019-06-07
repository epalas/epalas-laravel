@extends('template')

@section('titre')
Gazzar - Connexion
@endsection



@section('contenu')
<div class="container">
  <div class="row">
    <div class="space bg-white col-12 col-sm-8 offset-sm-2 rounded text-center">
     
    @if ( substr(url()->previous(),-4) == 'cart' && Auth::check() === false)
     <div class="bg-secondary text-white rounded col-auto pt-3 pb-1 text-center">
        <p><i class="fas fa-exclamation-triangle"></i> Vous devez être connecté pour valider votre commande</p>
    </div>
    @endif
    

      <p class="mt-2">
        <a href="register">Vous n'avez pas encore de compte ? ></a>
      </p>
      <h1 class="mt-3">Se connecter</h1>
      <hr class="hr-titre">
          
          {{-- formulaire de connexion--}}
          <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 mt-1">
            <form method="POST" action="{{ route('login') }}">
                 {{ csrf_field() }}
              <div class="input-group mt-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                </div>
               <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div class="input-group mt-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-lock"></i></div>
                </div>
                <input id="mdp" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('mdp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <button type="submit" class="btn btn-primary mr-auto mt-3 mb-5">Connexion</button>
            </form> 
          </div>       
      </div>
    </div>
  </div>
</div>
@endsection