<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Annonce;
use App\User;
use App\Panier;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Auth;


class PanierController extends Controller
{

    public function voirmonpanier ()
    {

        $annonce = DB::table('annonces')
        ->join('paniers', 'paniers.id_annonce', '=', 'annonces.id')
        ->select('annonces.*')
        ->where('paniers.id_user', '=', Auth::user()->id)
        ->get();

        // $prix = DB::table('annonces')
        //     ->join('paniers', 'paniers.id_annonce', '=', 'annonces.id')
        //     ->select(DB::raw('count(annonces.prix) as total, paniers.id_user'))
        //     ->where('paniers.id_user', '=', Auth::user()->id)
        //     ->get();




        // $annonce = DB::table('annonces')->join('paniers', function ($join) {
        //     $join->on('annonces.id', '=', 'paniers.id_annonce')->where('paniers.id_user', '=', Auth::user()->id);
        // })->select('annonces.*');
        // var_dump($annonce);
        // die();
        // foreach ($annonce as $k) {
        //     echo $k->content;
        // }

        // die();

        return view('panier.index', compact('annonce'));



        //     'paniers.id_annonce', '=', 'annonces.id')->select('annonces.*')


        // ->join('contacts', function ($join) {
        //     $join->on('users.id', '=', 'contacts.user_id')
        //          ->where('contacts.user_id', '>', 5);
        // })
        // $id = DB::table('paniers')->get()->where('id_user', '==', Auth::user()->id);

        // foreach ($id as $a) {
        //      $id = DB::table('paniers')->get()->where('id_user', '==', Auth::user()->id);
        // }
        // return view('panier.index', compact('annonce'));return view('panier.index', compact('annonce'));





    }

    
    public function monpanier ()
    {
        // return view('annonces.index');
        // $aaa = $request->get('id_annonce');
        $iddd = $_SERVER['REQUEST_URI'];
        $id_com = explode("?", $iddd);
        $id = $id_com[1];
        $panier = new Panier;
        // $user = new User;
        $panier->id_user = Auth::user()->id;
        $panier->id_annonce = $id;
        echo "localec";
        

        
        $panier->save();
        
        // return redirect()->action('AnnonceController@index');
        return redirect('/voirmonpanier');
    }

    public function create () {



        // return view('commentaire.create');
    }


    // public function show(Request $request, $id)

    // {




    //     $comment = Commentaire::all()->where('id_annonce', '==', $id);





    //     return view('commentaire.show',compact('comment'));

    // }


    // public function destroy($id)
    // {
    //   $panier = Panier::find($id);
    //   $panier->delete();

    //   return redirect('/voirmonpanier');
    // }




    
}