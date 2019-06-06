@extends('template-blog')

  @section('journal')
  @for ($i = 0; $i < 5; $i++)
  <div class="row mt-5">
    <div class="col-sm-3">
      <img src="img/blog-exemple.jpg" alt="photo d'exemple d'article de blog" class="img-fluid">
    </div>
    <div class="col-sm-9">
      <h3 class="titres-articles">Article exemple {{ $i }}</h3>
      <p>02.03.2018</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat </p>  
    </div>
  </div>
  <hr>
  @endfor
@endsection
