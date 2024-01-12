<!DOCTYPE html>
<html lang="en">
<head>
  @include('frontend.components.headlinks',['page'=>'Best movie'])
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
                @include('frontend.components.movieslist',['shuffledTops'=>$shuffledTops])
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
