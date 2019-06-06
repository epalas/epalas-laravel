@extends('template-presse')

  @section('journal')
  @for ($i = 0; $i < 5; $i++)
  <div class="row mt-5">
    <div class="col-sm-3">
      <img src="img/journal-exemple.jpg" alt="photo d'exemple d'article de journal" class="img-fluid">
    </div>
    <div class="col-sm-9">
      <h3 class="titres-articles">Vins de bourgognes: un art qui se transmet {{ $i }}</h3>
      <p>02.03.2018</p>
      <button type="submit" class="btn btn-primary mr-auto mt-1 mb-5">Voir</button>  
    </div>
  </div>
  <hr>
  @endfor
@endsection

