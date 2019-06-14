@extends('layout')

@section('title')
<title>Benoit Rocher - Photographe - Limoges - Mariage - Portrait - Reportages</title>
@endsection

@section('content')

<!-- Slider -->

<div id="slider" onmouseout="slider.launchInterval()" onmouseover="slider.pause()">

  @foreach ($photos as $photo)
  <div class="slide" style="background-image: url('/storage/{{ $photo['image'] }}')">
    <h1 class="slider-title">{{ config('infos')[0]['titre'] }}</h1>
    <p class="en-savoir-plus">{{ config('infos')[0]['slogan'] }}</p>
  </div>
  @endforeach

    <a href="#" class="fleche fleche-gauche" onclick="slider.slidePrecedent()">&lt;</a>
    <a href="#" class="fleche fleche-droite" onclick="slider.slideSuivant()">&gt;</a>

</div>
<!-- Description -->
<div class="description">

<p class="titre_desc">{{ config('infos')[0]['titre_desc'] }}</p>

<div class="para1">
    {!! config('infos')[0]['contenu_desc'] !!}
</div>


@endsection
