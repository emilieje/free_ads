<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Annonce;
use App\User;
use App\Commentaire;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Auth;


class CommentaireController extends Controller
{

    public function index()
    {
    	// $messages = DB::table('annonces')->get();
    	// $mesmessages = DB::table('messages')->toArray()->where('id_destinataire', '==', Auth::user()->email);
    	// $mesmessages = DB::table('messages')->get()->where('id_destinataire', '==', Auth::user()->email);
     //    return view('message.index', compact('mesmessages'));
    }

    public function create () {

       $iddd = $_SERVER['REQUEST_URI'];
       $id_com = explode("?", $iddd);
       $idd_com = $id_com[1]; 


       return view('commentaire.create',compact('idd_com'));

        // return view('commentaire.create');
   }


   public function show(Request $request, $id)

   {




    $comment = Commentaire::all()->where('id_annonce', '==', $id);
        // $comment = DB::table('commentaires')->where('id', '==', Auth::user()->email);




    return view('commentaire.show',compact('comment'));

}





public function store(Request $request)
{
        // return view('annonces.index');
    $aaa = $request->get('id_annonce');
    $commentaire = new Commentaire;
        // $user = new User;
    $commentaire->id_posteur = Auth::user()->name;
    $commentaire->id_annonce = $aaa;
    $commentaire->content = $request->get('content');


    $commentaire->save();
       
    return redirect('/annonce');
}





}