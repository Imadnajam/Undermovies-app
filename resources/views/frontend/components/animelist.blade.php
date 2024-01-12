@foreach ($animes as $anime)
<li>
    <div class="movie-card">
        <a href="{{ route('detailanime', ['id' => $anime['Aid']]) }}">
            <figure class="card-banner">
                <img src="{{ $anime['ImageURL'] }}" alt="{{ $anime['Name'] }}">
            </figure>
        </a>

        <div class="title-wrapper">
            <a href="{{ route('detailmovie', ['id' => $anime['Aid']]) }}">
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