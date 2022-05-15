@extends('layout.main')

@section('container')
<center>
    <h1>Welcome to ZAP Laundry</h1>
    <br>
    <img src="{{ asset('img/lg.png') }}" alt="" width="200" height="200">
    <br> <br>
  </center>

  @if ($posts->count())
  <div class="card mb-3">
    
    <div class="card-body">
      <h3 class="card-title"> <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark"> {{ $posts[0]->title }}</a></h3>
      <p>
        <small class="text-muted">
          By <a href="/authors/{{ $posts[0]->user->id }}" class='text-decoration-none'>{{ $posts[0]->user->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}"class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
        </small>
      </p>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <a href="/posts/{{ $posts[0]->slug }}"class="text-decoration-none btn btn-primary">Read more</a>
    </div>
  </div>
      
  @else
      <p class="text-center fs-4">No Post Found</p>
  @endif
</center>

<div class="container">
  <div class="row">
    @foreach ($posts->skip(1) as $post)
    <div class="col-md-4 mb-5">
      <div class="card">
        
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p>
            <small class="text-muted">
              By <a href="/authors/{{ $post->user->id }}" class='text-decoration-none'>{{ $post->user->name }}</a> {{ $post->created_at->diffForHumans() }}
            </small>
          </p>
          <p class="card-text">{{ $post->excerpt }}</p>
          <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read more</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
