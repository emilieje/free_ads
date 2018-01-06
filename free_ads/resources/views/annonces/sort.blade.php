@extends('layouts.app')

@section('content')





<div class="container" style="text-align: center;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Annonces</h1></div>
                <div class="panel-body">

                    <div>
                        <form method="get" action="{{ url('search') }}">
                            <div>
                                <input type="text" class="form-control" name="search"
                                placeholder="Search articles">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-default">Ok
                                </button>
                            </div>

                        </form>

                        <a class="navbar-brand"  href="{{ url('unsort') }}">Annonces Anciennes</a>

                        <a class="navbar-brand"  href="{{ url('minprice') }}">Prix -</a>

                        <a class="navbar-brand"  href="{{ url('maxprice') }}">Prix +</a>

                        <form method="get" action="{{ url('choose') }}">


                            <select name="catégorie">
                                <option>Electroménager</option>
                                <option>Voiture</option>
                                <option>Habitation</option>
                                <option>Vetement</option>
                                <option>Ameublement</option>
                                <option>Animaux</option>
                                <option>Multimédia</option>
                                <option>Service</option>
                                <option>Sport</option>
                                <option>Bricolage</option>
                                <option>Emploi</option>
                                <option>Autres</option>
                            </select>




                            <button type="submit" class="btn btn-lg">OK
                            </button>

                        </form>
                    </div>
                </div>
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
