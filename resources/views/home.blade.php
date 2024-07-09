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



    <script src="js/plugin.js"></script>
    <script src="js/scripts.js"></script>


</body>




</html>
