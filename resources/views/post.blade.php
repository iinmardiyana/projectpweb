@extends('layout.main')

@section('container')
    {{-- <h1 class="mb-5">{{ $post->title }}</h1>
        
    {!! $post->body !!}

    <br>
    <br>
    <a href="/about">Back</a> --}}
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h4 class="mb-4">{{ $post->title }}</h4>
    
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid" >
                {{-- <img src="img/laundry1.png{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid" > --}}
               
                <article class="my-3 fs-5">
                    <p>By <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
    
                    {!! $post->body !!}
                </article>
    
                <a href="/home" class="d-block mt-3">Back</a>
            </div>
        </div>
    </div>
@endsection