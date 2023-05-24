@extends('layout.app')

@section('content')

    <div class="container my-5 bg-light">
        <div class="row row-cols-1 row-cols-lg-3 g-4 ">
            @forelse ($movies as $movie)
            <div class="col">
                <div class="card  my-5 py-3" style="width:18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">{{ $movie->original_title }}</h6>
                        <h6 class="card-subtitle mb-2 text-muted ">Nationality: {{ $movie->nationality }}</h6>
                        <h6 class="card-subtitle mb-2 text-muted ">Release Date: {{ $movie->date }}</h6>
                        <h6 class="card-subtitle mb-2 text-muted ">Average Vote: {{ $movie->vote }}</h6>
                    </div>
                </div>
            </div>
            @empty
            <div class="col">
                <p>Sorry, there are no movies..</p>
            </div>
            @endforelse
        </div>
    </div>


@endsection