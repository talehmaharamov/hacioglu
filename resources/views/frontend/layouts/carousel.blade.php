@foreach($carouselCategories as $cC)
    <section class="project-style4-area">
        <div class="container">
            <div class="sec-title">
                <div class="sub-title">
                    <div class="border-left">

                    </div>
                </div>
                <h2>{{ $cC->translate(app()->getLocale())->name ?? '' }}</h2>
            </div>
        </div>

        <div class="auto-container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="owl-carousel owl-theme thm-owl__carousel project-style3-carousel owl-nav-style-one"
                         data-owl-options='{
                            "loop": false,
                            "autoplay": false,
                            "margin": 30,
                            "nav": true,
                            "dots": false,
                            "smartSpeed": 500,
                            "autoplayTimeout": 10000,
                            "navText": ["<span class=\"left icon-left-arrow\"></span>","<span class=\"right icon-right-arrow\"></span>"],
                            "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 2
                                    },
                                    "992": {
                                        "items": 3
                                    },
                                    "1200": {
                                        "items": 4
                                    }
                                }
                            }'>
                        @foreach($cC->content as $key => $cContent)
                            <div class="single-service-style7">
                                <div class="img-holder">
                                    <div class="inner">
                                        <img src="{{asset($cContent->photo)}}"
                                             alt="{{ $cContent->translate(app()->getLocale())->alt ?? '' }}"/>
                                    </div>
{{--                                    <div class="icon">--}}
{{--                                        <span class="icon-roof-1"></span>--}}
{{--                                    </div>--}}
                                </div>
                                <div class="title-holder">
                                    <h3>
                                        <a href="{{ route('frontend.selectedContent',$cContent->slug) }}">{{ $cContent->translate(app()->getLocale())->name ?? '' }}</a>
                                    </h3>
                                    <div class="text">
                                        <p>
                                            {!!   $cContent->translate(app()->getLocale())->short_description ?? '' !!}
                                        </p>
                                    </div>
                                    <div class="btn-box">
                                        <a href="{{ route('frontend.selectedContent',$cContent->slug) }}">@lang('backend.read-more')
                                            <span class="icon-right-1"></span></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endforeach
