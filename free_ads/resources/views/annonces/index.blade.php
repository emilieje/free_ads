
@extends('layouts.app')


@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                @guest
                <h1>Vous n'êtes pas connecté !!</h1>
                @else



                
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

                        <a class="navbar-brand"  href="{{ url('sort') }}">Annonces Récentes</a>

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
                    

                    @foreach ($annonce as $ann)
                    <ul>
                       <li><h3>{{$ann['titre']}}</h3></li>
                       <li><p>{{$ann['description']}}</p></li>
                       <div class="img">
                        <li><img src="{{$ann['image']}}"></li>
                        <li><img src="{{$ann['image2']}}"></li>
                        <li><img src="{{$ann['image3']}}"></li>
                    </div>
                    <li><p class="price">{{$ann['prix']}} $</p></li>

                    <li><a href="{{action('CommentaireController@create', $ann['id'])}}" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-comment"></span> Écrit un commentaire</a><a href="{{action('CommentaireController@show', $ann['id'])}}" class="btn btn-lg btn-info"><span class="glyphicon glyphicon-eye-close"></span> Voir les commentaires</a></li>


                    <a href="{{action('PanierController@monpanier', $ann['id'])}}" class="btn btn-lg btn-danger"><span class="glyphicon glyphicon-comment"></span> Ajouter au panier</a>


                    @if (Auth::user()->role == "ADMIN")

                    <li><td><a href="{{action('AnnonceController@edit', $ann['id'])}}" class="btn btn-lg btn-warning">Edit</a></td></li>
                    <li><form action="{{action('AnnonceController@destroy', $ann['id'])}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form></li>



                    

                </ul>

                @endif
                

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