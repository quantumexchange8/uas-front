{{-- <nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav> --}}

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
                                    <option>Search by  </option>
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
                            <a class="categori-show categori-blue" href="#">All Categories <i class="icon-arrow-down icon-right"></i></a>
                            <div class="category-menu-2 category-menu-2-blue categori-hide categori-not-visible-2">
                                <nav>
                                    <ul>
                                        <li><a href="{{ route('home_entertainment') }}"><i class="icon-bubbles"></i> Home & Entertainment</a></li>
                                        <li><a href="{{ route('spare') }}"><i class="icon-bubbles"></i> Spare Parts</a></li>
                                        <li><a href="{{ route('printer') }}"><i class="icon-bubbles"></i> Printer</a></li>
                                        <li><a href="{{ route('printer_service') }}"><i class="icon-bubbles"></i> Printer Service & Repair</a></li>
                                        <li><a href="{{ route('remanufactured_ink') }}"><i class="icon-bubbles"></i> Remanufactured Ink Cartridge Services</a></li>
                                        <li><a href="{{ route('health_care') }}"><i class="icon-bubbles"></i> Health Care</a></li>
                                        <li><a href="{{ route('consummable') }}"><i class="icon-bubbles"></i> Consumables</a></li>

                                        
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="main-menu main-menu-white main-menu-padding-1 main-menu-font-size-14 main-menu-lh-5">
                            <nav>
                                <ul>
                                    <li><a href="{{ route('homepage') }}">HOME</a></li>

                                          
            
                                    <li><a href="{{ route('about') }}">ABOUT US</a></li>
                                           
                                    <li><a href="{{ route('my_account') }}">MY ACCOUNT</a></li>

                                    <li><a href="{{ route('order_tracking') }}">TRACK ORDER</a></li>
                                          
                                     <li><a href="{{ route('contact') }}">CONTACT</a></li>
                                </ul>
                                            
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="header-action header-action-flex pr-20">
                            <div class="same-style-2 same-style-2-white same-style-2-font-dec">
                                <a href="{{ route('login_register') }}"><i class="icon-user"></i></a>

                            </div>
                            <div class="same-style-2 same-style-2-white same-style-2-font-dec">
                                <a href="{{ route('wishlist') }}"><i class="icon-heart"></i><span class="pro-count red">03</span></a>

                            </div>
                            <div class="same-style-2 same-style-2-white same-style-2-font-dec header-cart">
                                <a class="cart-active"  >
                                <a href="{{ route('cart') }}">
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
                <div class="col-3">
                    <div class="mobile-logo">
                        <a href="index.html">
                            <img alt="" src="assets/images/logo/UASLogo.png">
                        </a>
                    </div>
                </div>
                <div class="col-7">
                    <div class="header-action header-action-flex">
                        <div class="same-style-2 same-style-2-font-inc">
                            <a href="{{ route('login_register') }}"><i class="icon-user"></i></a>
                        </div>
                        <div class="same-style-2 same-style-2-font-inc">
                            <a href="{{ route('wishlist') }}"><i class="icon-heart"></i><span class="pro-count red">03</span></a>

                        </div>
                        <div class="same-style-2 same-style-2-font-inc header-cart">
                            <a class="cart-active" ></a>
                            <a href="{{ route('cart') }}">
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





