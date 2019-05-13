<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Benoit Rocher - Accueil</title>
    <link rel="stylesheet" type="text/css" href="benoitrocher/public/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  </head>

  <body>
      <!-- Header -->
      <div class="container">
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
          <!-- Slider -->

          <div id="slider" onmouseout="slider.launchInterval()" onmouseover="slider.pause()">

            <div class="slide" style="background-image: url(benoitrocher/public/img/image.jpg)">
              <h2 class="slider-title">BENOIT ROCHER</h2>
              <p class="en-savoir-plus">PHOTOGRAPHE INDEPENDANT - MARIAGE - PORTRAIT - REPORTAGE - SAINT LEONARD DE NOBLAT</p>
            </div>

            <div class="slide" style="background-image: url(benoitrocher/public/img/2.jpg)">
              <h2 class="slider-title">BENOIT ROCHER</h2>
              <p class="en-savoir-plus">PHOTOGRAPHE INDEPENDANT - MARIAGE - PORTRAIT - REPORTAGE - SAINT LEONARD DE NOBLAT</p>
            </div>

            <div class="slide" style="background-image: url(benoitrocher/public/img/3.jpg)">
              <h2 class="slider-title">BENOIT ROCHER</h2>
              <p class="en-savoir-plus">PHOTOGRAPHE INDEPENDANT - MARIAGE - PORTRAIT - REPORTAGE - SAINT LEONARD DE NOBLAT</p>
            </div>

            <div class="slide" style="background-image: url(benoitrocher/public/img/4.jpg)">
              <h2 class="slider-title">BENOIT ROCHER</h2>
              <p class="en-savoir-plus">PHOTOGRAPHE INDEPENDANT - MARIAGE - PORTRAIT - REPORTAGE - SAINT LEONARD DE NOBLAT</p>
            </div>

            <div class="slide" style="background-image: url(benoitrocher/public/img/5.jpg)">
              <h2 class="slider-title">BENOIT ROCHER</h2>
              <p class="en-savoir-plus">PHOTOGRAPHE INDEPENDANT - MARIAGE - PORTRAIT - REPORTAGE - SAINT LEONARD DE NOBLAT</p>
            </div>

            <div class="slide" style="background-image: url(benoitrocher/public/img/6.jpg)">
              <h2 class="slider-title">BENOIT ROCHER</h2>
              <p class="en-savoir-plus">PHOTOGRAPHE INDEPENDANT - MARIAGE - PORTRAIT - REPORTAGE - SAINT LEONARD DE NOBLAT</p>
            </div>

            <div class="slide" style="background-image: url(benoitrocher/public/img/7.jpg)">
              <h2 class="slider-title">BENOIT ROCHER</h2>
              <p class="en-savoir-plus">PHOTOGRAPHE INDEPENDANT - MARIAGE - PORTRAIT - REPORTAGE - SAINT LEONARD DE NOBLAT</p>
            </div>

            <div class="slide" style="background-image: url(benoitrocher/public/img/8.jpg)">
              <h2 class="slider-title">BENOIT ROCHER</h2>
              <p class="en-savoir-plus">PHOTOGRAPHE INDEPENDANT - MARIAGE - PORTRAIT - REPORTAGE - SAINT LEONARD DE NOBLAT</p>
            </div>

              <a href="#" class="fleche fleche-gauche" onclick="slider.slidePrecedent()">&lt;</a>
              <a href="#" class="fleche fleche-droite" onclick="slider.slideSuivant()">&gt;</a>

        </div>
        <!-- Description -->
        <div class="description">

          <p class="titre_desc">Description</p>

          <div class="para1"><p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Qui, placeat fuga? Quam fugiat incidunt possimus error neque! 
            Unde molestiae id at libero ipsum voluptatibus eum, aliquam suscipit! 
            Consequuntur, cupiditate at?
          </p></div>

          <div class="para2"><p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab placeat vel eos odit! 
            Inventore perspiciatis aut quisquam deleniti fugit porro, quibusdam in et blanditiis 
            est aspernatur asperiores doloribus tenetur accusamus?
          </p></div>
        </div>
      

        <!-- Footer -->
        <footer>
          <div class="detail">

            <div class="mention">
              <a href="mentions.blade.php" target="_blank">Mentions légales</a>
            </div>

            <div class="info">
              <p>06.99.59.75.02 - benoit.roc@gmail.com - <a href="https://www.facebook.com/benroc.photographe" target="_blank">facebook</a></p>
              <p>Tous droits Réservé - 2019</p>
            </div>

          </div>

        </footer>

      </div>

      <script src="benoitrocher/resources/js/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="benoitrocher/resources/js/sliderpoo.js"></script>

  </body>
</html>