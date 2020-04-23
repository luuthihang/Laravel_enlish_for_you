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
            <h3>Từ vựng tiếng anh thông dụng</h3>
            <p>Tổng hợp các bộ Từ vựng tiếng anh thông dụng nhất. Khi học được những bộ từ này chúng sẽ giúp bạn tăng khả năng giao tiếp tiếng anh đáng kể đó nhé !</p>
            <a href="{{URL::to('/vocabulary-popular')}}">read more</a>
          </div>
        </div>
      </div>
      <div class="cardVcT cardVcT1">
        <div class="face face1">
          <div class="content">
            <img src="{{('public/frontend/images/hoa5.jpg')}}">
            <!-- <h3>Design</h3> -->
          </div>
        </div>
        <div class="face face2">
          <div class="content">
             <div class="eyes">
              <i class="fa fa-eye" style="font-size:20px"></i>
           </div>
           <h3>Từ vựng tiếng anh theo chủ đề</h3>
            <p>Tổng hợp những bộ Từ vựng tiếng anh theo chủ đề như từ vựng giao tiếp, từ vựng về nghề nghiệp, gia đình, quần áo, thời tiết và nhiều chủ đề từ vựng rất hay trong cuộc sống.</p>
            <a href="#">read more</a>
          </div>
        </div>
      </div>

      <div class="cardVcT cardVcT1">
        <div class="face face1">
          <div class="content">
            <img src="{{('public/frontend/images/hoa5.jpg')}}">
           <!--  <h3>Design</h3> -->
          </div>
        </div>
        <div class="face face2">
          <div class="content">
             <div class="eyes">
              <i class="fa fa-eye" style="font-size:20px"></i>
           </div>
            <h3>Sách tiếng anh tham khảo</h3>
            <p>Tổng hợp những loại Sách tiếng anh về từ vựng và các loại sách giáo khoa (SGK), sách tiếng anh mới và hay nhất,giúp nhớ từ lâu hơn qua các tình huống trong sách!</p>
            <a href="#">read more</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection