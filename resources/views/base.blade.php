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

</head>
<body>

<nav class="navbar-expand-lg navbar-light">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <ul class="navbar-nav">

        <a class="navbar-brand" href="{{route('index')}}">
            <img class="logo-nft" src="images/nftlogo.png" alt="">
        </a>

        <div class="nav-nav">

            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('index')}}">Accueil</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('collection')}}">Collection</a>
            </li>

        </div>

        <div class="nav-identify">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('login')}}">
                    <button type="button" class="btn btn-primary">Connexion</button>
                </a>
            </li>
        </div>

    </ul>
</nav>

    <div class="container animate__animated animate__bounceInRight">
        @yield('content')
    </div>

</body>

</html>
