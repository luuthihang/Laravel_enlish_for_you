
@extends('layout')
@section('content')
  <style>
      .row1{
      margin-top:20px;
     font-family: "Comic Sans MS", cursive, sans-serif;
     font-size: 15px;
     padding-bottom: 10px;
    }
    .row1 .title-Grammar{
      font-size: 20px;
    }

.card:hover{
  /*box-shadow: -1px 9px 40px -12px rgba(0,0,0,0.75);*/
  box-shadow: 0 20px 50px rgba(0,0,0,0.8);

}


    .container .cardTG {
    position: relative;
    border: 1px #dad6d6 solid;
    padding: 9px;



  
   
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
    font-family: "montserrat";
    box-sizing: border-box;
    /*padding: 28px;*/
    }
    </style>
	   <!--  <div class="container"> -->
        <div class="row row1"> <!-- row -->
          <div class="col-md-4 hoverAnimate">
          <div class="card cardTG"> <!-- style="width:18rem;" -->
            <img style="width:350px;" src="public/frontend/images/hoa5.jpg" alt="" class="card-img-top" style="">
            <div class="card-body">
              <h5 class="card-title text-center title-Grammar">1. Thì hiện tại đơn –  Present simple</h5>
              <p class="card-text">Thì hiện tại đơn (Simple Present hoặc Present Simple) là một thì trong ngữ pháp tiếng Anh nói chung. Thì hiện tại đơn diễn tả một hành động hay sự việc .</p>
              <a href="" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>

          <div class="col-md-4 hoverAnimate">
          <div class="card cardTG"> <!-- style="width:18rem;" -->
            <img style="width:350px;" src="public/frontend/images/hoa5.jpg" alt="" class="card-img-top" style="">
            <div class="card-body">
              <h5 class="card-title text-center title-Grammar">1. Thì hiện tại đơn –  Present simple</h5>
              <p class="card-text">Thì hiện tại đơn (Simple Present hoặc Present Simple) là một thì trong ngữ pháp tiếng Anh nói chung. Thì hiện tại đơn diễn tả một hành động hay sự việc .</p>
              <a href="" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 hoverAnimate">
          <div class="card cardTG"> <!-- style="width:18rem;" -->
            <img style="width:350px;" src="public/frontend/images/hoa5.jpg" alt="" class="card-img-top" style="">
            <div class="card-body">
              <h5 class="card-title text-center title-Grammar">1. Thì hiện tại đơn –  Present simple</h5>
              <p class="card-text">Thì hiện tại đơn (Simple Present hoặc Present Simple) là một thì trong ngữ pháp tiếng Anh nói chung. Thì hiện tại đơn diễn tả một hành động hay sự việc .</p>
              <a href="" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        </div>  


        <div class="row row1"> <!-- row -->
          <div class="col-md-4 hoverAnimate">
          <div class="card cardTG"> <!-- style="width:18rem;" -->
            <img style="width:350px;" src="public/frontend/images/hoa5.jpg" alt="" class="card-img-top" style="">
            <div class="card-body">
              <h5 class="card-title text-center title-Grammar">1. Thì hiện tại đơn –  Present simple</h5>
              <p class="card-text">Thì hiện tại đơn (Simple Present hoặc Present Simple) là một thì trong ngữ pháp tiếng Anh nói chung. Thì hiện tại đơn diễn tả một hành động hay sự việc .</p>
              <a href="" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>

          <div class="col-md-4 hoverAnimate">
          <div class="card cardTG"> <!-- style="width:18rem;" -->
            <img style="width:350px;" src="public/frontend/images/hoa5.jpg" alt="" class="card-img-top" style="">
            <div class="card-body">
              <h5 class="card-title text-center title-Grammar">1. Thì hiện tại đơn –  Present simple</h5>
              <p class="card-text">Thì hiện tại đơn (Simple Present hoặc Present Simple) là một thì trong ngữ pháp tiếng Anh nói chung. Thì hiện tại đơn diễn tả một hành động hay sự việc .</p>
              <a href="" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 hoverAnimate">
          <div class="card cardTG"> <!-- style="width:18rem;" -->
            <img style="width:350px;" src="public/frontend/images/hoa5.jpg" alt="" class="card-img-top" style="">
            <div class="card-body">
              <h5 class="card-title text-center title-Grammar">1. Thì hiện tại đơn –  Present simple</h5>
              <p class="card-text">Thì hiện tại đơn (Simple Present hoặc Present Simple) là một thì trong ngữ pháp tiếng Anh nói chung. Thì hiện tại đơn diễn tả một hành động hay sự việc .</p>
              <a href="" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        </div>  
     <!--  </div> -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <script>
      $(document).ready(function(){
        $(".hoverAnimate").hover(
          function(){
            $(this).animate({
                marginTop:"-=1%",
            },200);
          },

           function(){
            $(this).animate({
                marginTop:"0%",
            },200);
          }


          );
      });
    </script>

     @endsection