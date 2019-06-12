@extends('layout')

@section('content')

<div id="galeriecontent">

@yield('galerie') 

</div>
<button class="afficher" type="button" class="titre" onclick="voir()">Tout Voir</button>

<!-- description presta -->

<div class="infopresta">
  @yield('descriptionpresta')
</div>

<!-- titres de contact -->
<div class="contacttitre">
  <h2> Contactez-moi en remplissant le formulaire ci-dessous :</h2>
</div>


<!-- Formulaire presta-->
<div class="formulaire_presta">
    <form action="/prestation" role="form" method="POST" id="reused_form">
    <div class="firstcolumnpresta">
      <div class="nompresta">
        <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Nom" required> 
        <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="E-mail" required><br>
      </div>
      <br/>
      <br/>
      <div class="prestaobjet">
          <input id="objet" type="text" name="objet" value="{{ old('objet') }}" placeholder="Objet" required><br>
      </div>
      <br/>
      <br/>
      <div class="choixpresta">
        <label>Date souhaitée:
        	<input id="date" type="date" name="date" value="{{ old('date') }}" placeholder="Date" required>
    	</label>
    	<input id="tel" type="tel" name="telephone" value="{{ old('tel') }}" placeholder="Téléphone">
        <br>
      </div>
      <br/>
      <br/>
    </div>
    <div class="messagepresta">
      <textarea id="message" type="text" name="message" value="{{ old('message') }}" maxlength="6000" placeholder="Message" required></textarea>
    </div>

    @csrf

    <button type="submit" class="boutonenvoyer slidebottomleft">Envoyer</button>
    
    </form>
</div>


@endsection
