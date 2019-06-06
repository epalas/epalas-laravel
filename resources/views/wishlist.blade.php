@extends('template')

@section('titre')
Gazzar - Wishlist
@endsection

@section('contenu')
<div class="container pl-sm-5 pb-3 pr-sm-5  pt-5 bg-white rounded mt-5">
    <h1 class="mb-5">Shop</h1>  
    <div class="row">
      <div class="col-0">
        <img src="img/point.svg" alt="Point du logo" width="25rem" id="point">
      </div>   
      <div class="col-12 col-sm-5 col-md-3 col-lg-3">
        <h2>Wishlist<i class="ml-3 fas fa-heart" aria-hidden="true"></i></h2>
      </div>
      <div class="col-12 col-sm">
        <hr class="titre-point">  
      </div>
    </div> 
    @if (Cart::instance('wishlist')->count() > 0)      
            <div class="mt-4 ml-4">
                 <a href="catalogue"><button  type="button" class="btn btn-primary mr-auto mt-3 mb-5">Revenir au catalogue</button></a>
            
            </div>
            <div>
                    <!-- PRODUCT -->
                    @foreach(Cart::instance('wishlist')->content() as $item)
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <a href="{{ route('produit', ['id' => $item->id ])}}">
                                    <img class="img-fluid" src="/public/img/imgCart/{{$item->id}}.png"  alt="" height="30rem">
                                </a>
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-5">
                            <h4 class="product-name"><strong><a href="{{ route('produit', ['id' => $item->id ])}}">{{$item->name}}</a></strong></h4>
                            <h4 class="text-black">
                                <small>{{$datas[$item->id-1]['description']}}</small> 
                            </h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-5 text-md-right row">
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
                    @else 
                        <p>Pas d'éléments dans la wishlist.</p>
                    @endif
                </div>
</div>
@endsection