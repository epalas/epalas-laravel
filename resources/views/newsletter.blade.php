@extends('template')

@section('titre')
Gazzar - Newsletter
@endsection

@section('contenu')
<div class="container">
  <div class="row">
    <div class="space bg-white col-8 offset-2 rounded text-center">
      <h1 class="mt-5">Newsletter</h1>
      <hr class="hr-titre">
        <h5 class="text-uppercase mt-5 mb-5 pb-3">Ne ratez aucune nouveauté !</h5>
          <p>Afin de rester informé, inscrivez votre e-mail ci-dessous</p>
          
          {{-- formulaire pour envoie de l'adresse mail--}}
          <div class="row">
            <div class="col-6 offset-3 mt-1">
            <form action="{{route('confNews')}}" method="POST">
              {{csrf_field()}}
              <input name="newsletter" type="email" class="form-control" placeholder="Adresse E-mail">

              <button type="submit" class="btn btn-primary mr-auto mt-3 mb-5">S'inscrire</button>
            </form> 
          </div>       
      </div>
    </div>
  </div>
</div>
@endsection