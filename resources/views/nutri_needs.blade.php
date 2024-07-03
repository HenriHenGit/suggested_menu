<!-- resources/views/nutritional-needs.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutritional Needs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        .btn {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h2>Nhu cầu dinh dưỡng của bạn (Tham Khảo)</h2>
    <form action="{{ route('suggestMeal.update') }}" method="POST">
        @csrf
        <table>
            <thead>
                <tr>
                    <th>Nutrient</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($needsUser as $need)
                    <tr>
                        @foreach ($nutriDetail as $nutriName)
                            @if ($nutriName->id == $need->nutri_id)
                                <td>{{ $nutriName->name }}</td>
                            @break
                        @endif
                    @endforeach

                    <td>
                        <input type="text" name="nutri_needs[{{ $need->nutri_id }}][amount]"
                            value="{{ $need->amount }}">
                        @foreach ($nutriDetail as $nutriName)
                            @if ($nutriName->id == $need->nutri_id)
                                <label>{{ $nutriName->unit }}</label>
                            @break
                        @endif
                    @endforeach
                    <input type="hidden" name="nutri_needs[{{ $need->nutri_id }}][user_id]"
                        value="{{ $need->user_id }}">
                    {{-- <input type="hidden" name="nutri_needs[user][nutri_name]" value="{{ $need->nutri_id }}"> --}}
                </td>

            </tr>
        @endforeach
    </tbody>
</table>
<label for="meals">Ăn máy bữa:</label>
<input type="number" id="meals_per_day" name="meals_per_day" required><label> /ngày</label>
<button type="submit" class="btn">Cập nhật bữa ăn</button>
</form>
</br>
</body>

</html>
