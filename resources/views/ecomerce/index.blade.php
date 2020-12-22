@extends('layouts.Ecomerce.frontend')

@section('content')

<!-- prealoder area start -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
        <div class="object" id="first_object"></div>
        <div class="object" id="second_object"></div>
        <div class="object" id="third_object"></div>
        </div>
    </div>      
</div>
<!-- prealoder area end -->

<main>
    <div class="box-white grey-bg pt-50">
        <div class="container">
            <div class="box-white-inner">
                <div class="row">
                    <div class="col-xl-12">

                        <!-- slider area start -->
                        <section class="slider__area slider__area-4 p-relative">
                            <div class="slider-active">
                                <div class="single-slider single-slider-2 slider__height-4 d-flex align-items-center" data-background="{{asset('/icommerce/assets')}}/img/slider/04/slider-01.jpg">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-7 col-lg-7 col-md-9 col-sm-11 col-12">
                                                <div class="slider__content slider__content-4">
                                                    <h2 data-animation="fadeInUp" data-delay=".2s">Handmade <br> Hand carved Coffee</h2>
                                                    <p data-animation="fadeInUp" data-delay=".4s">As rich and unique as the coffee beans it is intended for, this little scoop will make your morning ritual a special occasion every day. </p>
                                                    <a href="#" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s">Discover now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slider single-slider-2 slider__height-4 d-flex align-items-center" data-background="{{asset('/icommerce/assets')}}/img/slider/slider-2.jpg">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-7 col-lg-7 col-md-9 col-sm-11 col-12">
                                                <div class="slider__content slider__content-4">
                                                    <h2 data-animation="fadeInUp" data-delay=".2s">Think Different &<br> Do it otherwise</h2>
                                                    <p data-animation="fadeInUp" data-delay=".4s">As rich and unique as the coffee beans it is intended for, this little scoop will make your morning ritual a special occasion every day. </p>
                                                    <a href="#" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s">Discover now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slider single-slider-2 slider__height-4 d-flex align-items-center" data-background="{{asset('/icommerce/assets')}}/img/slider/slider-3.jpg">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-7 col-lg-7 col-md-9 col-sm-11 col-12">
                                                <div class="slider__content slider__content-4">
                                                    <h2 data-animation="fadeInUp" data-delay=".2s">Think Different &<br> Do it otherwise</h2>
                                                    <p data-animation="fadeInUp" data-delay=".4s">As rich and unique as the coffee beans it is intended for, this little scoop will make your morning ritual a special occasion every day. </p>
                                                    <a href="#" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s">Discover now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- slider area end -->

                        <!-- banner area start -->
                        <div class="banner__area pt-20">
                            <div class="container custom-container">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="banner__item mb-30 p-relative">
                                            <div class="banner__thumb fix">
                                                <a href="product-details.html" class="w-img"><img src="{{asset('/icommerce/assets')}}/img/shop/banner/banner-sm-4.jpg" alt="banner"></a>
                                            </div>
                                            <div class="banner__content p-absolute transition-3">
                                                <h5><a href="product-details.html">British Made Pocket <br> Knife - Oak</a></h5>
                                                <a href="product-details.html" class="link-btn">Discover now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="banner__item mb-30 p-relative">
                                            <div class="banner__thumb fix">
                                                <a href="product-details.html" class="w-img"><img src="{{asset('/icommerce/assets')}}/img/shop/banner/banner-sm-2.jpg" alt="banner"></a>
                                            </div>
                                            <div class="banner__content p-absolute transition-3">
                                                <h5><a href="product-details.html">Chair Kimi No Isu <br> Project</a></h5>
                                                <a href="product-details.html" class="link-btn">Discover now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="banner__item mb-30 p-relative">
                                            <div class="banner__thumb fix">
                                                <a href="product-details.html" class="w-img"><img src="{{asset('/icommerce/assets')}}/img/shop/banner/banner-sm-5.jpg" alt="banner"></a>
                                            </div>
                                            <div class="banner__content p-absolute transition-3">
                                                <h5><a href="product-details.html">Merino Lambswool <br> Scarf Moss</a></h5>
                                                <a href="product-details.html" class="link-btn">Discover now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- banner area end -->

                    </div>
                </div>
            </div>
            <!-- subscribe area start -->
            <section class="subscribe__area pb-100">
                <div class="container custom-container">
                    <div class="subscribe__inner pt-95">
                        <div class="row">
                            <div class="col-xl-8 offset-xl-2">
                                <div class="subscribe__content text-center">
                                    <h2>Get Discount Info</h2>
                                    <p>Subscribe to the Outstock mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                                    <div class="subscribe__form">
                                        <form action="#">
                                            <input type="email" placeholder="Subscribe to our newsletter...">
                                            <button class="os-btn os-btn-2 os-btn-3">subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- subscribe area end -->  
        </div>
    </div>
</main>

@endsection