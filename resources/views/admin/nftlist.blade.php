@extends('base')

@section ('title', 'Home - NFT Market')

@section('content')


    {{-- Affichage sans connexion --}}

    <h1>Liste des NFT</h1>

    <p>
        <a class="nav-link active" aria-current="page" href="{{route('adminaddnft')}}">Ajouter NFT</a>
    </p>

    <div class="all-nft">


    <table class="container-fluid">


        <tr>
            <th>Id</th>
            <th>Titre</th>
            <th>Artiste</th>
            <th>Propriétaire</th>
            <th>Prix</th>
            <th>Catégorie</th>
            <th>Supprimer</th>

        </tr>

        @foreach ($nfts as $nft)

        <tr>
            <td>{{$nft->id}}</td>
            <td>{{$nft->title}}</td>
            <td>{{$nft->artist}}</td>
            <td>{{$nft->owner_id}}</td>
            <td>{{$nft->prix}} ETH</td>
            <td>{{$nft->category}}</td>
            <td><i class="fa-solid fa-trash"></i></td>
        </tr>

        @endforeach

    </table>



    </div>


@endsection
