<div class="container">

    <div class="flex-wrapper">

        <div class="title-wrapper">
            <p class="section-subtitle">{{ __('home.online_streaming') }}</p>

            <h2 class="h2 section-title">{{ __('home.upcoming_movies') }}</h2>

        </div>

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

        </ul>

    </div>

    @php
        $shuffledfilms = $films['results'];
        shuffle($shuffledfilms);

    @endphp

    <ul class="movies-list  has-scrollbar">
        @foreach ($shuffledfilms as $film)
            @if (is_array($film) && isset($film['poster_path']))
                <li>
                    <div class="movie-card">
                        <a href="{{ route('detailmovieI', ['id' => $film['id']]) }}">
                            <figure class="card-banner">
                                <img src="{{ 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/' . $film['poster_path'] }}"
                                    alt="Movie poster">
                            </figure>
                        </a>

                        <div class="title-wrapper">
                            <a href="#detail">
                                <h3 class="card-title">{{ $film['title'] }}</h3>
                            </a>

                            <time
                                datetime="{{ $film['release_date'] }}">{{ $film['release_date'] }}</time>
                        </div>

                        <div class="card-meta">
                            <div class="badge badge-outline">HD</div>

                            <div class="duration">
                                <ion-icon name="time-outline"></ion-icon>

                                <time datetime="PT137M">137 min</time>
                            </div>

                            <div class="rating">
                                <ion-icon name="star"></ion-icon>

                                <data>{{ $film['vote_average'] }}</data>
                            </div>
                        </div>

                    </div>
                </li>
            @endif
        @endforeach

    </ul>

</div>