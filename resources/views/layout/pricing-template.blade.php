<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.components.headlinks',['page'=>'home'])
    @include('frontend.components.pricingHead')
    
</head>

<body>
    <header class="header" data-header>
        @include('frontend.components.header')
    </header>
    @include('frontend.components.pricingsection')
</body>

</html>
