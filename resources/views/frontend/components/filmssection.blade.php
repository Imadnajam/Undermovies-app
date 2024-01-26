<header class="header" data-header>
    @include('frontend.components.header')
</header>
<section class="top-rated">

    <div class="container">
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

      



        <ul class="movies-list">
            @include('frontend.components.movieslist',['films'=>$films])
        </ul><br><br>
        <div class="pagination justify-content-center custom-background">
            {{ $films->appends(request()->query())->links('pagination::bootstrap-4') }}
        </div>


    </div>
</section>