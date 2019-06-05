@extends('template')

@section('titre')
Gazzar - Catalogue
@endsection

@section('contenu')
<style>
    img{
        width:3rem;
    }
</style>

<div class="container">
    <div class="row mt-5 mb-4 mx-auto">
        <div class="btn-group-justified col-12" role="group" id="filter">

        @if (Request::is('catalogue/rouges'))
        <button type="button" class="btn btn-light active" id="red" ><img src="{{asset('img/pictos/picto_color/red.svg')}}" alt="Rouge"/><br/>Rouges</button>

        @else
        <button type="button" class="btn btn-light bg-white" id="red" ><img src="{{asset('img/pictos/vin.svg')}}" alt="Rouge"/><br/>Rouges</button>
        @endif 

        @if (Request::is('catalogue/blancs'))
        <button type="button" class="btn btn-light active" id="white"><img src="{{asset('img/pictos/picto_color/white.svg')}}" alt="Blanc" /><br/>Blancs</button>

        @else
        <button type="button" class="btn btn-light bg-white" id="white"><img src="{{asset('img/pictos/vin.svg')}}" alt="Blanc" /><br/>Blancs</button>
        @endif 

        @if (Request::is('catalogue/roses'))
        <button type="button" class="btn btn-light active" id="rosy"><img src="{{asset('img/pictos/picto_color/rosy.svg')}}" alt="Rosé"/><br/>Rosés</button>

        @else
        <button type="button" class="btn btn-light bg-white" id="rosy"><img src="{{asset('img/pictos/vin.svg')}}" alt="Rosé"/><br/>Rosés</button>
        @endif 

        @if (Request::is('catalogue/mousseux'))
        <button type="button" class="btn btn-light active" id="mouss"><img src="{{asset('img/pictos/picto_color/champain.svg')}}" alt="Mousseux"/><br/>Mousseux</button>

        @else
        <button type="button" class="btn btn-light bg-white" id="mouss"><img src="{{asset('img/pictos/mousseux.svg')}}" alt="Mousseux"/><br/>Mousseux</button>
        @endif 

        @if (Request::is('catalogue/bios'))
        <button type="button" class="btn btn-light active" id="bio"><img src="{{asset('img/pictos/picto_color/bio-green.svg')}}" alt="Bio"/><br/>Bio</button>

        @else
        <button type="button" class="btn btn-light bg-white" id="bio"><img src="{{asset('img/pictos/bio.svg')}}" alt="Bio"/><br/>Bio</button>
        @endif 

        @if (Request::is('catalogue/primeurs'))
        <button type="button" class="btn btn-light active" id="prim"><img src="{{asset('img/pictos/picto_color/primeur-color.svg')}}" alt="Primeur"/><br/>Primeurs</button>

        @else
        <button type="button" class="btn btn-light bg-white" id="prim"><img src="{{asset('img/pictos/primeur.svg')}}" alt="Primeur"/><br/>Primeurs</button>
        @endif 
        @if (Request::is('promotions'))
        <button type="button" class="btn btn-light bg-white active" id="promo"><img src="{{asset('img/pictos/picto_color/promo-red.svg')}}" alt="Promo"/><br/>Promo</button>
        @else
        <button type="button" class="btn btn-light bg-white" id="promo"><img src="{{asset('img/pictos/promo.svg')}}" alt="Promo"/><br/>Promo</button>
        @endif 
        @if (Request::is('nouveautes'))
        <button type="button" class="btn btn-light bg-white active" id="new"><img src="{{asset('img/pictos/picto_color/new-red.svg')}}" alt="Nouveau"/><br/>Nouveaux</button>
        @else
        <button type="button" class="btn btn-light bg-white" id="new"><img src="{{asset('img/pictos/nouveau.svg')}}" alt="Nouveau"/><br/>Nouveaux</button>
        @endif 
        @if (Request::is('fin'))
        <button type="button" class="btn btn-light bg-white" id="end"><img src="{{asset('img/pictos/picto_color/end-red.svg')}}" alt="Fin de série"/><br/>Fins de série</button>
        @else
        <button type="button" class="btn btn-light bg-white" id="end"><img src="{{asset('img/pictos/fin.svg')}}" alt="Fin de série"/><br/>Fins de série</button>
        @endif 
        </div>   
    </div>
    <div id="row">
    <div class="col-12">
        <div class="btn-group mt-2" role="group">
            <button type="button" class="btn btn-primary" disabled>Pays</button>
            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tous les pays
                </button>

                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <?php /* recherche en BD sur les pays disponibles */?>
                    <a class="dropdown-item" href="#">Suisse</a>
                    <a class="dropdown-item" href="#">Italie</a>
                    <a class="dropdown-item" href="#">Espagne</a>
                </div>
            </div>
        </div>
        <div class="btn-group mt-2" role="group" >
            <button type="button" class="btn btn-primary" disabled>Régions</button>
            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Toutes les Régions
                </button>

                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <?php /* recherche en BD sur les régions disponibles */ ?>
                    <a class="dropdown-item" href="#">Bourgogne</a>
                    <a class="dropdown-item" href="#">Saxe</a>
                    <a class="dropdown-item" href="#">Loire</a>
                </div>
            </div>
        </div>
        <div class="btn-group mt-2" role="group" >
            <button type="button" class="btn btn-primary" disabled>Prix croissant</button>
            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Prix croissant
                </button>

                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <?php /* recharge les articles en ASC ou DESC*/ ?>
                    <a class="dropdown-item" href="#">Prix croissant</a>
                    <a class="dropdown-item" href="#">Prix décroissant</a>
                </div>
            </div>
        </div>
    </div>    
    </div>
    <div id="row">
    <div class="col-10 mt-3">
        <a href="#">Recherche avancée ></a>
    </div>
    </div>
    </div>
</div>


{{-- @yield('carte') <- Ca marche pas mdr --}}
<div class="container">
    <div class="row">
        @foreach($results as $result)
        {{-- Template pour chaque card --}}
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-3">
            <div class="card h-100">
                <div class="card-body p-3">
                    <div class="row" id="carte">
                        <a href="produit/{{$result["id"]}}">
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
                        </a>
                    </div>
                </div>
                <div class="card-header">
                    <div class="row justify-content-between">
                        <p class="ml-2 mt-2 text-primary">
                        
                          @switch($result['notes'][0]['nbrEtoiles'])
                            @case(1)
                            @for ($i = 0; $i < 1; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            @break

                            @case(2)
                            @for ($i = 0; $i < 2; $i++)
                              <i class="fas fa-star"></i>
                            @endfor
                              <i class="far fa-star"></i>
                              <i class="far fa-star"></i>
                              <i class="far fa-star"></i>
                            @break

                            @case(3)
                            @for ($i = 0; $i < 3; $i++)
                              <i class="fas fa-star"></i>
                            @endfor
                              <i class="far fa-star"></i>
                              <i class="far fa-star"></i>
                            @break

                            @case(4)
                            @for ($i = 0; $i < 4; $i++)
                              <i class="fas fa-star"></i>
                            @endfor
                              <i class="far fa-star"></i>
                            @break

                            @case(5)
                            @for ($i = 0; $i < 5; $i++)
                              <i class="fas fa-star"></i>
                            @endfor
                            @break

                            @default
                            @for ($i = 0; $i < 5; $i++)
                              <i class="fas fa-star"></i>
                            @endfor
                          @endswitch
                        </p>
                        <a class="nav-link" href="#"><i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div>
        </div>
@endforeach
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --> <!-- jQuery CDN -->

    <script type='text/javascript'>

    $(document).ready(function(){

    /* Fetch all records
    $('#filtres').click(function(){
	    fetchProducts(0);
    });*/

    // types de vins
    $('#red').click(function(){
        Route::get('/catalogue/{filtre}', ['uses' =>'Catalogue@filtreCatalogue'])
    ->where(['filtre' => 'rouges']);
    });

    $('#white').click(function(){
        Route::get('/catalogue/{filtre}', ['uses' =>'Catalogue@filtreCatalogue'])
    ->where(['filtre' => 'blancs']);
    });

    $('#rosy').click(function(){
        Route::get('/catalogue/{filtre}', ['uses' =>'Catalogue@filtreCatalogue'])
    ->where(['filtre' => 'roses']);
    });

    $('#mouss').click(function(){
        Route::get('/catalogue/{filtre}', ['uses' =>'Catalogue@filtreCatalogue'])
    ->where(['filtre' => 'mousseux']);
    });

    $('#bio').click(function(){
        Route::get('/catalogue/{filtre}', ['uses' =>'Catalogue@filtreCatalogue'])
    ->where(['filtre' => 'bios']);
    });

    $('#prim').click(function(){
        Route::get('/catalogue/{filtre}', ['uses' =>'Catalogue@filtreCatalogue'])
    ->where(['filtre' => 'primeurs']);
    });

    $('#promo').click(function(){
        Route::get('/catalogue/{filtre}', ['uses' =>'Catalogue@filtreCatalogue'])
    ->where(['filtre' => 'promotions']);
    });

    $('#new').click(function(){
        Route::get('/catalogue/{filtre}', ['uses' =>'Catalogue@filtreCatalogue'])
    ->where(['filtre' => 'nouveautes']);
    });

    $('#end').click(function(){
        Route::get('/catalogue/{filtre}', ['uses' =>'Catalogue@filtreCatalogue'])
    ->where(['filtre' => 'fin']);
    });

});

     function fetchProducts(id){
       $.ajax({
         url: 'getUsers/'+id,
         type: 'get',
         dataType: 'json',
         success: function(response){

           var len = 0;
           $('#userTable tbody').empty(); // Empty <tbody>
           if(response['data'] != null){
             len = response['data'].length;
           }

           if(len > 0){
             for(var i=0; i<len; i++){
               var id = response['data'][i].id;
               var username = response['data'][i].username;
               var name = response['data'][i].name;
               var email = response['data'][i].email;

               var tr_str = "<tr>" +
                   "<td align='center'>" + (i+1) + "</td>" +
                   "<td align='center'>" + username + "</td>" +
                   "<td align='center'>" + name + "</td>" +
                   "<td align='center'>" + email + "</td>" +
               "</tr>";

               $("#userTable tbody").append(tr_str);
             }
           }else if(response['data'] != null){
              var tr_str = "<tr>" +
                  "<td align='center'>1</td>" +
                  "<td align='center'>" + response['data'].username + "</td>" + 
                  "<td align='center'>" + response['data'].name + "</td>" +
                  "<td align='center'>" + response['data'].email + "</td>" +
              "</tr>";

              $("#userTable tbody").append(tr_str);
           }else{
              var tr_str = "<tr>" +
                  "<td align='center' colspan='4'>No record found.</td>" +
              "</tr>";

              $("#userTable tbody").append(tr_str);
           }

         }
       });
     }
     </script>
@endsection

