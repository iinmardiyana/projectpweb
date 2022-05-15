@extends('dashboard.layoutd.maind')

@section('container')
<h1 class="mb-5">{{ $postl->title }}</h1>
        
    {!! $postl->body !!}

    <br>
    <br>
    <a href="/dashboard">Back</a>    
@endsection