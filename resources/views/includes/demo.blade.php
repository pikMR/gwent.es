<div class="main">
<div id="mi-slider" class="mi-slider">
			<ul>

				@for($i=0; $i < count($array_random[0]); $i++)
						<li>
							<a href="#">
									<img src='{{ URL::asset('assets/img/media/' . $array_random[0][$i]->filename) }}' alt="img0{{$i+1}}">
										<h4>{{$array_random[0][$i]->name}}</h4>
							</a>
						</li>
				@endfor
			</ul>
			<ul>
				@for($i=0; $i < count($array_random[1]); $i++)
					<li>
						<a href="#">
								<img src='{{ URL::asset('assets/img/media/' . $array_random[1][$i]->filename) }}' alt="img0{{$i+1}}">
									<h4>{{$array_random[1][$i]->name}}</h4>
						</a>
					</li>
				@endfor
			</ul>
			<ul>
				@for($i=0; $i < count($array_random[2]); $i++)
					<li>
						<a href="#">
								<img src='{{ URL::asset('assets/img/media/' . $array_random[2][$i]->filename) }}' alt="img0{{$i+1}}">
									<h4>{{$array_random[2][$i]->name}}</h4>
						</a>
					</li>
				@endfor
			</ul>
			<ul>
				@for($i=0; $i < count($array_random[3]); $i++)
					<li>
						<a href="#">
								<img src='{{ URL::asset('assets/img/media/' . $array_random[3][$i]->filename) }}' alt="img0{{$i+1}}">
									<h4>{{$array_random[3][$i]->name}}</h4>
						</a>
					</li>
				@endfor
			</ul>
					<nav>
						<a href="#">COMÚN</a>
						<a href="#">ÉPICO</a>
						<a href="#">LEGENDARIO</a>
						<a href="#">RARO</a>
					</nav>
</div></div>
