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
    <h1 class="py-3">Comics in storage</h1>

    <a href="{{route('comics.create')}}"><button class="btn btn-success mb-5">Add New Record</button></a>

    <table class="table">
        <thead>
            <th>Title</th>
            <th>Price</th>
            <th>Series</th>
            <th>Sale Date</th>
            <th>Type</th>
            <th>Actions</th>
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
                        <div class="d-flex gap-2">
                            <a href="{{route('comics.show', $comic->id)}}" class="text-decoration-none">
                                <button class="btn btn-info">Details</button>
                            </a>
                            <a href="{{route('comics.edit', $comic->id)}}">
                                <button class="btn btn-warning">Edit</button>
                            </a>
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
</body>
</html>