<x-app-layout>
    <head>
        <!-- jQuery UI CSS + jQuery Core + UI -->
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    </head>

    <div class="main-wrapper">
        <!-- Breadcrumb -->
        <div class="breadcrumb-area bg-gray">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <ul>
                        <li><a href="{{ route('homepage') }}">HOME</a></li>
                        <li class="active">Consumables</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Shop Area -->
        <div class="shop-area pt-50 pb-80">
            <div class="container">
                <div class="row">
                    <!-- Sidebar Filters -->
                    <div class="col-lg-3 col-md-10 mb-20">
                        <div class="sidebar-wrapper">
                           <!-- Cleaned-up Sidebar Search -->
<div class="sidebar-widget mb-20 p-0">
    <h4 class="sidebar-widget-title mb-2">Search</h4>
    <div class="sidebar-search">
        <form class="sidebar-search-form" action="#">
            <input type="text" placeholder="Search here...">
            <button><i class="icon-magnifier"></i></button>
        </form>
    </div>
</div>

                            

                            @foreach ([
                                'CATEGORY' => ['Consumable', 'COMPATIBLE', 'ORIGINAL'],
                                'TYPE' => ['Original', 'Compatible', 'Refurbished'],
                                'BRAND' => ['Canon', 'Epson', 'HP', 'Panasonic'],
                                'COLOR' => ['Black', 'Blue', 'N/A', 'No colour'],
                                'SIZE' => ['XL', 'Standard', 'No size']
                            ] as $section => $options)
                                <div class="sidebar-widget shop-sidebar-border mb-30 pt-30">
                                    <h4 class="sidebar-widget-title">{{ $section }}</h4>
                                    <ul>
                                        @foreach ($options as $option)
                                            <li>
                                                <input type="{{ $section === 'TYPE' ? 'radio' : 'checkbox' }}"> {{ $option }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach

                            <!-- ✅ Price Filter with jQuery UI Slider -->
                            <div class="sidebar-widget shop-sidebar-border mb-30 pt-30">
                                <h4 class="sidebar-widget-title">Price Filter</h4>
                                <div class="price-filter">
                                    <span>Range: $100.00 - 1.300.00 </span>
                                    <div id="slider-range" class="mt-3 mb-2"></div>
                                    <div class="price-slider-amount">
                                        <div class="label-input">
                                            <input type="text" id="amount" name="price" placeholder="Add Your Price" readonly />
                                        </div>
                                        <button type="button" class="btn btn-sm btn-dark mt-2">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Grid -->
                    <div class="col-lg-9 col-md-12">
                        <div class="shop-topbar-wrapper d-flex justify-content-between align-items-center mb-">
                            <div class="view-mode nav">
                                <a class="active" href="#shop-1" data-bs-toggle="tab"><i class="icon-grid"></i></a>
                                <a href="#shop-2" data-bs-toggle="tab"><i class="icon-menu"></i></a>
                            </div>
                            <p class="mb-0">Showing 1 - 1 of 1 result</p>
                            <div class="product-sorting-wrapper d-flex gap-3">
                                <div class="product-shorting shorting-style">
                                    <label>View :</label>
                                    <select><option value="">20</option></select>
                                </div>
                                <div class="product-show shorting-style">
                                    <label>Sort by :</label>
                                    <select>
                                        <option value="">Price</option>
                                        <option value="">Name</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="shop-bottom-area">
                            <div class="tab-content jump">
                                <div id="shop-1" class="tab-pane active">
                                    <div class="row justify-content-start">
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="#"><img src="/images/no-image.jpg" alt="No Image"></a>
                                                    <div class="product-action-2 tooltip-style-2">
                                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                                        <button title="Quick View"><i class="icon-size-fullscreen icons"></i></button>
                                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">
                                                    <h3><a href="#">UAS Ribbon ELQ-2170/2180/2190</a></h3>
                                                    <p>EPSON</p>
                                                    <div class="product-price-2"><span>RM 35.00</span></div>
                                                    <div class="pro-add-to-cart mt-2">
                                                        <button title="Add to Cart">Add To Cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pagination -->
                            <div class="pro-pagination-style text-center mt-30">
                                <ul>
                                    <li><a class="prev" href="#"><i class="icon-arrow-left"></i></a></li>
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a class="next" href="#"><i class="icon-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- End Product Grid -->
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery UI slider script -->
    <script>
        $(function () {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 1300,
                values: [100, 300],
                slide: function (event, ui) {
                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
            $("#amount").val("$" + $("#slider-range").slider("values", 0) +
                " - $" + $("#slider-range").slider("values", 1));
        });
    </script>
</x-app-layout>
