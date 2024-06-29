{{-- <!DOCTYPE html>
<html>

<head>
    <title>Results</title>
</head>

<body>
    <h1>Thông Tin Đã Nhập</h1>
    <ul>
        <li>Tuổi: {{ $age }}</li>
        <li>Giới tính: {{ $gender }}</li>
        <li>Mức độ vận động: {{ $level }}</li>
        <li>Cân nặng: {{ $weight }}</li>
        <li>Chiều cao: {{ $height }}</li>
        <li>Ăn mấy bữa: {{ $meals }}</li>
        <li>Một bữa ăn sẽ có bao nhiêu món: {{ $eats }}</li>
    </ul>
    <a href="{{ route('suggested_menu.create') }}">Nhập lại thông tin</a>
</body>

</html> --}}
<!-- resources/views/suggest-meals.blade.php -->

<!-- resources/views/suggest-meals.blade.php -->

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
    @include('nutri_needs', ['needsPerMeal' => $needsPerMeal])
    {{-- <h2>Suggested Meals</h2>
    <a href="{{ route('suggestMeal.index') }}">Nhập lại thông tin</a>
    @foreach ($meals as $index => $meal)
        <div class="meal">
            <h3>Meal {{ $index + 1 }}</h3>

            @if (isset($meal['main_dishes']))
                <div class="category">Main Dishes:</div>
                <div class="food">{{ $meal['main_dishes']->food_name }}</div>
            @endif

            @if (isset($meal['drinks']))
                <div class="category">Drinks:</div>
                <div class="food">{{ $meal['drinks']->food_name }}</div>
            @endif

            @if (isset($meal['appetizer']))
                <div class="category">Appetizer:</div>
                <div class="food">{{ $meal['appetizer']->food_name }}</div>
            @endif

            @if (isset($meal['desserts']))
                <div class="category">Desserts:</div>
                <div class="food">{{ $meal['desserts']->food_name }}</div>
            @endif
        </div>
    @endforeach --}}
    <h2>Suggested Meals</h2>
    @foreach ($meals as $index => $meal)
        <div class="meal">
            <h3>Meal {{ $index + 1 }}</h3>

            @foreach ($meal['meal'] as $category => $food)
                <div class="category">{{ ucfirst(str_replace('_', ' ', $category)) }}:</div>
                <div class="food">{{ $food->food_name }}</div>
            @endforeach
            </br>
            <div class="meal-nutrition">
                <div>Total Nutrition for this Meal:</div>
                @foreach ($meal['nutri'] as $nutri_id => $amount)
                    <div>{{ $nutri_id }}: {{ round($amount, 2) }}</div>
                @endforeach
            </div>
        </div>
    @endforeach

</body>

</html>
