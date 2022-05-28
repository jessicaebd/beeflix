@extends('layouts.main')

@section('title', 'Movie')

@section('content')
    <div class="container">
        <h2 class="text-warning py-2">{{ $genre->name }}</h2>

        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-6 col-sm-4 col-md-3 my-3">
                    <div class="card bg-dark text-white border border-secondary shadow-sm">
                        <img src="/photos/{{ $genre->name }}/{{ $movie->photo }}" class="card-img-top" width="100%"
                            height="350" alt="...">
                        <h1 class="fs-6 text-center pt-3 pb-2">{{ $movie->title }}</h1>
                        <a href="/movie/{{ $movie->id }}" class="btn btn-warning rounded-0"><b>LIHAT
                                FILM</b></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
