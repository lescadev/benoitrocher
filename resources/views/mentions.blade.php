@extends('layout')

@section('content')

<!-- Texte des mentions légales -->
<div class="description">

  <div class="titre_desc">

     {!! config('changementions')[0]['titre'] !!}
  </div>

  <div class="para1">
     {!! config('changementions')[0]['mentions'] !!}
  </div>
</div>
@endsection