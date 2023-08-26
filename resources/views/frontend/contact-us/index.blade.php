@extends('master.frontend')
@section('title',__('title.contact'))
@section('front')
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li class="active">Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start Main Contact Form Area-->
    <section class="main-contact-form-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="contact-form">
                        <div class="sec-title">
                            <div class="sub-title">
                                <div class="border-left"></div>
                                <h5>get in touch</h5>
                            </div>
                            <h2>Contact Us Today</h2>
                            <br />
                            <p>
                                If you are in need of commercial roofing services, look no
                                further than our company.
                            </p>
                            <p>
                                We are committed to providing our clients with the highest
                                level of service and quality workmanship.
                            </p>
                            <br />
                            <p>
                                Contact us today to schedule a consultation or learn more
                                about our services.
                            </p>
                        </div>
                        <form
                            id="contact-form"
                            name="contact_form"
                            class="default-form2"
                            autocomplete="off"
                            action="https://www.phoenix-roof.com/assets/inc/sendmail.php"
                            method="post"
                        >
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <input
                                                type="text"
                                                name="form_name"
                                                id="formName"
                                                placeholder="Your Name"
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
                                                name="form_email"
                                                id="formEmail"
                                                placeholder="Your Email"
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
                                                name="form_phone"
                                                value=""
                                                id="formPhone"
                                                placeholder="Phone"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <input
                                                type="text"
                                                name="form_subject"
                                                value=""
                                                id="formSubject"
                                                placeholder="Subject"
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
                              name="form_message"
                              id="formMessage"
                              placeholder="Message"
                              required=""
                          ></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="button-box">
                                        <input
                                            id="form_botcheck"
                                            name="form_botcheck"
                                            class="form-control"
                                            type="hidden"
                                            value=""
                                        />
                                        <button
                                            id="btn-submit"
                                            class="btn-one"
                                            type="submit"
                                            data-loading-text="Please wait..."
                                        >
                          <span class="txt">
                            submit now <i class="icon-right"></i>
                          </span>
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
                            <h2>Our Address</h2>
                            <!--<p>Completely synergize resource taxing relationships niche markets.
                                              Professionally cultivate one-to-one customer service.</p>-->
                        </div>
                        <ul class="contact-info-1">
                            <li>
                                <div class="icon">
                                    <span class="icon-location"></span>
                                </div>
                                <div class="text">
                                    <h3>Address:</h3>
                                    <p>3413 SW 14th Street, Deerfield Beach FL 33442<br /></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-telephone"></span>
                                </div>
                                <div class="text">
                                    <h3>Phone :</h3>
                                    <p>
                                        <a href="tel:9543049422">+1 (954) 304-9422</a>
                                    </p>
                                    <p>
                                        <a href="tel:9543234362">Fax: +1 (954) 323-4362</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-envelope"></span>
                                </div>
                                <div class="text">
                                    <h3>Email :</h3>
                                    <p>
                                        <a href="mailto:yourmail@email.com"
                                        >info@phoenix-roof.com</a
                                        >
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div>
                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v16.0" nonce="omvki7as"></script>

                <div class="fb-comments" data-href="https://superb-croquembouche-ea1874.netlify.app/contact.html" data-width="100%" data-numposts="5"></div>
            </div> -->

        <div class="container">
            <div class="google-map-outer-box">
                <!--Google Map Start-->
                <div class="google-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3576.8376781421725!2d-80.15267278819952!3d26.2993616769222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d91ce43ec93e5b%3A0xe5127a40973603d7!2s3413%20SW%2014th%20St%2C%20Deerfield%20Beach%2C%20FL%2033442!5e0!3m2!1ses-419!2sus!4v1685478523243!5m2!1ses-419!2sus"
                        class="google-map__one"
                        allowfullscreen
                    ></iframe>
                </div>
                <!--Google Map End-->
            </div>
        </div>
    </section>
@endsection

