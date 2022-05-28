@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <a href="/genre/{{ $genre->id }}" style="text-decoration: none;"
            class="text-light py-2 border-start border-4 border-warning">
            <span class="fs-2 px-3">{{ $genre->name }}</span>
        </a>

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
