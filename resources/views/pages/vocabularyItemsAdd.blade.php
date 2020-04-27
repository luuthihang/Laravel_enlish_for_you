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
.title_level{
  width:100%;
  height: 30px;
  line-height: 30px;
  font-size: 25px;
  color:#e83e8c;
}
</style>


<?php  
//echo "<pre>";
 //print_r($vocabulary1);
  //$vc=json_decode($vocabulary1);
 // var_dump($vocabulary1);
 //var_dump($newVC);
 //print_r($vc);
//echo "</pre>";

  //foreach($vocabulary1 as $VocaInfo){
     

                   // echo var_dump($Voca->vocabulary_content);
   // $SumaryResult= json_decode($VocaInfo->vocabulary_content);

                    // var_dump($SumaryResult);
                    // echo $SumaryResult->id;

                    //  echo "<pre>";
                    // print_r($SumaryResult->list[0]->word->example) ;
                    //  echo "</pre>";


  //  echo "<pre>";
    //    echo($SumaryResult->list[0]->word->word).": ";
    //     print_r($SumaryResult->list[0]->word->pronounce[0]);
    //   print_r($SumaryResult->list[0]->mean) ;
    //  echo "</pre>";

    // $lists_vc=$SumaryResult->list;
    
   // foreach($lists_vc as $result){
   //     $ex=$result->word;
   //     // $arrayEx=$ex->example;  sai vi bien co the rong
   //      if(!empty($ex->example)){
   //        $arrayEx=$ex->example;
   //        foreach ($arrayEx as $arrayExItem) {
   //          print_r($arrayExItem[0]);
   //          print_r($arrayExItem[1]);
   //        }
   //      }
   //   }

   //}

  ?>
  <div class="title_level">
     <div style="float:left;">{{$name_title}}</div>
     <div style="float:right;">Có {{count($vocabulary1)}} từ</div>
  </div>
  <hr/>
   <div class="card-columns">

  @foreach($vocabulary1 as $VocaInfo)
  <?php 
     if(!empty($VocaInfo->image)){
      $nameimage=$VocaInfo->image->name.".".$VocaInfo->image->type;
      //echo $nameimage;
    }
    else{
      $nameimage="hoabk1.jpg";
    }

    if(isset($VocaInfo->word->pronounce)&& !empty($VocaInfo->word->pronounce)){
      $pronounce=':/'.$VocaInfo->word->pronounce[0].'/';
  } else{
    $pronounce="/hello/";
  }

  ?>
  
   <div class="card addCardVc">
      <img class="card-img-top text-right card-imga" src="../public/frontend/images/{{$nameimage}}" style="width:100px;"  alt="">
      <div class="card-body">
         <p class="card-text">
             <span style="color:red; font-weight: 555; font-size: 2rem; font-family: Cabin,sans-serif;"class="key-word">
              <i style="font-size:20px;padding-right:2px;" class="fa">&#xf0d7;</i>
              {{$VocaInfo->yword}}
             </span>
           <span class="pronouncce-word">{{$pronounce}}</span>
           <div class="list-audio" style="padding-top: inherit">
             @if(!empty($VocaInfo->word->audio))
             <?php  $i_a=0;   ?>
            @foreach($VocaInfo->word->audio as $name_audio)
            <?php 
              //echo $name_audio;  
              $arrayname=explode('/', $name_audio);
              $getNameAudio=$i_a.'_'.$arrayname[0].".mp3";
              $i_a++;
               //echo  $getNameAudio; 
            ?>
            <audio id="<?php echo $getNameAudio;  ?>">
               <source src="../public/frontend/Audios/{{$getNameAudio}}">
            </audio>
            <span style='padding-right:2px'>
               <button onclick="playAudio('<?php echo $getNameAudio;  ?>')" type="button" style='font-size:12px;color:green'>US <i class='fas fa-volume-up'></i>
               </button>
            </span>
            @endforeach
            @endif

           </div>
         
           <div style="padding-top: inherit" class="w-mean">
           <i style="color:green"class="far fa-dot-circle"></i>
            {{$VocaInfo->mean}}
          </div>
          <span class="btn_addVc">
            <button style="font-size:18px"><i class="fa fa-bars"></i></button>
         </span>
         <div class="contentCardAdd">
            <ul style="list-style-type:circle;">
              @if(!empty($VocaInfo->word->example))
                 @foreach ($VocaInfo->word->example as $arrayExs) 
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
  

  
</div>
<div style="background:#28a745; width:100%; text-align:center;height:30px; line-height:30px; margin-bottom:10px;color:white;font-size:20px;border-radius:5px;" class="row">Finish</div>
<div class="row">{{$vocabulary1->links()}}</div>



<script language="javascript">
function playAudio(id_audio) {  
 var x = document.getElementById(id_audio);
 x.load();
  x.play(); 
} 
</script>


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



 @endsection