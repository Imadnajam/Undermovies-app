<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $movie['original_title'] }}</title>
    <script>
        const movieData = @json($movie);
    </script>
    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <meta property="og:title" content="{{ $movie['original_title'] }}" />
    <meta property="og:description" content="{{ $movie['overview'] }}" />
    <meta property="og:image"
        content="{{ 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/' . $movie['poster_path'] }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="video.movie" />
    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <body id="#top" data-movie="{{ json_encode($movie) }}">
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

                            <img src="{{ 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/' . $movie['backdrop_path'] }}"
                                alt="{{ $movie['original_title'] }}">
                            <a style="color: rgb(255, 255, 255)"
                                href="{{ route('watchNow', ['id' => $movie['id'], 'title' => $movie['original_title']]) }}">
                                <button class="play-btn">
                                    <ion-icon name="play-circle-outline"></ion-icon>
                                </button></a>


                        </figure>

                        <div class="movie-detail-content">

                            <p class="detail-subtitle">New Episodes</p>

                            <h1 class="h1 detail-title">
                                <strong>{{ $movie['original_title'] }}</strong>
                            </h1>

                            <div class="meta-wrapper">

                                <div class="badge-wrapper">
                                    <div class="badge badge-fill">PG 13</div>

                                    <div class="badge badge-outline">HD</div>
                                </div>

                                <span style="color: hsl(248, 69%, 75%)">

                                    @foreach ($movie['genres'] as $genre)
                                        {{ $genre['name'] }}
                                        @if (!$loop->last)
                                            ,
                                        @endif
                                    @endforeach

                                </span>


                                <div class="date-time">

                                    <div>
                                        <ion-icon name="calendar-outline"></ion-icon>

                                        <time
                                            datetime="{{ $movie['release_date'] }}">{{ $movie['release_date'] }}</time>
                                    </div>

                                    <div>
                                        <ion-icon name="time-outline"></ion-icon>

                                        <time datetime="{{ $movie['runtime'] }}"> {{ $movie['runtime'] }} Min</time>



                                    </div>


                                </div>

                            </div>

                            <p class="storyline">
                                <strong style="color: hsl(249, 98%, 67%)"> Country : <span style="color: white">
                                        @foreach ($movie['production_countries'] as $country)
                                            {{ $country['name'] }}
                                            @if (!$loop->last)
                                                ,
                                            @endif
                                        @endforeach

                                    </span> </strong>
                                <strong style="color: hsl(249, 98%, 67%)">Language : <span style="color: white">
                                        @foreach ($movie['spoken_languages'] as $language)
                                            {{ $language['name'] }}
                                            @if (!$loop->last)
                                                ,
                                            @endif
                                        @endforeach

                                    </span> </strong>
                                <br><br>
                                {{ $movie['overview'] }}
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

                                    <a style="color: rgb(255, 255, 255)"
                                        href="{{ route('watchNow', ['id' => $movie['id'], 'title' => $movie['original_title']]) }}"><span>Watch
                                            Now</span></a>
                                </button>

                            </div>

                            <a href="{{ 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/' . $movie['poster_path'] }}"
                                download class="download-btn">
                                <span>Download</span>

                                <ion-icon name="download-outline"></ion-icon>
                            </a>

                        </div>

                    </div>
                </section>

                <footer class="footer">
                    @include('frontend.components.footer')
                </footer>
               
                <a href="#top" class="go-top" data-go-top>
                    <ion-icon name="chevron-up"></ion-icon>
                </a>
                @include('frontend.components.sharescript')
                <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </body>
</body>

</html>
