@extends('layout')

@section('content')

<!-- titres de contact -->
<div class="contacttitre">
  <h1>Contactez-moi</h1>
  <h2>pour en savoir plus sur me services en remplissant le formulaire ci-dessous:</h2>
</div>

<!-- Formulaire -->
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

<!-- infos de contact -->

<div class="infoscontact">
  <img src="/img/map.png" alt="carte de Saint Léonard-de-Noblat" width="100%">
  <h3>Infos de contact</h3>
    <p>Mail : <strong>benoit.rocher@gmail.com</strong> <br> Tel : <strong>0699597502</strong>
</div>

  <button type="button" class="boutonenvoyer">Envoyer</button>

@endsection
