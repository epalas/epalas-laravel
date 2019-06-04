@extends('filtres')

@section('carte')

<style>
img{width: 40px;}
.card-body{columns:2 200 px;}
</style>
<div class="card" style="width: 16rem;">

  <div class="card-body p-3">

    <div class="row" id="carte">
      <div class="container">
        <div class="row">
          <div class="col-3">
            <img src="{{$result["photos"][0]['url']}}" alt="{{$result["photos"][0]['alt']}}">
          </div>
          <div class="col-9">
            <h4 class="card-title">{{$result["nom"]}}</h4>
            <p class="card-text">
            <p>{{$result["prod"]["region"]}} - {{$result["prod"]["pays"]}}</p>
            <p>{{$result["prod"]["nom"]}}</p>
            <p>{{$result["cont"][0]["volume"]}}L / <span class="annee">{{$result["annee"]}}</span></p>
            <span class="prix"><b>{{$result["prixprods"][0]["prix"]}}</b></span> <span>CHF</span>
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="card-header">
    <div class="row justify-content-between">
      <a class="nav-link" href="#">
{{--
@switch($data->nbrEtoiles)
		@case(1)
			@for ($i = 0; $i < 1; $i++)
				<i class="far fa-star"></i>
			@endfor
    @break

    @case(2)
			@for ($i = 0; $i < 2; $i++)
				<i class="far fa-star"></i>
			@endfor
		@break
				
		@case(3)
			@for ($i = 0; $i < 3; $i++)
				<i class="far fa-star"></i>
			@endfor
		@break
				
		@case(4)
			@for ($i = 0; $i < 4; $i++)
				<i class="far fa-star"></i>
			@endfor
		@break
				
		@case(5)
			@for ($i = 0; $i < 5; $i++)
				<i class="far fa-star"></i>
			@endfor
		@break		

    @default
			@for ($i = 0; $i < 5; $i++)
				<i class="far fa-star"></i>
			@endfor
@endswitch
--}}

      </a> <a class="nav-link" href="#"><i class="far fa-heart"></i></a>
    </div>
  </div>

</div>
@endsection