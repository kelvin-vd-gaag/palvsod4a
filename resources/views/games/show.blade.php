@extends('main')


@section('title')
    {{ $game->name }}

@endsection


@section('content')
    <h1> {{ $game->name }}</h1>
    <span>Price {{ $game->price }}</span>
@endsection
