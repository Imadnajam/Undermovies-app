<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>UnderMovie - Best Anime</title>

    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">

    <!--
    - google font link
  -->
  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
    
    .form-container {
            max-width: 400px;
            margin: 50px auto;
           
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(24, 8, 8, 0.1);
        }

        .input-group {
            display: flex;
        }

        .input-group label {
            display: none;
        }

        .form-control {
            flex: 1;
            padding: 8px;
            border: 1px solid #ffffff;
            border-radius: 4px;
            margin-right: -1px;
        }

        .input-group-append {
            margin-left: -1px;
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
                border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .btn-outline-primary {
            color: #ffffff;
            border-color: #9d00ff;
        }

        .btn-outline-primary:hover {
            color: #fff;
            background-color: hsl(249, 49%, 26%);
            border-color: hsl(249, 98%, 67%);
        }
        .pagination {
                color: white;
                display: flex;
                justify-content: center;
                list-style: none;
                padding: 0;
            }
        
            .pagination li {
                margin: 0 5px;
                display: inline-block;
            }
        
            .pagination a, .pagination span {
                padding: 8px 12px;
                border: 1px solid #ccc;
                text-decoration: none;
                color: #333;
                border-radius: 4px;
            }
        
            .pagination .active span {
                background-color: #007bff;
                color: #fff;
            }
        
            .pagination a:hover {
                background-color: #f0f0f0;
            }
</style>
</head>

<body>
    
    <section class="top-rated">
        <div class="container">
            <a href="{{ route('home') }}"> <img src="{{ asset('image/series/logo.png') }}" width="100px"></a>
            <p class="section-subtitle">Online Streaming</p>

            <h2 class="h2 section-title">Top Rated Anime</h2>

         
    <div class="form-container">
        <form action="{{ route('anime') }}" method="get" class="form-inline my-2 my-lg-0">
            <div class="input-group">
                <label for="search" class="sr-only">Search by Anime Name:</label>
                <input type="text" id="search" name="search" value="{{ $search }}" class="form-control" placeholder="Enter anime name">
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
                    @include('frontend.components.animelist',['animes'=>$animes])
            </ul>


<br>
            <div class="pagination justify-content-center custom-background">
                {{ $animes->appends(request()->query())->links('pagination::bootstrap-4') }}
            </div>
            
            
            
        </div>
    </section>


    <script src="{{ asset('js/home.js') }}"></script>


</body>

</html>
