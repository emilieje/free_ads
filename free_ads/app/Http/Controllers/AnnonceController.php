<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Annonce;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Auth;



class AnnonceController extends Controller
{

    public function index()
    {
        // $annonce = DB::table('annonces')->get();
        $annonce = Annonce::all()->toArray();
        toto ='titi'
        return view('annonces.index', compact('annonce'));

        
    }

    public function search()
    {
        $annonce = DB::table('annonces')
        ->where('titre', 'like', $_GET['search'] . '%')
        ->get();
        return view('annonces.search', compact('annonce', 'erreurs'));
    }


    public function sort()
    {
        $annonce = DB::table('annonces')
        ->orderBy('created_at', 'desc')
        ->get();
        return view('annonces.sort', compact('annonce'));
    }

    public function unsort()
    {
        $annonce = DB::table('annonces')
        ->orderBy('created_at', 'asc')
        ->get();
        return view('annonces.unsort', compact('annonce'));
    }

    public function maxprice()
    {
        $annonce = DB::table('annonces')
        ->orderBy('prix', 'desc')
        ->get();
        return view('annonces.maxprice', compact('annonce'));
    }

    public function minprice()
    {
        $annonce = DB::table('annonces')
        ->orderBy('prix', 'asc')
        ->get();
        return view('annonces.minprice', compact('annonce'));
    }


    public function choose()
    {

        $annonce = DB::table('annonces')
        ->where('catégorie', 'like', $_GET['catégorie'])
        ->get();
        return view('annonces.catégories', compact('annonce'));
    }


    public function show ($id) {
        $annonce = DB::table('annonces')->get()->where('id_user', '==', Auth::user()->id);
        return view('annonces.list', compact('annonce'));
    }

    public function create () {
        return view('annonces.create');
    }

    public function store(Request $request)
    {

        $annonce = new Annonce;

        $annonce->id_user = Auth::user()->id;
        $annonce->titre = $request->get('titre');
        $annonce->description = $request->get('description');
        $annonce->prix = $request->get('prix');
        $annonce->catégorie = $request->get('catégorie');
        $annonce->image = $request->get('image');
        $annonce->image2 = $request->get('image2');
        $annonce->image3 = $request->get('image3');

        $annonce->save();

        return redirect('/annonce/list');
        
    }


    // public function check () {

    // }

    

    public function edit($id)
    {
        $annonce = Annonce::find($id);
        
        return view('annonces.edit', compact('annonce','id'));

    }



    
    
    public function update(Request $request, $id)
    {
        $annonce = Annonce::find($id);

        // var_dump(expression);
        // die();

        $annonce->titre = $request->get('titre');
        $annonce->description = $request->get('description');
        $annonce->prix = $request->get('prix');
        $annonce->image = $request->get('image');
        $annonce->image2 = $request->get('image2');
        $annonce->image3 = $request->get('image3');

        $annonce->save();

        return redirect('/annonce/list');
    }

    public function destroy($id)
    {
      $annonce = Annonce::find($id);
      $annonce->delete();

      return redirect('/annonce/list');
  }



}
