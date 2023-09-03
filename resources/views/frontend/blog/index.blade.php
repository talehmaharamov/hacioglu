@extends('master.frontend')
@section('title',__('title.blog'))
@section('front')
    <section class="service-page">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <div class="border-right"></div>
                </div>
                <h2>@lang('backend.blogs')</h2>
            </div>
            <div class="page-search flex-between" >
                <div class="result">
                    <p>{{ __('pagination.showing_results', ['firstItem' => $blogs->firstItem(), 'lastItem' => $blogs->lastItem(), 'total' => $blogs->total() ]) }}</p>
                @if($blogs->isEmpty())
                        <p class="mt-4">@lang('messages.info-not-found')</p>
                    @endif
                </div>
                <div class="search-box flex-between">
                    <input type="text" placeholder="@lang('backend.search')" />
                    <i class="fa fa-search"></i>
                </div>
            </div>
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="single-service-style7">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{ $blog->photo }}"
                                         alt="{{ $blog->translate(app()->getLocale())->alt ?? '' }}"/>
                                </div>
                            </div>
                            <div class="title-holder">
                                <h3>
                                    <a href="{{ route('frontend.blog',$blog->slug) }}">{{ $blog->translate(app()->getLocale())->name ?? '' }}</a>
                                </h3>
                                <div class="text">
                                    <p>
                                        {!! $blog->translate(app()->getLocale())->short_description ?? '' !!}
                                    </p>
                                </div>
                                <div class="btn-box">
                                    <a href="{{ route('frontend.blog',$blog->slug) }}">@lang('backend.read-more')<span
                                            class="icon-right-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="styled-pagination pdtop0 clearfix">
                            {{ $blogs->links('frontend.custom-pagination') }}
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
