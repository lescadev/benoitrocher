<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Benoit Rocher - Photographe - Saint Léonard de Noblat - Mariage - Portrait</title>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href={{ asset('css/lightbox.css')}}>
  </head>

  <body>
   
      <div class="container">
        <!-- Header -->
        <div class="headerr">
          <header  id="pose">
            <div class="logo">
              <a href="{{ route('accueil') }}">
                <img src="/storage/{{ config('infos')[0]['image_logo'] }}" height="100%" width="100%"/>
              </a>
            </div>
      
            <nav>
              <a href="{{ route('accueil') }}">Accueil</a>
              <br>
              <div id="prestations">
                <a>Prestations</a> >
                <div class="prestation">
                  @foreach (config('categories') as $categorie)
                    <div>
                      <a href="{{ route('prestation', ['name' => $categorie['slug']]) }}">{{ $categorie['name'] }}</a>
                    </div>
                  @endforeach
                </div>
              </div>
              <br>
              <a href="{{ route('photodart')}}">Photo d'art</a>
              <br>
              <a href="{{ route('contact') }}">Contact</a>
            </nav>
          </header>
      </div>
       
      @yield('content')

        <!-- Footer -->
        <footer>
          <div class="detail">
              <a href="{{ route('mentions') }}">Mentions légales&nbsp;</a>
              <p>- Tous droits Réservés - 2019</p>
          </div>

        </footer>

      </div>

      <script src="/js/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="/js/sliderpoo.js"></script>
      <script type="text/javascript" src={{ asset('js/vendor/lightbox.min.js')}}></script>
      <script type="text/javascript" src="/js/galerie.js" async></script>

  </body>
</html>