<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        #slider {
            margin-top: 50px;
        }

        .card-header {
            font-weight: bold;
            text-align: center;
        }

        .list-group-item {
            cursor: pointer;
        }

        .card-body form {
            margin-bottom: 0;
        }

        .card-body input[type="email"] {
            margin-bottom: 10px;
        }

        .mt-3 {
            margin-bottom: 8px;
        }

        .comment-box {
        border: 1px solid #ccc;
        padding: 10px;
        }

        .comment {
        margin-bottom: 20px;
        }

        .comment h5 {
        margin-bottom: 5px;
        }

        .badge {
        margin-right: 10px;
        }

        footer {
            background-color: #f8f9fa;
            text-align: center;
            padding: 10px;
        }

        @media (max-width: 768px) {
            .navbar-collapse {
                margin-top: 20px;
            }
        }
    </style>
</head>

<body>
    <div id="app">
        <header>
            <nav class="container navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="/"><img src="{{ asset('images/logo-charle.png') }}" alt="logo" height="40"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('galerie') }}">Galerie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tarifs') }}">Tarifs et prestations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>


                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                     
                        <ul class="navbar-nav">
                          
                            <li class="nav-item">
                                <a class="btn btn-outline-secondary nav-link mr-2"
                                    href="#"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-outline-secondary nav-link mr-2"
                                    href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-outline-secondary nav-link mr-2"
                                    href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-outline-secondary nav-link mr-2"
                                    href="#"><i class="fab fa-tiktok"></i></a>
                            </li>
                             
                        </ul>

                </div>
            </nav>
        </header>


        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer>
        <p>© 2023 Charles Photo</p>
    </footer>
  
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
