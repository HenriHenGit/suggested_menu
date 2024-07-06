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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-home.css') }}">
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

        <div class="outer-container">
            <!-- Container for total kcal and nutrition -->
            <div class="circle-container">
                <div class="circle" id="total-kcal">
                    <div>0 kcal</div>
                </div>
            </div>
            <div>
                <div>Dinh dưỡng cho nhóm người</div>
                <div>sắt 200g</div>
            </div>
        </div>

        <div class="date-container">
            <!-- Date display here -->
            <?php
            $days = [];
            for ($i = -3; $i <= 3; $i++) {
                $days[] = date('d/m', strtotime("$i days"));
            }
            $currentDate = date('d/m');
            ?>

            @foreach ($days as $day)
                <div class="circle-small {{ $day === $currentDate ? 'current-day' : '' }}">{{ $day }}</div>
            @endforeach
        </div>

        <div class="meals-container">
            <!-- Meal containers -->
            <div class="meal" id="breakfast">
                <div class="meal-title">Bữa sáng</div>
                <ul class="meal-list">
                    <li class="meal-item"
                        onclick="showFoodDetail('Món 1', '200kcal', 'image1.jpg', [{label: 'Protein', value: '10g'}, {label: 'Fat', value: '15g'}, {label: 'Carbohydrate', value: '20g'}])">
                        <span>Tên món 1 <span class="kcal-info">200kcal</span></span>
                        <button class="add-button">+</button>
                    </li>
                    <li class="meal-item"
                        onclick="showFoodDetail('Món 2', '150kcal', 'image2.jpg', [{label: 'Protein', value: '8g'}, {label: 'Fat', value: '12g'}, {label: 'Carbohydrate', value: '15g'}])">
                        <span>Tên món 2 <span class="kcal-info">150kcal</span></span>
                        <button class="add-button">+</button>
                    </li>
                </ul>
            </div>

            <div class="meal" id="lunch">
                <div class="meal-title">Bữa trưa</div>
                <ul class="meal-list">
                    <li class="meal-item"
                        onclick="showFoodDetail('Món 3', '300kcal', 'image3.jpg', [{label: 'Protein', value: '15g'}, {label: 'Fat', value: '20g'}, {label: 'Carbohydrate', value: '30g'}])">
                        <span>Tên món 3 <span class="kcal-info">300kcal</span></span>
                        <button class="add-button">+</button>
                    </li>
                    <li class="meal-item"
                        onclick="showFoodDetail('Món 4', '250kcal', 'image4.jpg', [{label: 'Protein', value: '12g'}, {label: 'Fat', value: '18g'}, {label: 'Carbohydrate', value: '25g'}])">
                        <span>Tên món 4 <span class="kcal-info">250kcal</span></span>
                        <button class="add-button">+</button>
                    </li>
                </ul>
            </div>

            <div class="meal" id="dinner">
                <div class="meal-title">Bữa tối</div>
                <ul class="meal-list">
                    <li class="meal-item"
                        onclick="showFoodDetail('Món 5', '400kcal', 'image5.jpg', [{label: 'Protein', value: '20g'}, {label: 'Fat', value: '25g'}, {label: 'Carbohydrate', value: '45g'}])">
                        <span>Tên món 5 <span class="kcal-info">400kcal</span></span>
                        <button class="add-button">+</button>
                    </li>
                    <li class="meal-item"
                        onclick="showFoodDetail('Món 6', '350kcal', 'image6.jpg', [{label: 'Protein', value: '22g'}, {label: 'Fat', value: '28g'}, {label: 'Carbohydrate', value: '45g'}])">
                        <span>Tên món 6 <span class="kcal-info">350kcal</span></span>
                        <button class="add-button">+</button>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Panel thông tin chi tiết món ăn -->
        <div class="info-panel" id="infoPanel">
            <div class="info-panel-content" id="infoPanelContent">
                <div id="foodName"></div>
                <img src="" alt="Ảnh món ăn" id="foodImage">
                <table>
                    <thead>
                        <tr>
                            <th colspan="2">Giá trị dinh dưỡng</th>
                        </tr>
                    </thead>
                    <tbody id="nutritionTable">
                        <!-- Nutrition details will be added dynamically -->
                    </tbody>
                </table>
                <button class="close-button" onclick="closeInfoPanel()">Đóng</button>
            </div>
        </div>

        <script>
            // Update total kcal for each meal and update in the large circle
            function updateTotalKcal() {
                let totalKcal = 0;

                // Calculate total kcal for breakfast
                let breakfastKcalElements = document.querySelectorAll('#breakfast .kcal-info');
                breakfastKcalElements.forEach(element => {
                    let kcal = parseInt(element.textContent);
                    if (!isNaN(kcal)) {
                        totalKcal += kcal;
                    }
                });

                // Calculate total kcal for lunch
                let lunchKcalElements = document.querySelectorAll('#lunch .kcal-info');
                lunchKcalElements.forEach(element => {
                    let kcal = parseInt(element.textContent);
                    if (!isNaN(kcal)) {
                        totalKcal += kcal;
                    }
                });

                // Calculate total kcal for dinner
                let dinnerKcalElements = document.querySelectorAll('#dinner .kcal-info');
                dinnerKcalElements.forEach(element => {
                    let kcal = parseInt(element.textContent);
                    if (!isNaN(kcal)) {
                        totalKcal += kcal;
                    }
                });

                // Update total kcal in the large circle
                document.querySelector('#total-kcal div').textContent = totalKcal + ' kcal';
            }

            // Show detailed food information
            function showFoodDetail(foodName, kcal, imageUrl, nutrition) {
                // Set food name
                document.getElementById('foodName').textContent = foodName;

                // Show food image
                document.getElementById('foodImage').src = imageUrl;

                // Build nutrition table
                let nutritionTable = document.getElementById('nutritionTable');
                nutritionTable.innerHTML = ''; // Clear old content

                nutrition.forEach(item => {
                    let row = document.createElement('tr');
                    let labelCell = document.createElement('td');
                    labelCell.textContent = item.label;
                    let valueCell = document.createElement('td');
                    valueCell.textContent = item.value;
                    row.appendChild(labelCell);
                    row.appendChild(valueCell);
                    nutritionTable.appendChild(row);
                });

                // Open info panel
                document.getElementById('infoPanel').classList.add('open');

                // Update total kcal after showing food details
                updateTotalKcal();
            }

            // Close food detail panel
            function closeInfoPanel() {
                document.getElementById('infoPanel').classList.remove('open');
            }

            // Call updateTotalKcal() when page is loaded and on any change
            window.onload = function() {
                updateTotalKcal();
            };
        </script>
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
