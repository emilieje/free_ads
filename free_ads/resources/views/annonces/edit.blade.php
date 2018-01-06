@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{action('AnnonceController@update', $id)}}">
                        {{ csrf_field() }}

                        <input name="_method" type="hidden" value="PATCH">
                        
                        <div class="form-group">
                            <label for="titre" class="col-md-4 control-label">Titre</label>

                            <div class="col-md-6">
                                <input id="titre" type="text" class="form-control" name="titre" value="{{$annonce->titre}}" required autofocus>

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <input id="description" type="text-area" class="form-control" name="description" value="{{$annonce->description}}" required>

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="prix" class="col-md-4 control-label">Prix</label>

                            <div class="col-md-6">
                                <input id="prix" type="text" class="form-control" value="{{$annonce->prix}}" name="prix" required>

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="image" class="col-md-4 control-label">Image</label>

                            <div class="col-md-6">
                                <input id="image" type="text" class="form-control" value="{{$annonce->image}}" name="image" required>

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="image2" class="col-md-4 control-label">Image 2</label>

                            <div class="col-md-6">
                                <input id="image2" type="text" class="form-control" name="image2">

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="image3" class="col-md-4 control-label">Image 3</label>

                            <div class="col-md-6">
                                <input id="image3" type="text" class="form-control" name="image3">

                                
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Edit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection