@extends('galerieLayout')

@section('galerie')

@foreach ($prestationPhotos as $prestationPhoto)
        
<a href="/storage/{{ $prestationPhoto['image'] }}" data-lightbox="prestation" data-title="{!! $prestationPhoto['description'] !!}"><img alt=" " loading="lazy" src="/storage/{{ $prestationPhoto['image'] }}"/></a>

@endforeach

@endsection

@section('descriptionpresta')

{!! $prestationInfos[0]['champstexte'] !!}
    
@endsection