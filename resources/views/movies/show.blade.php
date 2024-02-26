@extends('layouts.app')

@section('page-title', $movie->title)

@section('main-content')

    <h1>
        {{ $movie->title }}
    </h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3>
                        {{ $movie->title }}
                    </h3>

                    <div>
                        Titolo Originale:
                        <span>
                            {{ $movie->original_title }}
                        </span>
                    </div>

                    <div>
                        Lingua Originale:
                        <span>
                            {{ $movie->nationality }}
                        </span>
                    </div>

                    <div>
                        Valutazione Media:
                        <span>
                            {{ $movie->vote }}
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection