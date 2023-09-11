<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Models\Owners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OwnerController extends Controller
{

    // Fonction route Inscription
    public function signup(){

        return view('signup');
    }

    // Fonction route Connexion

    public function login(Request $request){

        if ($request-> session()->get('owners')){
            return redirect('/redirect')-> with('status', 'Impossible, vous êtes encore connecté(e) !');
        }
        return view('login');
    }


    // Fonction route de traitement inscription
    public function form_register(Request $request){
        $request->validate([
            'email' => 'email|required|unique:owners',
            'password' => 'required|min:8',
            'name'=> 'required'
        ]);

        $owners = new Owners();
        $owners->email = $request->input('email');
        $owners->password = bcrypt($request->input('password'));
        $owners->name = $request->input('name');
        $owners-> save();

        return redirect('/inscription')->with('status', 'Félicitations! Votre compte a bien été créé.');


    }



    // Fonction route de traitement connexion

    public function form_login(Request $request) {
        $request->validate([
            'email' => 'email|required',
            'password' => 'required|min:8'
        ]);

        $owners = Owners::where('email', $request->input('email'))->first();

        if ($owners){
            if(Hash::check($request->input('password'), $owners->password)){
                $request-> session()->put('owners', $owners);

                return redirect('/collection');
            }else{
                return back()-> with('status', "Identifiant ou mot de passe incorrect");
            }
        }

        else {
            return back()-> with('status', "Désolé! Vos données ne sont pas reconnues");
        }
    }



    // Fonction route de déconnexion

    public function logout(Request $request) {
        $request -> session()-> forget('owners');

        return redirect ('/connexion')->with('status', 'Vous venez de vous déconnecter');
    }
}
