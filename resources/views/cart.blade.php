@extends('template')

@section('titre')
Gazzar - Panier
@endsection

@section('contenu')
<div class="container pl-sm-5 pb-3 pr-sm-5  pt-5 bg-white rounded mt-5">
    <h1 class="mb-5">Shop</h1>  
    <div class="row">
      <div class="col-0">
        <img src="img/point.svg" alt="Point du logo" width="25rem" id="point">
      </div>   
      <div class="col-10 col-sm-6 col-md-4 col-lg-3">
        <h2>Votre panier <i class="ml-3 fa fa-shopping-cart" aria-hidden="true"></i></h2>
      </div>
      <div class="col-12 col-sm">
        <hr class="titre-point">  
      </div>
    </div> 
    @if (Cart::count() > 0)
      
      
            <div class="mt-4 ml-4">
                 <a href="catalogue"><button  type="button" class="btn btn-primary mr-auto mt-3 mb-5">Revenir au catalogue</button></a>
                 <p>{{Cart::count()}} éléments dans votre panier</p>
                
            
            </div>
             <hr>
            <div>
                    <!-- PRODUCT -->
                    @foreach(Cart::content() as $item)
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <a href="{{ route('produit', ['id' => $item->id ])}}">
                                    <img class="img-fluid" src="img/imgCart/{{$item->id}}.png"  alt="" height="30rem">
                                </a>
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-8">
                            <h4 class="mt-md-5 product-name"><strong><a href="{{ route('produit', ['id' => $item->id ])}}">{{$item->name}}</a></strong></h4>
                            <h4>
                                <small class="text-dark">{{$datas[$item->id-1]['description']}}</small> 
                                <p>{{$item->qty}} x {{$item->price}}.-</p>
                                <p class="text-right">Sous-total : {{$item->qty * $item->price}} .-</p>
                            </h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-2 text-md-right row">                        
                                <form class="col-12 text-center text-sm-right col-sm-2 col-md-2" action="{{route('cart.destroy', $item->rowId)}}" method="POST">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button type="submit" class=" mt-md-5 btn btn-outline-danger btn-xs">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>          
                                </form>
                        </div>
                    </div>
                    <hr>
                    @endforeach

                    <!-- END PRODUCT -->
                    <div class="row justify-content-between text-center">   
                         <div class="mt-2 ml-4">
                            <p>{{Cart::count()}} éléments dans votre panier</p>
                            <a href="catalogue"><button  type="button" class="btn btn-primary mr-auto mt-3 mb-5">Revenir au catalogue</button></a>
                         </div>


                         <div>
                                <div class=" mr-sm-5 text-right pull-right" style="margin: 5px">
                                    Total: <b>{{Cart::subtotal()}} CHF</b><br>
                                    Total (TVA 7,7%): <b>{{Cart::total()}} CHF</b>
                                </div>
                                @if(Auth::check())
                                <div class="text-right mr-sm-5 mt-sm-3">
                                 <a href="{{ route('recap.index') }}" class="btn btn-success">Commander</a>
                                </div>
                                @else
                                <div class="text-right mr-sm-5 mt-sm-3">
                                 <a href="{{ route('login') }}" class="btn btn-success">Commander</a>
                                </div>
                                @endif
                         </div>
                            
                    </div>

            </div>
                    @else 
                        <p>Pas d'éléments dans le panier.</p>
                    @endif
                </div>
</div>
@endsection
<script>
        (function(){
            const classname = document.querySelectorAll('.quantity')

            Array.from(classname).forEach(function(element) {
                element.addEventListener('change', function(){
                    alert('change');
                })
            })
        })();
</script>

