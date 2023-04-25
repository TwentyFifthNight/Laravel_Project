<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games Revievs</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/darkmode.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    @include('layouts.navbar')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="itemsSet" id="games">
        @foreach($games as $game)
        <a href="{{ route('show', $game->id) }}">
            <div id={{$game->id}} class="item">
            <img width="220" src="/img/{{$game->img}}" alt="{{$game->name}}">
                <div class="details">
                    <h3>{{$game->name}}</h3>
                </div>
            </div>
        </a>
        @endforeach
    </div>
    
<script src="/js/DropDownNavigation.js"></script>
<script src="/js/darkmode.js"></script>
</body>
</html>