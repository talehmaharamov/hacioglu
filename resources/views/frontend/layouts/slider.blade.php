<section class="main-slider main-slider-style4">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
        <div class="swiper-wrapper">
            @foreach($sliders as $slider)
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url({{ asset($slider->photo) }});">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-content">
                                    <div class="main-slider-content__inner">
                                        <div class="sub-title">
                                            <h5>Trusted Roofing Company</h5>
                                        </div>
                                        <div class="big-title">
                                            <h2>Our Best Roof<br> Service Inspection</h2>
                                        </div>
                                        <div class="text">
                                            <p>
                                                We believe in providing top quality workmanship and are<br> so
                                                confident in our level of service that we back it up<br> with a good
                                                quality.
                                            </p>
                                        </div>
                                        <div class="btn-box">
                                            <a class="btn-one" href="about.html">
                                                    <span class="txt">
                                                        discover more
                                                        <i class="icon-right"></i>
                                                    </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- If we need navigation buttons -->
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="icon-left-arrow left"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="icon-right-arrow right"></i>
            </div>
        </div>

    </div>
</section>
