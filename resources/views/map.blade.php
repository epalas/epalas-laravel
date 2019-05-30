@extends('template')

@section('titre')
Gazzar - Contact
@endsection


@section('contenu')
<div class="container">
  <div class="row">
    <div class="col-12">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2744.762195969191!2d6.555731315570414!3d46.532607369537956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c31173a0301e1%3A0x559c04025ad5e74c!2sElie+Gazzar+S.A.!5e0!3m2!1sfr!2sch!4v1559222027030!5m2!1sfr!2sch" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-6">
      <div class="text-primary">
        <i class="fas fa-map-marker-alt"></i>
      </div>
      <p>Elie Gazzar S.A.<br>
        Chemin du Dévent<br>
        1024 Ecublens<br>
        Suisse
      </p>
      <div class="text-primary">
          <i class="fas fa-phone"></i>
      </div>
      
      <p>
        021 691 8671
      </p>  
      
      <div class="text-primary">
      <i class="fas fa-envelope"></i>
     </div>
      <p><a href="mailto:elie@gazzar.ch">elie@gazzar.ch</a></p>

    </div>
    <div class="col-6">
      <div class="text-primary">
        <i class="far fa-clock"></i>
     </div>
     
      <p>Horaire<br>
        lundi au vendredi<br>
        07:30 à 12:00<br>
        14:00 à 17h30
      </p>
    </div>
    
  </div>
</div>




@endsection