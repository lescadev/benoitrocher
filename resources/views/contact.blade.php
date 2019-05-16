@extends('layout')

@section('content')

<!-- Formulaire-->
<div class="formulaire">
  <div class="nom">
  <p>Nom :</p><br />
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
  <div class="message">
  <p>Message :</p>
  <input type="text" name="message" value="" />
  </div>    
</div>

@endsection
