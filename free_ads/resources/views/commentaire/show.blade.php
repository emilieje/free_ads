
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                @guest
                <h1>Vous n'êtes pas connecté !!</h1>
                @else
                <div class="panel-heading"><h1>Les commentaires</h1></div>

                <div class="panel-body">


                    @foreach ($comment as $a)
                    
                    <h3>{{ $a->id_posteur }}</h3>
                    <p>{{ $a->content }}</p>



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
