<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\Paginator;
use App\Models\Nft;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;



class RouteController extends Controller
{
    public function index():View {

        $nfts = Nft::all();

        return view('client/index', [
            'nfts' => $nfts
        ]);
    }


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



}

