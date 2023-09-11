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
    public function index():View {

        $nfts = Nft::all();

        return view('client/index', [
            'nfts' => $nfts
        ]);
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

    public function collection():View {

        if ($request-> session()->get('owners')){
            return view('collection')-> with('owners');
        }

        else{
            return view('collection');
        }


    }



}

