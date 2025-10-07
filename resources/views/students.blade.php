<?php $username = "John" ?>
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
</nav>
<h1>Alle studenten</h1>
@foreach ($students as $student)
   <li> {{ $student['name'] }} </li>
@endforeach

</body>
</html>
