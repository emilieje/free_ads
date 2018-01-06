
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
                @guest
                <h1>Vous n'êtes pas connecté !!</h1>
                @else
                <div class="panel-heading"><h1>Mes Messages</h1></div>

                <div class="panel-body message">

                    <a href="message/create" class="btn btn-lg form-control btn-primary"><span class="glyphicon glyphicon-envelope"></span> Envoyer un message</a>
                    

                    @foreach ($mesmessages as $ann)
                    <ul>
                        <li><h3>{{ $ann->id_envoi }}</h3></li>
                        <li><h4>{{ $ann->objet }}</h4></li>
                        <li><p>{{ $ann->content }}</p></li>
                        <li><p>{{ $ann->created_at }}</p></li>
                        <a class="btn btn-info btn-lg" href="{{ route('message.show',$ann->id) }}">Voir le message <i class="glyphicon glyphicon-th-large"></i></a>


                        @if ($ann->lu == 1)
                        <a href="#" class="btn btn-lg btn-success">Vu<span class="glyphicon glyphicon-ok"></span>   </a>
                        @endif
                        
                    </ul>
                    

                    @endforeach
                </div>


                @endguest
                

                <div class="panel-body">

                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
