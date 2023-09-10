@extends('base')

@section ('title', 'Accueil du blog')

@section('content')

    <h1>NFT Store</h1>

    <div class="col-md-3">
        <figure>
            <img src="" alt="">
            <figcaption>

            </figcaption>
        </figure>
        <a class="nav-link" href="{{route('detail')}}">
            <button class="btn-detail">
                Voir détails
            </button>
        </a>
    </div>


@endsection
