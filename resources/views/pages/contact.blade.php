@extends('layouts.home')
@section('main')
    {{ Breadcrumbs::render('home') }}
    <section>
        <div class="w-100 pt-100 thm-layer opc6 pb-30 position-relative">
            <div class="fixed-bg back-blend-lighten thm-bg"
                style="background-image: url(web-assets/images/parallax-bg7.jpg);">
            </div>
            <div class="container">
                <div class="sec-title3 text-center w-100">
                    <div class="sec-title3-inner d-inline-block">
                        <h3 class="mb-0">Contact Information</h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor
                            incidunt ut labore et dolore magna aliqua invideo miror magis.</p>
                    </div>
                </div>
                <div class="contact-info-wrap text-center position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="contact-info-box position-relative w-100">
                                <i class="fas fa-envelope-open brd-rd10 d-inline-block scndry-clr"></i>
                                <span class="d-block"><a href="mailto:info@nauthemes.com"
                                        title="">info@nauthemes.com</a></span>
                                <span class="d-block"><a href="mailto:admin@nauthemes.com"
                                        title="">admin@nauthemes.com</a></span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="contact-info-box position-relative w-100">
                                <i class="fas fa-home brd-rd10 d-inline-block scndry-clr"></i>
                                <p class="mb-0">503 Old Buffalo Street <br> Northwest #205, New York-3087.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="contact-info-box position-relative w-100">
                                <i class="fas fa-phone-alt brd-rd10 d-inline-block scndry-clr"></i>
                                <span class="d-block">+2 365 352 2541</span>
                                <span class="d-block">+2 365 352 2523</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-links3 v2 mb-05 d-flex flex-wrap justify-content-center align-items-center w-100">
                    <h3 class="mb-0">Contact Us Via:</h3>
                    <a class="brd-rd5 twitter-hvr" href="https://twitter.com/" title="Twtiiter" target="_blank"><i
                            class="fab fa-twitter"></i></a>
                    <a class="brd-rd5 facebook-hvr" href="https://www.facebook.com/" title="Facebook" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="brd-rd5 youtube-hvr" href="https://www.youtube.com/" title="Youtube" target="_blank"><i
                            class="fab fa-youtube"></i></a>
                    <a class="brd-rd5 linkedin-hvr" href="https://www.linkedin.com/" title="Linkedin" target="_blank"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-100 gray-layer opc7 pb-100 position-relative">
            <div class="fixed-bg" style="background-image: url(web-assets/images/parallax-bg14.jpg);"></div>
            <div class="container">
                <div class="sec-title4 text-center w-100">
                    <div class="sec-title4-inner d-inline-block">
                        <h2 class="mb-0">Get In Touch:</h2>
                        <p class="mb-0">Please Fill This Form to contact with us.</p>
                    </div>
                </div>
                <div class="contact-form d-flex flex-wrap justify-content-center text-center w-100">
                    <form class="w-100" id="email-form">
                        <div class="response w-100"></div>
                        <div class="field-box w-100"><input class="brd-rd10 fname" type="text" name="fname"
                                placeholder="Full Name" required></div>
                        <div class="field-box w-100"><input class="brd-rd10 email" type="email" name="email"
                                placeholder="Email" required></div>
                        <div class="field-box w-100"><input class="brd-rd10 subject" type="tel" name="subject"
                                placeholder="Subject" required></div>
                        <div class="field-box w-100"><textarea class="brd-rd10 contact_message" name="contact_message"
                                placeholder="Comments" required></textarea></div>
                        <div class="btn-box w-100"><button
                                class="thm-btn scndry-bg brd-rd10 position-relative overflow-hidden" type="submit"
                                id="submit">Contact Us Now</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
