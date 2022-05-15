@extends('layout.main')

@section('container')
  <center>
    <h1 class="mb-5">Post Category: {{ $category }}</h1>
    <br>
    <img src="{{ asset('img/lg.png') }}" alt="" width="200" height="200">
    <br> <br>
  </center>
  @foreach ($posts as $post)
  <article class="mb-5">
    <h4>
      <a href="/post/{{ $post->slug }}">{{ $post->title }}</a>
    </h4>
    <p>{{ $post->excerpt }}</p>
  </article>
  @endforeach
@endsection