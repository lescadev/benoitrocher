@extends('layout')

@section('content')

<!-- Slider -->

<div id="slider" onmouseout="slider.launchInterval()" onmouseover="slider.pause()">

  <div class="slide" style="background-image: url(/img/1.jpg)">
    <h2 class="slider-title">BENOIT ROCHER</h2>
    <p class="en-savoir-plus">PHOTOGRAPHE INDEPENDANT - MARIAGE - PORTRAIT - REPORTAGE - SAINT LEONARD DE NOBLAT</p>
  </div>

  <div class="slide" style="background-image: url(/img/2.jpg)">
    <h2 class="slider-title">BENOIT ROCHER</h2>
    <p class="en-savoir-plus">PHOTOGRAPHE INDEPENDANT - MARIAGE - PORTRAIT - REPORTAGE - SAINT LEONARD DE NOBLAT</p>
  </div>

  <div class="slide" style="background-image: url(/img/3.jpg)">
    <h2 class="slider-title">BENOIT ROCHER</h2>
    <p class="en-savoir-plus">PHOTOGRAPHE INDEPENDANT - MARIAGE - PORTRAIT - REPORTAGE - SAINT LEONARD DE NOBLAT</p>
  </div>

  <div class="slide" style="background-image: url(/img/4.jpg)">
    <h2 class="slider-title">BENOIT ROCHER</h2>
    <p class="en-savoir-plus">PHOTOGRAPHE INDEPENDANT - MARIAGE - PORTRAIT - REPORTAGE - SAINT LEONARD DE NOBLAT</p>
  </div>

  <div class="slide" style="background-image: url(/img/5.jpg)">
    <h2 class="slider-title">BENOIT ROCHER</h2>
    <p class="en-savoir-plus">PHOTOGRAPHE INDEPENDANT - MARIAGE - PORTRAIT - REPORTAGE - SAINT LEONARD DE NOBLAT</p>
  </div>

  <div class="slide" style="background-image: url(/img/6.jpg)">
    <h2 class="slider-title">BENOIT ROCHER</h2>
    <p class="en-savoir-plus">PHOTOGRAPHE INDEPENDANT - MARIAGE - PORTRAIT - REPORTAGE - SAINT LEONARD DE NOBLAT</p>
  </div>

  <div class="slide" style="background-image: url(/img/7.jpg)">
    <h2 class="slider-title">BENOIT ROCHER</h2>
    <p class="en-savoir-plus">PHOTOGRAPHE INDEPENDANT - MARIAGE - PORTRAIT - REPORTAGE - SAINT LEONARD DE NOBLAT</p>
  </div>

  <div class="slide" style="background-image: url(/img/8.jpg)">
    <h2 class="slider-title">BENOIT ROCHER</h2>
    <p class="en-savoir-plus">PHOTOGRAPHE INDEPENDANT - MARIAGE - PORTRAIT - REPORTAGE - SAINT LEONARD DE NOBLAT</p>
  </div>

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
  est aspernatur asperiores doloribus tenetur accusamus? <br> <br> <br>
</p></div>
</div>

@endsection
