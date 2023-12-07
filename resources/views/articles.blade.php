@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <div class="row">
            <div class="col-md-4">
                <!-- Barre latérale de catégories -->
                <h4>Catégories</h4>
                <ul class="list-group">
                    @foreach ($categories as $categorie)
                        <li class="list-group-item d-flex
                justify-content-between align-items-center"
                            @if (Request()->categorie == $categorie->id) style="background: #ebe9e9;" @endif>
                            <a href="{{ route('articles', ['categorie' => $categorie->id]) }}"
                                style="text-decoration: none;color: black;">
                                {{ $categorie->name }}</a>
                            <span
                                class="badge bg-primary rounded-pill">{{ $categorie->getNumberItemByCategorie($categorie->id) }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-8">
                <!-- Barre de recherche de date -->
                <form action="{{ route('articles') }}" method="get">
                    <div class="row mb-4">
                        <div class="col-md-8">
                            <input type="text" name="post" class="form-control" placeholder="recherche...">
                        </div>

                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">Rechercher</button>
                        </div>
                    </div>
                </form>
                <!-- Liste de blogs paginée -->
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <img class="card-img-top" src="{{ asset('images/articles/' . $post->image) }}"
                                    alt="{{ $post->title }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text">{{ $post->summary }}</p>
                                    <div class="mt-3">
                                        <i class="far fa-eye"></i> {{ $post->view_count }} vues
                                        <i class="far fa-comments"></i> {{ count($post->comments) }}
                                        commentaires
                                    </div>
                                    <a href="{{ route('detail.article', $post->slug) }}" class="btn btn-primary mt-3">Lire
                                        la suite</a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
                <!-- Pagination -->
                {{ $posts->appends(request()->input())->links('vendor.pagination.bootstrap-4') }}
                {{-- <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"
                            aria-disabled="true">Précédent</a>
                    </li>
                    <li class="page-item active"><a class="page-link"
                            href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Suivant</a>
                    </li>
                </ul>
            </nav> --}}
            </div>
        </div>
    </div>

    <footer>
        <p>© 2023 Blog</p>
    </footer>
@endsection
