<div class="container">

    <p class="section-subtitle">{{ __('home.Best_TV_Series') }}</p>

    <h2 class="h2 section-title">{{ __('home.World_Best_TV_Series') }}</h2>

    <ul class="movies-list">
        @foreach ($tvs['results'] as $tv)
            @if (is_array($tv) && isset($tv['poster_path']))
                <li>
                    <div class="movie-card">
                        <a href="{{ route('detailseries', ['id' => $tv['id']]) }}">

                            <figure class="card-banner">
                                <img src="{{ 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/' . $tv['poster_path'] }}"
                                    alt="Movie poster">
                            </figure>
                        </a>

                        <div class="title-wrapper">
                            <a href="#detail">
                                <h3 class="card-title">{{ $tv['name'] }}</h3>
                            </a>

                            <time
                                datetime="{{ $tv['first_air_date'] }}">{{ $tv['first_air_date'] }}</time>
                        </div>

                        <div class="card-meta">
                            <div class="badge badge-outline">HD</div>

                            <div class="duration">
                                <ion-icon name="time-outline"></ion-icon>

                                <time datetime="PT137M">137 min</time>
                            </div>

                            <div class="rating">
                                <ion-icon name="star"></ion-icon>

                                <data>{{ $tv['vote_average'] }}</data>
                            </div>
                        </div>

                    </div>
                </li>
            @endif
        @endforeach
        <!-- Add this button wherever you want in your view -->

    </ul>

</div>