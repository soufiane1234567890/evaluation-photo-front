    @extends('layouts.app')

    @section('content')
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div id="slider" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#slider" data-slide-to="0" class="active"></li>
                                <li data-target="#slider" data-slide-to="1"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="https://picsum.photos/id/1/1000/500"
                                        alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h2>l'informatique</h2>
                                        <p>Bienvenue sur ce blog consacré à l'informatique ! Ici, nous allons explorer différents aspects de ce domaine en constante évolution, que ce soit les dernières technologies, les tendances, les opportunités d'emploi, les enjeux de sécurité et de confidentialité, et bien plus encore.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://picsum.photos/id/1001/1000/500"
                                        alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h2>Le père peut aussi le faire.</h2>
                                        <p>Historiquement, la responsabilité de la garde des enfants a été confiée aux mères, mais au fil du temps, de plus en plus de pères ont choisi de prendre un rôle actif dans l'éducation et l'épanouissement de leurs enfants.</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <h2 class="mt-5 mb-3">Derniers articles</h2>

                        <div class="row">
                            @foreach ($postslast as $post)
                                <div class="col-md-6">
                                    <div class="card mb-4">
                                        <img class="card-img-top" src="{{ asset('images/articles/' . $post->image) }}"
                                            alt="{{ $post->title }}">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->title }}</h5>
                                            <p class="card-text">{{ $post->summary }}</p>
                                            <div class="mt-3">
                                                <i class="fa fa-eye"></i> {{ $post->view_count }} vues
                                                <i class="fa fa-comments"></i> {{ count($post->comments) }} commentaires
                                            </div>
                                            <a href="{{ route('detail.article', $post->slug) }}"
                                                class="btn btn-primary">Lire la suite</a>

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <h2 class="mt-5 mb-3">À la une</h2>

                        <div class="row">
                            @foreach ($postspopulaires as $postp)
                                <div class="col-md-6">
                                    <div class="card mb-4">
                                        <img class="card-img-top" src="{{ asset('images/articles/' . $postp->image) }}"
                                            alt="{{ $post->title }}">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $postp->title }}</h5>
                                            <p class="card-text">{{ $postp->summary }}</p>
                                            <div class="mt-3">
                                                <i class="fa fa-eye"></i> {{ $postp->view_count }} vues
                                                <i class="fa fa-comments"></i> {{ count($postp->comments) }} commentaires
                                            </div>
                                            <a href="#" class="btn btn-primary">Lire la suite</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


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
                                            href="{{ route('articles', ['categorie' => $categorie->id]) }}"
                                            style="text-decoration: none;color: black;">{{ $categorie->name }}</a></li>
                                @endforeach

                            </ul>
                        </div>

                        <div class="card mb-4" style="border-radius: 8px; overflow: hidden;">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                    </li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="https://picsum.photos/id/1025/600/400"
                                            alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Titre de l'article 1</h5>
                                            <p>Description de l'article 1</p>
                                            <p class="badge badge-secondary">Nombre de vues : 1000</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="https://picsum.photos/id/1025/600/400"
                                            alt="Second slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Titre de l'article 2</h5>
                                            <p>Description de l'article 2</p>
                                            <p class="badge badge-secondary">Nombre de vues : 500</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="https://picsum.photos/id/1025/600/400"
                                            alt="Third slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Titre de l'article 3</h5>
                                            <p>Description de l'article 3</p>
                                            <p class="badge badge-secondary">Nombre de vues : 250</p>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                Abonnez-vous à notre newsletter
                            </div>
                            <div class="card-body">
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <form action="{{ route('newsletter.envoyer') }}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input type="email" class="form-control" id="email" name="mail"
                                                placeholder="Entrez votre adresse email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                À propos
                            </div>
                            <div class="card-body">
                                <p>Bienvenue sur mon blog ! Je suis passionné par les nouvelles technologies et j'aime partager mes découvertes avec le plus grand nombre. J'espère que vous trouverez ici des informations utiles et intéressantes.</p>
                            </div>
                        </div>


                    </div>
                </div>
        </main>

        <footer>
            <p>© 2023 Blog</p>
        </footer>
    @endsection
