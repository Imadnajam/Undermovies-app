<!DOCTYPE html>
<html lang="en">
<head>
  @include('frontend.components.headlinks',['page'=>'Best movie'])
  @include('frontend.components.paginationStyle')
</head>

<body>
    @include('frontend.components.filmssection',['films'=>$films])
  
    <script src="{{ asset('js/home.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
