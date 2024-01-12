@foreach ($data['episodes'] as $seriesE)
<li>
    <div class="movie-card">
        <a href="#">
            <figure class="card-banner">
                <img src="{{ 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/' . $seriesE['still_path'] }}" alt="{{ $seriesE['name'] }}">
            </figure>
        </a>
        <br>

        <div class="title-wrapper">
            <a href="#">
                <h3 class="card-title">{{ $seriesE['name'] }}</h3>
            </a>

            <time datetime="{{ $seriesE['air_date'] }}">{{ $seriesE['air_date'] }}</time>
        </div>

        <div class="card-meta">
            <div class="badge badge-outline">{{ $seriesE['vote_average'] }}</div>

            <div class="duration">
                <ion-icon name="time-outline"></ion-icon>
                <time datetime="{{ $seriesE['runtime'] }}">{{ $seriesE['runtime'] }} MIN</time>
            </div>

            <div class="rating">
                <ion-icon name="star"></ion-icon>
                <data>{{ $seriesE['vote_count'] }}</data>
            </div>
        </div>
    </div>
</li>
@endforeach