@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('images/articles/' . $article->image) }}" alt="Cover
                        Image"
                    class="img-fluid" width="100%">
                <h1 class="mt-4 mb-3">{{ $article->title }}</h1>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>{{ $article->summary }}</p>
                    <p>{!! $article->content !!}</p>
                </div>
            </div>
            <div class="mt-4 mb-4">
                @foreach ($tags as $tag)
                    <span class="badge rounded-pill bg-secondary">{{ $tag->name }}</span>
                @endforeach

            </div>
            <h3>Commentaires</h3>
            <div class="comment-box mt-4 mb-4">
                @foreach ($comments as $comment)
                    <div class="comment">
                        <h5>{{ $comment->username }}</h5>
                        <p>{{ $comment->content }}</p>
                    </div>
                @endforeach
                @if (auth()->check())
                    <form class="comment" action="{{ route('sendcomment') }}" method="post">
                        @csrf
                        <div class="input-group">
                            <input type="text" name="commentaire" class="form-control"
                                placeholder="laisser votre commentaire ici...">
                            <input type="hidden" name="post_id" value="{{ $article->id }}">
                            <input type="hidden" name="user_name" value="{{ Auth::user()->name }}">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit">Envoyer</button>
                            </div>
                        </div>
                    </form>
                @else
                    <p>Veuillez vous connecter pour faire des commentaires</p>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <footer>
        <p>© 2023 Blog</p>
    </footer>
@endsection
