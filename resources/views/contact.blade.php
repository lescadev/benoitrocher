@extends('layout')

@section('content')

<!-- Formulaire-->
<div class="formulaire">
    <div class="firstcolumn">
      <div class="nom">
        <label for="name">Nom :</label>
        <input id ="name" type="text" name="nom" value="" />
      </div>
      <br/>
      <div class="prenom">
        <label for="prenom">Prenom :</label>
        <input id="prenom" type="text" name="prenom" value="" />
      </div>
      <br/>
      <div class="email">
        <label for="email">Email :</label>
        <input id="email" type="text" name="email" value="" />
      </div>
      <br/>
      <div class="objet">
        <label for="objet">Objet :</label>
        <input id="objet" type="text" name="objet" value="" />
      </div>
      <br/>
    </div>
      <div class="message">
        <label for="message">Message :</label>
        <textarea id="message" type="text" name="message"></textarea>
      </div>
  </div>
  <button type="button" class="boutonenvoyer">Envoyer</button>

@endsection
