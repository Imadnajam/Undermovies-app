<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UnderMovie - Best Anime</title>
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
         <a href="{{route('home')}}"> <img src="{{asset('image/series/logo.png')}}" width="100px" ></a>
          <p class="section-subtitle">Online Streaming</p>

          <h2 class="h2 section-title">Top Rated Anime</h2>

          <ul class="filter-list">

            <li>
              <button class="filter-btn">Shounen</button>
            </li>

            <li>
              <button class="filter-btn">Seinen</button>
            </li>

            <li>
              <button class="filter-btn">Shoujo</button>
            </li>
            <li>
              <button class="filter-btn">Josei</button>
            </li>
            <li>
              <button class="filter-btn">Isekai</button>
            </li>
            <li>
              <button class="filter-btn">Slice of Life</button>
            </li>
            <li>
              <button class="filter-btn">fantastique</button>
            </li>
            <li>
              <button class="filter-btn">Mecha</button>
            </li>
            <li>
              <button class="filter-btn">Psychological</button>
            </li>
            <li>
              <button class="filter-btn">Romance</button>
            </li>
            <li>
              <button class="filter-btn">Horror</button>
            </li>
            <li>
              <button class="filter-btn">Comedy</button>
            </li>

            
          </ul>

          <ul class="movies-list">
            @foreach ($animes as $anime)
            <li>
                <div class="movie-card">
                    <a href="{{ route('detailanime',['id' => $anime['Aid']]) }}">
                        <figure class="card-banner">
                            <img src="{{ $anime['ImageURL'] }}" alt="{{ $anime['Name'] }}">
                        </figure>
                    </a>
        
                    <div class="title-wrapper">
                        <a href="{{ route('detailmovie',['id' => $anime['Aid']]) }}">
                            <h3 class="card-title">{{ $anime['Name'] }}</h3>
                        </a>
        
                        <time datetime="{{ $anime['Released'] }}">{{ $anime['Released'] }}</time>
                    </div>
        
                    <div class="card-meta">
                        <div class="badge badge-outline">{{ $anime['Type'] }}</div>
        
                        
                    </div>
                </div>
            </li>
        @endforeach
        
          </ul>

        </div>
      </section>


      <script src="{{asset('js/home.js')}}">

      </script>
    
      <!-- 
        - ionicon link
      -->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    

</body>
</html>