@extends('master.frontend')
@section('title',__('title.contact'))
@section('front')
    <section class="main-contact-form-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="contact-form">
                        <div class="sec-title">
                            <h2>@lang('backend.contact-us')</h2>
                        </div>
                        <form
                            id="contact-form"
                            name="contact_form"
                            class="default-form2"
                            autocomplete="off"
                            action="{{ route('frontend.sendMessage') }}"
                            method="post"
                        >
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <input
                                                type="text"
                                                name="name"
                                                id="formName"
                                                placeholder="@lang('backend.name')"
                                                required=""
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <input
                                                type="email"
                                                name="email"
                                                id="formEmail"
                                                placeholder="@lang('backend.email')"
                                                required=""
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <input
                                                type="text"
                                                name="phone"
                                                value=""
                                                id="formPhone"
                                                placeholder="@lang('backend.phone')"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <input
                                                type="text"
                                                name="subject"
                                                value=""
                                                id="formSubject"
                                                placeholder="@lang('backend.subject')"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <div class="input-box">
                          <textarea
                              name="message"
                              id="formMessage"
                              placeholder="@lang('backend.message')"
                              required=""
                          ></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="button-box">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control"
                                               type="hidden" value=""/>
                                        <button id="btn-submit" class="btn-one" type="submit"
                                                data-loading-text="Please wait...">
                                            <span class="txt">@lang('backend.send-message')<i
                                                    class="icon-right"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="contact-info-box-style1">
                        <div class="title">
                            <h2>@lang('backend.contact-information')</h2>
                        </div>
                        <ul class="contact-info-1">
                            <li>
                                <div class="icon">
                                    <span class="icon-location"></span>
                                </div>
                                <div class="text">
                                    <h3>@lang('backend.address'):</h3>
                                    <p>{{ settings('address_'.app()->getLocale()) }}<br/></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-telephone"></span>
                                </div>
                                <div class="text">
                                    <h3>@lang('backend.phone'):</h3>
                                    <p>
                                        <a href="tel:{{ settings('phone') }}">{{ settings('phone') }}</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-envelope"></span>
                                </div>
                                <div class="text">
                                    <h3>@lang('backend.email'):</h3>
                                    <p>
                                        <a href="mailto:yourmail@email.com">{{ settings('email') }}</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="google-map-outer-box">
                <div class="google-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3576.8376781421725!2d-80.15267278819952!3d26.2993616769222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d91ce43ec93e5b%3A0xe5127a40973603d7!2s3413%20SW%2014th%20St%2C%20Deerfield%20Beach%2C%20FL%2033442!5e0!3m2!1ses-419!2sus!4v1685478523243!5m2!1ses-419!2sus"
                        class="google-map__one"
                        allowfullscreen
                    ></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection

