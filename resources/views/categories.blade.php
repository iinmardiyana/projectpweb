@extends('layout.main')

@section('container')
  <center>
    <h1 class="mb-5">Post Categories</h1>
    <br>
    <img src="{{ asset('img/lg.png') }}" alt="" width="200" height="200">
    <br> <br>
  </center>
  @foreach ($categories as $category)
    <ul>
        <li>
            <h3><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h3>
        </li>
    </ul>
  @endforeach
@endsection