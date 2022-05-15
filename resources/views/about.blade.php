
@extends('layout.main') <!-- extends digunakan untuk memanggil parent page -->

@section('container') <!-- Digunakan untuk memanggil section yang ada di layout main -->
    <h1>Tentang ZAP Laundry</h1>
    <br>
    @foreach ($posts as $post) <!--Untuk looping isi array menampilkan post -->
     <article class="mb-5">
     <h2>
         <a href="/about/{{ $post->slug}}">{{ $post->title}}</a>
    </h2>
     {{-- <h5>By : {{ $post["author"] }}</h5> --}}
     <p>{{ $post->excerpt}}</p>
     </article>   
    @endforeach

@endsection
<!-- -->