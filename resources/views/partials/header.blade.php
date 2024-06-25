        <!-- HEADER WRAPPER -->
        <div class="header-menu-mob pt-2 pb-2 shadow-xss position-fixed w-100 z-index-10 bg-white d-none d-block-md">
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
        <div class="upper-header bg-lightgrey pt-2 pb-2 d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="nav">
                            <li class="nav-item"><a class=" ps-0" href="about.html">About Us</a></li>
                            <li class="nav-item"><a href="dashboard.html">My account</a></li>
                            <li class="nav-item"><a href="#" data-bs-toggle="modal"
                                    data-bs-target="#savedmodal">Wishlist</a></li>
                            <li class="nav-item"><a href="#">Order Tracking</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 text-end">
                        <ul class="navbar-nav float-end">
                            <li class="nav-item  nav-item-toggle active dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                    aria-expanded="false">English </a>
                                <ul class="dropdown-menu border-0 shadow-xss">
                                    <li><a class="dropdown-item" href="grocery-1.html"> English</a></li>
                                    <li><a class="dropdown-item" href="grocery-2.html"> Spanish </a></li>
                                    <li><a class="dropdown-item" href="grocery-3.html"> Urdu </a></li>
                                </ul>
                            </li>

                            <li class="nav-item nav-item-toggle  active dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                    aria-expanded="false">USD</a>
                                <ul class="dropdown-menu border-0 shadow-xss">
                                    <li><a class="dropdown-item" href="shop-list-1.html"> USD</a></li>
                                    <li><a class="dropdown-item" href="shop-list-2.html"> AUD </a></li>
                                    <li><a class="dropdown-item" href="shop-list-3.html"> REA </a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-wrapper pt-4 pb-1 z-index-5 ovh bg-white d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex">
                        <!-- <a href="#" class="nav-icon ps-0 ms-0 ms-n1" data-bs-toggle="modal" data-bs-target="#categorymodal"><i class="feather-menu font-lg text-grey-500"></i></a> -->
                        <a href="index-2.html"><img src="images/logo.png" alt="logo" class="logo"></a>
                        <div class="header-search ms-auto me-2 d-flex">
                            <a href="#" class="location me-3" data-bs-toggle="modal"
                                data-bs-target="#locationmodal">
                                <span class="fw-600 font-xssss text-grey-400">Delivery to</span>
                                <i class="feather-map-pin text-grey-500"></i>
                                <h4 class="fw-600 font-xssss mt-0 text-current mb-0 ls-0">Downtown New York..</h4>
                            </a>
                            <div class="form-group mb-0 icon-input d-none d-xl-block me-2">
                                <i class="feather-search font-sm text-grey-400"></i>
                                <input type="text" placeholder="Start typing to search.."
                                    class="lh-38 pt-2 pb-2 ps-5 pe-3 font-xssss fw-500 rounded-xl posr">
                            </div>
                            <a href="#" class="nav-icon"><span class="dot-count bg-warning"></span><i
                                    class="feather-bell text-grey-500"></i></a>
                            <a href="#" class="nav-icon" data-bs-toggle="modal" data-bs-target="#savedmodal"><i
                                    class="feather-heart text-grey-500"></i></a>
                            <a href="#" class="nav-icon" data-bs-toggle="modal" data-bs-target="#cartmodal"><i
                                    class="feather-shopping-bag text-grey-500"></i></a>
                            <a href="{{ asset('admin') }}" class="nav-icon p-0"><img src="images/profile-4.png"
                                    alt="user" class="w-40 mt-1"></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="lower-header pt-3 pb-0 shadow-xss z-index-1 bg-white d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="dropdown dropdown-right border-0">
                            <button class="btn border-0 rounded-0 dropdown-toggle" type="button"
                                data-bs-toggle="modal" data-bs-target="#categorymodal"><i
                                    class="feather-align-left"></i> All Categories</button>
                            <ul class="dropdown-menu w-100 border-0 mt-3 shadow-xss">
                                <li><a class="dropdown-item dropdown-toggle" href="#">Biscuits &amp; Snacks
                                        <span class="alert-warning text-warning">NEW</span></a></li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Breads &amp; Bakery </a>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Breakfast &amp; Dairy
                                        <span class="alert-success text-success">Offer</span></a></li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Frozen Foods </a></li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Fruits &amp; Vegetables
                                    </a></li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Grocery &amp; Staples </a>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Household Needs </a></li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Meats &amp; Seafood </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="navbar navbar-expand-lg p-0">
                            <div class="navbar-collapse collapse show" id="main_nav" style="">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#main_nav" aria-expanded="true"
                                    aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                                <ul class="navbar-nav">
                                    <li class="nav-item nav-item-toggle active dropdown">
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

                                    <li class="nav-item nav-item-toggle active dropdown">
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
                                    <li class="nav-item nav-item-toggle active dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                            aria-expanded="false">Dashboard</a>
                                        <ul class="dropdown-menu border-0 shadow-xss">
                                            <li><a class="dropdown-item" href="dashboard.html"> Dashboard</a></li>
                                            <li><a class="dropdown-item" href="address.html"> Saved Address </a></li>
                                            <li><a class="dropdown-item" href="orders.html"> Orders </a></li>
                                            <li><a class="dropdown-item" href="coupon.html"> Coupon</a></li>
                                            <li><a class="dropdown-item" href="payment.html"> Payment </a></li>
                                            <li><a class="dropdown-item" href="notification.html"> Notification </a>
                                            </li>
                                            <li><a class="dropdown-item" href="default.html"> Logout </a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item nav-item-toggle active dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                            aria-expanded="false">Product</a>
                                        <ul class="dropdown-menu border-0 shadow-xss">
                                            <li><a class="dropdown-item" href="single-product-1.html"> Single One</a>
                                            </li>
                                            <li><a class="dropdown-item" href="single-product-2.html"> Single Two </a>
                                            </li>
                                            <li><a class="dropdown-item" href="single-product-3.html"> Single Three
                                                </a></li>
                                            <li><a class="dropdown-item" href="single-product-4.html"> Single Four</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item active dropdown nav-item-toggle">
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
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item text-grey-500 fw-500 font-xssss">Need help? Call Us : <a
                                            href="tel:03340005000" class="fw-700 text-current">+ 033 4000 5000</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- HEADER WRAPPER -->
