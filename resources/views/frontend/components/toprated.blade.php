<div class="container">

    <p class="section-subtitle">{{ __('home.Online_Streaming') }}</p>

    <h2 class="h2 section-title">{{ __('home.Top_Rated_Movies') }}</h2>

    <ul class="filter-list">

        <li>
            <button class="filter-btn">{{ __('home.movie') }}</button>
        </li>

        <li>
            <button class="filter-btn">{{ __('home.series') }}</button>
        </li>

        <li>
            <button class="filter-btn">{{ __('home.anime') }}</button>
        </li>

        <li>
            <button class="filter-btn">{{ __('home.documentary') }}</button>
        </li>

    </ul>

    <ul class="movies-list">
        @php
            $shuffledTops = $tops['results'];
            shuffle($shuffledTops);

        @endphp


        @foreach ($shuffledTops as $top)
            @if (is_array($top) && isset($top['poster_path']))
                <li>
                    <div class="movie-card">
                        <a href="{{ route('detailmovieI', ['id' => $top['id']]) }}">
                            <figure class="card-banner">
                                <img src="{{ 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/' . $top['poster_path'] }}"
                                    alt="Movie poster">
                            </figure>
                        </a>

                        <div class="title-wrapper">
                            <a href="#detail">
                                <h3 class="card-title">{{ $top['title'] }}</h3>
                            </a>

                            <time
                                datetime="{{ $top['release_date'] }}">{{ $top['release_date'] }}</time>
                        </div>

                        <div class="card-meta">
                            <div class="badge badge-outline">HD</div>

                            <div class="duration">
                                <ion-icon name="time-outline"></ion-icon>

                                <time datetime="PT137M">137 min</time>
                            </div>

                            <div class="rating">
                                <ion-icon name="star"></ion-icon>

                                <data>{{ $top['vote_average'] }}</data>
                            </div>
                        </div>

                    </div>
                </li>
            @endif
        @endforeach

    </ul>

</div>