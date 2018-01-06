@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>My Home</h1></div>

                @guest
                            <h1>Vous n'êtes pas connecter !!</h1>
                        @else

                <div class="panel-body">
                    <h3>Hello {{ Auth::user()->name }}</h3>
                    <h4>Mes Infos</h4>
                    <ul>
                        <li>Nom : {{ Auth::user()->name }}</li>
                        <li>Email : {{ Auth::user()->email }}</li>
                        <li>Date de création : {{ Auth::user()->created_at }}</li>
                    </ul>
                    <a href="{{ url('edit-profile') }}" class="btn btn-primary btn-lg">Edit profil</span></a>
                </div>


                    <div class="panel-body">

                    <h4>Liste des utilisateurs</h4>
                        @foreach ($users as $a)
                        <ul>
                            <li><p>{{$a['name']}} {{$a['email']}}</p></li>
                            @if (Auth::user()->role == "ADMIN")

                            <li><form action="{{action('UtilisateurController@destroy', $a['id'])}}" method="post">
                            {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form></li>

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