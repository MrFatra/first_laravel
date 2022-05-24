@extends('layouts.main')

@section('content')
    <h1 class="mb-3">My Post is Here!</h1>
    @foreach ($data as $post)
        <div class="card mb-3 bg-dark">
            <div class="card-body">
                <h2 class="card-title text-center">{{ $post['judul'] }}</h2>
                <div class="text-center mb-3">
                    <img src="{{ $post['image'] }}" alt="" width="200px">
                </div>
                <h5 class="text-center mb-4"> By: {{ $post['author'] }}</h5>
                <p class="card-text overflow-hidden">{{ $post['desc'] }}</p>
                <a href="/blog/{{ $post['slug'] }}" class="btn btn-primary text-start">Read More</a>
            </div>
        </div>
    @endforeach
@endsection
