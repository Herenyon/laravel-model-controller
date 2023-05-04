<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
       
        @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container d-flex flex-wrap gap-3 mt-3">
            @foreach ($movies as $movie)
            <a href="" class="card-style">
            <div class="card" style="width: 18rem;">
                
                <div class="card-body">
                    <h4 class="card-title">Title: {{$movie->title }}</h4>
                    <h6>Original Title: {{$movie->original_title }}</h6>
                    <div class="card-text">Nation: {{$movie->nationality }}</div>
                    <div class="card-text">Realese: {{$movie->date }}</div>
                    <div class="card-text">Vote: {{$movie->vote }}</div>
                    <div class="card-text"></div>
                
                </div>
            </div>
            </a>
               
           @endforeach
           
        </div>
    </body>
</html>
