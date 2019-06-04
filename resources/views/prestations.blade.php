@extends('galerieLayout')

@section('galerie')

@foreach ($prestations as $prestation)
        
<img alt="mariage" loading="lazy" src="/storage/{{ $prestation['image'] }}"/>

@endforeach

@endsection