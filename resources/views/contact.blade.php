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
        <!-- Formulaire -->
        <div class="formulaire">
          <div class="firstcolumn">
          <div class="nom">
            <label for="usr">Nom: </label><br>
          <input type="text" name="nom" value=""> <br> <br> <br>
          </div>
          <div class="prenom">
            <label for="usr">Prénom: </label><br>
          <input type="text" name="prenom" value=""> <br> <br> <br>
          </div>
          <div class="email">
            <label for="usr">E-mail: </label><br>
          <input type="text" name="email" value=""> <br> <br> <br>
          </div>
          <div class="objet">
            <label for="usr">Objet: </label><br>
          <input type="text" name="objet" value=""> <br> <br> <br>
          </div>
          </div>
          <div class="message">
            <label class="msg" id="usr" for="usr">Message:&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <textarea id="usr" type="text" name="message" value=""></textarea>
          </div>
        </div>
        <div class="boutonenvoyer">
          <button type="button">Envoyer</button>
        </div>


         <!-- Footer -->
        <footer>
          <div class="detail">

            <div class="mention">
              <a href="mentions.blade.php">Mentions légales</a>
            </div>

            <div class="info">
              <p>06.99.59.75.02 - benoit.roc@gmail.com - <a href="https://www.facebook.com/benroc.photographe" target="_blank">facebook</a></p>
              <p>Tous droits Réservé - 2019</p>
            </div>

          </div>

        </footer>

      </div> 
    
      <script src="/js/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="/js/sliderpoo.js"></script>

  </body>
</html>