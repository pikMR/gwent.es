<div class="main">
<div id="mi-slider" class="mi-slider">

				@for($j=0;$j<4;$j++)
					<ul>
					@for($i=0; $i < count($array_random[$j]); $i++)
						<li>
							<a href='{{ URL::asset('card/' .  $array_random[$j][$i]->idCard ) }}'>
									<img src='{{ URL::asset('assets/img/media/' . $array_random[$j][$i]->filename) }}' alt="img0{{$i+1}}">
										<h4>{{$array_random[$j][$i]->name}}</h4>
							</a>
						</li>
					@endfor
				</ul>
				@endfor
					<nav>
						<a href="#">COMÚN</a>
						<a href="#">ÉPICO</a>
						<a href="#">LEGENDARIO</a>
						<a href="#">RARO</a>
					</nav>
</div></div>
