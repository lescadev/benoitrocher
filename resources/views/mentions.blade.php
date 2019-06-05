@extends('layout')

@section('content')

<!-- Texte des mentions légales -->
<div class="description">

     <h1 class="titre_desc" >{{ $mentions[0]['titre'] }}</h1>

  <div class="para1">
     {!! $mentions[0]['mentions'] !!}
  </div>
</div>
@endsection