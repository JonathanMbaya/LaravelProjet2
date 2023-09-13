@extends('base')

@section ('title', 'Home - NFT Market')

@section('content')

    {{-- Condition d'affichage si un utilisateur est connecté --}}

    @if (session('owners'))

        <p>Bonjour, {{session('owners')->name}} </p>

    @endif

    {{-- Affichage sans connexion --}}

    <h1>NFT Store</h1>


    <div class="all-nft">


        @foreach ($nfts as $nftOne)

            <div class="card-nft col-md-4">

                <figure>
                    <img class="col-md-12 img-fluid"  src="{{$nftOne->image}}">
                </figure>

                <a class="nav-link" href={{route('detail', ['id' => $nftOne->id])}}>
                    <button class="btn-detail col-md-12">
                        Voir détails
                    </button>
                </a>

                <p class="text-title">{{ $nftOne->title }}</p>
                <p class="text-artist">Artiste : {{ $nftOne->artist }}</p>
                <p class="text-price">{{ $nftOne->prix }} ETH</p>

            </div>

        @endforeach



    </div>


@endsection
