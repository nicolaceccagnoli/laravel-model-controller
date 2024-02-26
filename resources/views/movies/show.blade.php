@extends('layouts.app')

@section('page-title', $movie->title)

@section('main-content')

    <h1>
        {{ $movie->title }}
    </h1>

    <div class="row justify-content-center">
        <div class="col-auto">
            <div class="card card-movie">
                <div class="card-body text-center d-flex flex-column justify-content-center">
                    <h3>
                        {{ $movie->title }}
                    </h3>

                    <div class="mt-3">
                        Titolo Originale:
                        <span class="ps-2">
                            {{ $movie->original_title }}
                        </span>
                    </div>

                    <div class="mt-3">
                        Lingua Originale:
                        <span class="ps-2">
                            {{ $movie->nationality }}
                        </span>
                    </div>

                    <div class="mt-3">
                        Valutazione Media:
                        <span class="ps-2">
                            {{ $movie->vote }}
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection