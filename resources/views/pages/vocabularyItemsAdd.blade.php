@extends('layout')
@section('content')

<style>
.card-imga {
    width: 100px;
    text-align: center;
    align-items: center;
    margin-right: 20px;
    margin-left: 272px;
    position: absolute;
    top: 6px;
}

.addCardVc{
   font-size: 20px;
   border: 1px black solid;

}
.btn_addVc{
  position: relative;
  left: 300px;
}

.contentCardAdd ul .lang-en,.lang-vn{
  list-style-type:circle;
}

.contentCardAdd .lang-en{
  color: blue;
}
</style>


<?php  
   // foreach($vocabulary1 as $VocaInfo){
   //                 // echo var_dump($Voca->vocabulary_content);
   //  $SumaryResult= json_decode($VocaInfo->vocabulary_content);

   //                  // var_dump($SumaryResult);
   //                  // echo $SumaryResult->id;

   //                  //  echo "<pre>";
   //                  // print_r($SumaryResult->list[0]->word->example) ;
   //                  //  echo "</pre>";


   //   echo "<pre>";
   //     echo($SumaryResult->list[0]->word->word).": ";
   //      print_r($SumaryResult->list[0]->word->pronounce[0]);
   //    print_r($SumaryResult->list[0]->mean) ;
   //   echo "</pre>";

   //  $lists_vc=$SumaryResult->list;
    
   // // foreach($lists_vc as $result){
   // //     $ex=$result->word;
   // //     // $arrayEx=$ex->example;  sai vi bien co the rong
   // //      if(!empty($ex->example)){
   // //        $arrayEx=$ex->example;
   // //        foreach ($arrayEx as $arrayExItem) {
   // //          print_r($arrayExItem[0]);
   // //          print_r($arrayExItem[1]);
   // //        }
   // //      }
   // //   }

   // }
   ?>

<div class="card-columns">
  @foreach($vocabulary1 as $VocaInfo)
  <?php 
      $SumaryResult= json_decode($VocaInfo->vocabulary_content);
    ?>
      @foreach ($SumaryResult->list as $value) 
      <?php
        $wordItem=$value->yword;
         $mean= $value->mean;
         // $pronounce=$value->word;
          // $wordItem=$SumaryResult->list[0]->word->word;
         if(!empty($value->word->pronounce)){
            $pronounce=$value->word->pronounce[0];
         }
         
      ?>
   <div class="card addCardVc">
      <img class="card-img-top text-right card-imga" src="{{('public/frontend/images/hoabk1.jpg')}}" style="width:100px;"  alt="">
      <div class="card-body">
         <p class="card-text">
             <span style="color:red; font-weight: 555; font-size: 2rem; font-family: Cabin,sans-serif;"class="key-word"><i style="font-size:20px;padding-right:2px;" class="fa">&#xf0d7;</i><?php echo $wordItem;  ?></span>
           <span class="pronouncce-word"><?php echo "/". $pronounce."/" ; ?></span>
           <div class="list-audio" style="padding-top: inherit">
            <span style='padding-right:2px'>
               <button style='font-size:12px;color:green'>US <i class='fas fa-volume-up'></i>
               </button>
            </span>
               <button style='font-size:12px;color:green'>UK <i class='fas fa-volume-up'></i>
               </button>
           </div>
         
           <div style="padding-top: inherit" class="w-mean">
           <i style="color:green"class="far fa-dot-circle"></i>
            {{$mean}}
          </div>
          <span class="btn_addVc">
            <button style="font-size:18px"><i class="fa fa-bars"></i></button>
         </span>
         <div class="contentCardAdd">
            <ul style="list-style-type:circle;">
              @if(!empty($value->word->example))
                 @foreach ($value->word->example as $arrayExs) 
                 <?php  
                     $x1=$arrayExs[0];
                     $x2=$arrayExs[1];
                 ?>
               <li class="lang-en"><?php echo $x1;  ?></li>
               <li class="lang-vn"><?php echo $x2;  ?></li>
                @endforeach
                @endif
            </ul>
         </div>
         </p>
      </div>
   </div>
  @endforeach
  @endforeach

  
    <!-- <div class="card addCardVc">
      <img class="card-img-top text-right card-imga" src="{{('public/frontend/images/hoabk1.jpg')}}" style="width:100px;"  alt="">
      <div class="card-body">
         <p class="card-text">
             <span style="color:red; font-weight: 555; font-size: 2rem; font-family: Cabin,sans-serif;"class="key-word"><i style="font-size:20px;padding-right:2px;" class="fa">&#xf0d7;</i>interview:</span>
           <span class="pronouncce-word">/intəvju:/</span>
           <div class="list-audio" style="padding-top: inherit">
            <span style='padding-right:2px'>
               <button style='font-size:12px;color:green'>US <i class='fas fa-volume-up'></i>
               </button>
            </span>
               <button style='font-size:12px;color:green'>UK <i class='fas fa-volume-up'></i>
               </button>
           </div>
         
           <div style="padding-top: inherit" class="w-mean">
           <i style="color:green"class="far fa-dot-circle"></i>
            (thường số nhiều) lương (thường trả hằng tuần), tiến hành, 
          </div>
          <span class="btn_addVc">
            <button style="font-size:18px"><i class="fa fa-bars"></i></button>
         </span>
         <div class="contentCardAdd">
            <ul  style=" width:auto;height:auto;">
               <li>can you swim across?</li>
               <li>Anh bơi qua được không?</li>
                <li>can you swim across?</li>
               <li>Anh bơi qua được không?</li>
                <li>can you swim across?</li>
               <li>Anh bơi qua được không?</li>
            </ul>
         </div>
         </p>
      </div>
   </div> -->
   <!--<script src="//code.jquery.com/jquery-3.4.1.min.js"></script>-->

</div>






 @endsection