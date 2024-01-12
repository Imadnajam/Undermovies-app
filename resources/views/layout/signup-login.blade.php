<!DOCTYPE html>
<html lang="en">
  <head>
@include('frontend.components.loginSignHead')
  </head>
  <body>
    <section>
      <div class="container">
        @include('frontend.components.userLogin')
        <!-- Register -->
        @include('frontend.components.userSignup')
      </div>
    </section>
    <script src="{{asset('js/login.js')}}"></script>
  </body>
</html>
