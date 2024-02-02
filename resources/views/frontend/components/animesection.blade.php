<section class="top-rated">
    <div class="container">
        <header class="header" data-header>
            @include('frontend.components.header')
        </header><br><br>
         <p class="section-subtitle">{{__('anime.OS')}} </p>

        <h2 class="h2 section-title">{{__('anime.TRA')}}</h2>


        <div class="form-container">
            <form action="{{ route('anime') }}" method="get" class="form-inline my-2 my-lg-0">
                <div class="input-group">
                    <label for="search" class="sr-only">{{__('anime.SearchA')}}:</label>
                    <input type="text" id="search" name="search" value="{{ $search }}"
                        class="form-control" placeholder="Enter anime name">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-outline-primary">{{__('anime.Search')}}</button>
                    </div>
                </div>
            </form>
        </div>

        <ul class="filter-list">

            <li>
                <button class="filter-btn">{{__('anime.Shounen')}}</button>
            </li>

            <li>
                <button class="filter-btn">{{__('anime.Seinen')}}</button>
            </li>

            <li>
                <button class="filter-btn">{{__('anime.Shoujo')}}</button>
            </li>
            <li>
                <button class="filter-btn">{{__('anime.Josei')}}</button>
            </li>
            <li>
                <button class="filter-btn">{{__('anime.Shoujo')}}</button>
            </li>
            <li>
                <button class="filter-btn">{{__('anime.Slice')}}</button>
            </li>
            <li>
                <button class="filter-btn">{{__('anime.fantastique')}}</button>
            </li>
            <li>
                <button class="filter-btn">{{__('anime.Mecha')}}</button>
            </li>
            <li>
                <button class="filter-btn">{{__('anime.Psychological')}}</button>
            </li>
            <li>
                <button class="filter-btn">{{__('anime.Romance')}}</button>
            </li>
            <li>
                <button class="filter-btn">{{__('anime.Horror')}}</button>
            </li>
            <li>
                <button class="filter-btn">{{__('anime.Comedy')}}</button>
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