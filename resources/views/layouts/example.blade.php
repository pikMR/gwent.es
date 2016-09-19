<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/foundation.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush|Amatic+SC|Bungee|Cinzel|Cinzel+Decorative|Cormorant+SC|Galada|Gloria+Hallelujah|IM+Fell+English+SC|Passion+One|Permanent+Marker|Racing+Sans+One|Rock+Salt" rel="stylesheet">
    <script src="{{ URL::asset('http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/mosaic.css') }}" type="text/css" media="screen" />
    <script type="text/javascript" src="{{ URL::asset('assets/js/mosaic.1.0.1.js') }}"></script>
    <script src="{{ URL::asset('assets/js/modernizr.custom.63321.js') }}"></script>
    <title> @yield('title','GWENT en español') </title>
    <script type="text/javascript">

			jQuery(
        function($){
  				$('.bar').mosaic(
            {
      				animation	:	'slide'
    			  }
          );
        }
      );
		</script>
  </head>
  <body>

  <div class="row">
    <div class="small-12 columns blanco box box--auto flex-blanco">
    <img src="{{ URL::asset('assets/img/portada.jpg') }}" class="responsive-image">
    <div class='columns facciones flex-gris'>
    @yield('content')
    </div>
  </div>
      <form method="get" id="form_consulta" action="" class="small-12 azul form-relleno">
          <div class='small-12 form-text'>
            <input type="text" name="location" class='small-10'/>
            <input type="button" id="btnClick" value="Búsqueda" class="envio small-2"></input>
          </div>
          <div class="small-12 form-cuadros"  >
          <a href="{{ URL::asset('query/all')}}" class="button round cuadros-up">Todas las Cartas</a>
          <a href="{{ URL::asset('query/type/3') }}" class="button round cuadros-up">Tropas</a>
          <a href="{{ URL::asset('query/less') }}" class="button round cuadros-up"> MENOR de 4 en Defensa </a>
          <a href="{{ URL::asset('query/beetwen') }}" class="button round cuadros-center"> ENTRE 4 y 8 en Defensa </a>
          <a href="{{ URL::asset('query/higher') }}" class="button round cuadros-center"> MAYOR DE 8 en Defensa </a>
          <a href="{{ URL::asset('query/type/2') }}" class="button round cuadros-center">Lideres</a>
          <a href="{{ URL::asset('query/type/5') }}" class="button round cuadros-center">Héroes</a>
          <a href="{{ URL::asset('query/row/1') }}" class="button round cuadros-bot">Hilera Cuerpo a Cuerpo</a>
          <a href="{{ URL::asset('query/row/2') }}" class="button round cuadros-bot">Hilera Arqueros</a>
          <a href="{{ URL::asset('query/row/3') }}" class="button round cuadros-bot">Hilera Catapultas</a>
        </div>
       </form>

      <div class="facciones">
       <h1 class='rojo' style="font-family:'IM Fell English SC'; margin-top:100px;"> Facciones </h1>
        <div class="row separacion-font">
          <div class="small-6 medium-2 columns  box box--auto">

              <a href='{{ URL::asset('facciones/2/fotos/1') }}' target="_self"><div class="img-faccion"><img src={{ URL::asset('assets/img/norte.jpg') }}>

              </div></a>
          </div>
          <div class="small-6 medium-2 columns  box box--auto">
              <a href='{{ URL::asset('facciones/3/fotos/1') }}' target="_self"><div class="img-faccion"><img src={{ URL::asset('assets/img/scoitall.jpg') }}></div></a>

          </div>
          <div class="small-6 medium-2 columns  box box--auto">
            <a href='{{ URL::asset('facciones/5/fotos/1') }}' target="_self"><div class="img-faccion"><img src={{ URL::asset('assets/img/skell.jpg') }}></div></a>

          </div>
          <div class="small-6 medium-2 columns  box box--auto">
            <a href='{{ URL::asset('facciones/4/fotos/1') }}' target="_self"><div class="img-faccion"><img src={{ URL::asset('assets/img/monster.jpg') }}></div></a>

          </div>
          <div class="small-12 medium-2 columns  box box--auto">
            <a href='{{ URL::asset('facciones/1/fotos/1') }}' target="_self"><div class="img-faccion"><img src={{ URL::asset('assets/img/neutral.png') }}></div></a>
          </div>
        </div>
    </div>

      @if(isset($array_random))
        <div class="facciones">
          <h1 class='rojo' style="font-family:'IM Fell English SC';"> Selección Aleatoria </h1>
          <div class="row small-12 separacion-font red">
          @include('includes.demo')
          </div>
        </div>
      @endif

    @section('footer')

              <h4 class="negro">Disclaimer: The textual information and all images presented through this API about GWENT®: The Witcher Card Game is copyrighted by <strong style='color:red'>CD Projekt RED</strong>.
              </br>The Witcher®, GWENT® are a TM and copyright of <strong style='color:red'>CD PROJEKT</strong> Capital Group. All rights reserved. All art is property of their respective artists and/or <strong style='color:red'>CD PROJEKT</strong> Capital Group. </br>This site is not produced, affiliated or endorsed by <strong style='color:red'>CD PROJEKT Capital Group</strong>.
              </h4>


              <div class="menu-foo">
                <div class="menu-text">
                    <iv
                    <div id="enlaces">Sitios Relacionados : <a href="http://gwentify.com/">GWENTIFY</a><span>|</span><a href="http://www.gwentdb.com/">GWENTDB</a><div id="enlaces">
                <a href="https://exo.do/topic/25052/plataforma-gwent-juego-de-cartas-de-the-witcher-3-go-beta">[NUESTRA COMUNIDAD]</a></div>
                    </div>
                <div id="descripcion">This site use <a href="https://gwentapi.com/">https://gwentapi.com/</a> ! :P</div>
              </div>

            </div>

	<div id="fusionads"><a target="_blank" href="https://exo.do/topic/25052/plataforma-gwent-juego-de-cartas-de-the-witcher-3-go-beta/6"><img src="{{ URL::asset('assets/img/exodo.jpg') }}"></a><div style="max-width:50px;"><a target="_blank" href="https://exo.do/topic/25052/plataforma-gwent-juego-de-cartas-de-the-witcher-3-go-beta/6">ÚNETE A NUESTRA COMUNIDAD</a></div></div>
	<!-- ads -->
  <script src="{{ URL::asset('assets/js/fusionad.js') }}"></script>
   <script src="{{ URL::asset('assets/js/vendor/jquery.js') }}"></script>
  <script src="{{ URL::asset('assets/js/vendor/what-input.js') }}"></script>
  <script src="{{ URL::asset('assets/js/vendor/foundation.js') }}"></script>
  <script src="{{ URL::asset('assets/js/app.js') }}"></script>
  <script src="{{ URL::asset('assets/js/jquery.catslider.js') }}"></script>
    <script>
			$(function() {

				$( '#mi-slider' ).catslider();

			});
		</script>

  </body>
</html>
