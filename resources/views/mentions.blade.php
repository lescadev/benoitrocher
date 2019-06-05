@extends('layout')

@section('content')

<!-- Texte des mentions légales -->
<div class="description">

     <h1 class="titre_desc" >{!! config('changementions')[0]['titre'] !!}</h1>

  <div class="para1">
     {!! config('changementions')[0]['mentions'] !!}
  </div>
</div>
@endsection