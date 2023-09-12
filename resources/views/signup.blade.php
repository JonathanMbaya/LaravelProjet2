<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        @layer demo {
            button{
                all: unset;
            }
        }
    </style>

@section ('title', 'Incription - NFT Market')

</head>
<body>


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


</body>

</html>
