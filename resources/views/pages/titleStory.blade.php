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
						<img src="./public/frontend/images/hoa6.jpg">
						<figcaption>
							<h1>Vegetables Vocabulary</h1>
							<p>One type of food that </p>
							<a href="{{URL::to('story',$value->id)}}">read more</a>

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