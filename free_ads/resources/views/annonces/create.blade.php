@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('annonce') }}">
                        {{ csrf_field() }}
                        
                        <div class="form-group">
                            <label for="titre" class="col-md-4 control-label">Titre</label>

                            <div class="col-md-6">
                                <input id="titre" type="text" class="form-control" name="titre" required autofocus>

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <input id="description" type="text-area" class="form-control" name="description" required>

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="prix" class="col-md-4 control-label">Prix</label>

                            <div class="col-md-6">
                                <input id="prix" type="text" class="form-control" name="prix" required>

                                
                            </div>
                        </div>




                        <div class="form-group">

                            <label for="catégorie" class="col-md-4 control-label">Catégorie</label>

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

                        </div>



                        <div class="form-group">
                            <label for="image" class="col-md-4 control-label">Image</label>

                            <div class="col-md-6">
                                <input id="image" type="text" class="form-control" name="image" required>

                                
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
