@extends('layout')
@section('content')

<?php

//require_once 'function_data.blade.php'; 
function createDatat($fileQuestion="F:\laragon\www\boctachHTML\question2.txt",$fileOption="F:\laragon\www\boctachHTML\qresult2.txt"){
  
$data=file($fileQuestion) or die("cannot reaf file");
array_shift($data);

#get question 
$arrayQuestion=array();
foreach ($data as $key => $value) {
  $tmp=explode('|', $value);
  $arrayQuestion[$tmp[0]]=array("id"=>$tmp[0],"quetion"=>$tmp[1],"answer"=>'option_'.trim($tmp[2]),"audio"=>$tmp[3]);
}
#get answer
  
  $data_answer=file($fileOption);
  array_shift($data_answer);
  foreach ($data_answer as $key_a => $value_a) {
    $tmp_a=explode('|', $value_a);
    $arrayQuestion[$tmp_a[0]]['option_'.$tmp_a[1]]=trim($tmp_a[2]);
    
  }
  shuffle($arrayQuestion);
  $arrayQuestion=array_slice($arrayQuestion, 0,5);
   return $arrayQuestion;
}


//tra ve cac dau an cau cau hoi
function ShowAnswer($idQuestion,$value,$answer,$op){
  $xhtml='<div class="radio">
                  <label><input type="radio" name="question_'.$idQuestion.'"  value="'.$value.'" >'.$op.': '.$answer.'</label>
                </div>';
  return $xhtml;
}

// //chuyen huong trang khi ngươi dung co tinh truy cap vao trang index
// function redirect($fileName){
//   if(file_exists($fileName)){
//     header("Location:$fileName");
//     //Redirect::to('exsice')->send();
//     exit();
//   }
// }

$data=createDatat();
$html='';
$i=1;
if(!empty($data)){
  foreach ($data as $key => $value) {
    $option0=ShowAnswer($value['id'],'option_0',$value['option_0'],'A');
    $option1=ShowAnswer($value['id'],'option_1',$value['option_1'],'B');
    $option2=ShowAnswer($value['id'],'option_2',$value['option_2'],'C');
    $option3=ShowAnswer($value['id'],'option_3',$value['option_3'],'D');

    $html.=' <div style="border-bottom:1px solid black;" class="form-group">
            <img src="public/frontend/images/'.$value['quetion'].'"/>
             <audio id="'.trim($value['audio']).'">
               <source src="public/frontend/Audios/'.trim($value['audio']).'">
            </audio>

            <span style="padding-right:2px">
               <button onclick="playAudio('."'".trim($value['audio'])."'".')" type="button" style="font-size:12px;color:green">US <i class="fas fa-volume-up"></i>
               </button>
            </span>

            <p><b>'.$i.':</b> </p>  
            <div class="row">
              <div class="col-md-6">
                '.$option0.$option1.'
              </div>

               <div class="col-md-6">
                '.$option2.$option3.'
              </div>
            </div>
          </div>';
          $i++;
  }

}
?>

	    <div style="font-size:20px;"class="container list-quiz ">
        <h1 class="page-header">trắc nghiệm trực tuyến</h1>
        <form class="border-form" action="{{URL::to('/Result_learn2')}}" method="post" name="test-form" id="test-form">
          @csrf
          <?php
          echo $html;
          ?>
          <input type="hidden" name="array_data" value="<?php echo htmlentities(serialize($data)); ?>"/>
          <button type="submit" class="btn btn-primary" disabled="disabled">Hoàn Thành</button>
        </form>
        
      </div>
   

  <script type="text/javaScript">
    $(document).ready(function(){
        $('input[type=radio]').change(function(){
           if($('input[type=radio]:checked').length==5){
            $('button[type=submit]').removeAttr('disabled');
           }
        });
       
  });
  </script>

  <script language="javascript">
function playAudio(id_audio) {  
 var x = document.getElementById(id_audio);
 x.load();
  x.play(); 
} 
</script>

  @endsection
