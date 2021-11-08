<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Prova</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <h1>Movie Prova</h1>

        <ul>
            @foreach ($movies as $movie)
                <li>
                    <h3>{{$movie['title']}}</h3>
                    <h4>{{$movie['original_title']}}</h4>
                    <p>{{$movie['nationality']}}</p>
                    <p>{{$movie['date']}}</p>
                    <p>{{$movie['vote']}}</p>
                </li>
            @endforeach
        </ul>
    </div>


</body>
</html>