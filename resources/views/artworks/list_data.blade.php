

@extends('layouts.example')

@section('title')

    <?php
            if(isset($n_faccion)){
              echo "FACCIÓN - " . config('options.facciones')[$n_faccion];
            }else if(isset($tipo)){
              echo "TIPO - " . config('options.tipo')[$tipo];
            }else if(isset($fila)){
              echo "FILA - " . config('options.fila')[$fila];
            }else if(isset($id)){
              echo "CARTA - " . $data['0']->name;
            }
            ?>
@stop

<?php
/* Necesario para funcionamiento de random*/
if(!isset($array_random)){
  $array_random = session()->all();
}
?>
<!--script>
$( "a" ).click(function() {
  $('div#mosaic-block').attr('style','background-color:red');
  $('#mosaic-block').css('overflow','');
  $('#mosaic-block').remove('style');
});
</script-->

<!--Alex+Brush|Amatic+SC|Bungee|Cinzel|Cinzel+Decorative|Cormorant+SC|Galada|Gloria+Hallelujah|IM+Fell+English+SC|Passion+One|Permanent+Marker|Racing+Sans+One|Rock+Salt -->
   <style>
     .details{ margin:15px 20px; }
     .details h5{ font:150 20px; line-height:160%; letter-spacing:0.15em; color:#fff; text-shadow:1px 1px 0 rgb(0,0,0); }
      .details p{ font:150 20px; font-family: 'Cinzel';color:#aaa; text-shadow:1px 1px 0 rgb(0,0,0);}
      .details a{ font:100 18px; font-family:'Cinzel Decorative'; color:white; }
  </style>

@section('content')
  <!--div class="small-12 columns box flex-blanco"><a href="#">VER NOMBRES</a></div-->
  <!--<div class="mosaic-block bar">
			<a href="http://buildinternet.com/project/mosaic" target="_blank" class="mosaic-overlay">
				<div class="details">
					<h4>Mosaic - Sliding Boxes and Captions jQuery Plugin</h4>
					<p>by Build Internet</p>
				</div>
			</a>
			<div class="mosaic-backdrop"><img src="http://buildinternet.s3.amazonaws.com/projects/mosaic/mosaic.jpg"/></div>
		</div-->
    <!--div>
      <a href="#">VER NOMBRES</a>
    </div-->
{{--dd($data['0']->name)--}}
  @if(isset($id))
    <div class="flex-gris">
        <div class='mosaic-block-big bar'>
                <div class="details">
                  <h5 style='font-family:Cinzel'>{{$data['0']->name}}</h5>
                  <!--p>$obj->text</p-->
                </div>
              <span data-tooltip aria-haspopup="true" class="has-tip left img-degradado mosaic-backdrop" data-disable-hover="false" tabindex="3" title="{{$data['0']->text}}">
                  <img src='<?php echo url('/assets/img/media'); echo "/" . $data['0']->id . ".png" ?>'>
              </span>
          <!-- salida categoria -->
      </div>
      <div class="cuadros-center details" style="padding-left:90px;">
        <p><a>Rareza :</a> {{ config('options.rareza')[$data['0']->idRarity] }}
        </p>
        <p><a> Facción :</a> {{ config('options.facciones')[$data['0']->idFaction] }}
        </p>
        <p><a> Tipo :</a> {{ config('options.tipo')[$data['0']->idType] }}
        </p>
        <p><a> Habilidad :</a> {{ config('options.habilidad')[$data['0']->idAbility] }}
        </p>
          @if(isset($filas['1']))
            <h4 style="font-family:Cinzel">Múltiples Filas : </h4>
          @endif
          @foreach ($filas as $f)
            <p><a> Fila :</a> {{ config('options.fila')[$f->idRow] }}</p>
          @endforeach
      </div>
</div>
  @else
    @foreach ($data as $obj)
        <div class='mosaic-block bar'>
            	<a href='{{ URL::asset('card/' . $obj->idCard ) }}' target="_blank" class="mosaic-overlay">
                <div class="details">
                  <h5 style='font-family:Cinzel'>{{$obj->name}}</h5>
        					<!--p>$obj->text</p-->
        				</div>
              </a>
              <span data-tooltip aria-haspopup="true" class="has-tip right img-degradado mosaic-backdrop" data-disable-hover="false" tabindex="3" title="{{$obj->text}}">
                  <img src='<?php echo url('/assets/img/media'); echo "/" . $obj->filename ?>'>
              </span>
          <!-- salida categoria -->
      </div>
  @endforeach
@endif
@stop
@section('footer')
@stop
