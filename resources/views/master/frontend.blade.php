<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('frontend.includes.meta')
    @include('frontend.includes.styles')
</head>
<body>
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KTS968RL"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
@include('frontend.includes.sidebar')
<div class="page-wrapper boxed_wrapper">
    @include('frontend.includes.sidebar')
    @include('frontend.includes.header')
    @yield('front')
{{--    @include('frontend.layouts.carousel')--}}
{{--    @include('frontend.layouts.faq')--}}
    @include('frontend.includes.footer')
</div>

@include('sweetalert::alert')
@include('frontend.includes.scripts')
@yield('scripts')

</body>
</html>
