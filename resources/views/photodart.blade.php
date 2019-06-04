@extends('layout')

@section('content')
<div class="galerie-art">

        @foreach ($arts as $art)
        
        <img src="/storage/{{ $art['image'] }}"/>
        
        @endforeach
    
</div>

@endsection