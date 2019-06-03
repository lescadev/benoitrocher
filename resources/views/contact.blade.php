@extends('layout')

@section('content')

<!-- titres de contact -->
<div class="contacttitre">
  <h1> Contactez-moi en remplissant le formulaire ci-dessous :</h1>
</div>

<!-- Formulaire -->
<div class="formulaire">
    <form role="form" method="post" id="reused_form">
    <div class="firstcolumn">
      <div class="nom">
        <input id="name" type="text" name="name" placeholder="Nom" required> 
        <input id="email" type="text" name="email" placeholder="E-mail" required><br>
      </div>
      <br/>
      <br/>
      <div class="objet">
          <input id="objet" type="text" name="objet" placeholder="Objet" required><br>
      </div>
      <br/>
      <br/>
    </div>
    <div class="message">
      <textarea id="message" type="text" name="message" maxlength="6000" placeholder="Message" required></textarea>
    </div>
    </form>
</div>

<!-- infos de contact -->

<div class="infoscontact">
   <!-- <img src="/img/map.png" alt="carte de Saint Léonard-de-Noblat" width="100%"> -->
  <h3>Infos de contact :</h3>
    <p>
      Mail : <strong>benoit.roc@gmail.com</strong> <br> Tel : <strong>0699597502</strong> <br> <br>
      <a href="https://www.instagram.com/rocherdeclencheur/ " target="_blank"><strong>Instagram</strong></a> <br>
      <a href="https://www.facebook.com/benroc.photographe" target="_blank"><strong>Facebook</strong></a> <br> <br>
      Adresse : <strong>18 rue Louis Valadas <br> 87400 St Léonard de Noblat</strong>
      
      
    </p>
</div>

  <button type="submit" class="boutonenvoyer slidebottomleft">Envoyer</button>

@endsection
