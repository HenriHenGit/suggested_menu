<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suggested Meals</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .meal {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
            background-color: #ffffff;
            transition: box-shadow 0.3s;
        }

        .meal:hover {
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .meal h3 {
            color: #007bff;
            margin-bottom: 10px;
        }

        .category {
            font-weight: bold;
            color: #555;
            margin-top: 10px;
        }

        .food {
            margin-left: 20px;
            color: #777;
        }

        .img_food {
            width: 100%;
            height: auto;
            max-width: 200px;
            margin: 10px 0;
            border-radius: 8px;
        }

        .meal-nutrition {
            margin-top: 20px;
        }

        .meal-nutrition div {
            margin-bottom: 5px;
            color: #555;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #28a745;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-align: center;
            margin-top: 20px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #218838;
        }

        .center-text {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        @include('demoNutri_needs', ['needsUser' => $needsUser, 'nutriDetail' => $nutriDetail])

        <h2>Đề xuất bữa ăn</h2>
        <form action="{{ route('menu.store') }}" method="GET">
            @foreach ($meals as $index => $meal)
                <div class="meal">
                    <h3>Bữa ăn {{ $index + 1 }}</h3>

                    <div class="category">Món chính:</div>
                    @if (isset($meal['meal']['main_dishes']))
                        <img class="img_food" src="{{ $meal['meal']['main_dishes']->img }}" alt="main_dishes">
                        <div class="food">{{ $meal['meal']['main_dishes']->food_name }}</div>
                    @endif

                    <div class="category">Món phụ:</div>
                    @if (isset($meal['meal']['appetizer']))
                        <img class="img_food" src="{{ $meal['meal']['appetizer']->img }}" alt="appetizer">
                        <div class="food">{{ $meal['meal']['appetizer']->food_name }}</div>
                    @endif

                    <div class="category">Món tráng miệng:</div>
                    @if (isset($meal['meal']['desserts']))
                        <img class="img_food" src="{{ $meal['meal']['desserts']->img }}" alt="desserts">
                        <div class="food">{{ $meal['meal']['desserts']->food_name }}</div>
                    @endif

                    <div class="meal-nutrition">
                        <div>Tổng dinh dưỡng trong 1 bữa ăn:</div>
                        @foreach ($meal['nutri'] as $nutri_id => $amount)
                            @if ($amount != 0)
                                @foreach ($nutriDetail as $nutriName)
                                    @if ($nutriName->id == $nutri_id)
                                        <div>{{ $nutriName->name }}: {{ round($amount, 2) }} {{ $nutriName->unit }}
                                        </div>
                                    @break
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </div>
            </div>
        @endforeach

        <div class="center-text">
            @if (isset($createdMeal))
                <div>Đã tạo thực đơn cho bạn</div>
            @else
                <button type="submit" class="btn">Xác nhận bữa ăn</button>
            @endif
        </div>
    </form>
</div>
</body>

</html>
