<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UnderMovie - Best movie</title>
    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">


    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <!--
        - #TOP RATED
      -->

    <section class="top-rated">
        <div class="container">
            <a href="{{ route('home') }}"> <img src="{{ asset('image/series/logo.png') }}" width="100px"></a>
            <p class="section-subtitle">Online Streaming</p>

            <h2 class="h2 section-title">Top Rated Movies</h2>

            <ul class="filter-list">

                <li>
                    <button class="filter-btn">Aventure</button>
                </li>

                <li>
                    <button class="filter-btn">Guerre</button>
                </li>

                <li>
                    <button class="filter-btn">Histoire</button>
                </li>
                <li>
                    <button class="filter-btn">Action</button>
                </li>
                <li>
                    <button class="filter-btn">Policier</button>
                </li>
                <li>
                    <button class="filter-btn">Science fiction</button>
                </li>
                <li>
                    <button class="filter-btn">fantastique</button>
                </li>
                <li>
                    <button class="filter-btn">horreur</button>
                </li>


            </ul>

            @php
                $shuffledTops = $films['results'];
                shuffle($shuffledTops);

            @endphp



            <ul class="movies-list">
                @foreach ($shuffledTops as $film)
                    <li>
                        <div class="movie-card">
                            <a href="{{route('detailmovieI',['id' => $film['id']])}}">
                                <figure class="card-banner">
                                    <img src="{{ 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/' . $film['poster_path'] }}" alt="{{ $film['original_title'] }}">
                                </figure>
                            </a>

                            <div class="title-wrapper">
                                <a href="{{ route('detailmovieI', ['id' => $film['id']]) }}">
                                    <h3 class="card-title">{{ $film['original_title'] }}</h3>
                                </a>

                                <time datetime="{{ $film['release_date'] }}">{{ $film['release_date'] }}</time>
                            </div>

                            <div class="card-meta">
                                <div class="badge badge-outline">{{ $film['vote_average'] }}</div>

                                <div class="duration">
                                    <ion-icon name="time-outline"></ion-icon>
                                    <time datetime=""></time>
                                </div>

                                <div class="rating">
                                    <ion-icon name="star"></ion-icon>
                                    <data>{{ $film['vote_count'] }}</data>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach

            </ul>

        </div>
    </section>


    <script src="{{ asset('js/home.js') }}"></script>

    <!--
        - ionicon link
      -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>

</html>
