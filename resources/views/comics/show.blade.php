<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics Details</title>
    @vite('resources/js/app.js')
</head>
<body>

    <div class="container">

        <a href="{{route('comics.index')}}"><button class="btn btn-info">Go Back to List</button></a>


        <h1>Details for Comic: {{$comic->title}}</h1>

        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">

        <h3>Description</h3>
        <p>{{$comic->description}}</p>

        <h3>Artists</h3>
        <p>{{$comic->artists}}</p>

        <h3>Writers</h3>
        <p>{{$comic->writers}}</p>
    </div>
   
    
</body>
</html>