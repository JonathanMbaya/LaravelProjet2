<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/ddf42ed228.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    <style>
        @layer demo {
            button{
                all: unset;
            }
        }
    </style>

</head>
<body>


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

            @if((session('owners')) && session()->get('owners')->name === 'admin')

            <a class="navbar-brand" href="{{route('adminhomeadmin')}}">
                <img class="logo-nft" src="images/nftlogo.png" alt="">
            </a>

            @else

            <a class="navbar-brand" href="{{route('index')}}">
                <img class="logo-nft" src="images/nftlogo.png" alt="">
            </a>

            @endif

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav">



                @if((session('owners')) && session()->get('owners')->name === 'admin')

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('adminhomeadmin')}}">Liste des utilisateurs</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('adminnftlist')}}">Liste des NFT</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('adminaddnft')}}">Ajouter NFT</a>
                    </li>


                @else


                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('index')}}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('collection')}}">Collection</a>
                    </li>

                    <div>

                        @if (session('owners'))

                            <p class="text-price">{{session('owners')->wallet}} ETH <i class="fa-solid fa-wallet"></i></p>

                            <p>{{session('owners')->name}}</p>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{route('logout')}}">
                                    <button type="button" class="btn btn-primary">Déconnexion</button>
                                </a>
                            </li>


                        @else

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{route('login')}}">
                                    <button type="button" class="btn btn-primary">Connexion</button>
                                </a>
                            </li>

                        @endif

                    </div>


                @endif
            </ul>
          </div>
        </div>
      </nav>

    <div class="container animate__animated animate__bounceInRight">
        @yield('content')
    </div>

</body>

</html>
