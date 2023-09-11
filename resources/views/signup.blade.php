@extends('base')

@section ('title', 'Accueil du blog')

@section('content')

    <div class="title-portal">
        <h1>Inscription</h1>
    </div>

    {{-- Formulaire d'inscription --}}

    <form class="form-login" action="/inscription/register" method="post">

        @csrf

        <div class="group-area">
            <input type="text" name="name" id="name" placeholder="Name" required>
        </div>

        <div class="group-area">
            <input type="email" name="email" id="email" placeholder="email" required>
        </div>

        <div class="group-area">
            <input type="password" name="password" id="password" placeholder="password" required>
        </div>

        <input class="btn-submit" type="submit" value="S'inscrire">
    </form>


    {{-- Condition en cas de problème d'inscription ou message de confirmation d'inscription --}}

    @if (session('status'))
        <a href="">
            <p style="text-align: center">{{ session('status')}}</p>
        </a>
    @endif


    {{-- Lien vers connexion --}}

    <div>
        <p style="text-align: center">
            Vous avez déjà un compte NFT Store ? <br>

            Connectez-vous via ce <a href="{{Route('login')}}">lien</a>
        </p>
    </div>





@endsection
