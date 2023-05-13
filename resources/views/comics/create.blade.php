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

    <div class="container py-3">
        <h1 class="mb-3">Create a new Record</h1>
        <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <form>
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" value="title">
            </div>
            <div class="mb-3">
              <label for="thumb" class="form-label">Thumb</label>
              <input type="text" class="form-control" id="thumb" value="thumb">
            </div>
            <div class="mb-3">
              <label for="series" class="form-label">Thumb</label>
              <input type="text" class="form-control" id="series" value="series">
            </div>
            <label for="type" class="form-label">Type</label>
            <select class="form-select mb-3" id="type">
                <option selected>Select a Type</option>
                <option value="graphic novel">Graphic Novel</option>
                <option value="comic book">Comic Book</option>
            </select>
            <div class="mb-3">
              <label for="price" class="form-label">Price</label>
              <input type="number" class="form-control" id="price" value="price" min="0.99" step=0.01>
            </div>
            <div class="mb-3">
                <label for="description">Description</label>
                <textarea class="form-control"  id="description" value="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="artists">Artists</label>
                <textarea class="form-control"  id="artists" value="artists"></textarea>
            </div>
            <div class="mb-3">
                <label for="writers">Writers</label>
                <textarea class="form-control"  id="writers" value="writers"></textarea>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" class="form-control" id="sale_date" value="sale_date" >
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </form>
    </div>
    
</body>
</html>