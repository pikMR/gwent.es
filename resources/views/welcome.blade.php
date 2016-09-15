<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Plantilla</title>
    <link rel="stylesheet" href="assets/css/foundation.css">
    <link rel="stylesheet" href="assets/css/app.css">
      <link rel="stylesheet" href="assets/css/style.css">

    <script src="assets/js/modernizr.custom.63321.js"></script>
  </head>
  <body>
    <!--div class="row">
      <div class="large-4 row">
        <h1>Welcome to Foundation</h1>
      </div>
    </div>
      generar en EMMET!
      .row>.small-1*12>{Mens}
    -->
  <div class="row">
        <?php

            if(!empty($_GET['location'])){
              echo "<div class='small-12 columns gris box box--auto flex-gris'>";
            /*
              ----------------- USANDO JSON PARA SACAR DATOS
              include "../resources/views/includes/data.php";
              $datos = new Data();
              $maps_url = 'https://api.gwentapi.com/v0/' . $_GET['location'];

              $maps_json = file_get_contents($maps_url);
              $maps_array = json_decode($maps_json,true);

                    foreach ($maps_array['results'] as $k2 => $v2){

                      if(is_array($v2)){
                        $nombre = $v2['name'];
                        $foto = $datos->getImg($v2['href']);
                        echo "<div class='cuadro'>
                        <img src='$foto'>'<p class='limit-min'>$nombre</p></div>";
                      }

                    }
              ------------------------------------------------
              USANDO MYSQL:
              */

            }else{
              ?>
              <div class="small-12 columns blanco box box--auto flex-blanco">
              <img src="assets/img/portada.jpg" class="responsive-image">
              <?php
            }
        ?>

    </div>
  </div>
  <div class="row">
    <div class="small-12 columns azul box box--large">
      <!-- PHP HERE -->

      <form action="" class="flex-azul">
          <input type="text" name="location"/>
          <button type="submit" class="envio">enviar</button>
       </form>

      <!-- FIN PHP -->
    </div>
  </div>

  <div class="row">
    <div class="small-6 medium-2 columns  box box--auto">
        <a href='facciones/1/fotos/1' target="_self"><img src=assets/img/norte.jpg></a>
    </div>
    <div class="small-6 medium-2 columns  box box--auto">
          <a href='facciones/2/fotos/1' target="_self"><img src=assets/img/scoitall.jpg></a>
    </div>
    <div class="small-6 medium-2 columns  box box--auto">
          <a href='facciones/3/fotos/1' target="_self"><img src=assets/img/skell.jpg></a>
    </div>
    <div class="small-6 medium-2 columns  box box--auto">
        <a href='facciones/4/fotos/1' target="_self"><img src=assets/img/monster.jpg></a>
    </div>
    <div class="small-12 medium-2 columns  box box--auto">
        <a href='facciones/5/fotos/1' target="_self"><img src=assets/img/neutral.png></a>
    </div>

  </div>
  <div class="row">
    <div class="small-12 columns box box--auto">
        @include('includes/demo')
    </div>
  </div>
  <div class="row">
    <div class="small-12 columns gris box box--medium">FILA 5</div>
  </div>
  @yield('content');
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/vendor/what-input.js"></script>
    <script src="assets/js/vendor/foundation.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="assets/js/jquery.catslider.js"></script>
    <script>
			$(function() {

				$( '#mi-slider' ).catslider();

			});
		</script>
  </body>
</html>
