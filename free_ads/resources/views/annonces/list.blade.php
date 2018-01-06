
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Mes Annonces</h1></div>

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
                    <li><td><a href="{{action('AnnonceController@edit', $ann->id)}}" class="btn btn-warning">Edit</a></td></li>
                    <li><form action="{{action('AnnonceController@destroy', $ann->id)}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form></li>

                </ul>

                @endforeach
            </div>
            <div class="panel-body">
                <a href="{{ url('annonce/create') }}" class="btn btn-block btn-lg btn-success"><span class="glyphicon glyphicon-pencil"></span> Create</a>

            </div>

            <div class="panel-body">




            </div>
        </div>
    </div>
</div>
</div>
@endsection