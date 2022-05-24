@extends('layouts.main')

@section('content')
    <article>
        <h1>{{ $data['judul'] }}</h1>
        <h3>By: {{ $data['author'] }}</h3>
        <img src="{{ $data['image'] }}" alt="">
        <p>{{ $data['desc'] }}</p>
    </article>
@endsection
