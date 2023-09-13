<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Models\Nft;
use App\Models\Owners;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{

    // Fonction route page d'accueil admin , récuprération de la liste des utilisateurs
    public function homeadmin(Request $request):View | RedirectResponse  {

        $owners = Owners::all();
        $nfts = Nft::all();

        if ($request-> session()->get('owners')->name === 'admin'){
            return view('admin/homeadmin', [
                'owners' => $owners,
            ]);
        }

        else {
            return redirect('/redirect')-> with('status', 'Imposible d\'accéder à la page, vous n\'êtes pas administrateur ou administratrice') ;

        }



    }

    public function nftlist(Request $request):View {

        $nfts = Nft::all();

        return view('admin\nftlist', [
            'nfts' => $nfts
        ]);

    }

    public function addnft():View {


        return view('admin\addnft');

    }


    public function form_add(Request $request){
        $request->validate([
            'title' => 'email|required|unique:owners',
            'artist' => 'required|min:8',
            'description'=> 'required'
        ]);

        $owners = new Owners();
        $owners->email = $request->input('email');
        $owners->password = bcrypt($request->input('password'));
        $owners->name = $request->input('name');
        $owners-> save();

        return redirect('/inscription')->with('status', 'Félicitations! Votre compte a bien été créé.');


    }

}


