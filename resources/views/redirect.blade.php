@extends('base')

@section ('title', 'Accueil du blog')

@section('content')


    <a href="">
        <h1 style="text-align: center">{{ session('status')}}</h1>
    </a>

    <a href={{route('logout')}}>
        <p style="text-align: center">Déconnexion</p>
    </a>


@endsection
