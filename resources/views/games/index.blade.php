@extends('main')

@section('title')
    Contact pagina
    @endsection

    @section('content')
        <?php $username = "John"; ?>
        <!doctype html>

    <h1>Goedemorgen, <?php echo $username ?></h1>
    <h2>Games</h2>
    <?php foreach ($games as $game): ?>
    <li><a href="{{ url('/games') . '/' . $game['id']  }}">

                <?php echo $game['name'] ?>

        </a></li>
    <?php endforeach; ?>

@endsection
