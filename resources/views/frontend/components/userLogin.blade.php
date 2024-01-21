
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
          <p>  @if (session('success'))
            <div style="color: rgb(46, 146, 46)">
                {{ session('success') }}
            </div>
          @endif
          
          @if (session('error'))
            <div style="color: red">
                {{ session('error') }}
            </div>
          @endif</p>
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
