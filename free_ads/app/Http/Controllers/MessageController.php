<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Message;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Auth;


class MessageController extends Controller
{

    public function index()
    {

    	$mesmessages = DB::table('messages')->orderBy('created_at', 'desc')->get()->where('id_destinataire', '==', Auth::user()->email);
        return view('message.index', compact('mesmessages'));
    }

    public function create () {

        $users  = User::all()->toArray();
        return view('message.create', compact('users'));
    }

    public function store(Request $request)
    {
        // return view('annonces.index');

        $message = new Message;
        // $user = new User;
        $message->id_envoi = Auth::user()->email;
        $message->objet = $request->get('objet');
        $message->content = $request->get('content');        
        $message->id_destinataire = $request->get('destinataire');
        $req  = $request->get('destinataire');


        $message->save();
        $req  = $request->get('destinataire');
        $user = User::all()->where('email', '==', $req);
        foreach ($user as $a) {

            $a->message = $a->message + 1;

            $messagess = $a->message;
            $a->save();
        }

        return redirect('/message');
    }

    public function show(Request $request, $id)

    {

        $message= Message::find($id);
        if ($message->lu == 0) {
            $message->lu = 1;
            $message->save();
            $user = User::all()->where('id', '==', Auth::user()->id);
            foreach ($user as $a) {

                $a->message = $a->message - 1;

                $a->save();

            }
        }

        return view('message.show',compact('message'));

    }


    
}