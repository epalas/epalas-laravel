@extends('template')

@section('titre')
Gazzar - Nos valeurs
@endsection

@section('contenu')
<div class="container mt-5">
  <h1 class="mb-5">Nos Valeurs</h1>  
    <div class="row">
      <div class="col-0">
        <img src="/public/img/point.svg" alt="Point du logo" width="25rem" id="point">
      </div>   
      <div class="col col-sm-4 col-md-3 col-lg-2">
        <h2>Gazzard S.A.</h2>
      </div>
      <div class="col-12 col-sm">
        <hr class="titre-point">  
      </div>
    </div>     
    <div class="row mt-2">
      <div class="col-12 col-sm-7">
        <img src="/public/img/elie-gazzar.jpg" alt="Photo de Elie Gazzard et un amis" class="img-fluid">
      </div>
      <div class="col-12 col-sm-5">
        <p>
          Soucieuse de qualité et leader en termes de prix, <span class="text-primary">la maison de vins Gazzar</span> met à votre disposition un savoir-faire acquis sur plusieurs générations. Depuis 1973, l’entreprise familiale travaille dans l’exigence renouvelée du détail qui fait l’art d’un grand vin. Parmi l’étendue considérable de l’offre, notre tâche est de sélectionner pour vous des vins de légende, mais également de rechercher des vins hors des sentiers battus. Nous favorisons ainsi des producteurs artisanaux, respectueux de la nature et des écosystèmes et partageons avec eux cette passion des grands vins. Nous prenons le soin de déguster tous les vins que nous vous proposons, garantissant ainsi l’excellence et un conseil personnel.
        </p>
        <p class="bold mt-4">
          Nous sommes ouverts pour vous accueillir du 
          lundi au vendredi de <span class="text-primary">7h30 à 12h00</span> et de <span class="text-primary">14h00 à 17h30.</span>
        </p>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-12">
        <p>
          Du fait de la dimension familiale de notre entreprise, nous sommes en mesure de limiter nos coûts et de répercuter ces économies réalisées sur nos tarifs, faisant ainsi bénéficier nos clients. De la sorte, nous proposons l’achat de Bordeaux en primeurs au meilleur prix. Etant donné que nous ne vendons pas de vin au détail, notre clientèle accède à des tarifs de grossistes, en vigueur dès l’achat de 12 bouteilles. C’est cet héritage que la maison Gazzar souhaite partager, en vous ouvrant l’univers des vins à des prix privilégiés.
        </p>
      </div>
    </div>                
</div>
@endsection