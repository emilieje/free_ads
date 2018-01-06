@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create message</div>

                <div class="panel-body">
                    <form class="form-horizontal" id="coco" method="POST" action="{{ url('message') }}">
                        {{ csrf_field() }}
                        
                        <div class="form-group">
                            <label for="objet" class="col-md-4 control-label">Objet</label>

                            <div class="col-md-6">
                                <input id="objet" type="text" class="form-control" name="objet" required autofocus>

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="destinataire" class="col-md-4 control-label">Destinataire</label>

                            <div class="col-md-6">
                                <select id="destinataire" class="form-control" name="destinataire" required autofocus>

                                    @foreach ($users as $user)

                                    <option>{{$user['email']}}</option>

                                    
                                </div>

                                
                                

                                @endforeach

                                
                            </select>
                        </div>

                        

                        <div class="form-group">
                            <label for="content" class="col-md-4 control-label">Contenu</label>

                            <div class="col-md-6">
                                <textarea rows="4" cols="50" id="content" name="content" class="form-control" form="coco" required>enter</textarea>

                                
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
