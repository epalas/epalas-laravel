@extends('template')

@section('titre')
Gazzar - Customer Account
@endsection

@section('contenu')
<div class="container">
  <div class="row">
    <div class="col-6 col-sm-4 col-md-2 ml-5 mt-5">
      <form action="#" class="form-control-file">
      <div class="cont">
      <img src="{{ $x['urlPhoto'] }}" alt="Photo d'un homme d'un charisme a en faire rougir plus d'une" class="img-fluid border rounded-circle">
      <div class="overlay rounded-circle">
         <a href=""><i class="fas fa-camera-retro fa-2x text-white text"></i></a>
      </div>
      </div>
    </form>
    </div>

    
    <div class="col-12 col-sm-8" id="align-user"><h1>Bonjour {{ $x['prenom'] }} {{ $x['nom'] }} </h1></div>
  </div>
  {{-- DONNES PERSO--}}
  <div class="row rounded bg-white pt-3 mt-5">
    <div class="col-0">
        <img src="img/point.svg" alt="Point du logo" width="25rem" id="point">
    </div>   
    <div class="col-10 col-sm-7 col-md-4">
        <h2>Données personelles</h2>
    </div>
    <div class="col-12 col-sm-4 col-md-7">
        <hr class="titre-point">  
    </div>
     {{-- Données a changer par des variables--}}
      <div class="col-sm-6 ml-sm-5 mt-sm-5">
        <p class="bold">{{ $x['prenom'] }} {{ $x['nom'] }}</p> 
      </div>
      <div class="col-10 col-sm-10 col-md-3 ml-sm-5 ml-md-0 mt-md-5">
        <p>{{ $x['email'] }}</p> 
      </div>

      <div class="col-sm-6 ml-sm-5 mt-sm-5">
        <p class="bold">Adresse de facturation</p>
        <p>{{ $x['adresse'] }}<br>
           {{ $x['cp'] }} {{ $x['ville'] }}<br>
           {{ $x['pays'] }}</p> 
        <p><a href="{{route('password')}}">Changer mon mot de passe ></a></p>
      </div>
      <div class="col-12 col-sm-5 ml-sm-5 ml-md-0 mt-5">
        <p class="bold">Adresse de livraison</p>
        <p>{{ $x['adresse'] }}<br>
           {{ $x['cp'] }} {{ $x['ville'] }}<br>
           {{ $x['pays'] }}</p> 
        <p><a href="#">Modifier mes données personelles ></a></p>        
      </div>
  
  </div>

  {{-- COMMANDES--}}
  <div class="row rounded bg-white pt-3 mt-5">
        <div class="col-0">
            <img src="img/point.svg" alt="Point du logo" width="25rem" id="point">
        </div>   
        <div class="col-10 col-sm-5 col-md-4">
            <h2>Mes commandes</h2>
        </div>
        <div class="col-12 col-sm-6 col-lg-7">
            <hr class="titre-point">  
        </div>
     {{-- Données a changer par des variables--}}
       
   
      <div class="col-4 ml-md-5 mt-sm-5">
        <p class="bold">En préparation</p> 
      </div>
      <div class="col-3  mt-sm-5">
        <p>04.08.2018<br>
           8 Articles</p> 
      </div>
      <div class="col-4 mt-sm-5">
        <p>ref.00002093409238</p> 
      </div>


            <div class="col-4 ml-md-5 mt-sm-5">
        <p class="bold text-danger">Attente de stock</p> 
      </div>
      <div class="col-3 mt-sm-5">
        <p>16.06.2018<br>
           15 Articles</p> 
      </div>
      <div class="col-4 mt-sm-5">
        <p>ref.00009827493874</p> 
      </div> 
      <hr>
     
        <div class="col-4 ml-md-5 mt-sm-5">
            <p class="bold text-success">Expédiée</p> 
        </div>
        <div class="col-3  mt-sm-5">
          <p>02.04.2018<br>
             3 Articles</p> 
        </div>
        <div class="col-4 mt-sm-5">
          <p>ref.00002343984934</p> 
           
        </div> 

  
  </div>
</div>
@endsection