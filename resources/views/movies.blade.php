<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie List</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        table { width: 50%; margin: auto; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 10px; }
        th { background-color: #ddd; }
    </style>
</head>
<body>
    <h1>Movie List</h1>
    <table>
        <tr>
            <th>Title</th>
            <th>Year</th>
            <th>Genre</th>
        </tr>
        @foreach ($movies as $movie)
        <tr>
            <td>{{ $movie['title'] }}</td>
            <td>{{ $movie['year'] }}</td>
            <td>{{ $movie['genre'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
