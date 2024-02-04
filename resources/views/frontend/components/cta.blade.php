<div class="container">
    <div class="title-wrapper">
        <h2 class="cta-title">{{ __('home.Trial') }}</h2>
        <p class="cta-text">
            {{ __('home.ctaE') }}
        </p>
    </div>

    
    <form action="{{route('Get_started')}}" class="cta-form">
        <input type="email" name="email" required placeholder="Enter your email"
            class="email-field">

        <button type="submit" class="cta-form-btn">{{ __('home.Get_started') }}</button>
    </form>
</div>