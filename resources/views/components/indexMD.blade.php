<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $movie['original_title'] }}</title>
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

        <!--
      - #HEADER
    -->

        <header class="header" data-header>
            <div class="container">

                <div class="overlay" data-overlay></div>

                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('image/series/logo.png') }}" width="100px" alt="Filmlane logo">
                </a>

                <div class="header-actions">

                    <button class="search-btn">
                        <ion-icon name="search-outline"></ion-icon>
                    </button>

                    <div class="lang-wrapper">
                        <label for="language">
                            <ion-icon name="globe-outline"></ion-icon>
                        </label>

                        <select name="language" id="language">
                            <option value="en">EN</option>
                            <option value="au">AU</option>
                            <option value="ar">AR</option>
                            <option value="tu">TU</option>
                        </select>
                    </div>

                    <a href="{{ route('authentification') }}"><button class="btn btn-primary">Sign in</button></a>

                </div>

                <button class="menu-open-btn" data-menu-open-btn>
                    <ion-icon name="reorder-two"></ion-icon>
                </button>

                <nav class="navbar" data-navbar>

                    <div class="navbar-top">

                        <a href="{{ route('home') }}" class="logo">
                            <img src="{{ asset('image/series/logo.png') }}" width="100px" alt="Filmlane logo">
                        </a>

                        <button class="menu-close-btn" data-menu-close-btn>
                            <ion-icon name="close-outline"></ion-icon>
                        </button>

                    </div>

                    <ul class="navbar-list">

                        <li>
                            <a href="{{ route('home') }}" class="navbar-link">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('anime') }}" class="navbar-link">animes</a>
                        </li>
                        <li>
                            <a href="{{ route('films') }}" class="navbar-link">Movie</a>
                        </li>

                        <li>
                            <a href="{{ route('about') }}" class="navbar-link">About</a>
                        </li>

                        <li>
                            <a href="{{ route('series') }}" class="navbar-link">Web Series</a>
                        </li>

                        <li>
                            <a href="{{ route('pricing') }}" class="navbar-link">Pricing</a>
                        </li>

                    </ul>

                    <ul class="navbar-social-list">

                        <li>
                            <a href="#" class="navbar-social-link">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="navbar-social-link">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="navbar-social-link">
                                <ion-icon name="logo-pinterest"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="navbar-social-link">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="navbar-social-link">
                                <ion-icon name="logo-youtube"></ion-icon>
                            </a>
                        </li>

                    </ul>

                </nav>

            </div>
        </header>





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






                <!--
      - #FOOTER
    -->

                <footer class="footer">

                    <div class="footer-top">
                        <div class="container">

                            <div class="footer-brand-wrapper">

                                <a href="{{ route('home') }}" class="logo">
                                    <img src="{{ asset('image/series/logo.png') }}" width="100px"
                                        alt="Filmlane logo">
                                </a>

                                <ul class="footer-list">

                                    <li>
                                        <a href="{{ route('home') }}" class="footer-link">Home</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('films') }}" class="footer-link">Movie</a>
                                    </li>

                                    <li>
                                        <a href="#" class="footer-link">TV Show</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('series') }}" class="footer-link">Web Series</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('pricing') }}" class="footer-link">Pricing</a>
                                    </li>

                                </ul>

                            </div>

                            <div class="divider"></div>

                            <div class="quicklink-wrapper">

                                <ul class="quicklink-list">

                                    <li>
                                        <a href="#" class="quicklink-link">Faq</a>
                                    </li>

                                    <li>
                                        <a href="#" class="quicklink-link">Help center</a>
                                    </li>

                                    <li>
                                        <a href="#" class="quicklink-link">Terms of use</a>
                                    </li>

                                    <li>
                                        <a href="#" class="quicklink-link">Privacy</a>
                                    </li>

                                </ul>

                                <ul class="social-list">

                                    <li>
                                        <a href="#" class="social-link">
                                            <ion-icon name="logo-facebook"></ion-icon>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="social-link">
                                            <ion-icon name="logo-twitter"></ion-icon>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="social-link">
                                            <ion-icon name="logo-pinterest"></ion-icon>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="social-link">
                                            <ion-icon name="logo-linkedin"></ion-icon>
                                        </a>
                                    </li>

                                </ul>

                            </div>

                        </div>
                    </div>



                </footer>





                <!--
      - #GO TO TOP
    -->

                <a href="#top" class="go-top" data-go-top>
                    <ion-icon name="chevron-up"></ion-icon>
                </a>






                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        // Get the WhatsApp and Facebook share buttons
                        const whatsappShareButton = document.getElementById('whatsappShare');
                        const facebookShareButton = document.getElementById('facebookShare');

                        // Retrieve movie data from data-movie attribute
                        const movieData = JSON.parse(document.body.getAttribute('data-movie'));

                        // Add a click event listener to the WhatsApp share button
                        whatsappShareButton.addEventListener('click', function() {
                            // Generate the sharing message based on the movie details
                            const shareMessage =
                                `${movieData.original_title} - ${movieData.overview}\n${window.location.href}`;

                            // Open the WhatsApp sharing link with the message
                            const whatsappLink = `https://wa.me/?text=${encodeURIComponent(shareMessage)}`;
                            window.open(whatsappLink, '_blank');
                        });

                        // Add a click event listener to the Facebook share button
                        facebookShareButton.addEventListener('click', function() {
                            // Generate the sharing link based on the movie details
                            const shareLink = window.location.href; // You can customize this based on your requirements

                            // Open the Facebook sharing link
                            const facebookLink =
                                `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(shareLink)}`;
                            window.open(facebookLink, '_blank');
                        });
                    });
                </script>


                <!--
      - ionicon link
    -->
                <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </body>
</body>

</html>
