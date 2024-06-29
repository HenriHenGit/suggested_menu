<!DOCTYPE html>
<html>

<head>
    <title>Food Recommendation</title>
</head>

<body>
    {{-- <form action="{{ route('suggestMeal.hand') }}" method="POST"> --}}
    <form action="{{ route('suggestMeal.hand') }}" method="POST">
        @csrf
        <label for="age">Tuổi:</label>
        <input type="number" id="age" name="age" required><br><br>

        <label for="gender">Giới tính (Chọn 1 hoặc 0):</label>
        <input type="number" id="gender" name="gender" required><br><br>

        <label for="level">Mức độ vận động:</label>
        <input type="number" id="level" name="level" required><br><br>

        {{-- <label for="level">Cân nặng:</label>
        <input type="number" id="weight" name="weight" required><br><br>

        <label for="level">Chiều cao:</label>
        <input type="number" id="height" name="height" required><br><br> --}}

        <label for="meals">Ăn máy bữa:</label>
        <input type="number" id="meals_per_day" name="meals_per_day" required><br><br>

        {{-- <label for="meals">Một bữa ăn sẽ có bao nhiêu món:</label>
        <input type="number" id="eats" name="eats" required><br><br> --}}

        <input type="submit" value="Xác nhận">
    </form>
</body>

</html>
