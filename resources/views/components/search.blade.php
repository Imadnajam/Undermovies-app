<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>UnderMovie - Search</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">

    <!--
    - google font link
  -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .form-container {
            max-width: 400px;
            margin: 50px auto;

            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(24, 8, 8, 0.1);
        }

        .input-group {
            display: flex;
        }

        .input-group label {
            display: none;
        }
        #search{
            height: 53px;
            width: 220px
        }
        .form-control {
            flex: 1;
            padding: 8px;
            border: 1px solid #ffffff;
            border-radius: 4px;
            margin-right: -1px;
        }

     
    </style>
</head>

<body>
    <header class="header" data-header>
        @include('frontend.components.header')
    </header><br>
    <section class="top-rated">
        <div class="container">
            <div class="form-container">
                <form action="{{ route('searchController') }}" method="get" class="form-inline my-2 my-lg-0">
                    <div class="input-group">
                        
                        <input type="text" id="search" name="search" value="{{ old('search', $search ?? '') }}"
                            class="form-control" placeholder="Film Title">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-outline-primary">Search</button>
                        </div>
                    </div>
                </form>
            </div>







            @if (!empty($collections))
                <ul class="movies-list">
                    @foreach ($collections as $collection)
                        <li>
                            <div class="movie-card">
                                <a href="{{ route('detailmovieI', ['id' => $collection['id']]) }}">
                                    <figure class="card-banner">
                                        <img src="{{ 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/' . $collection['poster_path'] }}"
                                            alt="{{ $collection['original_title'] }}">
                                    </figure>
                                </a>

                                <div class="title-wrapper">
                                    <a href="#">
                                        <h3 class="card-title">{{ $collection['original_title'] }}</h3>
                                    </a>
                                </div>

                            
                                <div class="card-meta">
                                    <div class="badge badge-outline">HD</div>

                                    <div class="duration">
                                        <ion-icon name="time-outline"></ion-icon>

                                        <time datetime="PT137M">137 min</time>
                                    </div>

                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>

                                        <data>{{ $collection['vote_average'] }}</data>
                                    </div>
                                </div>
                            </div>

                        </li>
                    @endforeach
                </ul>
            @else
                {{-- Your code when $collections is empty --}}
                <p>No collections found.</p>
            @endif


            <br>




        </div>
    </section>


    <script src="{{ asset('js/home.js') }}"></script>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
