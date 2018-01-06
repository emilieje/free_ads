
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
                <div class="panel-heading"><h2>Message de {{ $message->id_envoi }}</h2></div>

                <h3>{{ $message->objet }}</h3>
                <p>{{ $message->content }}</p>

                <p>{{ $message->created_at }}</p>
                <a href="create" class="btn btn-lg form-control btn-primary"><span class="glyphicon glyphicon-envelope"></span> Répondre</a>







            </div>
        </div>
    </div>
</div>
</div>
@endsection