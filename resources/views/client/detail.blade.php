@extends('base')

@section ('title', 'Détails {{$nft->title}}')

@section('content')

    <h1>Détails - {{$nft->title}}</h1>

    <div class="details">

        <figure>
            <img src="{{$nft->image}}" alt="image-details-nft">
        </figure>


        <div class="info-nft">

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
