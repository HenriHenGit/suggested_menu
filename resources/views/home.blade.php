<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uitheme.net/orgomart/g-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2024 13:04:39 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orgomart - Grocery Store HTML Template</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.ico">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body class="color-theme-green mont-font">

    <div class="preloader"></div>
    <!-- main wrapper  -->
    <div class="main-wrapper bg-lightgrey">

        <!-- HEADER WRAPPER -->
        <div class="header-menu-mob pt-2 pb-2 shadow-xss position-fixed w-100 z-index-5 bg-white d-none d-block-md">
            <div class="container">
                <div class="row">
                    <div class="col text-start"><button class="navbar-toggler border-0" type="button"
                            data-bs-toggle="modal" data-bs-target="#menumodal"><span
                                class="navbar-toggler-icon"></span></button></div>
                    <div class="col text-center"><a href="index-2.html"><img src="images/logo.png" alt="logo"
                                class="logo w-110 pt-1"></a></div>
                    <div class="col text-end"><a href="#" class="nav-icon mt-1 d-inline-block"
                            data-bs-toggle="modal" data-bs-target="#cartmodal"><i
                                class="feather-shopping-bag text-grey-500 font-xl"></i></a></div>
                </div>
            </div>
        </div>
        @include('partials.header')
        <!-- HEADER WRAPPER -->
        <!-- BANNER WRAPPER -->
        <div class="banner-wrapper pt-4 pb-3 md-mt-6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 pe-lg-0 d-none d-lg-block lower-header">
                        <ul class="dropdown-menu show w-100 posr border-0 mt-0 h-100 pt-2 p-3 shadow-none">
                            <li><a class="dropdown-item dropdown-toggle" href="#">Biscuits &amp; Snacks <span
                                        class="alert-warning text-warning">NEW</span></a></li>
                            <li><a class="dropdown-item dropdown-toggle" href="#">Breads &amp; Bakery </a></li>
                            <li><a class="dropdown-item dropdown-toggle" href="#">Breakfast &amp; Dairy <span
                                        class="alert-success text-success">Offer</span></a></li>
                            <li><a class="dropdown-item dropdown-toggle" href="#">Frozen Foods </a></li>
                            <li><a class="dropdown-item dropdown-toggle" href="#">Fruits &amp; Vegetables </a>
                            </li>
                            <li><a class="dropdown-item dropdown-toggle" href="#">Grocery &amp; Staples </a>
                            </li>
                            <li><a class="dropdown-item dropdown-toggle" href="#">Household Needs </a></li>
                            <li><a class="dropdown-item dropdown-toggle" href="#">Meats &amp; Seafood </a></li>
                            <li><a class="dropdown-item dropdown-toggle" href="#">Fruits &amp; Vegetables </a>
                            </li>
                            <li><a class="dropdown-item dropdown-toggle" href="#">Grocery &amp; Staples </a>
                            </li>
                            <li><a class="dropdown-item dropdown-toggle" href="#">Household Needs </a></li>
                            <li><a class="dropdown-item dropdown-toggle" href="#">Meats &amp; Seafood </a></li>
                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div
                            class="owl-carousel slider-banner banner-wrap owl-theme ovh nav-none owl-arrow-center arrow-container">
                            <div class="item rounded-6 bg-image-cover ovh style1 d-flex justify-content-start"
                                style="background-image: url(images/banner-slider-2.jpg);">
                                <div class="slide-content text-left w-50 ps-lg-5">
                                    <span class="text-grey-700">All natural products</span>
                                    <h2 class="text-grey-900"><b class="d-block">Special Offer </b>of the week</h2>
                                    <p class="text-grey-600">Organic food is food produced by methods that comply with
                                        the standard of farming.</p>
                                    <div class="clearfix"></div>
                                    <a href="#" class="btn-lg rounded-25 btn bg-current">SHOP NOW</a>
                                </div>
                            </div>
                            <div class="item rounded-6 bg-image-cover ovh style1 d-flex justify-content-center"
                                style="background-image: url(images/banner-slider-5.jpg);">
                                <div class="slide-content text-center w-50">
                                    <span class="text-grey-700">All natural products</span>
                                    <h2 class="text-grey-900"><b>Healty Food Pure</b> Organic Market</h2>
                                    <p class="text-grey-600">Organic food is food produced by methods that comply with
                                        the standard of farming.</p>
                                    <div class="clearfix"></div>
                                    <a href="#" class="btn-lg rounded-25 btn bg-current">SHOP NOW</a>
                                </div>
                            </div>

                            <div class="item rounded-6 bg-image-cover ovh style1 d-flex justify-content-center"
                                style="background-image: url(images/banner-slider-1.jpg);">
                                <div class="slide-content text-center w-50">
                                    <span class="text-grey-700">All natural products</span>
                                    <h2 class="text-grey-900"><b class="d-block">Summer Discount</b> Organic Market
                                    </h2>
                                    <p class="text-grey-600">Organic food is food produced by methods that comply with
                                        the standard of farming.</p>
                                    <div class="clearfix"></div>
                                    <a href="#" class="btn-lg rounded-25 btn bg-current">SHOP NOW</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BANNER WRAPPER -->
        <!-- CATEGORY WRAPPER -->
        <div class="content-wrap">
            <div class="container">
                <div class="row m-0">
                    <div class="col-lg-12 bg-white rounded-6 p-4 pb-3">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 xs-mb-4 md-mb-3 text-start">
                                <i class="ti-shopping-cart text-grey-900 display1-size float-start me-3"></i>
                                <h4 class="mt-0 fw-600 text-grey-900 font-xsss mb-0 ls-0">100% Secure Payments</h4>
                                <p class="font-xsssss fw-500 text-grey-500 lh-26 mt-0 mb-0">100% Payment Protection.
                                </p>
                            </div>

                            <div class="col-lg-3 col-md-6 xs-mb-4 md-mb-3 text-start">
                                <i class="ti-headphone-alt text-grey-900 display1-size float-start me-3"></i>
                                <h4 class="mt-0 fw-600 text-grey-900 font-xsss mb-0 ls-0">Support</h4>
                                <p class="font-xsssss fw-500 text-grey-500 lh-26 mt-0 mb-0">Alway online feedback 24/7
                                </p>
                            </div>
                            <div class="col-lg-3 col-md-6 md-mb-3 text-start">
                                <i class="ti-lock text-grey-900 display1-size float-start me-3"></i>
                                <h4 class="mt-0 fw-600 text-grey-900 font-xsss mb-0 ls-0">Trust pay</h4>
                                <p class="font-xsssss fw-500 text-grey-500 lh-26 mt-0 mb-0">Easy Return Policy.</p>
                            </div>
                            <div class="col-lg-3 col-md-6 text-start">
                                <i class="ti-reload text-grey-900 display1-size float-start me-3"></i>
                                <h4 class="mt-0 fw-600 text-grey-900 font-xsss mb-0 ls-0">Return and Refund</h4>
                                <p class="font-xsssss fw-500 text-grey-500 lh-26 mt-0 mb-0">100% money back guarantee
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CATEGORY WRAPPER -->

        <div class="main-wrap pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 pe-lg-0 d-none d-lg-block">
                        <div class="card bg-white rounded-6 mb-3 border-0 p-3">
                            <div class="col-lg-12">
                                <h4 class="fw-700 d-flex font-xsss mb-4 mt-2">Trend Product <i
                                        class="feather-chevrons-right text-grey-500 font-xs ms-auto"></i></h4>

                            </div>
                            <div class="row mb-3">
                                <div class="col-xs-5 col-sm-5"><a href="#" class="d-block text-center"
                                        data-bs-toggle="modal" data-bs-target="#productmodal"><img
                                            src="images/g-10.png" alt="product-image"
                                            class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a></div>
                                <div class="col-xs-7 col-sm-7 ps-0">
                                    <span
                                        class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product-1.html"
                                        class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Blue Diamond
                                        Almonds Lightly Salted</a>
                                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>29 </h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-xs-5 col-sm-5"><a href="#" class="d-block text-center"
                                        data-bs-toggle="modal" data-bs-target="#productmodal"><img
                                            src="images/g-11.png" alt="product-image"
                                            class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a></div>
                                <div class="col-xs-7 col-sm-7 ps-0">
                                    <span
                                        class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product-1.html"
                                        class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Assorted Donuts
                                        Each Salted</a>
                                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>29 </h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-xs-5 col-sm-5"><a href="#" class="d-block text-center"
                                        data-bs-toggle="modal" data-bs-target="#productmodal"><img
                                            src="images/g-12.png" alt="product-image"
                                            class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a></div>
                                <div class="col-xs-7 col-sm-7 ps-0">
                                    <span
                                        class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product-1.html"
                                        class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Natures Own
                                        Wheat Salted</a>
                                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>29 </h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-xs-5 col-sm-5"><a href="#" class="d-block text-center"
                                        data-bs-toggle="modal" data-bs-target="#productmodal"><img
                                            src="images/g-13.png" alt="product-image"
                                            class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a></div>
                                <div class="col-xs-7 col-sm-7 ps-0">
                                    <span
                                        class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product-1.html"
                                        class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Kobita Almonds
                                        Lightly Salted</a>
                                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>29 </h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-5 col-sm-5"><a href="#" class="d-block text-center"
                                        data-bs-toggle="modal" data-bs-target="#productmodal"><img
                                            src="images/g-14.png" alt="product-image"
                                            class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a></div>
                                <div class="col-xs-7 col-sm-7 ps-0">
                                    <span
                                        class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product-1.html"
                                        class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Almonds Sweet &
                                        Salty Kettle Corn</a>
                                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>29 </h6>
                                </div>
                            </div>
                        </div>
                        <div class="card w-100 border-0 shadow-none mb-3 ovh rounded-6 hover-zoom-image">
                            <img src="images/side-banner-4.jpg" alt="" class="w-100">
                            <div class="p-4 posa bottom-0 w-100">
                                <span
                                    class="fw-700 ls-3 text-white bg-current ps-2 pe-2 lh-24 rounded-6 d-inline-block font-xsssss">30%
                                    OFF</span>
                                <h4 class="font-xs fw-700 lh-28 text-grey-900 mb-3 mt-3 ls-0">High Quality <br>
                                    Products</h4>
                                <a href="#" class="fw-700 ls-3 text-grey-900 font-xsssss">SHOP NOW</a>
                            </div>
                        </div>
                        <div class="card bg-white rounded-6 mb-3 border-0 p-3">
                            <div class="col-lg-12">
                                <h4 class="fw-700 d-flex font-xsss mb-4 mt-2">Featured Product <i
                                        class="feather-chevrons-right text-grey-500 font-xs ms-auto"></i></h4>

                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-5 col-xs-5"><a href="#" class="d-block text-center"
                                        data-bs-toggle="modal" data-bs-target="#productmodal"><img
                                            src="images/g-15.png" alt="product-image"
                                            class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a></div>
                                <div class="col-sm-7 col-xs-7 ps-0">
                                    <span
                                        class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product-1.html"
                                        class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Blue Diamond
                                        Almonds Lightly Salted</a>
                                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>29 </h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-5 col-xs-5"><a href="#" class="d-block text-center"
                                        data-bs-toggle="modal" data-bs-target="#productmodal"><img
                                            src="images/g-16.png" alt="product-image"
                                            class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a></div>
                                <div class="col-sm-7 col-xs-7 ps-0">
                                    <span
                                        class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product-1.html"
                                        class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Assorted Donuts
                                        Each Salted</a>
                                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>29 </h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-5 col-xs-5"><a href="#" class="d-block text-center"
                                        data-bs-toggle="modal" data-bs-target="#productmodal"><img
                                            src="images/g-17.png" alt="product-image"
                                            class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a></div>
                                <div class="col-sm-7 col-xs-7 ps-0">
                                    <span
                                        class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product-1.html"
                                        class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Natures Own
                                        Wheat Salted</a>
                                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>29 </h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-5 col-xs-5"><a href="#" class="d-block text-center"
                                        data-bs-toggle="modal" data-bs-target="#productmodal"><img
                                            src="images/g-18.png" alt="product-image"
                                            class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a></div>
                                <div class="col-sm-7 col-xs-7 ps-0">
                                    <span
                                        class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product-1.html"
                                        class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Kobita Almonds
                                        Lightly Salted</a>
                                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>29 </h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 col-xs-5"><a href="#" class="d-block text-center"
                                        data-bs-toggle="modal" data-bs-target="#productmodal"><img
                                            src="images/g-19.png" alt="product-image"
                                            class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a></div>
                                <div class="col-sm-7 col-xs-7 ps-0">
                                    <span
                                        class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product-1.html"
                                        class="text-grey-900 fw-600 font-xssss lh-20 d-block ls-0 mb-0">Almonds Sweet &
                                        Salty Kettle Corn</a>
                                    <h6 class="font-xsss ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>29 </h6>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-lightblue rounded-6 mb-3 border-0">
                            <img src="images/app-store-banner.jpg" alt="app-banner" class="w-100">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4 class="fw-700 font-xs mb-4 mt-2">Deal of the day</h4>
                            </div>
                            <div class="col-lg-12">
                                <div
                                    class="banner-slider-4 owl-carousel owl-theme dot-none owl-nav-link owl-arrow-top rounded-6 bg-white">
                                    <div class="owl-items">
                                        <div class="col-lg-12 p-3 rounded-0 posr">
                                            <h4
                                                class="ls-3 font-xsssss text-white text-uppercase bg-current fw-700 p-2 d-inline-block posa rounded-3">
                                                30% off</h4>
                                            <a href="#" class="posa right-0 top-0 mt-3 me-3"><i
                                                    class="ti-heart font-xs text-grey-500"></i></a>
                                            <div class="clearfix"></div>
                                            <a href="#" class="d-block text-center p-2" data-bs-toggle="modal"
                                                data-bs-target="#productmodal"><img src="images/g-15.png"
                                                    alt="product-image" class="w-100 mt-1 d-inline-block"></a>
                                            <div class="star d-inline text-left">
                                                <img src="images/star.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                                <img src="images/star.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                                <img src="images/star.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                                <img src="images/star.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                                <img src="images/star-disable.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                            </div>
                                            <div class="clearfix"></div>
                                            <h2 class="mt-1"><a href="single-product-1.html"
                                                    class="text-grey-700 fw-600 font-xsss lh-2 ls-0">Apis Mixed Fruit
                                                    Jam </a></h2>
                                            <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span
                                                    class="font-xsssss text-grey-500">$</span>49 <span
                                                    class="ms-auto text-grey-500 fw-500 font-xsssss">500gm</span></h6>
                                            <div class="cart-count d-flex mt-4 mb-2">
                                                <div class="number">
                                                    <span class="minus">-</span>
                                                    <input type="text" class="open-font" value="1">
                                                    <span class="plus">+</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="owl-items">
                                        <div class="col-lg-12 p-3 rounded-0 posr">
                                            <h4
                                                class="ls-3 font-xsssss text-white text-uppercase bg-current fw-700 p-2 d-inline-block posa rounded-3">
                                                Deal</h4>
                                            <a href="#" class="posa right-0 top-0 mt-3 me-3"><i
                                                    class="ti-heart font-xs text-grey-500"></i></a>
                                            <div class="clearfix"></div>
                                            <a href="#" class="d-block text-center p-2" data-bs-toggle="modal"
                                                data-bs-target="#productmodal"><img src="images/g-16.png"
                                                    alt="product-image" class="w-100 mt-1 d-inline-block"></a>
                                            <div class="star d-inline text-left">
                                                <img src="images/star.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                                <img src="images/star.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                                <img src="images/star.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                                <img src="images/star.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                                <img src="images/star-disable.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                            </div>
                                            <div class="clearfix"></div>
                                            <h2 class="mt-1"><a href="single-product-1.html"
                                                    class="text-grey-700 fw-600 font-xsss lh-2 ls-0">Masoor Dal
                                                    (Split)</a></h2>
                                            <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span
                                                    class="font-xsssss text-grey-500">$</span>29 <span
                                                    class="ms-auto text-grey-500 fw-500 font-xsssss">6kg</span></h6>
                                            <div class="cart-count d-flex mt-4 mb-2">
                                                <div class="number">
                                                    <span class="minus">-</span>
                                                    <input type="text" class="open-font" value="1">
                                                    <span class="plus">+</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="owl-items">
                                        <div class="col-lg-12 p-3 rounded-0 posr">
                                            <h4
                                                class="ls-3 font-xsssss text-white text-uppercase bg-current fw-700 p-2 d-inline-block posa rounded-3">
                                                Sale</h4>
                                            <a href="#" class="posa right-0 top-0 mt-3 me-3"><i
                                                    class="ti-heart font-xs text-grey-500"></i></a>
                                            <div class="clearfix"></div>
                                            <a href="#" class="d-block text-center p-2" data-bs-toggle="modal"
                                                data-bs-target="#productmodal"><img src="images/g-17.png"
                                                    alt="product-image" class="w-100 mt-1 d-inline-block"></a>
                                            <div class="star d-inline text-left">
                                                <img src="images/star.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                                <img src="images/star.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                                <img src="images/star.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                                <img src="images/star-disable.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                                <img src="images/star-disable.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                            </div>
                                            <div class="clearfix"></div>
                                            <h2 class="mt-1"><a href="single-product-1.html"
                                                    class="text-grey-700 fw-600 font-xsss lh-2 ls-0">Tata Iodized
                                                    Salt</a></h2>
                                            <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span
                                                    class="font-xsssss text-grey-500">$</span>43 <span
                                                    class="ms-auto text-grey-500 fw-500 font-xsssss">50gm</span></h6>
                                            <div class="cart-count d-flex mt-4 mb-2">
                                                <div class="number">
                                                    <span class="minus">-</span>
                                                    <input type="text" class="open-font" value="1">
                                                    <span class="plus">+</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="owl-items">
                                        <div class="col-lg-12 p-3 rounded-0 posr">
                                            <h4
                                                class="ls-3 font-xsssss text-white text-uppercase bg-current fw-700 p-2 d-inline-block posa rounded-3">
                                                Sale</h4>
                                            <a href="#" class="posa right-0 top-0 mt-3 me-3"><i
                                                    class="ti-heart font-xs text-grey-500"></i></a>
                                            <div class="clearfix"></div>
                                            <a href="#" class="d-block text-center p-2" data-bs-toggle="modal"
                                                data-bs-target="#productmodal"><img src="images/g-18.png"
                                                    alt="product-image" class="w-100 mt-1 d-inline-block"></a>
                                            <div class="star d-inline text-left">
                                                <img src="images/star.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                                <img src="images/star.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                                <img src="images/star.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                                <img src="images/star.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                                <img src="images/star.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                            </div>
                                            <div class="clearfix"></div>
                                            <h2 class="mt-1"><a href="single-product-1.html"
                                                    class="text-grey-700 fw-600 font-xsss lh-2 ls-0">Dabur Lal Dant
                                                    Manjan</a></h2>
                                            <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span
                                                    class="font-xsssss text-grey-500">$</span>56 <span
                                                    class="ms-auto text-grey-500 fw-500 font-xsssss">100gm</span></h6>
                                            <div class="cart-count d-flex mt-4 mb-2">
                                                <div class="number">
                                                    <span class="minus">-</span>
                                                    <input type="text" class="open-font" value="1">
                                                    <span class="plus">+</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="owl-items">
                                        <div class="col-lg-12 p-3 rounded-0 posr">
                                            <h4
                                                class="ls-3 font-xsssss text-white text-uppercase bg-current fw-700 p-2 d-inline-block posa rounded-3">
                                                Sale</h4>
                                            <a href="#" class="posa right-0 top-0 mt-3 me-3"><i
                                                    class="ti-heart font-xs text-grey-500"></i></a>
                                            <div class="clearfix"></div>
                                            <a href="#" class="d-block text-center p-2" data-bs-toggle="modal"
                                                data-bs-target="#productmodal"><img src="images/g-19.png"
                                                    alt="product-image" class="w-100 mt-1 d-inline-block"></a>
                                            <div class="star d-inline text-left">
                                                <img src="images/star.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                                <img src="images/star.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                                <img src="images/star.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                                <img src="images/star.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                                <img src="images/star.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                            </div>
                                            <div class="clearfix"></div>
                                            <h2 class="mt-1"><a href="single-product-1.html"
                                                    class="text-grey-700 fw-600 font-xsss lh-2 ls-0">Yeppe Noddles
                                                    Masala</a></h2>
                                            <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span
                                                    class="font-xsssss text-grey-500">$</span>22 <span
                                                    class="ms-auto text-grey-500 fw-500 font-xsssss">500gm</span></h6>
                                            <div class="cart-count d-flex mt-4 mb-2">
                                                <div class="number">
                                                    <span class="minus">-</span>
                                                    <input type="text" class="open-font" value="1">
                                                    <span class="plus">+</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="owl-items">
                                        <div class="col-lg-12 p-3 rounded-0 posr">
                                            <h4
                                                class="ls-3 font-xsssss text-white text-uppercase bg-current fw-700 p-2 d-inline-block posa rounded-3">
                                                Sale</h4>
                                            <a href="#" class="posa right-0 top-0 mt-3 me-3"><i
                                                    class="ti-heart font-xs text-grey-500"></i></a>
                                            <div class="clearfix"></div>
                                            <a href="#" class="d-block text-center p-2" data-bs-toggle="modal"
                                                data-bs-target="#productmodal"><img src="images/g-11.png"
                                                    alt="product-image" class="w-100 mt-1 d-inline-block"></a>
                                            <div class="star d-inline text-left">
                                                <img src="images/star.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                                <img src="images/star.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                                <img src="images/star.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                                <img src="images/star.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                                <img src="images/star.png" alt="star"
                                                    class="w-10 me-1 float-start">
                                            </div>
                                            <div class="clearfix"></div>
                                            <h2 class="mt-1"><a href="single-product-1.html"
                                                    class="text-grey-700 fw-600 font-xsss lh-2 ls-0">Yeppe Noddles
                                                    Masala</a></h2>
                                            <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span
                                                    class="font-xsssss text-grey-500">$</span>67 <span
                                                    class="ms-auto text-grey-500 fw-500 font-xsssss">500gm</span></h6>
                                            <div class="cart-count d-flex mt-4 mb-2">
                                                <div class="number">
                                                    <span class="minus">-</span>
                                                    <input type="text" class="open-font" value="1">
                                                    <span class="plus">+</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-3">
                                <div class="card border-0 banner-wrap bg-image-cover bg-image-center"
                                    style="background-image: url(images/bg-grocery-2.jpg);">
                                    <div class="slide-content style4 text-center w-100">
                                        <span class="text-current">All natural products</span>
                                        <h2 class="text-grey-900"><b class="d-block">SUMMER DISCOUNT </b>of the week
                                        </h2>
                                        <div class="clearfix"></div>
                                        <a href="#" class="btn-lg rounded-25 btn bg-current">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 pt-0 mt-3">
                                <div class="card side-wrap border-0 p-xl-5 p-4 bg-white">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group mb-3">
                                                <h6 class="fw-600 text-grey-900 font-xsss mb-0 text-capitalize">Product
                                                    Categoires</h6>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Drinks"
                                                    id="flexCheckDrinks1">
                                                <label class="form-check-label" for="flexCheckDrinks1">Drinks</label>
                                                <i
                                                    class="feather-chevron-right mt-1 font-xsss text-grey-500 ms-auto"></i>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Snacks"
                                                    id="flexCheckSnacks2">
                                                <label class="form-check-label" for="flexCheckSnacks2">Snacks &amp;
                                                    Biscuits</label>
                                                <i
                                                    class="feather-chevron-right mt-1 font-xsss text-grey-500 ms-auto"></i>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Breads"
                                                    id="flexCheckBreads3">
                                                <label class="form-check-label" for="flexCheckBreads3">Breads &amp;
                                                    Bakery</label>
                                                <i
                                                    class="feather-chevron-right mt-1 font-xsss text-grey-500 ms-auto"></i>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Breakfast"
                                                    id="flexCheckBreakfast4">
                                                <label class="form-check-label" for="flexCheckBreakfast4">Breakfast
                                                    &amp; Dairy</label>
                                                <i
                                                    class="feather-chevron-right mt-1 font-xsss text-grey-500 ms-auto"></i>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Frozen"
                                                    id="flexCheckFrozen">
                                                <label class="form-check-label" for="flexCheckFrozen">Frozen
                                                    Foods</label>
                                                <i
                                                    class="feather-chevron-right mt-1 font-xsss text-grey-500 ms-auto"></i>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Fruits"
                                                    id="flexCheckFruits">
                                                <label class="form-check-label" for="flexCheckFruits">Fruits &amp;
                                                    Vegetables</label>
                                                <i
                                                    class="feather-chevron-right mt-1 font-xsss text-grey-500 ms-auto"></i>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Grocery"
                                                    id="flexCheckGrocery">
                                                <label class="form-check-label" for="flexCheckGrocery">Grocery &amp;
                                                    Staples</label>
                                                <i
                                                    class="feather-chevron-right mt-1 font-xsss text-grey-500 ms-auto"></i>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Household"
                                                    id="flexCheckHousehold">
                                                <label class="form-check-label" for="flexCheckHousehold">Household
                                                    Needs</label>
                                                <i
                                                    class="feather-chevron-right mt-1 font-xsss text-grey-500 ms-auto"></i>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Meats"
                                                    id="flexCheckMeats">
                                                <label class="form-check-label" for="flexCheckMeats">Meats &amp;
                                                    Seafood</label>
                                                <i
                                                    class="feather-chevron-right mt-1 font-xsss text-grey-500 ms-auto"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group mb-3">
                                                <h6 class="fw-600 text-grey-900 font-xsss mb-0 text-capitalize">Product
                                                    Status</h6>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Drinks"
                                                    id="flexCheckStock1">
                                                <label class="form-check-label" for="flexCheckStock1">In Stock</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Snacks"
                                                    id="flexCheckSlae">
                                                <label class="form-check-label" for="flexCheckSlae">On Sale</label>
                                            </div>

                                            <div class="form-group mb-3 mt-3">
                                                <h6 class="fw-600 text-grey-900 font-xsss mb-0 text-capitalize">
                                                    Customer Ratings</h6>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Drinks"
                                                    id="flexCheckStock2">
                                                <label class="form-check-label" for="flexCheckStock2"><img
                                                        src="images/star.png" alt="star"
                                                        class="w-15 me-1 float-start mt-1"><img src="images/star.png"
                                                        alt="star" class="w-15 me-1 float-start mt-1"><img
                                                        src="images/star.png" alt="star"
                                                        class="w-15 me-1 float-start mt-1"><img src="images/star.png"
                                                        alt="star" class="w-15 me-1 float-start mt-1"><img
                                                        src="images/star.png" alt="star"
                                                        class="w-15 me-1 float-start mt-1"> <span
                                                        class="ms-auto text-grey-500">(13)</span></label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Drinks"
                                                    id="flexCheckStock3">
                                                <label class="form-check-label" for="flexCheckStock3"><img
                                                        src="images/star.png" alt="star"
                                                        class="w-15 me-1 float-start mt-1"><img src="images/star.png"
                                                        alt="star" class="w-15 me-1 float-start mt-1"><img
                                                        src="images/star.png" alt="star"
                                                        class="w-15 me-1 float-start mt-1"><img src="images/star.png"
                                                        alt="star" class="w-15 me-1 float-start mt-1"><img
                                                        src="images/star-disable.png" alt="star"
                                                        class="w-15 me-1 float-start mt-1"> <span
                                                        class="ms-auto text-grey-500">(22)</span></label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Drinks"
                                                    id="flexCheckStock4">
                                                <label class="form-check-label" for="flexCheckStock4"><img
                                                        src="images/star.png" alt="star"
                                                        class="w-15 me-1 float-start mt-1"><img src="images/star.png"
                                                        alt="star" class="w-15 me-1 float-start mt-1"><img
                                                        src="images/star.png" alt="star"
                                                        class="w-15 me-1 float-start mt-1"><img
                                                        src="images/star-disable.png" alt="star"
                                                        class="w-15 me-1 float-start mt-1"><img
                                                        src="images/star-disable.png" alt="star"
                                                        class="w-15 me-1 float-start mt-1"> <span
                                                        class="ms-auto text-grey-500">(542)</span></label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Drinks"
                                                    id="flexCheckStock5">
                                                <label class="form-check-label" for="flexCheckStock5"><img
                                                        src="images/star.png" alt="star"
                                                        class="w-15 me-1 float-start mt-1"><img src="images/star.png"
                                                        alt="star" class="w-15 me-1 float-start mt-1"><img
                                                        src="images/star-disable.png" alt="star"
                                                        class="w-15 me-1 float-start mt-1"><img
                                                        src="images/star-disable.png" alt="star"
                                                        class="w-15 me-1 float-start mt-1"><img
                                                        src="images/star-disable.png" alt="star"
                                                        class="w-15 me-1 float-start mt-1"> <span
                                                        class="ms-auto text-grey-500">(322)</span></label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Drinks"
                                                    id="flexCheckStock6">
                                                <label class="form-check-label" for="flexCheckStock6"><img
                                                        src="images/star.png" alt="star"
                                                        class="w-15 me-1 float-start mt-1"><img
                                                        src="images/star-disable.png" alt="star"
                                                        class="w-15 me-1 float-start mt-1"><img
                                                        src="images/star-disable.png" alt="star"
                                                        class="w-15 me-1 float-start mt-1"><img
                                                        src="images/star-disable.png" alt="star"
                                                        class="w-15 me-1 float-start mt-1"><img
                                                        src="images/star-disable.png" alt="star"
                                                        class="w-15 me-1 float-start mt-1"> <span
                                                        class="ms-auto text-grey-500">(342)</span></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group mb-3">
                                                <h6 class="fw-600 text-grey-900 font-xsss mb-0 text-capitalize">
                                                    Product Brand</h6>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Drinks"
                                                    id="flexCheckDrinkser">
                                                <label class="form-check-label"
                                                    for="flexCheckDrinkser">Vegetarian</label>
                                                <span
                                                    class="mt-1 font-xssss fw-500 text-grey-500 ms-auto">(1233)</span>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Snacks"
                                                    id="flexCheckSnacks7">
                                                <label class="form-check-label" for="flexCheckSnacks7">Vegan</label>
                                                <span
                                                    class="mt-1 font-xssss fw-500 text-grey-500 ms-auto">(2231)</span>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Breads"
                                                    id="flexCheckBreads454">
                                                <label class="form-check-label" for="flexCheckBreads454">Green
                                                    Food</label>
                                                <span class="mt-1 font-xssss fw-500 text-grey-500 ms-auto">(754)</span>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Breakfast"
                                                    id="flexCheckBreakfast6">
                                                <label class="form-check-label" for="flexCheckBreakfast6">Milk
                                                    Fess</label>
                                                <span class="mt-1 font-xssss fw-500 text-grey-500 ms-auto">(27)</span>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Frozen"
                                                    id="flexCheckFrozen8">
                                                <label class="form-check-label" for="flexCheckFrozen8">Frozen
                                                    Foods</label>
                                                <span class="mt-1 font-xssss fw-500 text-grey-500 ms-auto">(61)</span>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Fruits"
                                                    id="flexCheckFruits87">
                                                <label class="form-check-label" for="flexCheckFruits87">Fruits &amp;
                                                    Vegetables</label>
                                                <span class="mt-1 font-xssss fw-500 text-grey-500 ms-auto">(76)</span>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Grocery"
                                                    id="flexCheckGrocery76">
                                                <label class="form-check-label" for="flexCheckGrocery76">Grocery
                                                    &amp; Staples</label>
                                                <span class="mt-1 font-xssss fw-500 text-grey-500 ms-auto">(45)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-3">
                                <div class="card d-flex flex-row justify-content-start p-3 bg-white border-0">
                                    <a href="#" class="mt-1"><span
                                            class="feather-grid text-grey-600 font-xs"></span></a>
                                    <select class="form-select ms-auto float-end" aria-label="Default select example">
                                        <option selected="">Sort by latest</option>
                                        <option value="1">Sort by popularity</option>
                                        <option value="2">Sort by price : low to high</option>
                                        <option value="3">Sort by price : high to low</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="row rounded-6 m-0 bg-white mt-3">
                            <div class="col-lg-3 col-sm-3 col-xs-6 p-3 border-none-xs border-end rounded-0 posr">
                                <span
                                    class="ls-3 font-xsssss text-white text-uppercase bg-current fw-700 p-2 lh-1 d-inline-block posa rounded-3 left-15 top-15">30%
                                    off</span>
                                <a href="#" class="posa right-0 top-0 mt-3 me-3"><i
                                        class="ti-heart font-xs text-grey-500"></i></a>
                                <div class="clearfix"></div>
                                <a href="#" class="d-block text-center" data-bs-toggle="modal"
                                    data-bs-target="#productmodal"><img src="images/g-16.png" alt="product-image"
                                        class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0"></a>
                                <div class="star d-inline text-left">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star-disable.png" alt="star" class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2"><a href="single-product-1.html"
                                        class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Blue Diamond Almonds
                                        Lightly Salted</a></h2>
                                <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span
                                        class="font-xsssss text-grey-500">$</span>29 <span
                                        class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>
                                <div class="cart-count d-flex mt-4">
                                    <div class="number">
                                        <span class="minus">-</span>
                                        <input type="text" class="open-font" value="1">
                                        <span class="plus">+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-3 col-xs-6 p-3 border-none-xs border-end rounded-0 posr">
                                <a href="#" class="posa right-0 top-0 mt-3 me-3"><i
                                        class="ti-heart font-xs text-grey-500"></i></a>
                                <div class="clearfix"></div>
                                <a href="#" class="d-block text-center" data-bs-toggle="modal"
                                    data-bs-target="#productmodal"><img src="images/g-17.png" alt="product-image"
                                        class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0"></a>
                                <div class="star d-inline text-left">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star-disable.png" alt="star" class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2"><a href="single-product-1.html"
                                        class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Assorted Donuts Each
                                        Salted</a></h2>
                                <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span
                                        class="font-xsssss text-grey-500">$</span>29 <span
                                        class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>
                                <div class="cart-count d-flex mt-4">
                                    <div class="number">
                                        <span class="minus">-</span>
                                        <input type="text" class="open-font" value="1">
                                        <span class="plus">+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-3 col-xs-6 p-3 border-none-xs border-end rounded-0 posr">
                                <a href="#" class="posa right-0 top-0 mt-3 me-3"><i
                                        class="ti-heart font-xs text-grey-500"></i></a>
                                <div class="clearfix"></div>
                                <a href="#" class="d-block text-center" data-bs-toggle="modal"
                                    data-bs-target="#productmodal"><img src="images/g-15.png" alt="product-image"
                                        class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0"></a>
                                <div class="star d-inline text-left">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star-disable.png" alt="star" class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2"><a href="single-product-1.html"
                                        class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Natures Own Wheat
                                        Salted</a></h2>
                                <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span
                                        class="font-xsssss text-grey-500">$</span>29 <span
                                        class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>
                                <div class="cart-count d-flex mt-4">
                                    <div class="number">
                                        <span class="minus">-</span>
                                        <input type="text" class="open-font" value="1">
                                        <span class="plus">+</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-3 col-xs-6 p-4 border-none-xs rounded-0 posr">
                                <a href="#" class="posa right-0 top-0 mt-3 me-3"><i
                                        class="ti-heart font-xs text-grey-500"></i></a>
                                <div class="clearfix"></div>
                                <a href="#" class="d-block text-center" data-bs-toggle="modal"
                                    data-bs-target="#productmodal"><img src="images/g-19.png" alt="product-image"
                                        class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0"></a>
                                <div class="star d-inline text-left">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star-disable.png" alt="star"
                                        class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2"><a href="single-product-1.html"
                                        class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Kobita Almonds
                                        Lightly Salted</a></h2>
                                <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span
                                        class="font-xsssss text-grey-500">$</span>99 <span
                                        class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>
                                <div class="cart-count d-flex mt-4">
                                    <div class="number">
                                        <span class="minus">-</span>
                                        <input type="text" class="open-font" value="1">
                                        <span class="plus">+</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-lg-3 col-sm-3 col-xs-6 p-3 border-none-xs border-end border-top rounded-0 posr">
                                <span
                                    class="ls-3 font-xsssss text-white text-uppercase bg-danger fw-700 p-2 lh-1 d-inline-block posa rounded-3 left-15 top-15">SALE</span>
                                <a href="#" class="posa right-0 top-0 mt-3 me-3"><i
                                        class="ti-heart font-xs text-grey-500"></i></a>
                                <div class="clearfix"></div>
                                <a href="#" class="d-block text-center" data-bs-toggle="modal"
                                    data-bs-target="#productmodal"><img src="images/g-11.png" alt="product-image"
                                        class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0"></a>
                                <div class="star d-inline text-left">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star-disable.png" alt="star"
                                        class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2"><a href="single-product-1.html"
                                        class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Almonds Sweet &
                                        Salty Kettle Corn</a></h2>
                                <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span
                                        class="font-xsssss text-grey-500">$</span>88 <span
                                        class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>
                                <div class="cart-count d-flex mt-4">
                                    <div class="number">
                                        <span class="minus">-</span>
                                        <input type="text" class="open-font" value="1">
                                        <span class="plus">+</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-lg-3 col-sm-3 col-xs-6 p-3 border-none-xs border-end border-top rounded-0 posr">
                                <a href="#" class="posa right-0 top-0 mt-3 me-3"><i
                                        class="ti-heart font-xs text-grey-500"></i></a>
                                <div class="clearfix"></div>
                                <a href="#" class="d-block text-center" data-bs-toggle="modal"
                                    data-bs-target="#productmodal"><img src="images/g-12.png" alt="product-image"
                                        class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0"></a>
                                <div class="star d-inline text-left">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star-disable.png" alt="star"
                                        class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2"><a href="single-product-1.html"
                                        class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Blue Diamond Almonds
                                        Lightly Salted</a></h2>
                                <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span
                                        class="font-xsssss text-grey-500">$</span>76 <span
                                        class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>
                                <div class="cart-count d-flex mt-4">
                                    <div class="number">
                                        <span class="minus">-</span>
                                        <input type="text" class="open-font" value="1">
                                        <span class="plus">+</span>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="col-lg-3 col-sm-3 col-xs-6 p-3 border-none-xs border-end border-top rounded-0 posr">
                                <a href="#" class="posa right-0 top-0 mt-3 me-3"><i
                                        class="ti-heart font-xs text-grey-500"></i></a>
                                <div class="clearfix"></div>
                                <a href="#" class="d-block text-center" data-bs-toggle="modal"
                                    data-bs-target="#productmodal"><img src="images/g-10.png" alt="product-image"
                                        class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0"></a>
                                <div class="star d-inline text-left">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star-disable.png" alt="star"
                                        class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2"><a href="single-product-1.html"
                                        class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Assorted Donuts Each
                                        Salted</a></h2>
                                <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span
                                        class="font-xsssss text-grey-500">$</span>56 <span
                                        class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>
                                <div class="cart-count d-flex mt-4">
                                    <div class="number">
                                        <span class="minus">-</span>
                                        <input type="text" class="open-font" value="1">
                                        <span class="plus">+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-3 col-xs-6 p-3 border-none-xs border-top rounded-0 posr">
                                <a href="#" class="posa right-0 top-0 mt-3 me-3"><i
                                        class="ti-heart font-xs text-grey-500"></i></a>
                                <div class="clearfix"></div>
                                <a href="#" class="d-block text-center" data-bs-toggle="modal"
                                    data-bs-target="#productmodal"><img src="images/g-13.png" alt="product-image"
                                        class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0"></a>
                                <div class="star d-inline text-left">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star-disable.png" alt="star"
                                        class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2"><a href="single-product-1.html"
                                        class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Natures Own Wheat
                                        Salted</a></h2>
                                <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span
                                        class="font-xsssss text-grey-500">$</span>12 <span
                                        class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>
                                <div class="cart-count d-flex mt-4">
                                    <div class="number">
                                        <span class="minus">-</span>
                                        <input type="text" class="open-font" value="1">
                                        <span class="plus">+</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-lg-3 col-sm-3 col-xs-6 p-3 border-none-xs border-end border-top rounded-0 posr">
                                <a href="#" class="posa right-0 top-0 mt-3 me-3"><i
                                        class="ti-heart font-xs text-grey-500"></i></a>
                                <div class="clearfix"></div>
                                <a href="#" class="d-block text-center" data-bs-toggle="modal"
                                    data-bs-target="#productmodal"><img src="images/g-14.png" alt="product-image"
                                        class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0"></a>
                                <div class="star d-inline text-left">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star-disable.png" alt="star"
                                        class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2"><a href="single-product-1.html"
                                        class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Kobita Almonds
                                        Lightly Salted</a></h2>
                                <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span
                                        class="font-xsssss text-grey-500">$</span>23 <span
                                        class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>
                                <div class="cart-count d-flex mt-4">
                                    <div class="number">
                                        <span class="minus">-</span>
                                        <input type="text" class="open-font" value="1">
                                        <span class="plus">+</span>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="col-lg-3 col-sm-3 col-xs-6 p-3 border-none-xs border-end border-top rounded-0 posr">
                                <a href="#" class="posa right-0 top-0 mt-3 me-3"><i
                                        class="ti-heart font-xs text-grey-500"></i></a>
                                <div class="clearfix"></div>
                                <a href="#" class="d-block text-center" data-bs-toggle="modal"
                                    data-bs-target="#productmodal"><img src="images/g-19.png" alt="product-image"
                                        class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0"></a>
                                <div class="star d-inline text-left">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star-disable.png" alt="star"
                                        class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2"><a href="single-product-1.html"
                                        class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Almonds Sweet &
                                        Salty Kettle Corn</a></h2>
                                <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span
                                        class="font-xsssss text-grey-500">$</span>54 <span
                                        class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>
                                <div class="cart-count d-flex mt-4">
                                    <div class="number">
                                        <span class="minus">-</span>
                                        <input type="text" class="open-font" value="1">
                                        <span class="plus">+</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-lg-3 col-sm-3 col-xs-6 p-3 border-none-xs border-end border-top rounded-0 posr">
                                <a href="#" class="posa right-0 top-0 mt-3 me-3"><i
                                        class="ti-heart font-xs text-grey-500"></i></a>
                                <div class="clearfix"></div>
                                <a href="#" class="d-block text-center" data-bs-toggle="modal"
                                    data-bs-target="#productmodal"><img src="images/g-11.png" alt="product-image"
                                        class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0"></a>
                                <div class="star d-inline text-left">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star-disable.png" alt="star"
                                        class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2"><a href="single-product-1.html"
                                        class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Almonds Sweet &
                                        Salty Kettle Corn</a></h2>
                                <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span
                                        class="font-xsssss text-grey-500">$</span>22 <span
                                        class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>
                                <div class="cart-count d-flex mt-4">
                                    <div class="number">
                                        <span class="minus">-</span>
                                        <input type="text" class="open-font" value="1">
                                        <span class="plus">+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-3 col-xs-6 p-3 border-none-xs border-top rounded-0 posr">
                                <a href="#" class="posa right-0 top-0 mt-3 me-3"><i
                                        class="ti-heart font-xs text-grey-500"></i></a>
                                <div class="clearfix"></div>
                                <a href="#" class="d-block text-center" data-bs-toggle="modal"
                                    data-bs-target="#productmodal"><img src="images/g-12.png" alt="product-image"
                                        class="w-100 mt-3 mb-3 d-inline-block p-2 pt-0"></a>
                                <div class="star d-inline text-left">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star.png" alt="star" class="w-10 me-1 float-start">
                                    <img src="images/star-disable.png" alt="star"
                                        class="w-10 me-1 float-start">
                                </div>
                                <div class="clearfix"></div>
                                <h2 class="mt-2"><a href="single-product-1.html"
                                        class="text-grey-700 fw-600 font-xsss lh-22 d-block ls-0">Assorted Donuts Each
                                        Salted</a></h2>
                                <h6 class="font-xss ls-3 fw-700 text-current d-flex"><span
                                        class="font-xsssss text-grey-500">$</span>29 <span
                                        class="ms-auto text-grey-500 fw-500 mt-1 font-xsssss">500gm</span></h6>
                                <div class="cart-count d-flex mt-4">
                                    <div class="number">
                                        <span class="minus">-</span>
                                        <input type="text" class="open-font" value="1">
                                        <span class="plus">+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mt-5">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled"><a class="page-link" href="#"><i
                                                    class="feather-chevron-left"></i></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#"><i
                                                    class="feather-chevron-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- BLOG WRAPPER -->
        <div class="blog-wrapper pt-2 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="fw-700 font-sm mb-4 mt-2 text-uppercase d-flex lh-18">Our Blog <a href="#"
                                class="ms-auto text-grey-500 fw-600 text-uppercase font-xsssss border-bottom ls-3">view
                                all</a></h4>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <article class="blog-div sm-mb-3">
                            <div class="card border-0 bg-transparent">
                                <div class="card-image mb-2 rounded-6 ovh"><a href="blog-single.html"><img
                                            src="images/blog-1.jpg" alt="blog" class="w-100 hover-zoom"></a>
                                </div>
                                <div class="card-content">
                                    <span
                                        class="ls-3 mb-1 font-xssssss text-white text-uppercase bg-green fw-700 p-2 lh-1 d-inline-block rounded-10">LIFESTYLE</span>
                                    <h2><a href="blog-single.html"
                                            class="post-title fw-600 font-xss text-grey-900 lh-24">Broad beans,
                                            tomato, garlic & mozzarella cheese bruschetta</a></h2>

                                    <h4 class="text-grey-500 float-start d-flex fw-600 lh-20 font-xsssss mt-1 me-3"><i
                                            class="feather-user font-xss me-1"></i>By Admin</h4>
                                    <h4 class="text-grey-500 float-start d-flex fw-600 lh-20 font-xsssss mt-1 me-3"><i
                                            class="feather-message-circle font-xs me-1"></i>34 Comments</h4>
                                    <h4 class="text-grey-500 float-start d-flex fw-600 lh-20 font-xsssss mt-1 me-0"><i
                                            class="feather-calendar font-xss me-1"></i>16 March 2020</h4>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <article class="blog-div sm-mb-3">
                            <div class="card border-0 bg-transparent">
                                <div class="card-image mb-2 rounded-6 ovh"><a href="blog-single.html"><img
                                            src="images/blog-2.jpg" alt="blog" class="w-100 hover-zoom"></a>
                                </div>
                                <div class="card-content">
                                    <span
                                        class="ls-3 mb-1 font-xssssss text-white text-uppercase bg-green fw-700 p-2 lh-1 d-inline-block rounded-10">FOOD</span>
                                    <h2><a href="blog-single.html"
                                            class="post-title fw-600 font-xss text-grey-900 lh-24">Steak salad with
                                            goat cheese and arugula for your family?</a></h2>

                                    <h4 class="text-grey-500 float-start d-flex fw-600 lh-20 font-xsssss mt-1 me-3"><i
                                            class="feather-user font-xss me-1"></i>By Admin</h4>
                                    <h4 class="text-grey-500 float-start d-flex fw-600 lh-20 font-xsssss mt-1 me-3"><i
                                            class="feather-message-circle font-xs me-1"></i>12 Comments</h4>
                                    <h4 class="text-grey-500 float-start d-flex fw-600 lh-20 font-xsssss mt-1 me-0"><i
                                            class="feather-calendar font-xss me-1"></i>23 Feb 2020</h4>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <article class="blog-div">
                            <div class="card border-0 bg-transparent">
                                <div class="card-image mb-2 rounded-6 ovh"><a href="blog-single.html"><img
                                            src="images/blog-3.jpg" alt="blog" class="w-100 hover-zoom"></a>
                                </div>
                                <div class="card-content">
                                    <span
                                        class="ls-3 mb-1 font-xssssss text-white text-uppercase bg-green fw-700 p-2 lh-1 d-inline-block rounded-10">Freshveg</span>
                                    <h2><a href="blog-single.html"
                                            class="post-title fw-600 font-xss text-grey-900 lh-24">Egg salad sandwich
                                            with avocado and watercress chip pancakes</a></h2>

                                    <h4 class="text-grey-500 float-start d-flex fw-600 lh-20 font-xsssss mt-1 me-3"><i
                                            class="feather-user font-xss me-1"></i>By Admin</h4>
                                    <h4 class="text-grey-500 float-start d-flex fw-600 lh-20 font-xsssss mt-1 me-3"><i
                                            class="feather-message-circle font-xs me-1"></i>54 Comments</h4>
                                    <h4 class="text-grey-500 float-start d-flex fw-600 lh-20 font-xsssss mt-1 me-0"><i
                                            class="feather-calendar font-xss me-1"></i>22 Aug 2020</h4>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <!-- BLOG WRAPPER -->

        @include('partials.footer')

    </div>




    <!-- LOCATION MODAL -->
    <div class="modal fade modal-scrollable" id="locationmodal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 320px;">
            <div class="modal-content theme-dark-bg p-4">
                <button type="button" class="btn-close z-index-5 posa right-0 top-0 mt-3 me-3"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-0 vw100 text-center pt-3 pb-0">
                    <i
                        class="feather-map-pin bg-greylight text-grey-900 btn-round-xxxl font-xl text-center rounded-6"></i>
                    <h2 class="font-xss fw-700 text-grey-700 mt-4">Select your location</h2>
                    <p class="text-grey-500 font-xsssss mt-1">Implementation of technologies to store <br> unchange
                        data based on specific</p>
                    <div class="inner-addon left-addon">
                        <input type="text"
                            class="form-control ps-5 font-xssss border-sizelg rounded-6 bg-color-none fw-600 border text-grey-500"
                            value="675 Camac Street Down">
                        <i class="ti-location-arrow text-current ps-3 font-xss posa left-0 mt-3"></i>
                    </div>
                    <a href="#"
                        class="btn rounded-6 w-100 lh-2 d-block p-3 mt-2 text-white bg-current font-xssss text-uppercase fw-600 ls-3"
                        data-dismiss="modal" aria-label="Close">Current Location </a>
                </div>
            </div>
        </div>
    </div>



    <!-- MENU MODAL -->
    <div class="modal fade left modal-scrollable" id="menumodal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content theme-dark-bg p-0 border-0 rounded-0">
                <button type="button"
                    class="btn-close z-index-5 bg-grey font-xsssss w-26 h-26 text-center rounded-circle posa right-0 top-0 mt-4 me-3"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body vw100 text-start p-0 h-100">
                    <div class="card p-4 border-0 text-start h-100 ">
                        <h4 class="fw-700 font-lg text-grey-900 text-start mb-3 d-block ls-0"> Menu</h4>

                        <ul class="navbar-nav">
                            <li class="nav-item active dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                    aria-expanded="false">Home </a>
                                <ul class="dropdown-menu border-0 shadow-xss">
                                    <li><a class="dropdown-item" href="g-1.html"> Grocery One</a></li>
                                    <li><a class="dropdown-item" href="g-2.html"> Grocery Two </a></li>
                                    <li><a class="dropdown-item" href="g-3.html"> Grocery Three </a></li>
                                    <li><a class="dropdown-item" href="g-4.html"> Grocery Four</a></li>
                                    <li><a class="dropdown-item" href="g-5.html"> Grocery Five</a></li>
                                    <li><a class="dropdown-item" href="g-6.html"> Grocery Six </a></li>
                                </ul>
                            </li>

                            <li class="nav-item active dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                    aria-expanded="false">Shop <span class="bg-danger">New</span></a>
                                <ul class="dropdown-menu border-0 shadow-xss">
                                    <li><a class="dropdown-item" href="shop-list-1.html"> Shop One</a></li>
                                    <li><a class="dropdown-item" href="shop-list-2.html"> Shop Two </a></li>
                                    <li><a class="dropdown-item" href="shop-list-3.html"> Shop Three </a></li>
                                    <li><a class="dropdown-item" href="shop-list-4.html"> Shop Four</a></li>
                                    <li><a class="dropdown-item" href="shop-list-5.html"> Shop Five </a></li>
                                </ul>
                            </li>
                            <li class="nav-item active dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                    aria-expanded="false">Dashboard</a>
                                <ul class="dropdown-menu border-0 shadow-xss">
                                    <li><a class="dropdown-item" href="dashboard.html"> Dashboard</a></li>
                                    <li><a class="dropdown-item" href="address.html"> Saved Address </a></li>
                                    <li><a class="dropdown-item" href="orders.html"> Orders </a></li>
                                    <li><a class="dropdown-item" href="coupon.html"> Coupon</a></li>
                                    <li><a class="dropdown-item" href="payment.html"> Payment </a></li>
                                    <li><a class="dropdown-item" href="notification.html"> Notification </a></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item active dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                    aria-expanded="false">Product</a>
                                <ul class="dropdown-menu border-0 shadow-xss">
                                    <li><a class="dropdown-item" href="single-product-1.html"> Single One</a></li>
                                    <li><a class="dropdown-item" href="single-product-2.html"> Single Two </a></li>
                                    <li><a class="dropdown-item" href="single-product-3.html"> Single Three </a>
                                    </li>
                                    <li><a class="dropdown-item" href="single-product-4.html"> Single Four</a></li>
                                </ul>
                            </li>
                            <li class="nav-item active dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                    aria-expanded="false">Pages</a>
                                <ul class="dropdown-menu border-0 shadow-xss">
                                    <li><a class="dropdown-item" href="about.html"> About</a></li>
                                    <li><a class="dropdown-item" href="contact.html"> Contact </a></li>
                                    <li><a class="dropdown-item" href="blog.html"> Blog </a></li>
                                    <li><a class="dropdown-item" href="blog-single.html"> Single Blog</a></li>
                                    <li><a class="dropdown-item" href="faq.html"> Faq</a></li>
                                    <li><a class="dropdown-item" href="404.html"> 404</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="card h-auto mt-auto p-4 w-100 rounded-10 theme-bg border-0 text-center bg-image-cover"
                            style="background-image: url(images/slider-11.jpg);">
                            <div class="card-body text-center p-2 mb-2">
                                <h4 class="text-grey-900 white-text mb-3 font-sm fw-500">Become a <b
                                        class="text-grey-900 white-text">pro</b> <br> Get more <b
                                        class="text-grey-900 white-text">features</b></h4>
                                <a href="login-one.html"
                                    class="btn rounded-25 bg-current white-text text-white w-150">Upgrade</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CATEGORY MODAL -->

    <!-- CATEGORY MODAL -->
    <div class="modal fade left modal-scrollable" id="categorymodal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content theme-dark-bg p-0 border-0 rounded-0">
                <button type="button"
                    class="btn-close z-index-5 bg-grey font-xsssss w-26 h-26 text-center rounded-circle posa right-0 top-0 mt-3 me-3"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body vw100 text-start p-0">
                    <div class="card p-4 border-0 text-start">
                        <h4 class="fw-700 font-lg text-grey-900 text-start mb-3 mt-n2 d-block ls-0"> Categories</h4>
                        <ul class="ms-0 ps-0 border-0 mt-3">
                            <li><a href="#" class="d-flex" data-bs-toggle="dropdown"> Beverages <i
                                        class="feather-chevron-right"></i></a>
                                <ul class="submenu dropdown-menu pt-0 pb-0 ps-3">
                                    <li><a class="dropdown-item" href="#">Water</a></li>
                                    <li><a class="dropdown-item" href="#">Sparkling Water</a></li>
                                    <li><a class="dropdown-item" href="#">Soda & Pop</a></li>
                                    <li><a class="dropdown-item" href="#">Coffee</a></li>
                                    <li><a class="dropdown-item" href="#">Milk & Plant-Based Milk</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="d-flex"> Biscuits & Snacks <i
                                        class="feather-chevron-right"></i></a></li>
                            <li><a href="#" class="d-flex"> Breads & Bakery <i
                                        class="feather-chevron-right"></i></a></li>
                            <li><a href="#" class="d-flex"> Breakfast & Dairy <i
                                        class="feather-chevron-right"></i></a></li>
                            <li><a href="#" class="d-flex"> Frozen Foods <i
                                        class="feather-chevron-right"></i></a></li>
                            <li><a href="#" class="d-flex"> Fruits & Vegetables <i
                                        class="feather-chevron-right"></i></a></li>
                            <li><a href="#" class="d-flex"> Grocery & Staples <i
                                        class="feather-chevron-right"></i></a></li>
                            <li><a href="#" class="d-flex"> Household Needs <i
                                        class="feather-chevron-right"></i></a></li>
                            <li><a href="#" class="d-flex"> Meats & Seafood <i
                                        class="feather-chevron-right"></i></a></li>

                            <li><a href="#" class="d-flex">Eggs Substitutes <i
                                        class="feather-chevron-right"></i></a></li>
                            <li><a href="#" class="d-flex">Honey Vegetables <i
                                        class="feather-chevron-right"></i></a></li>
                            <li><a href="#" class="d-flex">Marmalades Staples <i
                                        class="feather-chevron-right"></i></a></li>
                            <li><a href="#" class="d-flex">Sour Cream and Dips <i
                                        class="feather-chevron-right"></i></a></li>
                            <li><a href="#" class="d-flex">Yogurt Seafood <i
                                        class="feather-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CATEGORY MODAL -->
    <!-- CART MODAL -->
    <div class="modal fade right modal-scrollable" id="cartmodal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="width: 350px;">
            <div class="modal-content theme-dark-bg p-0 border-0 rounded-0">
                <button type="button"
                    class="btn-close z-index-5 bg-grey font-xsssss w-26 h-26 text-center rounded-circle posa right-0 top-0 mt-3 me-3"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="cart-box vh-100">
                    <div class="modal-body vh-100 text-start p-0 d-flex align-items-start flex-column">
                        <div class="card w-100 p-4 pb-0 border-0 text-start">
                            <h4 class="fw-700 font-lg text-grey-900 text-start mb-3 mt-n2 d-block"> Cart</h4>
                            <div class="row mb-3">
                                <div class="col-md-5 col-xs-5"><a href="#" class="d-block text-center"
                                        data-bs-toggle="modal" data-bs-target="#productmodal"><img
                                            src="images/g-15.png" alt="product-image"
                                            class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a></div>
                                <div class="col-md-7 col-xs-7 ps-0">
                                    <span
                                        class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product-1.html"
                                        class="text-grey-900 fw-600 font-xssss lh-22 d-block ls-0 mb-2">Blue Diamond
                                        Almonds Lightly Salted</a>
                                    <h6 class="font-xs ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>29 </h6>
                                    <div class="cart-count float-end ">
                                        <div class="number">
                                            <span class="minus">-</span>
                                            <input type="text" class="open-font" value="1">
                                            <span class="plus">+</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-5 col-xs-5"><a href="#" class="d-block text-center"
                                        data-bs-toggle="modal" data-bs-target="#productmodal"><img
                                            src="images/g-16.png" alt="product-image"
                                            class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a></div>
                                <div class="col-md-7 col-xs-7 ps-0">
                                    <span
                                        class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product-1.html"
                                        class="text-grey-900 fw-600 font-xssss lh-22 d-block ls-0 mb-2">Blue Diamond
                                        Almonds Lightly Salted</a>
                                    <h6 class="font-xs ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>49 </h6>
                                    <div class="cart-count float-end ">
                                        <div class="number">
                                            <span class="minus">-</span>
                                            <input type="text" class="open-font" value="1">
                                            <span class="plus">+</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-5 col-xs-5"><a href="#" class="d-block text-center"
                                        data-bs-toggle="modal" data-bs-target="#productmodal"><img
                                            src="images/g-17.png" alt="product-image"
                                            class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a></div>
                                <div class="col-md-7 col-xs-7 ps-0">
                                    <span
                                        class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">100gm</span>
                                    <a href="single-product-1.html"
                                        class="text-grey-900 fw-600 font-xssss lh-22 d-block ls-0 mb-2">Blue Diamond
                                        Almonds Lightly Salted</a>
                                    <h6 class="font-xs ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>99 </h6>
                                    <div class="cart-count float-end ">
                                        <div class="number">
                                            <span class="minus">-</span>
                                            <input type="text" class="open-font" value="1">
                                            <span class="plus">+</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-5 col-xs-5"><a href="#" class="d-block text-center"
                                        data-bs-toggle="modal" data-bs-target="#productmodal"><img
                                            src="images/g-18.png" alt="product-image"
                                            class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a></div>
                                <div class="col-md-7 col-xs-7 ps-0">
                                    <span
                                        class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">2Kg</span>
                                    <a href="single-product-1.html"
                                        class="text-grey-900 fw-600 font-xssss lh-22 d-block ls-0 mb-2">Blue Diamond
                                        Almonds Lightly Salted</a>
                                    <h6 class="font-xs ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>39 </h6>
                                    <div class="cart-count float-end ">
                                        <div class="number">
                                            <span class="minus">-</span>
                                            <input type="text" class="open-font" value="1">
                                            <span class="plus">+</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card w-100 p-4 pt-0 border-0 text-start mt-auto">
                            <!-- <hr /> -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="text-grey-900 font-xssss fw-600 mb-2 d-flex">Subtotal <span
                                            class="ms-auto text-grey-500">$ 59.99</span></h4>
                                    <h4 class="text-grey-900 font-xssss fw-600 mb-3 d-flex">Tax <span
                                            class="ms-auto text-grey-500">$ 0.99</span></h4>
                                    <h4 class="text-grey-900 font-xss fw-600 mb-3 d-flex">Total <span
                                            class="ms-auto">$ 60.99</span></h4>
                                    <h5
                                        class="bg-greylight p-4 rounded-6 mt-3 mb-3 w-100 fw-600 text-grey-500 font-xssss d-flex">
                                        Apply Promo Code : <span class="ms-auto fw-700 text-grey-900">2 Promos</span>
                                    </h5>
                                </div>
                            </div>

                            <a href="#" class="w-100 bg-current text-white rounded-6 text-center btn"
                                id="checkout">Checkout</a>
                        </div>
                    </div>
                </div>
                <div class="checkout-box vh-100" style="display: none;">
                    <div class="modal-body vh-100 text-start p-0 d-flex align-items-start flex-column">
                        <div class="card w-100 p-4 pb-0 border-0 text-start">
                            <h4 class="fw-700 font-lg text-grey-900 text-start mb-4 mt-n2 d-block"> Checkout</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="Name">Name</label>
                                        <input type="text" class="form-control bg-greylight border-0"
                                            placeholder="Enter your name" id="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input type="text" class="form-control bg-greylight border-0"
                                            placeholder="Enter your email" id="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="Phone">Phone</label>
                                        <input type="text" class="form-control bg-greylight border-0"
                                            placeholder="Enter your phone" id="Phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="Address">Address</label>
                                        <input type="text" class="form-control bg-greylight border-0"
                                            placeholder="Enter your address" id="Address">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="Zip">Zip Code</label>
                                        <input type="text" class="form-control bg-greylight border-0"
                                            placeholder="Enter here" id="Zip">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="City">City</label>
                                        <input type="text" class="form-control bg-greylight border-0"
                                            placeholder="Enter here" id="City">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="Location">Location</label>
                                        <input type="text" class="form-control bg-greylight border-0"
                                            placeholder="Enter here location" id="Location">
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input font-xs" type="checkbox" value="Drinks"
                                            id="flexCheckStock7">
                                        <label class="form-check-label" for="flexCheckStock7">Save shipping
                                            address</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card w-100 p-4 pt-0 border-0 text-start mt-auto">
                            <a href="#" class="w-100 bg-current text-white rounded-6 text-center btn"
                                id="payment">Payment</a>
                        </div>
                    </div>
                </div>

                <div class="payment-box vh-100" style="display: none;">
                    <div class="modal-body vh-100 text-start p-0 d-flex align-items-start flex-column">
                        <div class="card w-100 p-4 pb-0 border-0 text-start">
                            <h4 class="fw-700 font-lg text-grey-900 text-start mb-4 mt-n2 d-block"> Payment</h4>
                            <div class="col-lg-12 mt-2">


                                <div class="card bg-white rounded-6 border-0 shadow-xss p-0">
                                    <div class="card-body d-flex justify-content-between align-items-end p-4">
                                        <div>
                                            <h4
                                                class="text-grey-600 mb-0 d-flex font-xsss align-items-center justify-content-between mt-0 fw-600">
                                                <img src="images/b-10.png" alt="image" class="float-left me-4">
                                                4321 4432 6565 ****
                                            </h4>
                                        </div>
                                        <div class="round float-right mb-2">
                                            <input id="radio-1" class="radio-custom" name="radio-group"
                                                type="radio" checked="">
                                            <label for="radio-1" class="radio-custom-label m-0"></label>
                                        </div>

                                    </div>
                                </div>

                                <div class="card bg-white rounded-6 border-0 shadow-xss mt-3 p-0">
                                    <div class="card-body d-flex justify-content-between align-items-end p-4">
                                        <div>
                                            <h4
                                                class="text-grey-600 mb-0 d-flex font-xsss align-items-center justify-content-between mt-0 fw-600">
                                                <img src="images/b-9.png" alt="image" class="float-left me-4">
                                                ***port@gmail.com
                                            </h4>
                                        </div>
                                        <div class="round float-right mb-2">
                                            <input id="radio-2" class="radio-custom" name="radio-group"
                                                type="radio">
                                            <label for="radio-2" class="radio-custom-label m-0"></label>
                                        </div>

                                    </div>
                                </div>


                                <div class="card bg-white rounded-6 border-0 shadow-xss mt-3 p-0">
                                    <div class="card-body d-flex justify-content-between align-items-end p-4">
                                        <div>
                                            <h4
                                                class="text-grey-600 mb-0 d-flex font-xsss align-items-center justify-content-between mt-0 fw-600">
                                                <img src="images/b-12.png" alt="image" class="float-left me-4">
                                                4321 4432 6565 ****
                                            </h4>
                                        </div>
                                        <div class="round float-right mb-2">
                                            <input id="radio-4" class="radio-custom" name="radio-group"
                                                type="radio">
                                            <label for="radio-4" class="radio-custom-label m-0"></label>
                                        </div>

                                    </div>
                                </div>
                                <div class="card bg-greylight p-4 mt-3 mb-3 border-0">
                                    <h4 class="font-xsssss fw-700 ls-3 mb-4">ADD NEW CARD</h4>

                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control bg-white border-0"
                                            placeholder="Card Number">
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control bg-white border-0"
                                            placeholder="Card Holder Name">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 pe-2">
                                            <div class="form-group">
                                                <input type="text" class="form-control bg-white border-0"
                                                    placeholder="Month">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ps-2">
                                            <div class="form-group">
                                                <input type="text" class="form-control bg-white border-0"
                                                    placeholder="Year">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input font-xs" type="checkbox" value="Drinks"
                                            id="flexCheckStock9">
                                        <label class="form-check-label" for="flexCheckStock9">Save as
                                            default</label>
                                    </div>
                                    <a href="#"
                                        class="w-100 bg-black-08 text-white rounded-6 text-center btn mt-2">Save</a>

                                </div>

                            </div>
                        </div>
                        <div class="card w-100 p-4 pt-0 border-0 text-start mt-auto">
                            <a href="#" class="w-100 bg-current text-white rounded-6 text-center btn"
                                id="checkout3">place Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CART MODAL -->

    <!-- SAVED MODAL -->
    <div class="modal fade right modal-scrollable" id="savedmodal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="width: 350px;">
            <div class="modal-content theme-dark-bg p-0 border-0 rounded-0">
                <button type="button"
                    class="btn-close z-index-5 bg-grey font-xsssss w-26 h-26 text-center rounded-circle posa right-0 top-0 mt-3 me-3"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="cart-box vh-100">
                    <div class="modal-body vh-100 text-start p-0 d-flex align-items-start flex-column">
                        <div class="card w-100 p-4 pb-0 border-0 text-start">
                            <h4 class="fw-700 font-lg text-grey-900 text-start mb-3 mt-n2 d-block"> Saved</h4>
                            <div class="row mb-3">
                                <div class="col-md-5 col-xs-5"><a href="#" class="d-block text-center"
                                        data-bs-toggle="modal" data-bs-target="#productmodal"><img
                                            src="images/g-15.png" alt="product-image"
                                            class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a></div>
                                <div class="col-md-7 col-xs-7 ps-0">
                                    <span
                                        class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product-1.html"
                                        class="text-grey-900 fw-600 font-xssss lh-22 d-block ls-0 mb-2">Blue Diamond
                                        Almonds Lightly Salted</a>
                                    <h6 class="font-xs ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>29 </h6>
                                    <a href="#"
                                        class="text-uppercase font-xsssss text-grey-900 fw-700 ls-1 bg-greylight float-end w-125 lh-20 rounded-6 btn">Add
                                        to cart</a>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-5 col-xs-5"><a href="#" class="d-block text-center"><img
                                            src="images/g-16.png" alt="product-image"
                                            class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a></div>
                                <div class="col-md-7 col-xs-7 ps-0">
                                    <span
                                        class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">500gm</span>
                                    <a href="single-product-1.html"
                                        class="text-grey-900 fw-600 font-xssss lh-22 d-block ls-0 mb-2">Blue Diamond
                                        Almonds Lightly Salted</a>
                                    <h6 class="font-xs ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>49 </h6>
                                    <a href="#"
                                        class="text-uppercase font-xsssss text-grey-900 fw-700 ls-1 bg-greylight float-end w-125 lh-20 rounded-6 btn">Add
                                        to cart</a>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-5 col-xs-5"><a href="#" class="d-block text-center"><img
                                            src="images/g-17.png" alt="product-image"
                                            class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a></div>
                                <div class="col-md-7 col-xs-7 ps-0">
                                    <span
                                        class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">100gm</span>
                                    <a href="single-product-1.html"
                                        class="text-grey-900 fw-600 font-xssss lh-22 d-block ls-0 mb-2">Blue Diamond
                                        Almonds Lightly Salted</a>
                                    <h6 class="font-xs ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>99 </h6>
                                    <a href="#"
                                        class="text-uppercase font-xsssss text-grey-900 fw-700 ls-1 bg-greylight float-end w-125 lh-20 rounded-6 btn">Add
                                        to cart</a>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-5 col-xs-5"><a href="#" class="d-block text-center"><img
                                            src="images/g-18.png" alt="product-image"
                                            class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a></div>
                                <div class="col-md-7 col-xs-7 ps-0">
                                    <span
                                        class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">2Kg</span>
                                    <a href="single-product-1.html"
                                        class="text-grey-900 fw-600 font-xssss lh-22 d-block ls-0 mb-2">Blue Diamond
                                        Almonds Lightly Salted</a>
                                    <h6 class="font-xs ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>39 </h6>
                                    <a href="#"
                                        class="text-uppercase font-xsssss text-grey-900 fw-700 ls-1 bg-greylight float-end w-125 lh-20 rounded-6 btn">Add
                                        to cart</a>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-5 col-xs-5"><a href="#" class="d-block text-center"><img
                                            src="images/g-19.png" alt="product-image"
                                            class="w-100 d-inline-block pt-3 pb-3 bg-greylight rounded-6"></a></div>
                                <div class="col-md-7 col-xs-7 ps-0">
                                    <span
                                        class="ms-auto text-grey-500 fw-500 lh-1 font-xsssss mt-0 w-100 mb-2">2Kg</span>
                                    <a href="single-product-1.html"
                                        class="text-grey-900 fw-600 font-xssss lh-22 d-block ls-0 mb-2">Blue Diamond
                                        Almonds Lightly Salted</a>
                                    <h6 class="font-xs ls-3 fw-700 text-current float-start mt-1"><span
                                            class="font-xsssss text-grey-500">$</span>39 </h6>
                                    <a href="#"
                                        class="text-uppercase font-xsssss text-grey-900 fw-700 ls-1 bg-greylight float-end w-125 lh-20 rounded-6 btn">Add
                                        to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="card w-100 p-4 pt-0 border-0 text-start mt-auto">
                            <a href="#" class="w-100 bg-current text-white rounded-6 text-center btn">Cart</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- SAVED MODAL -->
    <!-- SINGLE PRODUCT MODAL -->
    <div class="modal fade right modal-scrollable" id="productmodal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="width: 350px;">
            <div class="modal-content theme-dark-bg border-0 rounded-0">
                <button type="button"
                    class="btn-close z-index-5 font-xsss w-26 h-26 text-center rounded-circle posa right-0 top-0 mt-0 me-0"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="cart-box vh-100">
                    <div class="modal-body vh-100 text-start p-0 d-flex align-items-start flex-column p-4">
                        <div class="card border-0 w-100 text-center d-inline-block mb-3">
                            <span
                                class="ls-3 font-xsssss text-white text-uppercase bg-current fw-700 p-2 d-inline-block rounded-3 posa left-15 top-15 z-index-5">30%
                                off</span>
                            <div
                                class="owl-carousel product-banner owl-theme overflow-hidden nav-none owl-dots-none owl-arrow-center">
                                <div class="item me-0 bg-greylight text-center"><img src="images/pr-10.png"
                                        alt="product-image" class="shadow-none w-150 d-inline-block rounded-6 p-4">
                                </div>
                                <div class="item me-0 bg-greylight text-center"><img src="images/pr-11.png"
                                        alt="product-image" class="shadow-none w-150 d-inline-block rounded-6 p-4">
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 w-100 mt-2">
                            <div class="star d-inline text-left">
                                <img src="images/star.png" alt="star" class="w-12 me-1 float-start">
                                <img src="images/star.png" alt="star" class="w-12 me-1 float-start">
                                <img src="images/star.png" alt="star" class="w-12 me-1 float-start">
                                <img src="images/star.png" alt="star" class="w-12 me-1 float-start">
                                <img src="images/star-disable.png" alt="star" class="w-12 me-2 float-start">
                            </div>
                            <h2 class="fw-700 text-grey-700 font-xss ls-0 lh-26 mt-2 mb-0 pe-lg-5">Blue Diamond
                                Almonds Rice Organic Salted</h2>
                            <div class="cart-count cart-count-lg float-end mt-2">
                                <h6 class="font-sm ls-3 fw-700 text-current float-start mt-1 me-4"><span
                                        class="font-xsssss text-grey-500">$</span>29 </h6>
                                <div class="number">
                                    <span class="minus">-</span>
                                    <input type="text" class="open-font" value="1">
                                    <span class="plus">+</span>
                                </div>
                            </div>
                            <p class="font-xssss fw-500 mt-3 text-grey-500">Vivamus adipiscing nisl ut dolor dignissim
                                semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora
                                torquent</p>
                            <h5 class="font-xssss fw-500 text-grey-500 mt-1"><b class="text-grey-700">Category:</b>
                                Meats & Seafood </h5>
                            <h5 class="font-xssss fw-500 text-grey-500 mt-1"><b class="text-grey-700">Tags:</b>
                                chicken, natural, organic</h5>

                            <h5 class="font-xssss fw-500 text-grey-500 mt-3 d-flex"><i
                                    class="feather-bookmark font-xs text-current me-2 mt-n1"></i> <b
                                    class="text-grey-700 me-1">2 Month</b> Brand Warranty </h5>
                            <h5 class="font-xssss fw-500 text-grey-500 mt-2 d-flex"><i
                                    class="feather-help-circle font-xs text-current me-2 mt-n1"></i> <b
                                    class="text-grey-700 me-1">100% </b> Organic Product</h5>
                            <h5 class="font-xssss fw-500 text-grey-500 mt-2 d-flex mb-4"><i
                                    class="feather-alert-triangle font-xs text-current me-2 mt-n1"></i> <b
                                    class="text-grey-700 me-1">30 Days </b> Money back Return</h5>

                            <div class="alert-warning text-danger p-2 text-center w-100 font-xsssss fw-500 rounded-6">
                                Covid-19 Info: We keep delivering.</div>
                            <a href="#" class="w-100 bg-current text-white rounded-6 text-center btn mt-2">ADD
                                to Cart</a>
                            <a href="#"
                                class="w-100 bg-black-08 text-white rounded-6 text-center btn mt-2 mb-3">ADD
                                wishlist</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SINGLE PRODUCT MODAL -->

    <script src="js/plugin.js"></script>
    <script src="js/scripts.js"></script>


</body>


<!-- Mirrored from uitheme.net/orgomart/g-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2024 13:04:48 GMT -->

</html>
