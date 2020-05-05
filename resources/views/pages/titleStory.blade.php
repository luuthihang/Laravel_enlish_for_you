@extends('layout')
@section('content')
	<?php
	$story;
	$i=0;
	?>
	<div class="list_story">
		@foreach($story as $key=>$value)
		@if($i%3==0)
	 <div class="row">
		<ul>
			@endif
			<li>
				<div class="imagesBox">
					<figure>
						<img style="height:237px;" src="./public/frontend/images/{{($value->image1)}}">
						<figcaption>
							<h1>{{($value->title_en)}}</h1>
							<p>{{($value->title_vn)}}</p>
							<a href="{{route('story',$value->id)}}">read more</a>

						</figcaption>
					</figure>
				</div>
			</li>
		@if($i>0 && $i%3==2)
		</ul>
	 </div>
	 @endif
	 <?php $i++; ?>
	 @endforeach
	</div>
	
 @endsection