@extends('master.frontend')
@section('title',$category->translate(app()->getLocale())->meta_title ?? '')
@section('meta')
    <meta name="description" content="{{ $category->translate(app()->getLocale())->meta_description ?? '' }}">
@endsection
@section('front')
    <section class="service-page">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <div class="border-right"></div>
                </div>
                <h2>{{ $category->translate(app()->getLocale())->name ?? '' }}</h2>
            </div>
            <div class="page-search flex-between">
                <div class="result">
                    <p>{{ __('pagination.showing_results', ['firstItem' => $contents->firstItem(), 'lastItem' => $contents->lastItem(), 'total' => $contents->total() ]) }}</p>
                    @if($contents->isEmpty())
                        <p class="mt-4">@lang('messages.info-not-found')</p>
                    @endif
                </div>
                <div class="search-box flex-between">
                    <input type="text" placeholder="@lang('backend.search')"/>
                    <i class="fa fa-search"></i>
                </div>
            </div>
            <div class="row">
                @foreach($contents as $content)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="single-service-style7">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{ asset($content->photo) }}"
                                         alt="{{ $content->translate(app()->getLocale())->alt ?? '' }}"/>
                                </div>
                            </div>
                            <div class="title-holder">
                                <h3>
                                    <a href="{{ route('frontend.selectedContent',$content->slug) }}">{{ $content->translate(app()->getLocale())->name ?? '' }}</a>
                                </h3>
                                <div class="text">
                                    <p>
                                        {!! $content->translate(app()->getLocale())->short_description ?? '' !!}
                                    </p>
                                </div>
                                <div class="btn-box">
                                    <a href="{{ route('frontend.selectedContent',$content->slug) }}">@lang('backend.read-more')
                                        <span
                                            class="icon-right-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @if(!$contents->isEmpty())
                    <div class="row">
                        <div class="col-xl-12">
                            <ul class="styled-pagination pdtop0 clearfix">
                                {{ $contents->links('frontend.custom-pagination') }}
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection

