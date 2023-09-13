@extends('base')

@section ('title', 'Mode Administration')

@section('content')


    <h1>Mode administration</h1>




    <table class="container-fluid">


        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Portefeuille</th>
            <th>Date de création</th>

        </tr>

        @foreach ($owners as $owner)

        <tr>
            <td>{{$owner->id}}</td>
            <td>{{$owner->name}}</td>
            <td>{{$owner->email}}</td>
            <td>{{$owner->wallet}} ETH</td>
            <td>{{$owner->created_at}}</td>
        </tr>

        @endforeach

    </table>






    </div>


@endsection
