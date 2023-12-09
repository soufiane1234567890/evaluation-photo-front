@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <div class="row">
            <div class="col-md-4">
                <!-- Barre latérale de catégories -->
                <h4>Catégories</h4>
                <ul class="list-group">
                    @foreach ($categories as $categorie)
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            @if (Request()->categorie == $categorie->id) style="background: #ebe9e9;" @endif>
                            <a href="{{ route('galerie', ['categorie' => $categorie->id]) }}"
                                style="text-decoration: none;color: black;">
                                {{ $categorie->name }}</a>
                           
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-8">
                <!-- Barre de recherche de date -->
                <form action="{{ route('galerie') }}" method="get">
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
                    @foreach ($galeries as $galerie)
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <img class="card-img-top" src="{{ asset('images/articles/' . $galerie->file_path) }}"
                                    alt="{{ $galerie->file_name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $galerie->file_name }}</h5>
                                    <p class="card-text">{{ $galerie->summary }}</p>
                                   
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
