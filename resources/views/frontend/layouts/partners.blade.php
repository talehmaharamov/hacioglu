<section class="partner-area">
    <div class="partner-area__sec-title">
        <h3><span>We worked with royal clients</span></h3>
    </div>
    <div class="container">
        <div class="brand-content">
            <div class="owl-carousel owl-theme thm-owl__carousel partner-carousel" data-owl-options='{
                        "loop": false,
                        "autoplay": true,
                        "margin": 30,
                        "nav": false,
                        "dots": false,
                        "smartSpeed": 500,
                        "autoplayTimeout": 10000,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "responsive": {
                                "0": {
                                    "items": 1
                                },
                                "768": {
                                    "items": 3
                                },
                                "992": {
                                    "items": 4
                                },
                                "1200": {
                                    "items": 5
                                }
                            }
                        }'>

                @foreach($partners as $partner)
                    <div class="single-partner-logo-box">
                        <a href="{{ $partner->link }}"><img src="{{ $partner->photo }}"
                                                            alt="{{ $partner->alt }}"></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
