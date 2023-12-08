<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- StyleSheet -->
    <link rel="stylesheet" href="{{asset('css/login.css')}}" />
    
    <title>Sign Up | Login Form</title>
  </head>
  <body>
    <section>
      <div class="container">
        <div class="user login">
          <div class="img-box">
            <img src="{{asset('image/login/l2.jpeg')}}" alt="" />
          </div>
          <div class="form-box">
            <div class="top">
              <p>
                Not a member?
                <span data-id="#ff0066">Register now</span>
              </p>
            </div>
            <form method="POST" action="{{ route('authentification-verif') }}">
              <div class="form-control">
                <h2>Hello Again!</h2>
                <p>Welcome back you've been missed.</p>
                <input type="email" name='Email'  placeholder="Enter Email"  />
                <div>
                  <input type="password" placeholder="Password"  name='Password'/>
                  <div class="icon form-icon">
                    <!-- <img src="./images/eye.svg" alt="" /> -->
                  </div>
                </div>
              <a href=""><span>Recovery Password</span></a> 
                <input type="Submit" value="Login" />
              </div>
              <div class="form-control">
                <p>Or continue with</p>
                <div class="icons">
                  <div class="icon">
                    <img src="{{asset('image/login/search.svg')}}" alt="" />
                  </div>
                  <div class="icon">
                    <img src="{{asset('image/login/apple.svg')}}" alt="" />
                  </div>
                  <div class="icon">
                    <img src="{{asset('image/login/facebook.svg')}}" alt="" />
                  </div>
                 
                </div>
              </div>
            </form>
          </div>
        </div>

        <!-- Register -->
        <div class="user signup">
          <div class="form-box">
            <div class="top">
              <p>
                Already a member?
                <span data-id="#1a1aff">Login now</span>
              </p>
            </div>
            <form method="POST" action="{{ route('authentification-add') }}">
              <div class="form-control">
                <h2>Welcome !</h2>
                <p>It's good to have you.</p>
                <input type="text" placeholder="Enter User name" name="Name" />
                <input type="email" placeholder="Enter Email" name="Email" />
                <div>
                  <input type="password" placeholder="Password" name="Password" />
                  <div class="icon form-icon">
                    <img src="{{asset('image/login/eye.svg')}}" alt="" />
                  </div>
                </div>
                <div>
                  <input type="password" placeholder="Confirm Password" name="CPassword"/>
                  <div class="icon form-icon">
                    <img src="{{asset('image/login/eye.svg')}}" alt="" />
                  </div>
                </div>
                <input type="Submit" value="Register" />
              </div>
              <div class="form-control">
                <p>Or continue with</p>
                <div class="icons">
                  <div class="icon">
                    <img src="{{asset('image/login/search.svg')}}" alt="" />
                  </div>
                  <div class="icon">
                    <img src="{{asset('image/login/apple.svg')}}" alt="" />
                  </div>
                  <div class="icon">
                    <img src="{{asset('image/login/facebook.svg')}}" alt="" />
                  </div>
                  
                </div>
              </div>
            </form>
          </div>
          <div class="img-box">
            <img src="{{asset('image/login/l3.jpeg')}}" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- IndexJs -->
    <script src="{{asset('js/login.js')}}"></script>
  </body>
</html>
