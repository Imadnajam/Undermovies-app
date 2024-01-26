<section class="top-rated">
    <div class="container">
        <header class="header" data-header>
            @include('frontend.components.header')
        </header><br><br>
         <p class="section-subtitle">Online Streaming</p>

        <h2 class="h2 section-title">Top Rated Anime</h2>


        <div class="form-container">
            <form action="{{ route('anime') }}" method="get" class="form-inline my-2 my-lg-0">
                <div class="input-group">
                    <label for="search" class="sr-only">Search by Anime Name:</label>
                    <input type="text" id="search" name="search" value="{{ $search }}"
                        class="form-control" placeholder="Enter anime name">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-outline-primary">Search</button>
                    </div>
                </div>
            </form>
        </div>

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
            @include('frontend.components.animelist', ['animes' => $animes])
        </ul>


        <br>
        <div class="pagination justify-content-center custom-background">
            {{ $animes->appends(request()->query())->links('pagination::bootstrap-4') }}
        </div>



    </div>
</section>