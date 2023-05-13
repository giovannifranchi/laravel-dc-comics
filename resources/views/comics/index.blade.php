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

        <a href="{{ route('comics.create') }}"><button class="btn btn-success mb-5">Add New Record</button></a>

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
                @foreach ($comics as $key => $comic)
                    <tr>
                        <td>{{ $comic['title'] }}</td>
                        <td>{{ $comic['price'] }}</td>
                        <td>{{ $comic['series'] }}</td>
                        <td>{{ $comic['sale_date'] }}</td>
                        <td>{{ $comic['type'] }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('comics.show', $comic->id) }}" class="text-decoration-none">
                                    <button class="btn btn-info">Details</button>
                                </a>
                                <a href="{{ route('comics.edit', $comic->id) }}">
                                    <button class="btn btn-warning">Edit</button>
                                </a>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal{{$comic->id}}">
                                    Delete
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$comic->id}}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure to delete {{$comic->title}}?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" value="Delete" class="btn btn-danger">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</body>

</html>
