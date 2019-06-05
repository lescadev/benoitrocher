@extends('layout')

@section('content')

<div id="galeriecontent">

@yield('galerie') 

</div>
<button class="afficher" type="button" class="titre" onclick="voir()">Tout Voir</button>
<!-- titres de contact -->
<div class="contacttitre">
  <h2> Contactez-moi en remplissant le formulaire ci-dessous :</h2>
</div>

<!-- Formulaire -->
<div class="formulaire_presta">
    <form action="/contact" role="form" method="POST" id="reused_form">
    <div class="firstcolumn">
      <div class="nom">
        <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Nom" required> 
        <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="E-mail" required><br>
      </div>
      <br/>
      <br/>
      <div class="objet">
          <input id="objet" type="text" name="objet" value="{{ old('objet') }}" placeholder="Objet" required><br>
      </div>
      <br/>
      <br/>
      <div class="presta">
      	<label>Prestation:
        	<select id="categories" name="categorie" required>
        		@foreach (config('categories') as $categorie)
        		<option>{{ $categorie['name'] }}</option>
        		@endforeach
        	</select> 
        </label>
        <label>Date souhaitée:
        	<input id="date" type="date" name="date" value="{{ old('date') }}" placeholder="Date" required>
    	</label>
        <br>
      </div>
      <br/>
      <br/>
    </div>
    <div class="message">
      <textarea id="message" type="text" name="message" value="{{ old('message') }}" maxlength="6000" placeholder="Message" required></textarea>
    </div>

    @csrf

    <button type="submit" class="boutonenvoyer slidebottomleft">Envoyer</button>
    
    </form>
</div>
@endsection
