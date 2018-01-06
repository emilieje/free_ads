@extends('layouts.app')

@section('content')





<div class="container" style="text-align: center;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Annonces</h1></div>
                <div class="panel-body">

                    @if(count($annonce) != 0)

                    @foreach($annonce as $a)
                    <div>
                       <div>
                          <h2>{{ $a->titre }}</h2>
                      </div>
                      
                      <p>Description: {{ $a->description }}</p>
                      <h4>{{ $a->prix }} $</h4>
                      <img src="{{ $a->image }}" style="max-width: 90%;">
                      <p>{{ $a->created_at }}</p>

                      @endforeach

                      @else 

                      <h1>AUCUN RESULTAT</h1>
                      @endif

                      
                      
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endsection
