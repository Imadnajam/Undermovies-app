<section class="table">
    <div id="plan" class="table-header">
        <span>{{ __('pricing.JTHP') }}</span>
        <h2>{{ __('pricing.SP') }}</h2>
        <p>{{ __('pricing.SPP') }}</p>
     </div>

    <div class="price-tags">
        <div class="price-tag">
            <img src="{{ asset('image/pricing/Asset3@4x.svg') }}" width="108" height="94">
            <span>{{ __('pricing.Basic') }}</span>
            <h4><sup>$</sup>0<sub>/{{ __('pricing.month')}}</sub></h4>
            <p{{ __('pricing.BasicDec') }}></p>
            <a href="#" class="price-btn">{{ __('pricing.Selectplan') }}</a>
        </div>

        <div class="price-tag">
            <img src="{{ asset('image/pricing/Asset2@4x.svg') }}" width="120" height="108">
            <span>{{ __('pricing.Standard') }}</span>
            <h4><sup>$</sup>29<sub>/{{ __('pricing.month') }}</sub></h4>
            <p>{{ __('pricing.StandardDec') }}</p>
            <a href="#" class="price-btn">{{ __('pricing.Selectplan') }}</a>
        </div>
        <div class="price-tag">
            <img src="{{ asset('image/pricing/Asset1@4x.svg') }}" width="112" height="110">

            <span>{{ __('pricing.Premium') }}</span>
            <h4><sup>$</sup>35<sub>/{{ __('pricing.month') }}</sub></h4>
            <p>{{ __('pricing.PremiumDec') }}</p>
            <a href="#" class="price-btn">{{ __('pricing.Selectplan') }}</a>
        </div>
    </div>
</section>

<div class="cta">
    <span>{{ __('pricing.Cta1') }}</span>
    <h4>{{ __('pricing.Cta2') }}</h4>
    <a href="#" class="cta-btn">{{ __('pricing.Cta3') }}</a>
    <a href="#" class="cta-btn">{{ __('pricing.Cta4') }}</a>
</div>

<section class="footer-wrap">
    <div class="footer">
        <div class="logo">
            <img src="{{ asset('image/series/logo.png') }}" width="100px">

        </div>

        <div class="line"></div>
        <div class="legal">
            <div class="copyright">
                <span>{{ __('pricing.copyright') }}</span>
            </div>
            <div class="social-btns">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
        </div>

</section>
