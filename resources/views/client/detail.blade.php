@extends('base')

@section ('title', 'Détails')

@section('content')

    <h1>Détails</h1>

    <div class="details col-12">

        <div class="card-nft col-md-4 col-12">

            <figure>
                <img class="col-md-6 col-12 img-fluid"  src="{{$nft->image}}">
            </figure>
            <a class="nav-link" href="">
                <button class="btn-detail col-md-12">
                    Acheter
                </button>
            </a>
        </div>


        <div class="info-nft col-md-6 col-12">

            <h2>Informations supplémentaires</h2>

            <div class="sub-info">
                <h3>Titre NFT</h3>
                <p>{{$nft->title}}</p>
            </div>

            <div class="sub-info">
                <h3>Artiste</h3>
                <p>{{$nft->artist}}</p>
            </div>

            <div class="sub-info">
                <h3>Catégorie</h3>
                <p>{{$nft->category}}</p>
            </div>

            <div class="sub-info">
                <h3>Description</h3>
                <p>{{$nft->description}}</p>
            </div>

            <div class="sub-info">
                <h3>Strandard</h3>
                <p>{{$nft->standard}}</p>
            </div>

            <div class="sub-info">
                <h3>Url contrat</h3>
                <p>{{$nft->url}}</p>
            </div>

        </div>

    </div>

@endsection
