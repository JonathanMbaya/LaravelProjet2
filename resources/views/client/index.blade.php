@extends('base')

@section ('title', 'Accueil du blog')

@section('content')

    <h1>NFT Store</h1>

    <div class="all-nft col-12">


    @foreach ($nfts as $nftOne)
        <p>This is user {{ $nftOne->title }}</p>

        <div class="card-nft">

            <figure>
                <img class="col-3" src="{{$nftOne->image}}">
            </figure>

            <a class="nav-link" href={{route('detail', ['id' => $nftOne->id])}}>
                <button class="btn-detail">
                    Voir détails
                </button>
            </a>

        </div>
    @endforeach



    </div>


@endsection
