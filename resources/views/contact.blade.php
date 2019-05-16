@extends('layout')

@section('content')

<!-- Formulaire-->
<div class="formulaire">
  <div class="firstcolumn">
  <div class="nom">
  <p>Nom :</p>
  <input type="text" name="nom" value="" />
  </div>
  <div class="prenom">
  <p>Prénom :</p>
  <input type="text" name="prenom" value="" />
  </div>
  <div class="email">
  <p>E-mail :</p>
  <input type="text" name="email" value="" />
  </div>
  <div class="objet">
  <p>Objet :</p>
  <input type="text" name="objet" value="" />
  </div>
</div>
  <div class="message">
  <p class="msg">Message :</p>
  <input class="textarea" type="text" name="message" value="" />
  </div>    
</div>

@endsection
