@extends('layout')
@section('content')
<div class="row">
  <div class="container p-3 my-3">
    <div class="thumbnail">
      <h3>Tổng hợp các bộ từ vựng tiếng anh miễn phí !. Từ vựng theo chủ đề.</h3>
    </div>
</div>
</div>

<div class="VocaburalyTitle">
    <div class="container container_VcT">
      @foreach($categor_vocabulary as $C_voca)
      <div class="cardVcT cardVcT1">
        <div class="face face1">
          <div class="content">
            <img src="{{('public/frontend/images/hoa5.jpg')}}">
           <!--  <h3>Design</h3> -->
          </div>
        </div>
        <div class="face face2">
          <div class="content c1">
            <div class="eyes">
              <i class="fa fa-eye" style="font-size:20px"></i>
           </div>
            <h3>{{$C_voca->CV_title}}</h3>
            <p>{{$C_voca->CV_content}}</p>
            <a href="{{URL::to('/vocabulary-popular',$C_voca->id)}}">read more</a>
          </div>
        </div>
      </div>
      @endforeach

      

    </div>
  </div>

  @endsection