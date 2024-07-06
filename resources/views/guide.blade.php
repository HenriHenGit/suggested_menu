<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .outer-container {
            margin-top: 20px;
            border: 2px solid black;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 20px;
        }

        .circle-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px;
        }

        .circle {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-size: 1.5em;
            border: 2px solid black;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .circle-small {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 5px;
            text-align: center;
            border: 2px solid black;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .circle-small.current-day {
            font-weight: bold;
            background-color: #dcdcdc;
        }

        .date-container {
            display: flex;
            justify-content: center;
        }

        .meals-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .meal {
            margin-bottom: 20px;
            border: 2px solid black;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            padding: 10px;
            width: calc(7 * 60px);
            /* 7 hình tròn, mỗi hình tròn rộng 50px + margin 5px mỗi bên */
        }

        .meal-title {
            font-weight: bold;
            text-align: center;
        }

        .meal-list {
            list-style-type: none;
            padding: 0;
        }

        .meal-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 5px 0;
            cursor: pointer;
        }

        .add-button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .kcal-info {
            margin-left: 10px;
        }

        /* Panel thông tin chi tiết món ăn */
        .info-panel {
            position: absolute;
            right: 20px;
            top: 0;
            background-color: #ffffff;
            width: 300px;
            max-width: 100%;
            border: 2px solid black;
            border-radius: 10px;
            padding: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            display: none;
            z-index: 100;
        }

        .info-panel.open {
            display: block;
        }

        .info-panel-content {
            text-align: center;
        }

        .info-panel img {
            max-width: 100%;
            max-height: 200px;
            margin-bottom: 10px;
        }

        .info-panel table {
            width: 100%;
            margin-top: 10px;
            border-collapse: collapse;
        }

        .info-panel table th,
        .info-panel table td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }

        .info-panel table th {
            background-color: #f2f2f2;
        }

        .close-button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
        }

        .close-button:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>
    <div class="outer-container">
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
                    <!-- Các hàng dinh dưỡng sẽ được thêm bằng JavaScript -->
                </tbody>
            </table>
            <button class="close-button" onclick="closeInfoPanel()">Đóng</button>
        </div>
    </div>

    <script>
        // Tính tổng kcal cho từng bữa ăn và cập nhật vào hình tròn lớn
        function updateTotalKcal() {
            let totalKcal = 0;

            // Tính tổng kcal cho bữa sáng
            let breakfastKcalElements = document.querySelectorAll('#breakfast .kcal-info');
            breakfastKcalElements.forEach(element => {
                let kcal = parseInt(element.textContent);
                if (!isNaN(kcal)) {
                    totalKcal += kcal;
                }
            });

            // Tính tổng kcal cho bữa trưa
            let lunchKcalElements = document.querySelectorAll('#lunch .kcal-info');
            lunchKcalElements.forEach(element => {
                let kcal = parseInt(element.textContent);
                if (!isNaN(kcal)) {
                    totalKcal += kcal;
                }
            });

            // Tính tổng kcal cho bữa tối
            let dinnerKcalElements = document.querySelectorAll('#dinner .kcal-info');
            dinnerKcalElements.forEach(element => {
                let kcal = parseInt(element.textContent);
                if (!isNaN(kcal)) {
                    totalKcal += kcal;
                }
            });

            // Cập nhật tổng kcal vào hình tròn lớn
            document.querySelector('#total-kcal div').textContent = totalKcal + ' kcal';
        }

        // Hàm hiển thị thông tin chi tiết món ăn
        function showFoodDetail(foodName, kcal, imageUrl, nutrition) {
            // Đặt tên món ăn
            document.getElementById('foodName').textContent = foodName;

            // Hiển thị hình ảnh món ăn
            document.getElementById('foodImage').src = imageUrl;

            // Xây dựng bảng giá trị dinh dưỡng
            let nutritionTable = document.getElementById('nutritionTable');
            nutritionTable.innerHTML = ''; // Xóa nội dung cũ

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

            // Mở panel thông tin chi tiết
            document.getElementById('infoPanel').classList.add('open');

            // Cập nhật tổng kcal sau khi hiển thị chi tiết món ăn
            updateTotalKcal();
        }

        // Hàm đóng panel thông tin chi tiết
        function closeInfoPanel() {
            document.getElementById('infoPanel').classList.remove('open');
        }

        // Gọi hàm khi trang web được tải và mỗi khi có sự thay đổi
        window.onload = function() {
            updateTotalKcal();
        };
    </script>
</body>

</html>
