<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Menu</title>

  <?php include('./styles.php') ?>
  <style>
    .backdrop {
      background-color: #0d47a1;
    }
  </style>

</head>

<?php include('./nav.php'); ?>

<body>


  <div class="row container">

    <div class="col s12 ">

      <div class="carousel carousel-slider center" style="min-height:250px">
        <div class="carousel-fixed-item center">

        </div>
        <div class="carousel-item white-text">
          <img src="./img/carrusel/1.jpg" width="100%">
          <p class="white-text"></p>
        </div>
        <div class="carousel-item amber white-text">
          <img src="./img/carrusel/2.jpg" width="100%">
          <p class="white-text"></p>
        </div>
        <div class="carousel-item green white-text">
          <img src="./img/carrusel/3.jpg" width="100%">
          <p class="white-text"></p>
        </div>
        <div class="carousel-item blue white-text">
          <img src="./img/carrusel/4.jpg" width="100%">
          <p class="white-text"></p>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col s8 offset-s2">
      <div class="card-panel" style="min-height:370px">
        <div class="col s4">
          <div class="card-panel">

            <p align="Justify"><img src="./img/logos/registro.png" align="left" style="height:120px;width:120px;">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            <br>
            <p align="center"><a href="./form_registro.php" class="waves-effect waves-light btn cyan"><i class="material-icons left">account_circle</i>¡Registrame ahora!</a>
            </p>

          </div>
        </div>

        <div class="col s4">
          <div class="card-panel">

            <p align="Justify"><img src="./img/logos/equipo.png" align="left" style="height:120px;width:120px;">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            <br>
            <p align="center"><a href="./form_prestamo.php" class="waves-effect waves-light btn orange"><i class="material-icons left">computer</i>Solicitar Servicios</a>

          </div>
        </div>

        <div class="col s4">
          <div class="card-panel">

            <p align="Justify"><img src="./img/logos/noticias.png" align="left" style="height:120px;width:120px;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
            </p>


            <br><a href="./form_contacto.php" style="width:100%" class="waves-effect waves-light btn pink"><i class="material-icons left">mail</i>Buzón</a>


          </div>
        </div>
      </div>
    </div>
  </div>



  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

  <script type="text/javascript" src="assets/js/materialize.js"></script>

  <script type="text/javascript">
    $(".brand-logo").sideNav();
  </script>
  <script>
    $('.carousel.carousel-slider').carousel({
      fullWidth: true,
      indicators: true
    });
  </script>

  <script>
    $(document).ready(function)
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.sidenav');
      var instances = M.Sidenav.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function() {
      $('.sidenav').sidenav();
    });
  </script>

</body>

</html>