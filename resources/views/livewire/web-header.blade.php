<div class="topbar thm-bg w-100">
    <div class="container">
        <div class="flex-wrap topbar-inner d-flex align-items-center justify-content-end w-100">
            <div class="flex-wrap topbar-right d-inline-flex align-items-center">
                <div class="social-links d-inline-flex">
                    <span class="d-inline-block">Follow Us:</span>
                    <a href="https://twitter.com/" title="Twtiiter" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="https://www.youtube.com/" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.linkedin.com/" title="Linkedin" target="_blank"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <a class="search-btn d-inline-block position-relative" href="javascript:void(0);" title=""><i
                        class="flaticon-magnifying-glass"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="logo-contact-menu-wrap position-relative w-100">
    <div class="container">
        <div
            class="flex-wrap logo-contact-inner d-flex align-items-center justify-content-between position-relative w-100">
            <div class="logo z1 position-relative">
                <h1 class="mb-0"><a class="d-block" href="{{ route('home') }}" title="Home"><img
                            class="img-fluid" src={{ asset('web-assets/images/logo.png') }} alt="Logo"
                            srcset={{ asset('web-assets/images/retina-logo.png') }}></a></h1>
            </div>
            <div class="flex-wrap header-contact-cart d-flex align-items-center">
                <ul class="flex-wrap mb-0 header-contact-info d-inline-flex align-items-center list-unstyled">
                    <li><i class="fas fa-user-md thm-clr"></i><strong class="d-block">Dr. Mohammed
                            Zoheb</strong></li>
                    <li><i class="flaticon-telephone thm-clr"></i><span class="d-block scndry-clr">Book
                            Appointment:</span><strong class="d-block">+91 94933 34002</strong></li>
                </ul>
            </div>
        </div>
        <nav class="flex-wrap d-flex thm-bg brd-rd5 align-items-center justify-content-between w-100">
            <div class="header-left">
                <ul class="mb-0 list-unstyled d-inline-flex">
                    <li><a href="{{ route('home') }}" title="">Home</a></li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Services</a>
                        <ul class="mb-0 list-unstyled">
                            <li><a href="{{ route('services') }}" title="">Services</a></li>
                            <li><a href="{{ route('services-details') }}" title="">Service Detail</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('blogs') }}" title="">Blogs</a></li>
                    <li><a href="{{ route('about') }}" title="">About Us</a></li>
                    <li><a href="{{ route('contact') }}" title="">Contact</a></li>
                </ul>
            </div>
            <div class="header-right">
                <a class="overflow-hidden thm-btn scndry-bg brd-rd5 d-inline-block position-relative"
                    href="appointment.html" title=""><i class="flaticon-calendar"></i>Book An Appointment</a>
            </div>
        </nav>
    </div>
</div>
