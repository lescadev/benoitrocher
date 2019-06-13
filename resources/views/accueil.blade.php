@extends('layout')

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

<p class="titre_desc">Description</p>

<div class="para1"><p>
  Lorem ipsum dolor sit amet, consectetur adipisicing  ytaque elit. 
  Qui, placeat fuga? Quam fugiat incidunt possimus error neque! 
  Unde molestiae id at libero ipsum voluptatibus eum, aliquam suscipit! 
  Consequuntur, cupiditate at?
</p></div>

<div class="para2"><p>
  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab placeat vel eos odit! 
  Inventore perspiciatis aut quisquam deleniti fugit porro, quibusdam in et blanditiis 
  est aspernatur asperiores doloribus tenetur accusamus? 
  Lorem ipsum dolor sit amet, consectetur adipisicing ytaque elit. Qui, placeat fuga? Quam fugiat incidunt possimus error neque! Unde molestiae id at libero ipsum voluptatibus eum, aliquam suscipit! Consequuntur, cupiditate at?




<br> <br> <br>
</p></div>
</div>

@endsection
