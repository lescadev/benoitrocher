@extends('galerieLayout')

@section('galerie')

@foreach ($prestationPhotos as $prestationPhoto)
        
<img alt=" " loading="lazy" src="/storage/{{ $prestationPhoto['image'] }}"/>

@endforeach

@endsection