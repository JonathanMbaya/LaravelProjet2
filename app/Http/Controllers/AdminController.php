<?php

namespace App\Http\Controllers;

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
                'owners' => $owners
            ]);
        }

        else {
            return redirect('/redirect')-> with('status', 'Imposible d\'accéder à la page, vous n\'êtes pas administrateur ou administratrice') ;

        }


    }
}
