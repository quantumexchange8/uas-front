<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="main-wrapper">
        <header class="header-area">
            <div class="header-large-device">
                <div class="header-top header-top-ptb-1 border-bottom-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-7">
                                <div class="social-offer-wrap">
                                    <div class="social-style-1">
                                        <a href="#"><i class="icon-social-twitter"></i></a>
                                        <a href="#"><i class="icon-social-facebook"></i></a>
                                        <a href="#"><i class="icon-social-instagram"></i></a>
                                        <a href="#"><i class="icon-social-youtube"></i></a>
                                        <a href="#"><i class="icon-social-pinterest"></i></a>
                                    </div>
                                    <div class="header-offer-wrap-2">
                                        <p><span>FREE SHIPPING</span> world wide for all orders over $199</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5">
                                <div class="header-top-right">
                                    <div class="same-style-wrap">
                                        <div class="same-style same-style-mrg-2 track-order">
                                            <a href="#">Track Orders </a>
                                        </div>
                                        <div class="same-style same-style-mrg-2 currency-wrap">
                                            <a class="currency-dropdown-active" href="#"> USD($) <i class="icon-arrow-down"></i></a>
                                            <div class="currency-dropdown">
                                                <ul>
                                                    <li><a href="#">USD</a></li>
                                                    <li><a href="#">EUR</a></li>
                                                    <li><a href="#">BDT</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="same-style same-style-mrg-2 language-wrap">
                                            <a class="language-dropdown-active" href="#">English <i class="icon-arrow-down"></i></a>
                                            <div class="language-dropdown">
                                                <ul>
                                                    <li><a href="#">English</a></li>
                                                    <li><a href="#">German</a></li>
                                                    <li><a href="#">Spanish</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-middle header-middle-padding-2">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/images/logo/UASLogo.png" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="categori-search-wrap categori-search-wrap-modify-3">
                                    <div class="categori-style-1">
                                        <select class="nice-select nice-select-style-1">
                                            <option>All Categories </option>
                                            <option>Home & Entertainment </option>
                                            <option>Spare Parts</option>
                                            <option>Printer</option>
                                            <option>Printer Service & Repair</option>
                                            <option>Remanufactured Ink Cartridge Services </option>
                                            <option>Health Care Products</option>
                                            <option>Consummable</option>
                                        </select>
                                    </div>
                                    <div class="search-wrap-3">
                                        <form action="#">
                                            <input placeholder="Search Products..." type="text">
                                            <button class="blue"><i class="lnr lnr-magnifier"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="hotline-2-wrap">
                                    <div class="hotline-2-icon">
                                        <i class="blue icon-call-end"></i>
                                    </div>
                                    <div class="hotline-2-content">
                                        <span> Contact Us</span>
                                        <h5>012-2035268</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom bg-blue">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="main-categori-wrap main-categori-wrap-modify-2">
                                    <a class="categori-show categori-blue" href="#">All Department <i class="icon-arrow-down icon-right"></i></a>
                                    <div class="category-menu-2 category-menu-2-blue categori-hide categori-not-visible-2">
                                        <nav>
                                            <ul>
                                                <li><a href="shop.html"><i class="icon-energy"></i> Consumer Electric</a></li>
                                                <li><a href="shop.html"><i class="icon-handbag"></i> Clothing & Apparel</a></li>
                                                <li><a href="shop.html"><i class="icon-home"></i> Home, Garden & Kitchen</a></li>
                                                <li><a href="shop.html"><i class="icon-game-controller"></i> Game Console</a></li>
                                                <li><a href="shop.html"><i class="icon-eyeglass"></i> Jewelry & Watches </a></li>
                                                <li><a href="shop.html"><i class="icon-screen-desktop"></i> Computers & Technologies </a></li>
                                                <li><a href="shop.html"><i class="icon-camera"></i> Camera, Video & Audio</a></li>
                                                <li><a href="shop.html"><i class="icon-social-dribbble"></i> Sport & Outdoor</a></li>
                                                <li><a href="shop.html"><i class="icon-screen-smartphone"></i> Phones & Accessories</a></li>
                                                <li><a href="shop.html"><i class="icon-notebook"></i> Books & Office</a></li>
                                                <li><a href="shop.html"><i class="icon-rocket"></i> Cars & Motocycles</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="main-menu main-menu-white main-menu-padding-1 main-menu-font-size-14 main-menu-lh-5">
                                    <nav>
                                        <ul>
                                            <li><a href="index.html">HOME </a>
                                                <ul class="sub-menu-style">
                                                    <li><a href="index.html">Home version 1 </a></li>
                                                    <li><a href="index-2.html">Home version 2</a></li>
                                                    <li><a href="index-3.html">Home version 3</a></li>
                                                    <li><a href="index-4.html">Home version 4</a></li>
                                                    <li><a href="index-5.html">Home version 5</a></li>
                                                    <li><a href="index-6.html">Home version 6</a></li>
                                                    <li><a href="index-7.html">Home version 7</a></li>
                                                    <li><a href="index-8.html">Home version 8</a></li>
                                                    <li><a href="index-9.html">Home version 9</a></li>
                                                    <li><a href="index-10.html">Home version 10</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop.html">SHOP </a>
                                                <ul class="mega-menu-style mega-menu-mrg-2">
                                                    <li>
                                                        <ul>
                                                            <li>
                                                                <a class="dropdown-title" href="#">Shop Layout</a>
                                                                <ul>
                                                                    <li><a href="shop.html">standard style</a></li>
                                                                    <li><a href="shop-list.html">shop list style</a></li>
                                                                    <li><a href="shop-fullwide.html">shop fullwide</a></li>
                                                                    <li><a href="shop-no-sidebar.html">grid no sidebar</a></li>
                                                                    <li><a href="shop-list-no-sidebar.html">list no sidebar</a></li>
                                                                    <li><a href="shop-right-sidebar.html">shop right sidebar</a></li>
                                                                    <li><a href="store-location.html">store location</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-title" href="#">Products Layout</a>
                                                                <ul>
                                                                    <li><a href="product-details.html">tab style 1</a></li>
                                                                    <li><a href="product-details-2.html">tab style 2</a></li>
                                                                    <li><a href="product-details-sticky.html">sticky style</a></li>
                                                                    <li><a href="product-details-gallery.html">gallery style </a></li>
                                                                    <li><a href="product-details-affiliate.html">affiliate style</a></li>
                                                                    <li><a href="product-details-group.html">group style</a></li>
                                                                    <li><a href="product-details-fixed-img.html">fixed image style </a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="shop.html"><img src="assets/images/banner/banner-12.png" alt=""></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">PAGES </a>
                                                <ul class="sub-menu-style">
                                                    <li><a href="about-us.html">about us </a></li>
                                                    <li><a href="cart.html">cart page</a></li>
                                                    <li><a href="checkout.html">checkout </a></li>
                                                    <li><a href="my-account.html">my account</a></li>
                                                    <li><a href="wishlist.html">wishlist </a></li>
                                                    <li><a href="compare.html">compare </a></li>
                                                    <li><a href="contact.html">contact us </a></li>
                                                    <li><a href="order-tracking.html">order tracking</a></li>
                                                    <li><a href="login-register.html">login / register </a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.html">BLOG </a>
                                                <ul class="sub-menu-style">
                                                    <li><a href="blog.html">blog standard </a></li>
                                                    <li><a href="blog-no-sidebar.html">blog no sidebar </a></li>
                                                    <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                                    <li><a href="blog-details.html">blog details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">CONTACT </a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="header-action header-action-flex pr-20">
                                    <div class="same-style-2 same-style-2-white same-style-2-font-dec">
                                        <a href="login-register.html"><i class="icon-user"></i></a>
                                    </div>
                                    <div class="same-style-2 same-style-2-white same-style-2-font-dec">
                                        <a href="wishlist.html"><i class="icon-heart"></i><span class="pro-count red">03</span></a>
                                    </div>
                                    <div class="same-style-2 same-style-2-white same-style-2-font-dec header-cart">
                                        <a class="cart-active" href="#">
                                            <i class="icon-basket-loaded"></i><span class="pro-count red">02</span>
                                            <span class="cart-amount white">$2,435.30</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-small-device small-device-ptb-1">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <div class="mobile-logo">
                                <a href="index.html">
                                    <img alt="" src="assets/images/logo/logo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="header-action header-action-flex">
                                <div class="same-style-2 same-style-2-font-inc">
                                    <a href="login-register.html"><i class="icon-user"></i></a>
                                </div>
                                <div class="same-style-2 same-style-2-font-inc">
                                    <a href="wishlist.html"><i class="icon-heart"></i><span class="pro-count red">03</span></a>
                                </div>
                                <div class="same-style-2 same-style-2-font-inc header-cart">
                                    <a class="cart-active" href="#">
                                        <i class="icon-basket-loaded"></i><span class="pro-count red">02</span>
                                    </a>
                                </div>
                                <div class="same-style-2 main-menu-icon">
                                    <a class="mobile-header-button-active" href="#"><i class="icon-menu"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- mobile header start -->
        <div class="mobile-header-active mobile-header-wrapper-style">
            <div class="clickalbe-sidebar-wrap">
                <a class="sidebar-close"><i class="icon_close"></i></a>
                <div class="mobile-header-content-area">
                    <div class="header-offer-wrap-2 mrg-none mobile-header-padding-border-4">
                        <p><span>UNITED ADVANCED SYSTEMS</span> YOUR TRUSTED ONE STOP</p>
                    </div>
                    <div class="mobile-search mobile-header-padding-border-1">
                        <form class="search-form" action="#">
                            <input type="text" placeholder="Search here…">
                            <button class="button-search"><i class="icon-magnifier"></i></button>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap mobile-header-padding-border-2">
                        <!-- mobile menu start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="index.html">Home</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Home version 1 </a></li>
                                        <li><a href="index-2.html">Home version 2</a></li>
                                        <li><a href="index-3.html">Home version 3</a></li>
                                        <li><a href="index-4.html">Home version 4</a></li>
                                        <li><a href="index-5.html">Home version 5</a></li>
                                        <li><a href="index-6.html">Home version 6</a></li>
                                        <li><a href="index-7.html">Home version 7</a></li>
                                        <li><a href="index-8.html">Home version 8</a></li>
                                        <li><a href="index-9.html">Home version 9</a></li>
                                        <li><a href="index-10.html">Home version 10</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children "><a href="#">shop</a>
                                    <ul class="dropdown">
                                        <li class="menu-item-has-children"><a href="#">shop layout</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">standard style</a></li>
                                                <li><a href="shop-list.html">shop list style</a></li>
                                                <li><a href="shop-fullwide.html">shop fullwide</a></li>
                                                <li><a href="shop-no-sidebar.html">grid no sidebar</a></li>
                                                <li><a href="shop-list-no-sidebar.html">list no sidebar</a></li>
                                                <li><a href="shop-right-sidebar.html">shop right sidebar</a></li>
                                                <li><a href="store-location.html">store location</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Products Layout</a>
                                            <ul class="dropdown">
                                                <li><a href="product-details.html">tab style 1</a></li>
                                                <li><a href="product-details-2.html">tab style 2</a></li>
                                                <li><a href="product-details-sticky.html">sticky style</a></li>
                                                <li><a href="product-details-gallery.html">gallery style </a></li>
                                                <li><a href="product-details-affiliate.html">affiliate style</a></li>
                                                <li><a href="product-details-group.html">group style</a></li>
                                                <li><a href="product-details-fixed-img.html">fixed image style </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="about-us.html">about us </a></li>
                                        <li><a href="cart.html">cart page</a></li>
                                        <li><a href="checkout.html">checkout </a></li>
                                        <li><a href="my-account.html">my account</a></li>
                                        <li><a href="wishlist.html">wishlist </a></li>
                                        <li><a href="compare.html">compare </a></li>
                                        <li><a href="contact.html">contact us </a></li>
                                        <li><a href="order-tracking.html">order tracking</a></li>
                                        <li><a href="login-register.html">login / register </a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children "><a href="#">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="blog.html">blog standard </a></li>
                                        <li><a href="blog-no-sidebar.html">blog no sidebar </a></li>
                                        <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact us</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu end -->
                    </div>
                    <div class="main-categori-wrap mobile-menu-wrap mobile-header-padding-border-3">
                        <a class="categori-show blue" href="#">
                            <i class="lnr lnr-menu"></i> All Department <i class="icon-arrow-down icon-right"></i>
                        </a>
                        <div class="categori-hide-2">
                            <nav>
                                <ul class="mobile-menu">
                                    <li><a href="shop.html"><i class="icon-energy"></i> Consumer Electric </a></li>
                                    <li><a href="shop.html"><i class="icon-handbag"></i> Clothing & Apparel </a></li>
                                    <li><a href="shop.html"><i class="icon-home"></i> Home, Garden & Kitchen </a></li>
                                    <li><a href="shop.html"><i class="icon-game-controller"></i> Game Console </a></li>
                                    <li><a href="shop.html"><i class="icon-eyeglass"></i> Jewelry & Watches </a></li>
                                    <li><a href="shop.html"><i class="icon-screen-desktop"></i> Computers & Technologies </a></li>
                                    <li><a href="shop.html"><i class="icon-camera"></i> Camera, Video & Audio </a></li>
                                    <li><a href="shop.html"><i class="icon-social-dribbble"></i> Sport & Outdoor </a></li>
                                    <li><a href="shop.html"><i class="icon-screen-smartphone"></i> Phones & Accessories </a></li>
                                    <li><a href="shop.html"><i class="icon-notebook"></i> Books & Office </a></li>
                                    <li><a href="shop.html"><i class="icon-rocket"></i> Cars & Motocycles </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="mobile-header-info-wrap mobile-header-padding-border-3">
                        <div class="single-mobile-header-info">
                            <a href="order-tracking.html"><i class="lastudioicon-pin-3-2"></i>Track Orders </a>
                        </div>
                        <div class="single-mobile-header-info">
                            <a class="mobile-language-active" href="#">Language <span><i class="icon-arrow-down"></i></span></a>
                            <div class="lang-curr-dropdown lang-dropdown-active">
                                <ul>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-mobile-header-info">
                            <a class="mobile-currency-active" href="#">Currency <span><i class="icon-arrow-down"></i></span></a>
                            <div class="lang-curr-dropdown curr-dropdown-active">
                                <ul>
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">Real</a></li>
                                    <li><a href="#">BDT</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-contact-info mobile-header-padding-border-4">
                        <ul>
                            <li><i class="icon-phone "></i> (+612) 2531 5600</li>
                            <li><i class="icon-envelope-open "></i> norda@domain.com</li>
                            <li><i class="icon-home"></i> PO Box 1622 Colins Street West Australia</li>
                        </ul>
                    </div>
                    <div class="mobile-social-icon">
                        <a class="facebook" href="#"><i class="icon-social-facebook"></i></a>
                        <a class="twitter" href="#"><i class="icon-social-twitter"></i></a>
                        <a class="pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                        <a class="instagram" href="#"><i class="icon-social-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- mini cart start -->
        <div class="sidebar-cart-active">
            <div class="sidebar-cart-all">
                <a class="cart-close" href="#"><i class="icon_close"></i></a>
                <div class="cart-content">
                    <h3>Shopping Cart</h3>
                    <ul>
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="assets/images/cart/cart-1.jpg" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h4><a href="#">Simple Black T-Shirt</a></h4>
                                <span> 1 × $49.00	</span>
                            </div>
                            <div class="cart-delete">
                                <a href="#">×</a>
                            </div>
                        </li>
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="assets/images/cart/cart-2.jpg" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h4><a href="#">Norda Backpack</a></h4>
                                <span> 1 × $49.00	</span>
                            </div>
                            <div class="cart-delete">
                                <a href="#">×</a>
                            </div>
                        </li>
                    </ul>
                    <div class="cart-total">
                        <h4>Subtotal: <span>$170.00</span></h4>
                    </div>
                    <div class="cart-checkout-btn">
                        <a class="btn-hover cart-btn-style" href="cart.html">view cart</a>
                        <a class="no-mrg btn-hover cart-btn-style" href="checkout.html">checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-area bg-gray-8">
            <div class="container">
                <div class="hero-slider-active-2 nav-style-1 nav-style-1-modify-2 nav-style-1-blue">
                    <div class="single-hero-slider single-hero-slider-hm9 single-animation-wrap">
                        <div class="row slider-animated-1">
                            <div class="col-lg-5 col-md-5 col-12 col-sm-6">
                                <div class="hero-slider-content-6 slider-content-hm9">
                                    <h5 class="animated">New Arrivals</h5>
                                    <h1 class="animated">Home Secure <br>camera</h1>
                                    <p class="animated">Prodctect your house with home secure wifi camere indoor/outdoor</p>
                                    <div class="btn-style-1">
                                        <a class="animated btn-1-padding-4 btn-1-blue btn-1-font-14" href="product-details.html">Explore Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-12 col-sm-6">
                                <div class="hm9-hero-slider-img">
                                    <img class="animated" src="assets/images/slider/printerBanner.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-hero-slider single-hero-slider-hm9 single-animation-wrap">
                        <div class="row slider-animated-1">
                            <div class="col-lg-5 col-md-5 col-12 col-sm-6">
                                <div class="hero-slider-content-6 slider-content-hm9">
                                    <h5 class="animated">New Arrivals</h5>
                                    <h1 class="animated">Home Secure <br>camera</h1>
                                    <p class="animated">Prodctect your house with home secure wifi camere indoor/outdoor</p>
                                    <div class="btn-style-1">
                                        <a class="animated btn-1-padding-4 btn-1-blue btn-1-font-14" href="product-details.html">Explore Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-12 col-sm-6">
                                <div class="hm9-hero-slider-img">
                                    <img class="animated" src="assets/images/slider/printerBanner.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-area">
            <div class="container">
                <div class="service-wrap service-wrap-hm9">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="single-service-wrap mb-30">
                                <div class="service-icon service-icon-blue">
                                    <i class="icon-cursor"></i>
                                </div>
                                <div class="service-content">
                                    <h3>Free Shipping</h3>
                                    <span>Orders over $100</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="single-service-wrap mb-30">
                                <div class="service-icon service-icon-blue">
                                    <i class="icon-reload"></i>
                                </div>
                                <div class="service-content">
                                    <h3>Free Returns</h3>
                                    <span>Within 30 days</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="single-service-wrap mb-30">
                                <div class="service-icon service-icon-blue">
                                    <i class="icon-lock"></i>
                                </div>
                                <div class="service-content">
                                    <h3>100% Secure</h3>
                                    <span>Payment Online</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="single-service-wrap mb-30">
                                <div class="service-icon service-icon-blue">
                                    <i class="icon-tag"></i>
                                </div>
                                <div class="service-content">
                                    <h3>Best Price</h3>
                                    <span>Guaranteed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-us-area pt-60 pb-120">
            <div class="container">
                <div class="about-us-content-3 text-center">
                    <h3>Welcome To <span>UAS</span> - one stop service and repair centre </h3>
                    <p>You'll get the right for your needs. </p>
                </div>
            </div>
        </div>
        <div class="banner-area pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="banner-wrap mb-30">
                            <div class="banner-img banner-img-zoom">
                                <a href="product-details.html"><img src="assets/images/banner/2.png" alt=""></a>
                            </div>
                            <div class="banner-content-11">
                                <h2><span>Zara</span> Pattern Boxed <br>Underwear</h2>
                                <p class="mrg-inc">Stretch, & Fress cool</p>
                                <div class="btn-style-4">
                                    <a class="hover-red" href="product-details.html">Shop now <i class="icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="banner-wrap mb-30">
                            <div class="banner-img banner-img-zoom">
                                <a href="product-details.html"><img src="assets/images/banner/3.png" alt=""></a>
                            </div>
                            <div class="banner-content-20">
                                <div class="banner-content-20-top">
                                    <div class="banner-content-20-brand">
                                        <span>JATA</span>
                                    </div>
                                    <p>super bass <br>tech 2.0</p>
                                </div>
                                <h2>Sone Speaker</h2>
                            </div>
                            
                        </div>
                        
                  
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="banner-wrap mb-30">
                            <div class="banner-img banner-img-zoom">
                                <a href="product-details.html"><img src="assets/images/banner/1.png" alt=""></a>
                            </div>
                    
                </div>
                
            </div>
            
        </div>
        <div class="product-area pb-120">
            <div class="container">
                <div class="section-title-6 section-title-6-xs mb-25 text-center">
                    <h2>best seller in last month</h2>
                </div>
                <div class="tab-style-9 nav mb-60">
                    <a class="active" href="#product-6" data-bs-toggle="tab">Top 20 </a>
                    <a href="#product-7" data-bs-toggle="tab"> Electronic </a>
                    <a href="#product-8" data-bs-toggle="tab">Apparel </a>
                    <a href="#product-9" data-bs-toggle="tab"> Computer </a>
                    <a href="#product-10" data-bs-toggle="tab"> Cookware </a>
                    <a href="#product-11" data-bs-toggle="tab"> Baby </a>
                </div>
                <div class="tab-content jump">
                    <div id="product-6" class="tab-pane active">
                        <div class="product-slider-active-3 nav-style-3">
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-41.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-40%</span>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Advantage Baby Milk</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                            <span>(4)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$38.50 </span>
                                            <span class="old-price">$42.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">olabear.com</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Advantage Baby Milk</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                            <span>(4)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$38.50 </span>
                                            <span class="old-price">$42.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">olabear.com</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/roller.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-20%</span>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Herchoe Backpack</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$26.50 </span>
                                            <span class="old-price">$45.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">jetapo shop</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchoe Backpack</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$26.50 </span>
                                            <span class="old-price">$45.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">jetapo shop</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-466.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Pampers baby-dry diapers</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(6)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span>$43.50 </span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">Ugmonko</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Pampers baby-dry diapers</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(6)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span>$43.50 </span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">Ugmonko</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-44.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">White Plastic Chair</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(3)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span>$123.50 </span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">InterioUS</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">White Plastic Chair</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(3)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span>$123.50 </span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">InterioUS</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-45.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-35%</span>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Ciate London Makeup</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star "></i>
                                            </div>
                                            <span>(1)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$86.75 </span>
                                            <span class="old-price">$94.52</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">Ella Beauty</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Ciate London Makeup</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star "></i>
                                            </div>
                                            <span>(1)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$86.75 </span>
                                            <span class="old-price">$94.52</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">Ella Beauty</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-42.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Herchoe Backpack</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$26.50 </span>
                                            <span class="old-price">$45.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">jetapo shop</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchoe Backpack</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$26.50 </span>
                                            <span class="old-price">$45.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">jetapo shop</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product-7" class="tab-pane">
                        <div class="product-slider-active-3 nav-style-3">
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-45.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-35%</span>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Ciate London Makeup</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star "></i>
                                            </div>
                                            <span>(1)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$86.75 </span>
                                            <span class="old-price">$94.52</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">Ella Beauty</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Ciate London Makeup</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star "></i>
                                            </div>
                                            <span>(1)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$86.75 </span>
                                            <span class="old-price">$94.52</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">Ella Beauty</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-44.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">White Plastic Chair</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(3)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span>$123.50 </span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">InterioUS</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">White Plastic Chair</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(3)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span>$123.50 </span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">InterioUS</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-43.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Pampers baby-dry diapers</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(6)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span>$43.50 </span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">Ugmonko</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Pampers baby-dry diapers</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(6)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span>$43.50 </span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">Ugmonko</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-42.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-20%</span>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Herchoe Backpack</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$26.50 </span>
                                            <span class="old-price">$45.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">jetapo shop</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchoe Backpack</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$26.50 </span>
                                            <span class="old-price">$45.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">jetapo shop</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-41.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-40%</span>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Advantage Baby Milk</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                            <span>(4)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$38.50 </span>
                                            <span class="old-price">$42.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">olabear.com</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Advantage Baby Milk</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                            <span>(4)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$38.50 </span>
                                            <span class="old-price">$42.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">olabear.com</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-42.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Herchoe Backpack</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$26.50 </span>
                                            <span class="old-price">$45.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">jetapo shop</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchoe Backpack</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$26.50 </span>
                                            <span class="old-price">$45.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">jetapo shop</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product-8" class="tab-pane">
                        <div class="product-slider-active-3 nav-style-3">
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-42.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-20%</span>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Herchoe Backpack</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$26.50 </span>
                                            <span class="old-price">$45.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">jetapo shop</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchoe Backpack</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$26.50 </span>
                                            <span class="old-price">$45.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">jetapo shop</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-41.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-40%</span>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Advantage Baby Milk</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                            <span>(4)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$38.50 </span>
                                            <span class="old-price">$42.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">olabear.com</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Advantage Baby Milk</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                            <span>(4)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$38.50 </span>
                                            <span class="old-price">$42.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">olabear.com</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-44.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">White Plastic Chair</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(3)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span>$123.50 </span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">InterioUS</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">White Plastic Chair</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(3)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span>$123.50 </span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">InterioUS</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-43.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Pampers baby-dry diapers</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(6)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span>$43.50 </span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">Ugmonko</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Pampers baby-dry diapers</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(6)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span>$43.50 </span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">Ugmonko</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-45.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-35%</span>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Ciate London Makeup</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star "></i>
                                            </div>
                                            <span>(1)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$86.75 </span>
                                            <span class="old-price">$94.52</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">Ella Beauty</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Ciate London Makeup</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star "></i>
                                            </div>
                                            <span>(1)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$86.75 </span>
                                            <span class="old-price">$94.52</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">Ella Beauty</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-42.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Herchoe Backpack</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$26.50 </span>
                                            <span class="old-price">$45.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">jetapo shop</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchoe Backpack</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$26.50 </span>
                                            <span class="old-price">$45.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">jetapo shop</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product-9" class="tab-pane">
                        <div class="product-slider-active-3 nav-style-3">
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-45.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-35%</span>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Ciate London Makeup</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star "></i>
                                            </div>
                                            <span>(1)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$86.75 </span>
                                            <span class="old-price">$94.52</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">Ella Beauty</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Ciate London Makeup</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star "></i>
                                            </div>
                                            <span>(1)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$86.75 </span>
                                            <span class="old-price">$94.52</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">Ella Beauty</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-41.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-40%</span>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Advantage Baby Milk</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                            <span>(4)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$38.50 </span>
                                            <span class="old-price">$42.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">olabear.com</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Advantage Baby Milk</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                            <span>(4)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$38.50 </span>
                                            <span class="old-price">$42.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">olabear.com</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-44.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">White Plastic Chair</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(3)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span>$123.50 </span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">InterioUS</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">White Plastic Chair</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(3)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span>$123.50 </span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">InterioUS</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-42.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-20%</span>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Herchoe Backpack</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$26.50 </span>
                                            <span class="old-price">$45.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">jetapo shop</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchoe Backpack</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$26.50 </span>
                                            <span class="old-price">$45.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">jetapo shop</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-43.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Pampers baby-dry diapers</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(6)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span>$43.50 </span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">Ugmonko</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Pampers baby-dry diapers</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(6)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span>$43.50 </span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">Ugmonko</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-42.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Herchoe Backpack</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$26.50 </span>
                                            <span class="old-price">$45.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">jetapo shop</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchoe Backpack</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$26.50 </span>
                                            <span class="old-price">$45.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">jetapo shop</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product-10" class="tab-pane">
                        <div class="product-slider-active-3 nav-style-3">
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-43.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Pampers baby-dry diapers</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(6)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span>$43.50 </span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">Ugmonko</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Pampers baby-dry diapers</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(6)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span>$43.50 </span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">Ugmonko</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-44.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">White Plastic Chair</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(3)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span>$123.50 </span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">InterioUS</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">White Plastic Chair</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(3)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span>$123.50 </span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">InterioUS</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-42.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-20%</span>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Herchoe Backpack</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$26.50 </span>
                                            <span class="old-price">$45.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">jetapo shop</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchoe Backpack</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$26.50 </span>
                                            <span class="old-price">$45.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">jetapo shop</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-41.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-40%</span>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Advantage Baby Milk</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                            <span>(4)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$38.50 </span>
                                            <span class="old-price">$42.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">olabear.com</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Advantage Baby Milk</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                            <span>(4)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$38.50 </span>
                                            <span class="old-price">$42.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">olabear.com</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-45.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-35%</span>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Ciate London Makeup</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star "></i>
                                            </div>
                                            <span>(1)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$86.75 </span>
                                            <span class="old-price">$94.52</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">Ella Beauty</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Ciate London Makeup</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star "></i>
                                            </div>
                                            <span>(1)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$86.75 </span>
                                            <span class="old-price">$94.52</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">Ella Beauty</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-42.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Herchoe Backpack</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$26.50 </span>
                                            <span class="old-price">$45.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">jetapo shop</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchoe Backpack</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$26.50 </span>
                                            <span class="old-price">$45.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">jetapo shop</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product-11" class="tab-pane">
                        <div class="product-slider-active-3 nav-style-3">
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-45.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-35%</span>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Ciate London Makeup</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star "></i>
                                            </div>
                                            <span>(1)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$86.75 </span>
                                            <span class="old-price">$94.52</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">Ella Beauty</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Ciate London Makeup</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star "></i>
                                            </div>
                                            <span>(1)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$86.75 </span>
                                            <span class="old-price">$94.52</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">Ella Beauty</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-42.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-20%</span>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Herchoe Backpack</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$26.50 </span>
                                            <span class="old-price">$45.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">jetapo shop</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchoe Backpack</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$26.50 </span>
                                            <span class="old-price">$45.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">jetapo shop</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-44.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">White Plastic Chair</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(3)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span>$123.50 </span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">InterioUS</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">White Plastic Chair</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(3)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span>$123.50 </span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">InterioUS</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-41.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-40%</span>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Advantage Baby Milk</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                            <span>(4)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$38.50 </span>
                                            <span class="old-price">$42.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">olabear.com</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Advantage Baby Milk</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                            <span>(4)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$38.50 </span>
                                            <span class="old-price">$42.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">olabear.com</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-43.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Pampers baby-dry diapers</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(6)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span>$43.50 </span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">Ugmonko</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Pampers baby-dry diapers</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(6)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span>$43.50 </span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">Ugmonko</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-plr-1">
                                <div class="single-product-wrap">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-42.jpg" alt="">
                                        </a>
                                        <div class="product-action-2 tooltip-style-2">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                            <button title="Compare"><i class="icon-refresh"></i></button>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3">
                                        <h3 class="mrg-none"><a href="product-details.html">Herchoe Backpack</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$26.50 </span>
                                            <span class="old-price">$45.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">jetapo shop</a></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                        <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchoe Backpack</a></h3>
                                        <div class="product-rating-wrap-2">
                                            <div class="product-rating-4">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <span>(2)</span>
                                        </div>
                                        <div class="product-price-4">
                                            <span class="new-price">$26.50 </span>
                                            <span class="old-price">$45.85</span>
                                        </div>
                                        <div class="product-author">
                                            <span>Seller: <a href="#">jetapo shop</a></span>
                                        </div>
                                        <div class="pro-add-to-cart-2">
                                            <button title="Add to Cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-categories-area pb-60">
            <div class="container">
                <div class="section-title-6 section-title-6-xs mb-60 text-center">
                    <h2>popular categories</h2>
                </div>
                <div class="product-categories-slider-3 nav-style-3">
                    <div class="product-plr-1">
                        <div class="single-product-wrap mb-50">
                            <div class="product-img product-img-border border-blue mb-20">
                                <a href="shop.html">
                                    <img src="assets/images/product/product-50.png" alt="">
                                </a>
                            </div>
                            <div class="product-content-categories-2 product-content-blue text-center">
                                <h5><a href="shop.html">Fashion</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap mb-50">
                            <div class="product-img product-img-border border-blue mb-20">
                                <a href="shop.html">
                                    <img src="assets/images/product/product-89.png" alt="">
                                </a>
                            </div>
                            <div class="product-content-categories-2 product-content-blue text-center">
                                <h5><a href="shop.html">pet supplies</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap mb-50">
                            <div class="product-img product-img-border border-blue mb-20">
                                <a href="shop.html">
                                    <img src="assets/images/product/product-51.png" alt="">
                                </a>
                            </div>
                            <div class="product-content-categories-2 product-content-blue text-center">
                                <h5><a href="shop.html">Electronic</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap mb-50">
                            <div class="product-img product-img-border border-blue mb-20">
                                <a href="shop.html">
                                    <img src="assets/images/product/product-90.png" alt="">
                                </a>
                            </div>
                            <div class="product-content-categories-2 product-content-blue text-center">
                                <h5><a href="shop.html">kid clothes</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap mb-50">
                            <div class="product-img product-img-border border-blue mb-20">
                                <a href="shop.html">
                                    <img src="assets/images/product/product-52.png" alt="">
                                </a>
                            </div>
                            <div class="product-content-categories-2 product-content-blue text-center">
                                <h5><a href="shop.html">computer</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap mb-50">
                            <div class="product-img product-img-border border-blue mb-20">
                                <a href="shop.html">
                                    <img src="assets/images/product/product-91.png" alt="">
                                </a>
                            </div>
                            <div class="product-content-categories-2 product-content-blue text-center">
                                <h5><a href="shop.html">smart home</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap mb-50">
                            <div class="product-img product-img-border border-blue mb-20">
                                <a href="shop.html">
                                    <img src="assets/images/product/product-53.png" alt="">
                                </a>
                            </div>
                            <div class="product-content-categories-2 product-content-blue text-center">
                                <h5><a href="shop.html">beauty</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap mb-50">
                            <div class="product-img product-img-border border-blue mb-20">
                                <a href="shop.html">
                                    <img src="assets/images/product/product-92.png" alt="">
                                </a>
                            </div>
                            <div class="product-content-categories-2 product-content-blue text-center">
                                <h5><a href="shop.html">car parts</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap mb-50">
                            <div class="product-img product-img-border border-blue mb-20">
                                <a href="shop.html">
                                    <img src="assets/images/product/product-54.png" alt="">
                                </a>
                            </div>
                            <div class="product-content-categories-2 product-content-blue text-center">
                                <h5><a href="shop.html">sport</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap mb-50">
                            <div class="product-img product-img-border border-blue mb-20">
                                <a href="shop.html">
                                    <img src="assets/images/product/product-93.png" alt="">
                                </a>
                            </div>
                            <div class="product-content-categories-2 product-content-blue text-center">
                                <h5><a href="shop.html">gym equipments</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap mb-50">
                            <div class="product-img product-img-border border-blue mb-20">
                                <a href="shop.html">
                                    <img src="assets/images/product/product-55.png" alt="">
                                </a>
                            </div>
                            <div class="product-content-categories-2 product-content-blue text-center">
                                <h5><a href="shop.html">baby</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap mb-50">
                            <div class="product-img product-img-border border-blue mb-20">
                                <a href="shop.html">
                                    <img src="assets/images/product/product-94.png" alt="">
                                </a>
                            </div>
                            <div class="product-content-categories-2 product-content-blue text-center">
                                <h5><a href="shop.html">infant</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap mb-50">
                            <div class="product-img product-img-border border-blue mb-20">
                                <a href="shop.html">
                                    <img src="assets/images/product/product-52.png" alt="">
                                </a>
                            </div>
                            <div class="product-content-categories-2 product-content-blue text-center">
                                <h5><a href="shop.html">computer</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap mb-50">
                            <div class="product-img product-img-border border-blue mb-20">
                                <a href="shop.html">
                                    <img src="assets/images/product/product-50.png" alt="">
                                </a>
                            </div>
                            <div class="product-content-categories-2 product-content-blue text-center">
                                <h5><a href="shop.html">Fashion</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="deal-area">
            <div class="container">
                <div class="deal-bg-color">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="deal-content-2 pl-50">
                                <span>hot deal</span>
                                <h2>
                                    <span>50% SALE OFF</span> Norda QLED TV
                                </h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="deal-content-2 pl-35">
                                <p>Discover our collection with leather simple backpacks. Less is more never out trend</p>
                                <div class="deal-btn-2">
                                    <a href="product-details.html">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="deal-img">
                                <a href="product-details.html"><img src="assets/images/product/deal-product.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-area pt-115 pb-120">
            <div class="container">
                <div class="section-title-6 section-title-6-xs mb-60 text-center">
                    <h2>Sugguest today</h2>
                </div>
                <div class="row">
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-62.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Mini Protector</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(4)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$19.98 </span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">USoffice</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Mini Protector</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(4)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$19.98 </span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">USoffice</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-63.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Norda Coolpix Camera</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$26.50 </span>
                                    <span class="old-price">$45.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">Electrone</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Norda Coolpix Camera</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$26.50 </span>
                                    <span class="old-price">$45.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">Electrone</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-64.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Norda Phone 6S 64 GB</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$43.50 </span>
                                    <span class="old-price">$52.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">Electrone</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Norda Phone 6S 64 GB</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$43.50 </span>
                                    <span class="old-price">$52.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">Electrone</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-65.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Norda Mobile Tab A</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$123.50  </span>
                                    <span class="old-price">$152.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">USoffice</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Norda Mobile Tab A</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$123.50 </span>
                                    <span class="old-price">$152.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">USoffice</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-66.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">DJ Spark II Quadcopter</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$86.75 </span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">Electrone</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">DJ Spark II Quadcopter</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$86.75 </span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">Electrone</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-67.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Brown T-shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(4)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$19.98 </span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">jetaposhop</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Brown T-shirt</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(4)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$19.98 </span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">jetaposhop</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-68.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchoe Backpack</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$26.50 </span>
                                    <span class="old-price">$45.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">olabear.com</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchoe Backpack</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$26.50 </span>
                                    <span class="old-price">$45.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">olabear.com</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-69.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Adidas Grey Sport Sneaker</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$43.50 </span>
                                    <span class="old-price">$52.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">olabear.com</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Adidas Grey Sport Sneaker</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$43.50 </span>
                                    <span class="old-price">$52.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">olabear.com</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-70.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchose White Duffles</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$123.50  </span>
                                    <span class="old-price">$152.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">etaposhop</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Herchose White Duffles</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$123.50 </span>
                                    <span class="old-price">$152.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">etaposhop</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-71.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Rayban Round Sunglasses</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$86.75 </span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">sunglassjp</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Rayban Round Sunglasses</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$86.75 </span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">sunglassjp</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-72.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Comet Rice Cooker</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(4)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$19.98 </span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">homeuk</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Comet Rice Cooker</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(4)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$19.98 </span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">homeuk</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-73.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Ikea Set 24 Knifes</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$26.50 </span>
                                    <span class="old-price">$45.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">IKEASG</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Ikea Set 24 Knifes</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$26.50 </span>
                                    <span class="old-price">$45.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">IKEASG</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-74.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Pack 10 Utensils</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$43.50 </span>
                                    <span class="old-price">$52.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">IKEASG</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Pack 10 Utensils</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$43.50 </span>
                                    <span class="old-price">$52.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">IKEASG</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-75.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">White Plastic Chair</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$123.50  </span>
                                    <span class="old-price">$152.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">homeuk</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">White Plastic Chair</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$123.50 </span>
                                    <span class="old-price">$152.85</span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">homeuk</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-60">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-76.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Black Leather Chair</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$86.75 </span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">homeuk</a></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                <h3 class="mrg-none"><a class="blue" href="product-details.html">Black Leather Chair</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span>$86.75 </span>
                                </div>
                                <div class="product-author">
                                    <span>Seller: <a href="#">homeuk</a></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="more-product-btn text-center">
                    <a href="shop.html">More Product</a>
                </div>
            </div>
        </div>
        <div class="about-us-area bg-gray-8 pt-115 pb-115">
            <div class="container">
                <div class="about-us-content-4">
                    <div class="about-us-content-4-title">
                        <h4>UAS: The One-stop Service and Repair Centre</h4>
                    </div>
                    <p>We supply consumables for all types of printers,faxes,typewriter, punch card, receipt,Bar code, Id card and ... more.
                        We stock all the major brands of genuine and generic cartridge for Toner, Ribbon, Ink, Carbon film & Thermal paper, with name brand lines including HP, Canon, Brother, Lexmark, Epson and more.</p>
                        <div class="about-us-content-4-title">
                            <h4> The choice is yours.</h4>
                        </div>
                        <p>We can supply original brand
                            consumables for all your printing needs.  </p>
                        <h4>Or</h4>
                        <p>We can supply you Quality consumable
                            such as our own brand range of Products.</p>
                    <div class="about-us-content-4-title">
                        <h4> Everything used in your office is available at our online store.</h4>
                    </div>
                    <p>By diagnosing faults correctly and utilising our vast experience we can reduce down time and repair cost.  </p>
                    <p>We can offer competitive part pricing due to direct relationship with most of the manufacturers we deal in.</p>
                    <p>From regular maintenance of your printer to a full rebuild, UAS does it all. We have a full team of qualified technicians, 
                        that are able to give you the best advice and service on all your printer equipments. We service all makes and models and 
                        source parts from local & oversea trusted parts suppliers.</p>
                </div>
            </div>
        </div>
        <div class="subscribe-area pt-95 pb-95">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <div class="section-title-3">
                            <h2>Our Newsletter</h2>
                            <p>Enter your email address to sign up for our special offers and product promotions </p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div id="mc_embed_signup" class="subscribe-form-2">
                            <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style-2" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                <div id="mc_embed_signup_scroll" class="mc-form-2 mc-form-2-bg-gray">
                                    <input class="email" type="email" required="" placeholder="Enter your email address" name="EMAIL" value="">
                                    <div class="mc-news-2" aria-hidden="true">
                                        <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                    </div>
                                    <div class="clear-2 clear-2-blue">
                                        <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!-- Footer Section -->
<footer class="footer-area">
    <div class="footer-top border-bottom-4 pb-55">
        <div class="container">
            <div class="row">
                <!-- Shopping Guide Section -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="footer-widget mb-40">
                        <h3 class="footer-title">SHOPPING GUIDE</h3>
                        <div class="footer-info-list">
                            <ul>
                                <li><a href="#">How to Buy</a></li>
                                <li><a href="#">FAQ's</a></li>
                                <li><a href="#">Shipment</a></li>
                                <li><a href="#">Return Policy</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms and Conditions</a></li>
                            </ul>
                            <!-- "Sell with Us" Button -->
                            <button class="sell-btn">Sell with Us</button>
                        </div>
                    </div>
                </div>

                <!-- My Account Section -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="footer-widget mb-40">
                        <h3 class="footer-title">MY ACCOUNT</h3>
                        <div class="footer-info-list">
                            <ul>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="order-history.html">Order History</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Information Section -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="footer-widget mb-40">
                        <h3 class="footer-title">INFORMATION</h3>
                        <div class="footer-info-list">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="products.html">Products</a></li>
                                <li><a href="cart.html">Shopping Cart</a></li>
                                <li><a href="testimonials.html">Testimonials</a></li>
                                <li><a href="newsletter.html">Newsletter</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="service.html">Service</a></li>
                                <li><a href="feedback.html">Feedback</a></li>
                                <li><a href="sitemap.html">Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Contact Us Section (Moved Beside Information) -->
                <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                    <div class="footer-widget mb-40">
                        <h3 class="footer-title">CONTACT US</h3>
                        <div class="contact-info-2">
                            <div class="single-contact-info-2">
                                <div class="contact-info-2-icon">
                                    <i class="icon-call-end"></i>
                                </div>
                                <div class="contact-info-2-content">
                                    <p>Got a question? Call us or Whatsapp us</p>
                                    <h3 class="blue">012-2035268</h3>
                                </div>
                            </div>
                            <div class="single-contact-info-2">
                                <div class="contact-info-2-icon">
                                    <i class="icon-cursor icons"></i>
                                </div>
                                <div class="contact-info-2-content">
                                    <p>39A-2 Block D Plaza Sinar Jalan 6/38D Taman Sri Sinar Segambut</p>
                                </div>
                            </div>
                            <div class="single-contact-info-2">
                                <div class="contact-info-2-icon">
                                    <i class="icon-envelope-open"></i>
                                </div>
                                <div class="contact-info-2-content">
                                    <p>uasmail2u@gmail.com</p>
                                </div>
                            </div>
                            <div class="single-contact-info-2">
                                <div class="contact-info-2-icon">
                                    <i class="icon-clock"></i>
                                </div>
                                <div class="contact-info-2-content">
                                    <p>9:00 AM - 6:00 PM (Monday to Saturday)</p>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media Icons -->
                        <div class="social-style-1 social-style-1-font-inc social-style-1-mrg-2">
                            <a href="#"><i class="icon-social-twitter"></i></a>
                            <a href="#"><i class="icon-social-facebook"></i></a>
                            <a href="#"><i class="icon-social-instagram"></i></a>
                            <a href="#"><i class="icon-social-youtube"></i></a>
                            <a href="#"><i class="icon-social-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</footer>

            <div class="footer-bottom pt-30 pb-30 ">
                <div class="container">
                    <div class="row flex-row-reverse">
                        <div class="col-lg-6 col-md-6">
                            <div class="payment-img payment-img-right">
                                <a href="#"><img src="assets/images/icon-img/mastercard.png" alt=""></a>
                                <a href="#"><img src="assets/images/icon-img/visa.png" alt=""></a>
                                <a href="#"><img src="assets/images/icon-img/maestro.png" alt=""></a>
                                <a href="#"><img src="assets/images/icon-img/paypal.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <class class="copyright copyright-center">
                                <p>Copyright © United Advanced Systems. All Rights Reserved </p>
                                    <p>Developed and Managed by WeblinkIndia.NET</p> 
                                    </class>

                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5 col-md-6 col-12 col-sm-12">
                                <div class="tab-content quickview-big-img">
                                    <div id="pro-1" class="tab-pane fade show active">
                                        <img src="assets/images/product/product-1.jpg" alt="">
                                    </div>
                                    <div id="pro-2" class="tab-pane fade">
                                        <img src="assets/images/product/product-3.jpg" alt="">
                                    </div>
                                    <div id="pro-3" class="tab-pane fade">
                                        <img src="assets/images/product/product-6.jpg" alt="">
                                    </div>
                                </div>
                                <div class="quickview-wrap mt-15">
                                    <div class="nav nav-style-6">
                                        <button class="nav-link active" id="pro-1-tab" data-bs-toggle="tab" data-bs-target="#pro-1" type="button" role="tab"
                                            aria-controls="pro-1" aria-selected="true">
                                            <img src="assets/images/product/quickview-s1.jpg" alt="product-thumbnail">
                                        </button>
                                        <button class="nav-link" id="pro-2-tab" data-bs-toggle="tab" data-bs-target="#pro-2" type="button" role="tab"
                                            aria-controls="pro-2" aria-selected="true">
                                            <img src="assets/images/product/quickview-s2.jpg" alt="product-thumbnail">
                                        </button>
                                        <button class="nav-link" id="pro-3-tab" data-bs-toggle="tab" data-bs-target="#pro-3" type="button" role="tab"
                                            aria-controls="pro-3" aria-selected="true">
                                            <img src="assets/images/product/quickview-s3.jpg" alt="product-thumbnail">
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-12 col-sm-12">
                                <div class="product-details-content quickview-content">
                                    <h2>Simple Black T-Shirt</h2>
                                    <div class="product-ratting-review-wrap">
                                        <div class="product-ratting-digit-wrap">
                                            <div class="product-ratting">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                            <div class="product-digit">
                                                <span>5.0</span>
                                            </div>
                                        </div>
                                        <div class="product-review-order">
                                            <span>62 Reviews</span>
                                            <span>242 orders</span>
                                        </div>
                                    </div>
                                    <p>Seamlessly predominate enterprise metrics without performance based process improvements.</p>
                                    <div class="pro-details-price">
                                        <span class="new-price">$75.72</span>
                                        <span class="old-price">$95.72</span>
                                    </div>
                                    <div class="pro-details-color-wrap">
                                        <span>Color:</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li><a class="dolly" href="#">dolly</a></li>
                                                <li><a class="white" href="#">white</a></li>
                                                <li><a class="azalea" href="#">azalea</a></li>
                                                <li><a class="peach-orange" href="#">Orange</a></li>
                                                <li><a class="mona-lisa active" href="#">lisa</a></li>
                                                <li><a class="cupid" href="#">cupid</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-size">
                                        <span>Size:</span>
                                        <div class="pro-details-size-content">
                                            <ul>
                                                <li><a href="#">XS</a></li>
                                                <li><a href="#">S</a></li>
                                                <li><a href="#">M</a></li>
                                                <li><a href="#">L</a></li>
                                                <li><a href="#">XL</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-quality">
                                        <span>Quantity:</span>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                        </div>
                                    </div>
                                    <div class="product-details-meta">
                                        <ul>
                                            <li><span>Categories:</span> <a href="#">Woman,</a> <a href="#">Dress,</a> <a href="#">T-Shirt</a></li>
                                            <li><span>Tag: </span> <a href="#">Fashion,</a> <a href="#">Mentone</a> , <a href="#">Texas</a></li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-action-wrap">
                                        <div class="pro-details-add-to-cart">
                                            <a title="Add to Cart" href="#">Add To Cart </a>
                                        </div>
                                        <div class="pro-details-action">
                                            <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                                            <a title="Add to Compare" href="#"><i class="icon-refresh"></i></a>
                                            <a class="social" title="Social" href="#"><i class="icon-share"></i></a>
                                            <div class="product-dec-social">
                                                <a class="facebook" title="Facebook" href="#"><i class="icon-social-facebook"></i></a>
                                                <a class="twitter" title="Twitter" href="#"><i class="icon-social-twitter"></i></a>
                                                <a class="instagram" title="Instagram" href="#"><i class="icon-social-instagram"></i></a>
                                                <a class="pinterest" title="Pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->
    </div>

</x-app-layout>
