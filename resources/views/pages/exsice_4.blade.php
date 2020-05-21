@extends('layout')
@section('content')

<?php
 
function createDatat($fileQuestion="F:\laragon\www\boctachHTML\data\question4.txt",$fileOption="F:\laragon\www\boctachHTML\data\qresult4.txt"){
  
$data=file($fileQuestion) or die("cannot reaf file");
array_shift($data);

#get question 
$arrayQuestion=array();
foreach ($data as $key => $value) {
  $tmp=explode('|', $value);
  $arrayQuestion[$tmp[0]]=array("id"=>$tmp[0],"quetion"=>$tmp[1],"answer"=>'option_'.trim($tmp[2]));
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






function get_question($cau,$id_queston){
  $arraycau=explode("_______", $cau);
  $ptu1=$arraycau[0];
  $ptu2=$arraycau[1];
  $html='<p id="'.$id_queston."2".'"><span class="add_word" id="'.$id_queston."1".'">'.$ptu1.'</span><b id="'.$id_queston.'">_______</b><span>'.$ptu2.'</span></p>';
  return $html;
}


// function ShowAnswer($idQuestion,$value,$answer,$op,$id_anser){
// $xhtml='<p class="'.$idQuestion.$id_anser.'" value="'.$answer.'" id="'.$idQuestion.$id_anser.'" onclick="getdata('."'".$idQuestion.$id_anser."',"."'".$idQuestion."'".')">'.$op.': '.$answer.'</p>';
//   return $xhtml;
// }

// function ShowAnswer($idQuestion,$value,$answer,$op,$id_anser){
// $xhtml='<p class="x" value="'.$answer.'" id="'.$idQuestion.$id_anser.'" onclick="getdata('."'".$idQuestion.$id_anser."',"."'".$idQuestion."'".')">'.$op.': '.$answer.'</p>';
//   return $xhtml;
// }

function ShowAnswer($idQuestion,$value,$answer,$op,$id_anser){
$xhtml='<p class="'.$answer.'" value="'.$answer.'" id="'.$idQuestion.$id_anser.'">'.$op.': '.$answer.'</p>';
  return $xhtml;
}


$data1=createDatat();
?>

<?php
$data=createDatat();
$html='';
$i=1;
if(!empty($data)){
  foreach ($data as $key => $value) {
    $option0=ShowAnswer($value['id'],'option_0',$value['option_0'],'A','btn1');
    $option1=ShowAnswer($value['id'],'option_1',$value['option_1'],'B','btn2');
    $option2=ShowAnswer($value['id'],'option_2',$value['option_2'],'C','btn3');
    $option3=ShowAnswer($value['id'],'option_3',$value['option_3'],'D','btn4');
    $question=get_question($value['quetion'],$value['id']);

    $html.=' <div class="form-group">

            <p>'.$i.': '.$question.' </p>
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
        <form class="border-form" action="{{URL::to('/Result_learn4')}}" method="post" name="test-form" id="test-form">
          @csrf
          <?php
          echo $html;
          ?>
        
          <input type="hidden" name="array_data" value="<?php echo htmlentities(serialize($data)); ?>"/>
          <?php $a="sdsd";$b="sdfsdfdssgdsfsdf"  ?>
            <span id="<?php echo $a.$b; ?>" onclick="getdata(<?php echo $a.$b;  ?>)">hhjs</span>
          <button type="submit" class="btn btn-primary" disabled="disabled">Hoànnnnsdhfjsd Thành</button>
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

  
<script>

$(".x").click(function(){
  // $(this).next("b").remove();
  // var text1=document.createElement("b");
  // text1.innerHTML=$(".answershow").val();
  // $(".add_word").append(text1);
  alert($(this).val());
});

// function getdata(idname,id_question){
//   $("#"+id_question).remove();

  
//     var txt = document.createElement("b");
//   txt.innerHTML = "hang"+$("#"+idname).val();
//  // alert($('#'+idname).val());
//   //var btn2=$("<b></b>").text($("#"+idname).val());
  
//     $("#"+id_question+"1").append(txt);
// }



</script>
<script type="text/javascript">
// $("").click(function(){
//   $("").append(function(){
//     return '<p>'+this.classname+'</p>';
//   });
// });

$(".form-group").f
  
</script>

@endsection


