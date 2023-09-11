@extends('base')

@section ('title', 'Accueil du blog')

@section('content')
    @if (session('status'))

        <h1>Bonjour {{ session('owners')->name}}</h1>
        
        <h2>Collection</h2>

    @else


    <h1>Collection</h1>

    @endif



@endsection
