    @extends('layouts.app')

    @section('content')
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div id="slider" class="carousel slide" data-ride="carousel">
                            {{-- <ol class="carousel-indicators">
                                <li data-target="#slider" data-slide-to="0" class="active"></li>
                                <li data-target="#slider" data-slide-to="1"></li>
                            </ol> --}}
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100 bg-image" src="{{ asset('images/photo.jpg') }}" height="500px"
                                        alt="First slide" style="object-fit: cover;">
                                    <div class="carousel-caption d-none d-md-block" style="margin-bottom: 9.5rem;">
                                        <h2>l'Charles Cantin - Photographe</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="card mb-4" style="margin-top: 50px;">
                            <div class="card-header">
                                Catégories
                            </div>
                            <ul class="list-group list-group-flush">
                                @foreach ($categories as $categorie)
                                    <li class="list-group-item"><a
                                        href="#"
                                            {{-- href="{{ route('galerie', ['categorie' => $categorie->id]) }}" --}}
                                            style="text-decoration: none;color: black;">{{ $categorie->name }}</a></li>
                                @endforeach

                            </ul>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                À propos
                            </div>
                            <div class="card-body">
                                <p>Explorez l'univers visuel de Charles Cantin, photographe passionné. Chaque image raconte une histoire unique, capturant des moments précieux figés dans le temps. Bienvenue dans un portfolio où l'émotion visuelle prend vie.</p>
                            </div>
                        </div>


                    </div>
                </div>
        </main>

    @endsection
