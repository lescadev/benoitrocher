@extends('layout')

@section('title')
<title>Benoit Rocher - Photographe - Limoges - Photos d'art</title>
@endsection

@section('content')
<div class="galerie-art">

        @foreach ($arts as $art)
        
        <a href="/storage/{{ $art['image'] }}" data-lightbox="prestation" data-title="{!! $art['description'] !!}"><img src="/storage/{{ $art['image'] }}"/></a>
        
        @endforeach
    
</div>

@endsection