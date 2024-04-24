<style>
    #active {
        color: blue;
    }
</style>
<div class="mouseCursor cursor-outer"></div>
<div class="mouseCursor cursor-inner"><span>Drag</span></div>

<!-- header area start  -->
<header>
    <div id="header-sticky" class="header__main">
        <div class="container header__main-container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="header__main-content-wrapper p-relative">
                        <div class="header__main-left">
                            <div class="header__logo">
                                <a href="{{url('amarta_water_treatment')}}" class="logo-dark"><img style="width: 140px;" src="{{url('landing_page')}}/images/logo/logo_water_treatment.png" alt="logo-img"></a>
                            </div>
                            <div class="area-separator d-none d-lg-inline-flex"></div>
                        </div>
                        <div class="header__main-right">
                            <div class="main-menu main-menu1 d-none d-xl-block">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="menu-item-has-children">
                                            <a href="/" id="{{ request()->is('/') ? 'active' : '' }}">Home</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="/about-us" id="{{ request()->is('about-us') ? 'active' : '' }}">About Us</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="/reverse-osmosis" id="{{ request()->is('reverse-osmosis') ? 'active' : '' }}">Reverse Osmosis</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="/portfolio" id="{{ request()->is('portfolio') ? 'active' : '' }}">Portfolio</a>
                                        </li>
                                        <li><a href="/contact-us" id="{{ request()->is('contact-us') ? 'active' : '' }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="area-separator d-none d-lg-inline-flex"></div>
                            <div class="message__now d-none d-lg-inline-flex">
                                <div class="meta-item">
                                    <div class="meta-item__icon">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </div>
                                    <div class="meta-item__text">
                                        <p>CONTACT NUMBER</p>
                                        <span><a class="is-black" href="https://wa.me/08118877225">+62 811 887 7225</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="area-separator d-none d-lg-inline-flex"></div>
                            <button class="side-toggle">
                                <span class="menu__bar">
                                    <span class="bar-icon">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area-end -->

<!-- side toggle start -->
<aside class="fix">
    <div class="side-info">
        <div class="side-info-content">
            <div class="offset__widget offset__header">
                <div class="offset__logo">
                    <a href="#">
                        <img src="{{url('landing_page')}}/images/logo/logo_jta.png" alt="logo">
                    </a>
                </div>
                <button class="side-info-close">
                    <i class="fal fa-times"></i>
                </button>
            </div>
            <div class="offset__widget offset__support d-none d-sm-block">
                <h3 class="offset__title">Amarta Water Treatment</h3>
            </div>
            <div class="mobile-menu d-xl-none fix"></div>
            <div class="offset__widget offset__support">
                <h6 class="offset__sub-title small fw-400 mb-30">CONTACT US</h6>
                <div class="meta-item mb-20">
                    <div class="meta-item__icon-2">
                        <i class="icon-007-telephone"></i>
                    </div>
                    <div class="meta-item__text-2">
                        <span><a href="https://wa.me/08118877225">+62 811 887 7225</a></span>
                    </div>
                </div>
                <div class="meta-item mb-20">
                    <div class="meta-item__icon-2 style-2">
                        <i class="icon-052-email"></i>
                    </div>
                    <div class="meta-item__text-2">
                        <span><a href="{{url('water_treatment')}}/https://html.bdevs.net/cdn-cgi/l/email-protection#aad9dfdadac5d8deeacec5ccc3d284c9c5c7"><span class="__cf_email__">info@jagattirtaamarta.com</span></a></span>
                    </div>
                </div>
                <div class="meta-item">
                    <div class="meta-item__icon-2 style-3">
                        <i class="icon-030-pin"></i>
                    </div>
                    <div class="meta-item__text-2">
                        <span><a href="{{url('water_treatment')}}/#">Jl. Bujanggamanik Kav. No.60 Ruko Pancawarna / Samping IKEA,Kota Baru Parahyangan – Kertajaya, Kec. Padalarang Kabupaten Bandung Barat, Jawa Barat 40553</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<div class="offcanvas-overlay"></div>
<div class="offcanvas-overlay-white"></div>
<!-- side toggle end -->