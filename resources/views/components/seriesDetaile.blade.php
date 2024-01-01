<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$tvSeriesData['name']}}</title>

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

<body id="#top">

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
                    <a href="{{route('anime')}}" class="navbar-link">animes</a>
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

            <img src="{{'https://image.tmdb.org/t/p/w300_and_h450_bestv2/'.$tvSeriesData['backdrop_path']}}" alt="Free guy movie poster">

            <button class="play-btn">
              <ion-icon name="play-circle-outline"></ion-icon>
            </button>

          </figure>

          <div class="movie-detail-content">

            <p class="detail-subtitle">New Episodes</p>

            <h1 class="h1 detail-title">
              {{$tvSeriesData['name']}}
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

                  <time datetime="{{$tvSeriesData['first_air_date']}}">{{$tvSeriesData['first_air_date']}}</time>
                </div>

                <div>
                  <ion-icon name="time-outline"></ion-icon>

                  <time datetime="{{$tvSeriesData['popularity']}}">{{$tvSeriesData['popularity']}}</time>
                </div>

              </div>

            </div>

            <p class="storyline">
              {{$tvSeriesData['overview']}}
              
              
              
            </p>

            <div class="details-actions">

              <button class="share">
                <ion-icon name="share-social"></ion-icon>

                <span>Share</span>
              </button>

              <div class="title-wrapper">
                <p class="title">Prime Video</p>

                <p class="text">Streaming Channels</p>
              </div>

              <button class="btn btn-primary">
                <ion-icon name="play"></ion-icon>

                <span>Watch Now</span>
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

                <a href="#">
                  <figure class="card-banner">
                    <img src="https://image.tmdb.org/t/p/w500{{ $season['poster_path'] }}" alt="{{ $season['name'] }}" alt="{{ $season['name'] }}">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="#">
                    <h3 class="card-title">{{ $season['name'] }}</h3>
                  </a>

                  <time datetime="{{ $season['air_date'] }}">{{ $season['air_date'] }}</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">Episode Count: {{ $season['episode_count'] }}</div>

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





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand-wrapper">

          <a href="{{route('home')}}" class="logo">
            <img src="{{ asset('image/series/logo.png') }}" width="100px" alt="Filmlane logo">
          </a>

          <ul class="footer-list">

            <li>
              <a href="./index.html" class="footer-link">Home</a>
            </li>

            <li>
              <a href="#" class="footer-link">Movie</a>
            </li>

            <li>
              <a href="#" class="footer-link">TV Show</a>
            </li>

            <li>
              <a href="./Web Series/index.html" class="footer-link">Web Series</a>
            </li>

            <li>
              <a href="./pricing/pricing-template.html" class="footer-link">Pricing</a>
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

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2023 <a href="#">NJ</a>. All Rights Reserved
        </p>

        <img style="width: 100px" src="{{ asset('image/series/logo.png') }}" alt="Online banking companies logo" class="footer-bottom-img">

      </div>
    </div>

  </footer>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->

  <script src="{{ asset('js/home.js') }}"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>