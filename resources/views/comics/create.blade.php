<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Create</title>
    @vite('resources/js/app.js')
</head>

<body>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container py-3">
        <h1 class="mb-3">Create a New Record</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}">
            </div>
            <label for="type" class="form-label">Type</label>
            <select class="form-select mb-3" id="type" name="type">
                <option value="graphic novel" {{ old('type') === 'graphic novel' ? 'selected' : '' }}>Graphic Novel
                </option>
                <option value="comic book" {{ old('type') === 'comic book' ? 'selected' : '' }}>Comic Book</option>
            </select>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" min="0.99" step=0.01 name="price"
                    value="{{ old('price') }}">
            </div>
            <div class="mb-3">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="artists">Artists</label>
                <textarea class="form-control" id="artists" name="artists"> {{ old('artists') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="writers">Writers</label>
                <textarea class="form-control" id="writers" name="writers"> {{ old('writers') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date"
                    value="{{ old('sale_date') }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
