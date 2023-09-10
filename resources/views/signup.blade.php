@extends('base')

@section ('title', 'Accueil du blog')

@section('content')

    <div class="title-portal">
        <h1>Inscription</h1>
    </div>

    <form class="form-login" action="">
        <div class="group-area">
            <input type="text" name="name" id="name" placeholder="Name">
        </div>

        <div class="group-area">
            <input type="email" name="email" id="email" placeholder="email">
        </div>

        <div class="group-area">
            <input type="password" name="password" id="password" placeholder="password">
        </div>

        <input class="btn-submit" type="button" value="Se connecter">
    </form>

    <div>
        <p style="text-align: center">
            Vous avez déjà un compte NFT Store ? <br>

            Connectez-vous via ce <a href="{{Route('login')}}">lien</a>
        </p>
    </div>





@endsection
