@extends('base')

@section ('title', 'Home - NFT Market')

@section('content')

    <h1>NFT Store</h1>

    <div class="all-nft">


    @foreach ($nfts as $nftOne)

        <div class="card-nft col-md-4">
            <p>{{ $nftOne->title }}</p>

            <figure>
                <img class="col-md-12 img-fluid"  src="{{$nftOne->image}}">
            </figure>

            <a class="nav-link" href={{route('detail', ['id' => $nftOne->id])}}>
                <button class="btn-detail col-md-12">
                    Voir détails
                </button>
            </a>

        </div>
    @endforeach



    </div>


@endsection
