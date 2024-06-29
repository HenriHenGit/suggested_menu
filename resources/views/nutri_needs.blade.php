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
    <h2>Nutritional Needs</h2>
    <form action="{{ route('nutri_needs.update') }}" method="POST">
        @csrf
        <table>
            <thead>
                <tr>
                    <th>Nutrient</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($needsPerMeal as $need)
                    <tr>
                        <td>{{ $need->nutri_id }}</td>
                        <td>
                            <input type="text" name="nutritional_needs[{{ $need->id }}][amount]"
                                value="{{ $need->amount }}">
                            <input type="hidden" name="nutritional_needs[{{ $need->id }}][id]"
                                value="{{ $need->id }}">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit" class="btn">Cập nhật bữa ăn</button>
    </form>
    </br>
    <a href="{{ route('suggestMeal.hand') }}" class="btn">Nhập lại thông tin</a>
</body>

</html>
