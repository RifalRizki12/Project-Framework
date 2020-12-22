<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from themepure.net/tf/outstock-prv/outstock/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Dec 2020 06:27:21 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Outstock - Clean, Minimal eCommerce HTML5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('/icommerce/assets')}}/img/favicon.png">
        
        <!-- CSS here -->
        <link rel="stylesheet" href="{{asset('/icommerce/assets')}}/css/preloader.css">
        <link rel="stylesheet" href="{{asset('/icommerce/assets')}}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('/icommerce/assets')}}/css/slick.css">
        <link rel="stylesheet" href="{{asset('/icommerce/assets')}}/css/metisMenu.css">
        <link rel="stylesheet" href="{{asset('/icommerce/assets')}}/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{asset('/icommerce/assets')}}/css/animate.min.css">
        <link rel="stylesheet" href="{{asset('/icommerce/assets')}}/css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="{{asset('/icommerce/assets')}}/css/fontAwesome5Pro.css">
        <link rel="stylesheet" href="{{asset('/icommerce/assets')}}/css/ionicons.min.css">
        <link rel="stylesheet" href="{{asset('/icommerce/assets')}}/css/default.css">
        <link rel="stylesheet" href="{{asset('/icommerce/assets')}}/css/style.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->  

        <!-- prealoder area start -->
        {{-- <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                <div class="object" id="first_object"></div>
                <div class="object" id="second_object"></div>
                <div class="object" id="third_object"></div>
                </div>
            </div>      
        </div> --}}
        <!-- prealoder area end -->

        <!-- header area start -->
        <header>
            <div id="header-sticky" class="header__area grey-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                            <div class="logo">
                                <a href="index.html"><img src="{{asset('/icommerce/assets')}}/img/logo/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8">
                            <div class="header__right p-relative d-flex justify-content-between align-items-center">
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul>
                                            <li><a href="/ecomerce">Home</a></li>
                                            <li><a href="/shop">Shop</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="shop.html">Pages</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="mobile-menu-btn d-lg-none">
                                    <a href="javascript:void(0);" class="mobile-menu-toggle"><i class="fas fa-bars"></i></a>
                                </div>
                                <div class="header__action">
                                    <ul>
                                        <li><a href="#" class="search-toggle"><i class="ion-ios-search-strong"></i> Search</a></li>
                                        <li>
                                            <?php
                                                $pesanan_utama = \App\models\jualbeli\Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

                                                $notif = \App\models\jualbeli\PesananDetail::where('pesanan_id', $pesanan_utama->id)->count();
                                            ?>
                                            <a href="check-out" class="cart"><i class="ion-bag"></i> Cart <span>({{$notif}})</span></a>
                                            
                                            <ul class="mini-cart">
                                                <li>
                                                    <div class="cart-img f-left">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('icommerce/assets')}}/img/shop/product/cart-sm/16.jpg" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="cart-content f-left text-left">
                                                        <h5>
                                                            <a href="product-details.html">Consectetur adi </a>
                                                        </h5>
                                                        <div class="cart-price">
                                                            <span class="ammount">1 <i class="fal fa-times"></i></span>
                                                            <span class="price">$ 400</span>
                                                        </div>
                                                    </div>
                                                    <div class="del-icon f-right mt-30">
                                                        <a href="#">
                                                            <i class="fal fa-times"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="total-price">
                                                        <span class="f-left">Subtotal:</span>
                                                        <span class="f-right">$400.0</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkout-link">
                                                        <a href="cart.html" class="os-btn">view Cart</a>
                                                        <a class="os-btn os-btn-black" href="checkout.html">Checkout</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li> <a href="javascript:void(0);"><i class="far fa-bars"></i></a>
                                            <ul class="extra-info">
                                                <li>
                                                    <div class="my-account">
                                                        <div class="extra-title">
                                                            <h5>{{auth()->user()->name}}</h5>
                                                        </div>
                                                        <ul>
                                                            <li><a href="#">Profile</a></li>
                                                            <li><a href="/logout">Log Out</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header area end -->

        <!-- scroll up area start -->
        <div class="scroll-up" id="scroll" style="display: none;">
            <a href="javascript:void(0);"><i class="fas fa-level-up-alt"></i></a>
        </div>
        <!-- scroll up area end -->
        
        <!-- search area start -->
        <section class="header__search white-bg transition-3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="header__search-inner text-center">
                            <form action="#">
                                <div class="header__search-btn">
                                    <a href="javascript:void(0);" class="header__search-btn-close"><i class="fal fa-times"></i></a>
                                </div>
                                <div class="header__search-header">
                                    <h3>Search</h3>
                                </div>
                                <div class="header__search-categories">
                                    <ul class="search-category">
                                        <li><a href="shop.html">All Categories</a></li>
                                        <li><a href="shop.html">Accessories</a></li>
                                        <li><a href="shop.html">Chair</a></li>
                                        <li><a href="shop.html">Tablet</a></li>
                                        <li><a href="shop.html">Men</a></li>
                                        <li><a href="shop.html">Women</a></li>

                                    </ul>
                                </div>
                                <div class="header__search-input p-relative">
                                    <input type="text" placeholder="Search for products... ">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="body-overlay transition-3"></div>
        <!-- search area end -->
        
        @yield('content')

        <!-- footer area start -->
        <section class="footer__area footer-bg">
            <div class="footer__top pt-100 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="footer__widget mb-30">
                                <div class="footer__widget-title mb-25">
                                    <a href="index.html"><img src="{{asset('/icommerce/assets')}}/img/logo/logo-2.png" alt="logo"></a>
                                </div>
                                <div class="footer__widget-content">
                                    <p>Outstock is a premium Templates theme with advanced admin module. It’s extremely customizable, easy to use and fully responsive and retina ready.</p>
                                    <div class="footer__contact">
                                        <ul>
                                            <li>
                                                <div class="icon">
                                                    <i class="fal fa-map-marker-alt"></i>
                                                </div>
                                                <div class="text">
                                                    <span>Add: 1234 Heaven Stress, Beverly Hill, Melbourne, USA.</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fal fa-envelope-open-text"></i>
                                                </div>
                                                <div class="text">
                                                    <span>Email: rizkysegitarius12@gmail.com</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fal fa-phone-alt"></i>
                                                </div>
                                                <div class="text">
                                                    <span>Phone Number: 081 252 523 409</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                            <div class="footer__widget mb-30">
                                <div class="footer__widget-title">
                                    <h5>information</h5>
                                </div>
                                <div class="footer__widget-content">
                                    <div class="footer__links">
                                        <ul>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Careers</a></li>
                                            <li><a href="#">Delivery Inforamtion</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Terms & Condition</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                            <div class="footer__widget mb-30">
                                <div class="footer__widget-title mb-25">
                                    <h5>Customer Service</h5>
                                </div>
                                <div class="footer__widget-content">
                                    <div class="footer__links">
                                        <ul>
                                            <li><a href="#">Shipping Policy</a></li>
                                            <li><a href="#">Help & Contact Us</a></li>
                                            <li><a href="#">Returns & Refunds</a></li>
                                            <li><a href="#">Online Stores</a></li>
                                            <li><a href="#">Terms & Conditions</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7">
                            <div class="footer__copyright">
                                <p>Copyright © <a href="index.html">Outstock</a> all rights reserved. Powered by <a href="index.html">basictheme</a></p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5">
                            <div class="footer__social f-right">
                                <ul>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer area end -->
        
        <!-- JS here -->
        <script src="{{asset('/icommerce/assets')}}/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="{{asset('/icommerce/assets')}}/js/vendor/jquery-3.5.1.min.js"></script>
        <script src="{{asset('/icommerce/assets')}}/js/vendor/waypoints.min.js"></script>
        <script src="{{asset('/icommerce/assets')}}/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('/icommerce/assets')}}/js/metisMenu.min.js"></script>
        <script src="{{asset('/icommerce/assets')}}/js/slick.min.js"></script>
        <script src="{{asset('/icommerce/assets')}}/js/jquery.fancybox.min.js"></script>
        <script src="{{asset('/icommerce/assets')}}/js/isotope.pkgd.min.js"></script>
        <script src="{{asset('/icommerce/assets')}}/js/owl.carousel.min.js"></script>
        <script src="{{asset('/icommerce/assets')}}/js/jquery-ui-slider-range.js"></script>
        <script src="{{asset('/icommerce/assets')}}/js/ajax-form.js"></script>
        <script src="{{asset('/icommerce/assets')}}/js/wow.min.js"></script>
        <script src="{{asset('/icommerce/assets')}}/js/imagesloaded.pkgd.min.js"></script>
        <script src="{{asset('/icommerce/assets')}}/js/main.js"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        @include('sweet::alert')
    </body>

<!-- Mirrored from themepure.net/tf/outstock-prv/outstock/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Dec 2020 06:27:46 GMT -->
</html>
