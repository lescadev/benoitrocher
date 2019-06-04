<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Benoit Rocher - Mentions légales</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  </head>

  <body>
   
      <div class="container">
        <!-- Header -->
        <div class="headerr">
          <header>
            <div class="logo">
              <a href="{{ route('accueil') }}">
                <img src="/storage/{{ config('infos')[0]['image_logo'] }}" height="100%" width="100%"/>
              </a>
            </div>
        
              <nav>
                <a href="{{ route('accueil') }}">Accueil</a>
                <br>
                <a href="{{ route('galerie') }}">Galerie</a>
                <br>
                  <div id="prestations">
                    <a>Prestations</a> >
                    <div class="prestation">
                      @foreach ($categories as $categorie)
                        <div>
                          <a href="">{{ $categorie['name'] }}</a>
                        </div>
                      @endforeach
                    </div>
                  </div>
                <br>
                <a href="{{ route('contact') }}">Contact</a>
              </nav>
            </header>
      </div>
       
      @yield('content')

        <!-- Footer -->
        <footer>
          <div class="detail">
              <a href="{{ route('mentions') }}">Mentions légales</a>
              <p>- Tous droits Réservé - 2019 -</p>
              <a href="https://www.facebook.com/benroc.photographe" target="_blank">facebook.</a>
          </div>

        </footer>

      </div>

      <script src="/js/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="/js/sliderpoo.js"></script>

  </body>
</html>