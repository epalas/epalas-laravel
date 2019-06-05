@extends('template')

@section('titre')
Gazzar - Panier
@endsection

@section('contenu')
<div class="container pl-5 pb-3 pr-5  pt-5 bg-white rounded mt-5">
    <h1 class="mb-5">Shop</h1>  
    <div class="row">
      <div class="col-0">
        <img src="/public/img/point.svg" alt="Point du logo" width="25rem" id="point">
      </div>   
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <h2>Votre panier <i class="ml-3 fa fa-shopping-cart" aria-hidden="true"></i></h2>
      </div>
      <div class="col-12 col-sm">
        <hr class="titre-point">  
      </div>
    </div> 
    @if (Cart::count() > 0)
      <p>{{Cart::count()}} éléments dans votre panier</p>
      
            <div class="mt-4 ml-4">
                 <a href="catalogue"><button  type="button" class="btn btn-primary mr-auto mt-3 mb-5">Revenir au catalogue</button></a>
            
            </div>
            <div>
                    <!-- PRODUCT -->
                    @foreach(Cart::content() as $item)
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <img class="img-responsive" src="" alt="" width="120" height="80">
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-5">
                            <h4 class="product-name"><strong>{{$item->name}}</strong></h4>
                            <h4 class="text-black">
                                <small>{{$datas[$item->id-1]['description']}}</small> 
                            </h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-5 text-md-right row">
                            <div class="col-3 col-sm-3 col-md-6 text-md-right">
                                <h6><strong>{{$item->price}}.- <span class="text-muted">x</span></strong></h6>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">
                                <div class="quantity">
                                    <button class="btn-primary">-</button>
                                    <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty"
                                           size="4">
                                    <button class="btn-primary">+</button>
                                </div>
                            </div>
                            <div class="col-2 col-sm-2 col-md-2 text-right">
                                <form action="{{route('cart.destroy', $item->rowId)}}" method="POST">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-outline-danger btn-xs">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>          
                                </form>

                            </div>
                        </div>
                    </div>
                    <hr>
                    @endforeach

                    <!-- END PRODUCT -->
                    <div class="row justify-content-between">   
                         <div class="pl-3">
                             <a href="" class="btn btn-outline-primary pull-right">
                                    Mettre à jour le panier</a>
                        </div>
                        <div>
                                <a href="" class="btn btn-success pull-right">Commander</a>
                                <div class="pull-right" style="margin: 5px">
                                    Total: <b>50.00 CHF</b>
                                </div>
                        </div>
                    </div>
                    @else 
                        <p>Pas d'éléments dans le panier.</p>
                    @endif
                </div>
</div>
@endsection