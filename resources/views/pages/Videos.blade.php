@extends('layout')
@section('content')
<?php

$i=0;

?>
@foreach($get_video as $key =>$value)
@if($i%3==0)
<div class="">
<div class="row">
@endif
	<div class="col-md-4">
		<iframe controls=0 width="390" height="300" src="https://www.youtube.com/embed/{{$value->id_video}}" frameborder="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
		</iframe>
	</div>
@if($i>0 && $i%3==2)
</div>
@endif
<?php $i++; ?>
@endforeach
</div>
<div class="row">{{$get_video->links()}}</div>

 @endsection