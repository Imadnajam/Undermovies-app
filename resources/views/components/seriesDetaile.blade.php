<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $tvSeriesData['name'] }}</title>
    <!-- Inside the head tag or somewhere before the JavaScript code -->
    <script>
        const movieData = @json($tvSeriesData);
    </script>

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!--
    - custom css link
  -->

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <meta property="og:title" content="{{ $tvSeriesData['name'] }}" />
    <meta property="og:description" content="{{ $tvSeriesData['overview'] }}" />
    <meta property="og:image"
        content="{{ 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/' . $tvSeriesData['poster_path'] }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="video.movie" />
    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="#top">

    <!--
    - #HEADER
  -->


    <header class="header" data-header>
        @include('frontend.components.header')
    </header><br>


    <main>
        <article>

            <!--
        - #MOVIE DETAIL
      -->

            <section class="movie-detail">
                <div class="container">

                    <figure class="movie-detail-banner">
                        <a href="{{ route('traillerSeries', ['id' => $tvSeriesData['id']]) }}">
                            <img src="{{ 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/' . $tvSeriesData['backdrop_path'] }}"
                                alt="Free guy movie poster">
                        </a>
                        <a href="{{ route('traillerSeries', ['id' => $tvSeriesData['id']]) }}">
                            <button class="play-btn">
                                <ion-icon name="play-circle-outline"></ion-icon>
                            </button>
                        </a>
                    </figure>

                    <div class="movie-detail-content">

                        <p class="detail-subtitle">New Episodes</p>

                        <h1 class="h1 detail-title">
                            {{ $tvSeriesData['name'] }}
                        </h1>

                        <div class="meta-wrapper">

                            <div class="badge-wrapper">
                                <div class="badge badge-fill">PG 13</div>

                                <div class="badge badge-outline">HD</div>
                            </div>

                            <div class="ganre-wrapper">
                                @foreach ($tvSeriesData['genres'] as $genre)
                                    <a href="#">{{ $genre['name'] }}</a>

                                    @if (!$loop->last)
                                        ,
                                    @endif
                                @endforeach



                            </div>

                            <div class="date-time">

                                <div>
                                    <ion-icon name="calendar-outline"></ion-icon>

                                    <time
                                        datetime="{{ $tvSeriesData['first_air_date'] }}">{{ $tvSeriesData['first_air_date'] }}</time>
                                </div>

                                <div>
                                    <ion-icon name="time-outline"></ion-icon>

                                    <time
                                        datetime="{{ $tvSeriesData['popularity'] }}">{{ $tvSeriesData['popularity'] }}</time>
                                </div>

                            </div>

                        </div>

                        <p class="storyline">
                            {{ $tvSeriesData['overview'] }}



                        </p>

                        <div class="details-actions">

                            <button class="share" id="whatsappShare">
                                <ion-icon name="logo-whatsapp"></ion-icon>
                                <span>Share on WhatsApp</span>
                            </button>
                            <button class="share" id="facebookShare">
                                <ion-icon name="logo-facebook"></ion-icon>
                                <span>Share on Facebook</span>
                            </button>

                            <div class="title-wrapper">
                                <p class="title">Prime Video</p>

                                <p class="text">Streaming Channels</p>
                            </div>

                            <button class="btn btn-primary">
                                <ion-icon name="play"></ion-icon>

                                <a href="{{ route('traillerSeries', ['id' => $tvSeriesData['id']]) }}"> <span>Watch Now
                                    </span></a>
                            </button>

                        </div>

                        <a href="./assets/images/movie-4.png" download class="download-btn">
                            <span>Download</span>

                            <ion-icon name="download-outline"></ion-icon>
                        </a>

                    </div>

                </div>
            </section>





            <!--
        - #TV SERIES
      -->

            <section class="tv-series">
                <div class="container">

                    <p class="section-subtitle">seasons</p>


                    <ul class="movies-list">
                        @foreach ($tvSeriesData['seasons'] as $season)
                            <li>
                                <div class="movie-card">

                                    <a
                                        href="{{ route('displayEpisod', ['series_id' => $tvSeriesData['id'], 'season_number' => $season['season_number']]) }}">
                                        <figure class="card-banner">
                                            <img src="https://image.tmdb.org/t/p/w500{{ $season['poster_path'] }}"
                                                alt="{{ $season['name'] }}" alt="{{ $season['name'] }}">
                                        </figure>
                                    </a>

                                    <div class="title-wrapper">
                                        <a href="#">
                                            <h3 class="card-title">{{ $season['name'] }}</h3>
                                        </a>

                                        <time datetime="{{ $season['air_date'] }}">{{ $season['air_date'] }}</time>
                                    </div>

                                    <div class="card-meta">
                                        <div class="badge badge-outline">Episode Count: {{ $season['episode_count'] }}
                                        </div>

                                        <div class="duration">
                                            <ion-icon name="time-outline"></ion-icon>

                                            <time datetime="PT47M">47 min</time>
                                        </div>

                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>

                                            <data>{{ $season['vote_average'] }}</data>
                                        </div>
                                    </div>

                                </div>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </section>

        </article>
    </main>

    <footer class="footer">
      @include('frontend.components.footer')
  </footer>
 

    <a href="#top" class="go-top" data-go-top>
        <ion-icon name="chevron-up"></ion-icon>
    </a>





    <!--
    - custom js link
  -->

    <script src="{{ asset('js/home.js') }}"></script>

    @include('frontend.components.sharescript')

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
