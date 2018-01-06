@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{action('CommentaireController@store')}}">

                        {{ csrf_field() }}
                        
                        <div class="form-group">

                            <input name="id_annonce" type="hidden" value="{{ $idd_com }}" >
                            <label for="titre" class="col-md-4 control-label">Commentaire</label>

                            <div class="col-md-6">
                                <input id="content" type="text" class="form-control" name="content" required autofocus>

                                
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
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
