@extends('galerieLayout')

@section('galerie')

@foreach ($prestationPhotos as $prestationPhoto)
        
<a href="" data-lightbox="prestation"><img alt=" " loading="lazy" src="/storage/{{ $prestationPhoto['image'] }}"/></a>

@endforeach

@endsection

@section('descriptionpresta')

{!! $prestationInfos['champstexte'] !!}
@endsection