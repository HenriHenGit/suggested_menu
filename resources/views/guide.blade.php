<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/style-home.css') }}">
</head>

<body>
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
</body>

</html>
