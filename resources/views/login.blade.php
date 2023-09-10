@extends('base')

@section ('title', 'Accueil du blog')

@section('content')

    <div class="title-portal">
        <h1>Connexion</h1>
    </div>

    <form class="form-login" action="">
        <div class="group-area">
            <input type="text" name="email" id="email" placeholder="email">
        </div>

        <div class="group-area">
            <input type="password" name="password" id="password" placeholder="password">
        </div>

        <input class="btn-submit" type="button" value="Se connecter">
    </form>

    <div>
        <p style="text-align: center">
            Vous n’avez pas encore de compte ? <br>

            Incrivez-vous via ce <a href="{{Route('signup')}}">lien</a>
        </p>
    </div>

@endsection
