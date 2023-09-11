@extends('base')

@section ('title', 'Accueil du blog')

@section('content')

    <div class="title-portal">
        <h1>Connexion</h1>
    </div>

    <form class="form-login" action="/connexion/user" method="post">
        @csrf
        <div class="group-area">
            <input type="text" name="email" id="email" placeholder="email">
        </div>

        <div class="group-area">
            <input type="password" name="password" id="password" placeholder="password">
        </div>

        <input class="btn-submit" type="submit" value="Se connecter">
    </form>

    @if (session('status'))
        <a href="">
            <p style="text-align: center">{{ session('status')}}</p>
        </a>
    @endif

    <div>
        <p style="text-align: center">
            Vous n’avez pas encore de compte ? <br>

            Incrivez-vous via ce <a href="{{Route('signup')}}">lien</a>
        </p>
    </div>

@endsection
