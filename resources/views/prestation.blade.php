@extends('galerieLayout')

@section('galerie')

@foreach ($prestationPhotos as $prestationPhoto)
        
<img alt=" " loading="lazy" src="/storage/{{ $prestationPhoto['image'] }}" data-lightbox="prestation"/>

@endforeach

@endsection

@section('descriptionpresta')

{!! $prestationInfos['champstexte'] !!}
@endsection