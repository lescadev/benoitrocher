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
              <h1 class="titre">
                <div class="logo">
                <a href="Accueil.blade.php">Ben Roc</a>
              </div>
              </h1>
        
              <nav>
                <a href="Accueil.blade.php">Accueil</a>
                <br>
                <a href="photo.html">Photos</a>
                <br>
                <a href="prestations.html">Prestations</a>
                <br>
                <a href="contact.blade.php">Contact</a>
              </nav>
            </header>
      </div>
       
      @yield('content')

        <!-- Footer -->
        <footer>
          <div class="detail">
              <a href="mentions.blade.php">Mentions légales</a>
              <p>- Tous droits Réservé - 2019</p>
          </div>

        </footer>

      </div>

      <script src="/js/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="/js/sliderpoo.js"></script>

  </body>
</html>