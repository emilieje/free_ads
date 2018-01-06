
@extends('layouts.app')
<style type="text/css">
	img {
        max-width: 100%;
        min-width: 100%;

    }
    .img {
      text-align: center;
  }

  ul {
      list-style: none;
      text-align: center;
      border-bottom: solid 1px black;
  }

  h3 {
      font-weight: bold !important;
      text-transform: uppercase;
      
  }

  .price {
      font-weight: bold;
      font-size: 10em;
  }

  h1 {
      text-align: center;
  }
</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Mon panier</h1></div>

                <div class="panel-body">
                   

                  @foreach ($annonce as $ann)
                  <ul>
                     <li><h3>{{ $ann->titre }}</h3></li>
                     <li><p>{{ $ann->description }}</p></li>
                     <div class="img">
                        <li><img src="{{ $ann->image }}"></li>
                        <li><img src="{{ $ann->image2 }}"></li>
                        <li><img src="{{ $ann->image3 }}"></li>
                    </div>
                    <li><p class="price">{{ $ann->prix }} $</p></li>
                    
                </ul>

                @endforeach
            </div>
            <div class="panel-body">
               
                <p>? prix</p>
                
            </div>

            <div class="panel-body">

                
                
                
            </div>
        </div>
    </div>
</div>
</div>
@endsection