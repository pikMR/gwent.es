
@extends('layouts.example')
@section('title')

    <?php
            if(isset($n_faccion)){
              echo "FACCIÓN - " . config('options.facciones')[$n_faccion];
            }
            if(isset($tipo)){
              echo "TIPO - " . config('options.tipo')[$tipo];
            }
            if(isset($fila)){
              echo "FILA - " . config('options.fila')[$fila];
            }
            ?>
@stop
<?php
$array_random = session()->all();
?>
   <style>
     .details{ margin:15px 20px; }
       h5{ font:300 16px 'Helvetica Neue', Helvetica, Arial, sans-serif; line-height:160%; letter-spacing:0.15em; color:#fff; text-shadow:1px 1px 0 rgb(0,0,0); }
       p{ font:300 12px 'Lucida Grande', Tahoma, Verdana, sans-serif; color:#aaa; text-shadow:1px 1px 0 rgb(0,0,0);}
       a{ text-decoration:none; }
  </style>
@section('content')
  <!--<div class="mosaic-block bar">
			<a href="http://buildinternet.com/project/mosaic" target="_blank" class="mosaic-overlay">
				<div class="details">
					<h4>Mosaic - Sliding Boxes and Captions jQuery Plugin</h4>
					<p>by Build Internet</p>
				</div>
			</a>
			<div class="mosaic-backdrop"><img src="http://buildinternet.s3.amazonaws.com/projects/mosaic/mosaic.jpg"/></div>
		</div-->
  @foreach ($data as $obj)
        <div class='mosaic-block bar'>

            	<a href="#" target="_blank" class="mosaic-overlay">
                <div class="details">
                  <h5 style='font-family:Cinzel'>{{$obj->name}}</h5>
        					<!--p>$obj->text</p-->
        				</div>
              </a>
              <span data-tooltip aria-haspopup="true" class="has-tip right img-degradado mosaic-backdrop" data-disable-hover="false" tabindex="3" title="{{$obj->text}}">
                  <img src='<?php echo url('/assets/img/media'); echo "/" . $obj->filename; ?>'>
              </span>


          <!-- salida categoria -->

      </div>
  @endforeach
@stop
@section('footer')
@stop
