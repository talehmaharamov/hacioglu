<div class="bottom-parallax">
    <footer class="footer-area">
        <div class="footer-top">
            <div class="container">
                <div class="footer-top__inner">
                    <ul class="footer-contact-info-box1">
                        <li>
                            <div class="footer-contact-info-box1__single">
                                <div class="icon">
                                    <span class="icon-location"></span>
                                </div>
                                <div class="text">
                                    <p>{{ settings('address_'.app()->getLocale()) }}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="footer-contact-info-box1__single">
                                <div class="icon">
                                    <span class="icon-envelope"></span>
                                </div>
                                <div class="text">
                                    <p>@lang('backend.email'):</p>
                                    <h5><a href="mailto:{{ settings('email') }}">{{ settings('email') }}</a></h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="footer-contact-info-box1__single">
                                <div class="icon">
                                    <span class="icon-telephone"></span>
                                </div>
                                <div class="text">
                                    <p>@lang('backend.phone'):</p>
                                    <h5><a href="tel:{{ settings('phone') }}">{{ settings('phone') }}</a></h5>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="bottom-inner">
                    <div class="copyright-text">
                        <p>
                            &copy; @lang('backend.copyright') <a
                                href="{{ route('frontend.index') }}">@lang('backend.hacioglu')</a> {{ now()->year }}
                            . @lang('backend.all-right-reserved').<br>
                        </p>
                    </div>
                    <div class="footer-bottom-right">
                        <p><a href="https://wa.me/+994505100171">TechFOZ</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">search here</label>
            <input type="text" id="search" placeholder="@lang('backend.search')" />
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="icon-search-interface-symbol"></i>
            </button>
        </form>
    </div>
</div>
