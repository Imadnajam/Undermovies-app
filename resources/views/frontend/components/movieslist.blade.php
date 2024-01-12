@foreach ($shuffledTops as $film)
                    <li>
                        <div class="movie-card">
                            <a href="{{route('detailmovieI',['id' => $film['id']])}}">
                                <figure class="card-banner">
                                    <img src="{{ 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/' . $film['poster_path'] }}" alt="{{ $film['original_title'] }}">
                                </figure>
                            </a>

                            <div class="title-wrapper">
                                <a href="{{ route('detailmovieI', ['id' => $film['id']]) }}">
                                    <h3 class="card-title">{{ $film['original_title'] }}</h3>
                                </a>

                                <time datetime="{{ $film['release_date'] }}">{{ $film['release_date'] }}</time>
                            </div>

                            <div class="card-meta">
                                <div class="badge badge-outline">{{ $film['vote_average'] }}</div>

                                <div class="duration">
                                    <ion-icon name="time-outline"></ion-icon>
                                    <time datetime=""></time>
                                </div>

                                <div class="rating">
                                    <ion-icon name="star"></ion-icon>
                                    <data>{{ $film['vote_count'] }}</data>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach