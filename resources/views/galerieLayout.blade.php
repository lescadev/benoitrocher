@extends('layout')

@section('content')

<div id="galeriecontent">

@yield('galerie') 

</div>
<button class="afficher" type="button" class="titre" onclick="voir()">Tout Voir</button>

<div class="infopresta">
        @yield('descriptionpresta')
</div>

@endsection
