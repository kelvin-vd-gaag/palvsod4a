@extends('main')

@section('title')
    Contact pagina
    @endsection

    @section('content')
    <h2>Games</h2>
    <?php foreach ($movies as $movie): ?>
    <li><a href="{{ url('/movies') . '/' . $movie['id']  }}">

                <?php echo $movie['title'] ?>

        </a></li>
    <?php endforeach; ?>

@endsection
