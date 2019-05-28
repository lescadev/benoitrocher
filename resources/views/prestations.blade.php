@extends('layout')

@section('content')

<div class="galerie-content">
      
    @foreach ($mariages as $mariage)
        
    <img src="/storage/{{ $mariage['image'] }}"/>
    
    @endforeach

</div>

@endsection