@extends('layout')

@section('content')

<div id="galeriecontent">

@yield('galerie') 

</div>
<button class="afficher" type="button" class="titre" onclick="voir()">Tout Voir</button>

<!-- description presta -->

<div class="infopresta">
  <p>@yield('descriptionpresta')</p>
</div>

<!-- titres de contact -->
<div class="contacttitre">
  <h2> Contactez-moi en remplissant le formulaire ci-dessous :</h2>
</div>


<!-- Formulaire presta-->
<div class="formulaire_presta">
    <form action="/presta" role="form" method="POST" id="reused_form">
        <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Nom" required> 
        <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="E-mail" required>
        <input id="objet" type="text" name="objet" value="{{ old('objet') }}" placeholder="Objet" required>
        <input type="hidden" name="prestation_nom" value="{{ $prestationInfos[0]['name'] }}">
        <input type="hidden" name="prestation_slug" value="{{ $prestationInfos[0]['slug'] }}">
        <input id="tel" type="tel" name="telephone" value="{{ old('tel') }}" placeholder="Téléphone">
      <label>Date souhaitée:
        <input id="date" type="date" name="date" value="{{ old('date') }}" placeholder="Date" required>
    	</label>
      <textarea id="message" type="text" name="message" value="{{ old('message') }}" maxlength="6000" placeholder="Message" required></textarea>

    @csrf

    <button type="submit" class="boutonenvoyer slidebottomleft">Envoyer</button>
    
    </form>
</div>


@endsection
