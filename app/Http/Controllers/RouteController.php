<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\Paginator;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;



class RouteController extends Controller
{
    public function index():View {

        $nft = \App\Models\Nft::paginate(1);
        return view('index');
    }

}

