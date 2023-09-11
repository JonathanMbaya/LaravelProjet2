@extends('base')

@section ('title', 'Accueil du blog')

@section('content')


    <a href="">
        <p style="text-align: center">{{ session('status')}}</p>
    </a>

    <a href={{route('logout')}}>
        <p style="text-align: center">Déconnexion</p>
    </a>


@endsection
