<header class="header" data-header>
    @include('frontend.components.header')
</header>
<section class="top-rated">

    <div class="container">
           <p class="section-subtitle">{{__('movie.OnlineStreaming')}} </p>

        <h2 class="h2 section-title">{{__('movie.TRM')}}</h2>

        <ul class="filter-list">

            <li>
                <button class="filter-btn">{{__('movie.Aventure')}}</button>
            </li>

            <li>
                <button class="filter-btn">{{__('movie.Histoire')}}</button>
            </li>
            <li>
                <button class="filter-btn">{{__('movie.Action')}}</button>
            </li>
            <li>
                <button class="filter-btn">{{__('movie.Policier')}}</button>
            </li>
            <li>
                <button class="filter-btn">{{__('movie.Sciencefiction')}}</button>
            </li>
            <li>
                <button class="filter-btn">{{__('movie.fantastique')}}</button>
            </li>
            <li>
                <button class="filter-btn">{{__('movie.horreur')}}</button>
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