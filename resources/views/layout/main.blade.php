<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{$description ?? ''}}">
    <title>{{$titre ?? ''}}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{Route('Accueil')}}">Accueil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                <!-- @if(Auth::guest()) 
                    <li class="nav-item">
                        <a class="nav-link active" href="{{Route('login.index')}}">Se connecter
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <a class="nav-link active" href="{{Route('register')}}">S'inscrire
                        <span class="visually-hidden">(current)</span>
                    </a>
                @else
                    <li class="nav-item">
                            <a class="nav-link active" href="#">Se déconnecter</a>
                    </li>
                @endif -->

                @guest
                    <li class="nav-item">
                        <a class="nav-link active" href="{{Route('login.index')}}">Se connecter
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <a class="nav-link active" href="{{Route('register')}}">S'inscrire
                        <span class="visually-hidden">(current)</span>
                    </a>
                @endguest
                @auth
                    <li class="nav-item">
                        <form action="{{ route('logout.logout') }}" method="POST">
                            @csrf  <!-- Protection CSRF -->
                            <button type="submit" class="nav-link active">
                                Se déconnecter
                            </button>
                        </form>
                    </li>
                @endauth



                </ul>
                <form class="d-flex">
                    <input class="form-control me-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Les libraires associés</h1>
        <h2>Les Synopsis</h2>

        @include('includes.sidebar')


            <!-- Liste des synopsis -->
            <div class="col-md-9 synopsis-list">
                @yield('contenu')
            </div>
        </div>
    </div>

@include('includes.footer')
</body>
</html>
