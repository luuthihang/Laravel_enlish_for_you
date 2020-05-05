@extends('layout')
@section('content')
<style>
/*.card-columns {
   
   
    column-count: 3;
   
   
    column-gap: 1.25rem;
    orphans: 1;
    widows: 1;
}


.card-columns .card {
    display: inline-block;
    width: 100%;
}

.card-columns .card {
    margin-bottom: .75rem;
}
.text-center {
    text-align: center!important;
}
.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
}*/
</style>


  <div class="card-columns">
    @foreach($category_video as $key => $value)
   <div class="card">
      <img class="card-img-top" src="public/frontend/images/{{($value->image)}}" style="width:100%;height:213px;" alt="">
      <div class="card-body">
         <h5 class="card-title text-center">{{$value->title}}</h5>
         <p class="card-text text-center">
            {{$value->description}}
         </p>
          <a href="{{route('showvideos',$value->id)}}" class="btn btn-primary">Learn More</a>
      </div>
   </div>

   
   
   <!-- <div class="card">
      <img class="card-img-top" src="{{('public/frontend/images/hoabk1.jpg')}}" style="width:100%;" alt="">
      <div class="card-body">
         <h5 class="card-title">Card title</h5>
         <p class="card-text">
            This card has supporting text below as a natural lead-in to additional content.
         </p>
         <p class="card-text">
            <small class="text-muted">Last updated 3 mins ago</small>
         </p>
      </div>
   </div> -->
  
   
  
   
   @endforeach
</div>
       @endsection