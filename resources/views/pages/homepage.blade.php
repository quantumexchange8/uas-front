<x-app-layout>
  <!-- Slider Section -->
  <div class="slider-area bg-gray-8">
    <div class="container">
        <div class="hero-slider-active-2 nav-style-1 nav-style-1-modify-2 nav-style-1-blue">
            <div class="single-hero-slider single-hero-slider-hm9 single-animation-wrap">
                <div class="row slider-animated-1 align-items-center">
                    <div class="col-lg-5 col-md-5 col-12 col-sm-6">
                        <div class="hero-slider-content-6 slider-content-hm9" style="padding-bottom: 80px;">
                            <h5 class="animated">Now Available</h5>
                            <h1 class="animated">PRINTER &<br> REPAIR SOLUTIONS</h1>
                            <p class="animated">Your one-stop solution for printer repair and support.</p>
                            <div class="btn-style-1 mt-3">
                                <a href="product-details.html"
                                   class="animated btn-1-padding-4 btn-1-blue btn-1-font-14"
                                   style="padding: 10px 20px; background-color: #007bff; color: white; border-radius: 5px; font-size: 14px; text-decoration: none; display: inline-block;">
                                    Explore Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-12 col-sm-6">
                        <div class="hm9-hero-slider-img text-center">
                            <img src="{{ asset('assets/images/slider/printerBanner.jpg') }}" alt="Home Secure Camera Banner"
                                 class="animated img-fluid" style="max-height: 400px; object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Service Section -->
<div class="service-area" style="margin-top: 30px;">
    <div class="container">
        <div class="service-wrap service-wrap-hm9">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-service-wrap text-center">
                        <div class="service-icon service-icon-blue mb-3">
                            <i class="icon-cursor"></i>
                        </div>
                        <div class="service-content">
                            <h3>Free Shipping</h3>
                            <span>Orders over $100</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-service-wrap text-center">
                        <div class="service-icon service-icon-blue mb-3">
                            <i class="icon-reload"></i>
                        </div>
                        <div class="service-content">
                            <h3>Free Returns</h3>
                            <span>Within 30 days</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-service-wrap text-center">
                        <div class="service-icon service-icon-blue mb-3">
                            <i class="icon-lock"></i>
                        </div>
                        <div class="service-content">
                            <h3>100% Secure</h3>
                            <span>Payment Online</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-service-wrap text-center">
                        <div class="service-icon service-icon-blue mb-3">
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

    <div class="about-us-area pt-20 pb-20">
        <div class="container">
            <div class="about-us-content-3 text-center">
                <h3>Welcome To <span>UAS</span> - One Stop Service and Repair Centre</h3>
                <p>You'll get the right solution for your needs.</p>
            </div>
        </div>
    </div>
    

    <div class="container">
        <div class="row">
            <!-- Banner 1: Printer Repair -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="banner-wrap">
                    <div class="banner-img-container">
                        <img src="assets/images/banner/2.png" alt="Printer Repair" class="banner-img-fixed">
                    </div>
                    <div class="banner-content">
                        <h5>Printer Repair</h5>
                        <p>Common Printer Problems Solved</p>
                      
                    </div>
                </div>
            </div>
        
            <!-- Banner 2: Computer Repair -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="banner-wrap">
                    <div class="banner-img-container">
                        <img src="assets/images/banner/3.png" alt="Computer Repair" class="banner-img-fixed">
                    </div>
                    <div class="banner-content">
                        <h5>Computer Repair</h5>
                        <p>Support Any Brand, Any Problem</p>
                    
                    </div>
                </div>
            </div>
        
            <!-- Banner 3: Ink Refill Promotion -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="banner-wrap">
                    <div class="banner-img-container">
                        <img src="assets/images/banner/1.png" alt="Ink Refill Offer" class="banner-img-fixed">
                    </div>
                    <div class="banner-content">
                        <h5>Ink Refills While You Wait</h5>
                        <p>Save Time, Save Money, Save the Planet</p>
                     
                    </div>
                </div>
            </div>
        </div>
      <!-- Include AOS for scroll animation (optional but cool) -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<link rel="stylesheet" href="{{ asset('assets/css/popular_cat.css') }}">

<!-- Popular Categories Section -->
<div class="product-categories-area pb-20">
    <div class="container">
        <div class="section-title-6 text-center mt-20 mb-10">
            <h2>Popular Categories</h2>
            <p class="section-subtext">Choose a category to explore our products</p>
        </div>

        <div class="d-flex justify-content-center category-row">

           @php
    $categories = [
        ['img' => 'CHome.png', 'name' => 'Home & Entertainment', 'url' => route('home_entertainment')],
        ['img' => 'CSpare.png', 'name' => 'Spare Parts', 'url' => url('/spare')],
        ['img' => 'CPrinter.png', 'name' => 'Printer', 'url' => url('/printer')],
        ['img' => 'CPrinterService.png', 'name' => 'Printer Service', 'url' => url('/printer_service')],
        ['img' => 'CRemanufactured.png', 'name' => 'Ink Cartridge', 'url' => url('/ink')],
        ['img' => 'CHealthCare.png', 'name' => 'Health Care', 'url' => url('/healthcare')],
        ['img' => 'CConsummable.png', 'name' => 'Consumables', 'url' => url('/consummable')],
    ];
@endphp


            @foreach($categories as $index => $category)
                <div class="text-center mx-3 mb-4" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <a href="{{ url('shop') }}" title="Browse {{ $category['name'] }}">
                        <div class="category-circle">
                            <img src="{{ asset('assets/images/' . $category['img']) }}" alt="{{ $category['name'] }}">
                        </div>
                        <p>{{ $category['name'] }}</p>
                    </a>
                </div>
            @endforeach

        </div>

        <!-- Optional Divider -->
        <hr style="width: 80%; margin: 40px auto 0; border-top: 1px solid #ddd;">
    </div>
</div>

        
        
    <div class="product-area mt-0 mb-20">
        <div class="container">
            <div class="section-title-6 section-title-6-xs mb-20 text-center">
                <h2>best seller in last month</h2>
            </div>
            <div class="tab-style-9 nav mb-20">
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
   
  
    <div class="about-us-area bg-gray-8 pt-115 pb-120">
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
