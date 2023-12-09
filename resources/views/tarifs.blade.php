@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <div class="row">
            
            <div class="col-md-12">
                <!-- Barre de recherche de date -->
                <div class="container mt-5">
                    <h1 class="mb-4 text-center">Tarifs et Prestations</h1>
                
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        @foreach ($tarifs as $tarif)
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas {{ $tarif->icon }}"></i> {{ $tarif->title }} <b> @if ( $tarif->prix != 0)
                                            - {{ $tarif->prix }} euros
                                            @else  
                                            - Personnalisé
                                        @endif  </b></h5>
                                        <p class="card-text">{!! $tarif->content !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
