@extends('layout')

@section('content')

<!-- Texte des mentions légales -->
<div class="description">

  <p class="titre_desc">{{ config('changementions')[0]['titre'] }}</p>

  <p class="para1">{{ config('changementions')[0]['mentions'] }}</p>

@endsection