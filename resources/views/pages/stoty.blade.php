@extends('layout')
@section('content')
<style>
.VocaburalyTitle h3, p, a {
   
    font-family: Courier New;
    font-size: 19px;}
</style>

<?php
//var_dump($story[0]->id);
// foreach ($story as $key => $value) {
// 	echo $value->id;
// }
?>
@foreach($story as $key => $value)
<div style="border:1px solid black;" class="container">
	<div class="row">
		<div class="col-md-3 thumbnail">
			<img style="width:250px;margin-top:60px;" src="../public/frontend/images/{{$value->image1}}"/>
		</div>
		<div class="col-md-9 thumbnail">
			<div style="padding-top:0px;margin-top:112px;width:100%;height:100px;"class="title_story">
				<h2 style="border-bottom:2px solid #e91e69;color:#e91e69; text-align:center;">{{$value->title_en}}</h2>
			</div>
		</div>
	</div>
	<hr/>
	<div class="row">
		<div class="col-md-11">
			<div class="container_story">
				<span class="en">English</span>
				<input type="checkbox" class="check">
				<span class="vn">VietNam</span>

				<div style="font-family: Cabin,sans-serif;color:black;" class="content_story contentEnglish">
					<h2>{{$value->title_en}}</h2>
					<p>T{{$value->content_en}}</p>
				</div>

				<div style="font-family:cursive" class="content_story contentVietNam">
					<h2>{{$value->title_vn}}</h2>

					<p>{{$value->content_vn}}</p>
				</div>

			</div>
		</div>
	</div>
</div>
@endforeach
  @endsection