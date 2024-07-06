<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suggested Meals</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }

        .img_food {
            width: 200px;
            height: 200px;
        }

        .meal {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }

        .category {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .food {
            margin-left: 20px;
        }
    </style>
</head>

<body>
    @include('demoNutri_needs', ['needsUser' => $needsUser, 'nutriDetail' => $nutriDetail])
    <h2>Đề xuất bữa ăn</h2>
    <form action="{{ route('menu.store') }}" method="GET">
        @foreach ($meals as $index => $meal)
            <div class="meal">
                <h3>Bữa ăn {{ $index + 1 }}</h3>

                <div class="category">Món chính:</div>
                @if (isset($meal['meal']['main_dishes']))
                    <img class="img_food" src='{{ $meal['meal']['main_dishes']->img }}' alt="main_dishes">
                    <div class="food">{{ $meal['meal']['main_dishes']->food_name }}</div>
                @endif

                <div class="category">Món phụ:</div>
                @if (isset($meal['meal']['appetizer']))
                    <img class="img_food" src='{{ $meal['meal']['appetizer']->img }}' alt="appetizer">
                    <div class="food">{{ $meal['meal']['appetizer']->food_name }}</div>
                @endif

                <div class="category">Món tráng miệng:</div>
                @if (isset($meal['meal']['desserts']))
                    <img class="img_food" src='{{ $meal['meal']['desserts']->img }}' alt="desserts">
                    <div class="food">{{ $meal['meal']['desserts']->food_name }}</div>
                @endif

                </br>
                <div class="meal-nutrition">
                    <div>Tổng dinh dưỡng trong 1 bữa ăn:</div>
                    @foreach ($meal['nutri'] as $nutri_id => $amount)
                        @if ($amount == 0)
                            <div style="display: none;">{{ $nutri_id }}: {{ round($amount, 2) }}</div>
                        @else
                            @foreach ($nutriDetail as $nutriName)
                                @if ($nutriName->id == $nutri_id)
                                    <div>{{ $nutriName->name }}: {{ round($amount, 2) }} {{ $nutriName->unit }}</div>
                                @break
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </div>
        </div>
    @endforeach

    @if (isset($createdMeal))
        <div>Đã tạo thực đơn cho bạn</div>
    @else
        <button type="submit" class="btn">Xác nhận bữa ăn</button>
    @endif
</form>
</body>

</html>
