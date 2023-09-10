<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
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
  <div class="container-fluid">
    <a class="navbar-brand" href="">
        <img src="../nftlogo.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('index')}}">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('collection')}}">Collection</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('login')}}">
                    <button type="button" class="btn btn-primary">Connexion</button>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('signup')}}">
                    <button type="button" class="btn btn-primary">S'inscrire</button>
                </a>
            </li>
        </ul>

    </div>
  </div>
</nav>

    <div class="container">
        @yield('content')
    </div>

</body>

</html>
