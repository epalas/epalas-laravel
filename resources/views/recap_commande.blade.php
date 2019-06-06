@extends('template')

@section('titre')
Gazzar - Recap Commande
@endsection

@section('contenu')
<div class="container pl-5 pb-3 pr-5  pt-5 bg-white rounded mt-5">
    <h1 class="mb-5">Shop</h1> 

	<div class="row mb-5">
	      <div class="col-0">
	        <img src="/public/img/point.svg" alt="Point du logo" width="25rem" id="point">
	      </div>   
	      <div class="col-10 col-sm-7 col-md-5 col-lg-3">
	        <h2>Moyens de paiement</h2>
	      </div>
	      <div class="col-12 col-sm">
	        <hr class="titre-point">  
	      </div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			 <input type="checkbox" id="masterCard" name="subscribe" value="masterCard">
    		 <label for="subscribeNews">Master Card</label>

    		 <input type="checkbox" id="Visa" name="subscribe" value="masterCard">
    		 <label for="subscribeNews">Visa</label>

    		  <input type="checkbox" id="postCard" name="subscribe" value="masterCard">
    		 <label for="subscribeNews">PostCard</label>

    		  <input type="checkbox" id="facture" name="subscribe" value="masterCard">
    		 <label for="subscribeNews">Facture</label>
  		</div>
    </div>
		
		
	


    <div>
 	    <div class="row mb-5">
	      <div class="col-0">
	        <img src="/public/img/point.svg" alt="Point du logo" width="25rem" id="point">
	      </div>   
	      <div class="col-10 col-sm-3 col-md-2 col-lg-2">
	        <h2>Adresses</h2>
	      </div>
	      <div class="col-12 col-sm">
	        <hr class="titre-point">  
	      </div>
	    </div>
	    <div class="row">

		    <div class="col-sm-6">
		       <p class="bold">Adresse de facturation</p>
	           <p>Avenue du Chêne 3<br>
	           1000 Lausanne<br>
	           Suisse</p> 
	           <p><a href="#">Changer mon adresse de facturation ></a></p>  
	        </div>

	        <div class="col-sm-6">
			  <button data-toggle="collapse" data-target="#form-livraison" class="btn btn-primary mt-2" type="submit">Adresse de livraison différente</button>
			
		        <form class="collapse" id="form-livraison"class="col-sm-6">
				  <input name="rue" type="text" class="form-control mt-2" placeholder="Rue">
	              <input name="cp" type="number" class="form-control mt-2" placeholder="Code Postal">
	              <input name="ville" type="text" class="form-control mt-2" placeholder="Ville">
	              <input name="pays" type="text" class="form-control mt-2" placeholder="Pays">
				  <div>
				    <button class="btn btn-primary mt-2" type="submit">Enregistrer</button>
				  </div>
				</form>
			</div>


        </div>   	

    	
    </div> 
    


    <div>
	    <div class="row mb-5 mt-5">
	      <div class="col-0">
	        <img src="/public/img/point.svg" alt="Point du logo" width="25rem" id="point">
	      </div>   
	      <div class="col-10 col-sm-9 col-md-6 col-lg-5">
	        <h2>Récapitulatif de la commande</h2>
	      </div>
	      <div class="col-12 col-sm">
	        <hr class="titre-point">  
	      </div>
	    </div>
	 	@foreach(Cart::content() as $item)
	    <div class="row">
	      <div class="col-sm-4 text-center">	
	    	<h4>{{$item->name}}</h4>
	    	<h4>{{$datas[$item->id-1]['prod']['region']}} - {{$datas[$item->id-1]['prod']['pays']}}</h4>
	    	<p>{{$datas[$item->id-1]['titre']}}</p>
	      </div>

	      <div class="col-sm-4 text-center">	
	    	<p>{{$item->qty}} articles</p>
	      </div>

	      <div class="col-sm-4 text-center">	
	    	<p>{{$item->qty * $item->price}} .-</p>
	      </div>	
	    </div>
	    <hr>
	    @endforeach

	    <div class="row">
	    	<div class="col-sm-12 text-right">	
	    	<h6>TOTAl hors taxe : {{Cart::subtotal()}}</h6>
	    	<h4>TOTAL CHF : {{Cart::total()}}</h4>
	      </div>
	    </div>
    </div>
</div>    
@endsection