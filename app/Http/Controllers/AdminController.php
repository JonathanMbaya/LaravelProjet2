<?php

namespace App\Http\Controllers;

use App\Models\Nft;
use App\Models\Owners;
use App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

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
            'title' => 'required',
            'artist' => 'required',
            'description'=> 'required',
            'url'=> 'required',
            'standard'=> 'required',
            'prix'=> 'required',
            'image'=> 'required',
            'category'=> 'required'

        ]);

        $nfts = new Nft();
        $nfts->title = $request->input('title');
        $nfts->artist = ($request->input('artist'));
        $nfts->description = $request->input('description');
        $nfts->url = $request->input('url');
        $nfts->standard = $request->input('standard');
        $nfts->prix = $request->input('prix');
        $nfts->image = $request->input('image');
        $nfts->category = $request->input('category');
        $nfts-> save();

        return redirect('/admin/addnft')->with('status', 'Votre NFT a bien été ajouté !');

    }

}


