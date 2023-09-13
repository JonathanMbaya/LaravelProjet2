<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\Paginator;
use App\Models\Nft;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;



class RouteController extends Controller
{

    // Fonction route page d'accueil , récuprération de la liste de NFT
    public function index(Request $request):View {

        $nfts = Nft::all();

        if ($request-> session()->get('owners')){

            return view('client/index', [
                'nfts' => $nfts
            ])->with('owners');

        }

        else {

            return view('client/index', [
                'nfts' => $nfts
            ]);

        }


    }



    // Fonction route page détail , récuprération information d'un NFT avec l'id
    public function detail($id):View

    {
        $nft = Nft::find($id);

        return view('client/detail',
            [
                'nft' => $nft
            ]
        );

        return $nft;
    }


    // Fonction route page de collection, récuprération de la liste de NFT acheté

    public function collection(Request $request):View {

        if ($request-> session()->get('owners')){
            return view('client/collection')-> with('owners');
        }

        else{
            return view('client/collection');
        }

    }



}

