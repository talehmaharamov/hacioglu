@extends('master.frontend')
@section('title',__('title.about'))
@section('front')
    @foreach($abouts as $about)
        <section class="vision-style1-area about-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="vision-style1__content-box">
                            <div class="sec-title">
                                <h2>{{ $about->translate(app()->getLocale())->title ?? __('backend.translation-not-found') }}</h2>
                            </div>
                            <div class="vision-style1__content-box__inner">
                                <div class="top-text">
                                    <p>
                                        {!! $about->translate(app()->getLocale())->description ?? __('backend.translation-not-found') !!}
                                    </p>
                                </div>
                                <br/>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-5">
                        <div class="about-style3-img-box">
                            <div class="inner">
                                <img src="{{ $about->photo }}"
                                     alt="{{$about->translate(app()->getLocale())->alt ?? __('backend.translation-not-found')}}"/>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    @endforeach
@endsection
