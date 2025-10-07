<?php $username = "John" ?>
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/games') }}">Games</a></li>
        <li><a href="{{ url('/student') }}">Student</a></li>
        <li><a href="{{ url('/movies') }}">Movies</a></li>
    </ul>
</nav>

<main>
{{--    Elke pagina heeft hier unieke content--}}
    @yield('content')
</main>


<footer>
    Copyright 2025
</footer>
</body>
</html>
