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
            

        



            <ul class="movies-list">
                @foreach ($data['episodes'] as $seriesE)
                    <li>
                        <div class="movie-card">
                            <a href="{{route('displayEpisodTrailler',['series_id'=>$seriesId,'season_number'=>$seasonNumber,'episode_number'=>$seriesE['episode_number']])}}">
                                <figure class="card-banner">
                                    <img src="{{ 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/' . $seriesE['still_path'] }}" alt="{{ $seriesE['name'] }}">
                                </figure>
                            </a>
                            <br>

                            <div class="title-wrapper">
                                <a href="#">
                                    <h3 class="card-title">{{ $seriesE['name'] }}</h3>
                                </a>

                                <time datetime="{{ $seriesE['air_date'] }}">{{ $seriesE['air_date'] }}</time>
                            </div>

                            <div class="card-meta">
                                <div class="badge badge-outline">{{ $seriesE['vote_average'] }}</div>

                                <div class="duration">
                                    <ion-icon name="time-outline"></ion-icon>
                                    <time datetime="{{ $seriesE['runtime'] }}">{{ $seriesE['runtime'] }} MIN</time>
                                </div>

                                <div class="rating">
                                    <ion-icon name="star"></ion-icon>
                                    <data>{{ $seriesE['vote_count'] }}</data>
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
