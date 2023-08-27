<header class="main-header main-header-style4">
    <div class="main-header-style4__top">
        <div class="container">
            <div class="outer-box">
                <div class="main-header-style4__top-left">
                    <div class="phone-number-box-style4"></div>
                    <div class="consultation-box"></div>
                </div>
                <div class="main-header-style4__top-right">
                    <div class="header-social-link-style1">
                        <ul class="clearfix">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="language-switcher">
                        <div id="polyglotLanguageSwitcher">
                            <form action="#">
                                <select id="polyglot-language-options">
                                    @foreach(active_langs() as $lang)
                                        <option id="{{ $lang->code }}"
                                                value="{{ $lang->code }}">{{ Str::upper($lang->code) }}</option>
                                    @endforeach
                                </select>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <nav class="main-menu main-menu-style1">
        <div class="main-menu__wrapper clearfix">
            <div class="container">
                <div class="main-menu__wrapper-inner">

                    <div class="main-menu-style1-left">
                        <div class="logo-box-style1">
                            <a href="{{ route('frontend.index') }}">
                                <img style="width: 60px;" src="{{ asset('backend/images/logo.png') }}"
                                     alt="@lang('title.logo-title')" title="">
                            </a>
                        </div>
                    </div>

                    <div class="main-menu-style1-right">
                        <div class="main-menu-box">
                            <a href="#" class="mobile-nav__toggler">
                                <i class="icon-bars"></i>
                            </a>
                            <ul class="main-menu__list">
                                <li class="dropdown current"><a
                                        href="{{ route('frontend.index') }}">@lang('backend.home-page')</a></li>
                                @foreach($mainCategories as $ms)
                                    <li class="dropdown">
                                        <a href="#">{{ $ms->translate(app()->getLocale())->name ?? '' }}</a>
                                        <ul>
                                            @foreach($ms->subcategories as $msc)
                                                <li>
                                                    <a href="{{ route('frontend.selectedCategory',$msc->slug) }}">{{ $msc->translate(app()->getLocale())->name ?? '' }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                                <li>
                                    <a href="{{ route('frontend.blogs') }}">@lang('backend.blogs')</a>
                                </li>
                                <li>
                                    <a href="{{ route('frontend.about') }}">@lang('backend.about')</a>
                                </li>
                                <li>
                                    <a href="{{ route('frontend.contact-us-page') }}">@lang('backend.contact-us')</a>
                                </li>
                            </ul>
                        </div>
                        <div class="box-search-style1">
                            <a href="#" class="search-toggler">
                                <img src="{{asset('frontend/images/icon/icon-2__searchbar.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div>
</div>
