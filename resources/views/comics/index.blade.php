<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Comics</title>
    @vite('resources/js/app.js')
</head>
<body>

<div class="container py-3">
    <h1>Comics in storage</h1>

    <table class="table">
        <thead>
            <th>Title</th>
            <th>Price</th>
            <th>Series</th>
            <th>Sale Date</th>
            <th>Type</th>
            <th>Details</th>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{$comic['title']}}</td>
                    <td>{{$comic['price']}}</td>
                    <td>{{$comic['series']}}</td>
                    <td>{{$comic['sale_date']}}</td>
                    <td>{{$comic['type']}}</td>
                    <td>
                        <a href="{{route('comics.show', $comic->id)}}">
                            <button class="btn btn-info">Go To Details</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
</body>
</html>