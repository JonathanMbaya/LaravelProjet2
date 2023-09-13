@extends('base')

@section ('title', 'Mode Administration')

@section('content')


    <h1>Mode administration</h1>

    <h2>Ajouter un NFT</h2>


    <form class="form-add col-12" action="/connexion/user" method="post">
        @csrf
        <div class="group-area col-md-6">
            <label for="title">Titre</label>
            <input class="col-md-12" type="text" name="title" id="title" placeholder="Titre du NFT">
        </div>

        <div class="group-area col-md-6">
            <label for="title">Artiste</label>
            <input class="col-md-12" type="text" name="artiste" id="artiste" placeholder="Nom de l'artiste">
        </div>

        <div class="group-area col-md-6">
            <label for="title">Description</label>
            <textarea class="col-md-12" name="description" id="description" cols="30" rows="10"></textarea>
        </div>

        <div class="group-area col-md-6">
            <label for="title">Url contrat</label>
            <input class="col-md-12" type="text" name="url" id="url" placeholder="Ajouter une url du contrat">
        </div>

        <div class="group-area col-md-6">
            <label for="title">Standard Token</label>
            <select class="col-md-12" name="standard" id="standard">
                <option value="">Choisissez un token standard</option>
                <option value="ERC-721">ERC-721</option>
                <option value="ERC-1155">ERC-1155</option>
                <option value="ERC-998">ERC-998</option>
            </select>
        </div>

        <div class="group-area col-md-6">
            <label for="title">Prix</label>
            <input class="col-md-12" type="text" name="prix" id="prix" placeholder="Ajouter un prix"><span>ETH</span>
        </div>

        <div class="group-area col-md-6">
            <label for="image">Ajouter une image NFT:</label>

            <input class="col-md-12" type="file" id="image" name="image" accept="image/png, image/jpeg, image/gif" />
        </div>

        <div class="group-area col-md-6">
            <label for="title">Catégorie</label>
            <select class="col-md-12" name="category" id="category">
                <option value="">Ajouter une catégorie</option>
                <option value="1">Collectible</option>
                <option value="2">Metaverse</option>
                <option value="3">Utilitaire</option>
                <option value="4">Jeux Vidéo Online</option>
            </select>
        </div>

        <input class="btn-submit" type="submit" value="Ajouter">
    </form>











    </div>


@endsection
