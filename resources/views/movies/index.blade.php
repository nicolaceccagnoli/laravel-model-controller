@extends('layouts.app')

@section('page-title', 'Tutti i film')

@section('main-content')

<h1>
    Film 
</h1>

<div class="row flex-wrap justify-content-center p-2">
    @foreach ($movies as $index => $movie)

        <div class="col-12 col-sm-3">
            <div class="card">
                <div class="card-body text-center">

                    <h3>
                        {{ $movie->title }}
                    </h3>

                    <a href="{{ route('movies.show', ['id' => $movie->id]) }}" class="btn btn-primary mt-5">
                        Vai al film
                    </a>

                </div>
            </div>
        </div>
        
    @endforeach
</div>

@endsection