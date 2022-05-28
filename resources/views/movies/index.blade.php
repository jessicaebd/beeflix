@extends('layouts.main')

@section('title', 'Movie')

@section('content')
    <style>
        [aria-current] .page-link {
            background-color: #ffc107 !important;
        }

        [rel='prev'],
        [rel='next'] {
            background-color: #212529 !important;
            color: #ffc107;
        }

        .pagination>li :not([rel='prev'], [rel='next'], [aria-current] .page-link) {
            background-color: #212529 !important;
            color: white;
        }

        .pagination>.active>a,
        .pagination>.active>a:focus,
        .pagination>.active>a:hover,
        .pagination>.active>span,
        .pagination>.active>span:focus,
        .pagination>.active>span:hover {
            background-color: #ffc107;
            border-color: #212529;
        }

    </style>

    <div class="container mt-5">
        <div class="row">
            <div class="col-6 col-md-3">
                <img src="/photos/{{ $movie->genre->name }}/{{ $movie->photo }}" class="card-img-top" width="80%"
                    height="400" alt="...">
            </div>

            <div class="col-6 col-md-9 text-light">
                <h1 class="fs-3">{{ $movie->title }}</h1>

                <hr class="text-warning">

                <div class="row">
                    <div class="col-12 col-md-6">
                        @for ($i = 0; $i < $movie->rating; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow"
                                class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                        @endfor

                        @for ($i = 0; $i < 5 - $movie->rating; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow"
                                class="bi bi-star" viewBox="0 0 16 16">
                                <path
                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                            </svg>
                        @endfor

                        <p>{{ $movie->description }}</p>

                        <span>Kategori: <a href="/genre/{{ $movie->genre->id }}"
                                style="text-decoration: none; color: rgb(95, 124, 253)">{{ $movie->genre->name }}</a></span>
                    </div>

                    <div class="col-12 col-md-6">
                        <h1 class="fs-5 text-warning py-2">Episode</h1>

                        <ul class="list-group ">
                            @foreach ($episodes as $episode)
                                <li class="list-group-item bg-dark text-light border-secondary">
                                    <b class="text-warning">Episode {{ $episode->episode }} :</b>
                                    {{ $episode->title }}
                                </li>
                            @endforeach
                            <span class="bg-dark link-dark mt-3"> {{ $episodes->links() }}</span>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
