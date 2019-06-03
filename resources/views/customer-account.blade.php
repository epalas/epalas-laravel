@extends('template')

@section('titre')
Gazzar - Customer Account
@endsection

@section('contenu')
<div class="container">
  <div class="row">
    <div class="col-2 ml-5 mt-5">
      <img src="/public/img/john-doe.jpg" alt="Photo d'un homme d'un charisme a en faire rougir plus d'une" class="img-fluid rounded-circle">
    </div>
    <div id="align-user"><h1>Bonjour John Doe</h1></div>
  </div>
  {{-- DONNES PERSO--}}
  <div class="row rounded col-12 bg-white pt-3 mt-5">
    <div class="col-0">
        <img src="/public/img/point.svg" alt="Point du logo" width="25rem" id="point">
    </div>   
    <div class="col col-sm-3">
        <h2>Données personelles</h2>
    </div>
    <div class="col-12 col-sm-8">
        <hr class="titre-point">  
    </div>
     {{-- Données a changer par des variables--}}
       
   
      <div class="col-sm-6 ml-5 mt-5">
        <p class="bold">John Doe</p> 
      </div>
      <div class="col-5 mt-5">
        <p>john.doe@gmail.com</p> 
      </div>

      <div class="col-sm-6 ml-5 mt-5">
        <p class="bold">Adresse de facturation</p>
        <p>Avenue du Chêne 3<br>
           1000 Lausanne<br>
           Suisse</p> 
        <p><a href="#">Changer mon mot de passe ></a></p>
      </div>
      <div class="col-5 mt-5">
        <p class="bold">Adresse de livraison</p>
        <p>Avenue du Chêne 3<br>
           1000 Lausanne<br>
           Suisse</p>
        <p><a href="#">Modifier mes données personelles ></a></p>        
      </div>
  
  </div>

  {{-- COMMANDES--}}
  <div class="row rounded col-12 bg-white pt-3 mt-5">
    <div class="col-0">
        <img src="/public/img/point.svg" alt="Point du logo" width="25rem" id="point">
    </div>   
    <div class="col col-sm-3">
        <h2>Mes commandes</h2>
    </div>
    <div class="col-12 col-sm-8">
        <hr class="titre-point">  
    </div>
     {{-- Données a changer par des variables--}}
       
   
      <div class="col-4 ml-5 mt-5">
        <p class="bold">En préparation</p> 
      </div>
      <div class="col-3  mt-5">
        <p>04.08.2018<br>
           8 Articles</p> 
      </div>
      <div class="col-4 mt-5">
        <p>ref.00002093409238</p> 
      </div> 

            <div class="col-4 ml-5 mt-5">
        <p class="bold text-danger">Attente de stock</p> 
      </div>
      <div class="col-3  mt-5">
        <p>16.06.2018<br>
           15 Articles</p> 
      </div>
      <div class="col-4 mt-5">
        <p>ref.00009827493874</p> 
      </div> 

            <div class="col-4 ml-5 mt-5">
        <p class="bold text-success">Expédiée</p> 
      </div>
      <div class="col-3  mt-5">
        <p>02.04.2018<br>
           3 Articles</p> 
      </div>
      <div class="col-4 mt-5">
        <p>ref.00002343984934</p> 
      </div>     
  
  </div>
</div>
@endsection