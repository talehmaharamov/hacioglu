{{--<div style='padding:0 15px' class="order-lg-2 order-1">--}}
{{--    <div class="faq-detail mb-sm-60 mb-xs-50">--}}
{{--        <div class="content">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="what-is-included mt-3">--}}
{{--                        <div class="faq-accordion yellow-color">--}}
{{--                            <div id="accordion">--}}
{{--                                @foreach($faqs as $faqKey => $faq)--}}
{{--                                    <div class="card @if($loop->first) actives @endif">--}}
{{--                                        <div class="card-header" id="heading{{ $faqKey }}">--}}
{{--                                            <h5 class="mb-0">--}}
{{--                                                <a class="" data-toggle="collapse" data-target="#collapse{{ $faqKey }}"--}}
{{--                                                   aria-expanded="true" aria-controls="collapse{{ $faqKey }}">--}}
{{--                                                    {{ $faq->translate(app()->getLocale())->name ?? __('backend.translation-not-found') }}--}}
{{--                                                </a>--}}
{{--                                            </h5>--}}
{{--                                        </div>--}}
{{--                                        <div id="collapse{{ $faqKey }}" class="collapse @if($loop->first) show @endif"--}}
{{--                                             aria-labelledby="heading{{ $faqKey }}" data-parent="#accordion">--}}
{{--                                            <div class="card-body">--}}
{{--                                                {!! $faq->translate(app()->getLocale())->description ?? __('backend.translation-not-found') !!}--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<section class="service-details-style4">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="service-details-choose-box">
                    <div class="inner-title">
                        <h2></h2>
                    </div>
                    <ul class="accordion-box">
                        <li class="accordion block active-block">
                            <div class="acc-btn active">
                                <div class="icon-outer"><i class="icon-plus"></i></div>
                                <h3>Expertise and Experience.</h3>
                            </div>
                            <div class="acc-content current">
                                <p>
                                    A reputable roofing company will have the necessary
                                    expertise and experience to handle all types of
                                    roofing projects, from repairs to installations.
                                </p>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer"><i class="icon-plus"></i></div>
                                <h3>Quality Materials.</h3>
                            </div>
                            <div class="acc-content">
                                <p>
                                    Phoenix Roofing has access to
                                    high-quality roofing materials that are not readily
                                    available to consumers.
                                </p>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer"><i class="icon-plus"></i></div>
                                <h3>Safety.</h3>
                            </div>
                            <div class="acc-content">
                                <p>
                                    Roofing can be a dangerous job, and here at Phoenix Roofing we have the necessary safety
                                    equipment and training to perform the job safely.
                                </p>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer"><i class="icon-plus"></i></div>
                                <h3>Insurance.</h3>
                            </div>
                            <div class="acc-content">
                                <p>
                                    We carry insurance that
                                    protects you from liability in case of accidents or
                                    damages during the project.
                                </p>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer"><i class="icon-plus"></i></div>
                                <h3>Warranty.</h3>
                            </div>
                            <div class="acc-content">
                                <p>
                                    We offer full warranty on our work, giving you peace of mind from beginning to end.
                                </p>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer"><i class="icon-plus"></i></div>
                                <h3>Time and Cost Savings.</h3>
                            </div>
                            <div class="acc-content">
                                <p>
                                    Phoenix Roofing will complete your project more
                                    efficiently and cost-effectively than you can on your
                                    own, saving you time and money in the long run.
                                </p>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer"><i class="icon-plus"></i></div>
                                <h3>Permits and Regulations.</h3>
                            </div>
                            <div class="acc-content">
                                <p>
                                    We are familiar with the local building codes and regulations, and will ensure that your project
                                    complies with these requirements.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

