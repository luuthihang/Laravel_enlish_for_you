@extends('layout')
@section('content')
       <style>
      .TitleItems_vc{
        margin-top:20px;
        margin-bottom: 20px;
      }
      .TitleItems_vc .card-text{
        
        font-size: 18px;
        color: #726a84;
      }
      .TitleItems_vc .card-title{
        font-size: 24px;

      }
      .TitleItems_vc .card{
        margin-right:-20px;
         border: 1px #28a745 solid;
      }

    
.card:hover{
  /*box-shadow: -1px 9px 40px -12px rgba(0,0,0,0.75);*/
  box-shadow: 0 20px 50px rgba(0,0,0,0.8);
}

 .content_title{
    width:100%;
    height: 40px;
    font-size:25px;
    border: 1px #dc3545 solid;
    
  }

    </style>
    <?php 
    $level=10;$i=0;
      // if(isset($id_vc)){
      //   echo "<pre>";
      //   print_r($id_vc);
      //   echo "</pre>";
      // }else{
      //   echo "loi";
      // }
      ?>
	    <div class="container">
        <div class="row">
          <div class="content_title">
            <span style="color:#e83e8c;float:left;">Bài Học</span>
            <span style="float:right;">{{$level}} Level</span>
          </div>
       

          @foreach($nametopic as $key=> $getIdVc)
           <?php $i++;  ?>
          @if($i==1||$i%4==1)
             <div class="row TitleItems_vc">
          @endif
           <div class="col-md-3">
            <div class="card"> <!-- style="width:18rem;" -->
              <img src="{{('../public/frontend/images/titleItem.jpg')}}" alt="" class="card-img-top" style="width:150px;margin:10px auto;">
              <div class="card-body">
                <h5 style="color:blue;" class="card-title text-center title-Grammar">{{$getIdVc}}</h5>
                <p class="card-text">{{$getIdVc}}</p>
                <a href="{{URL::to('/vocabulary-items',$key)}}" class="btn btn-primary">Learn More</a>
              </div>
            </div>
          </div>
           @if($i%4==0)
             </div>  
          @endif
          @endforeach
      
         
      </div>
    </div>
@endsection