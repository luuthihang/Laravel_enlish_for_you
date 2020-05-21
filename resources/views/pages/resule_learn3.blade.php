@extends('layout')
@section('content')
<?php

function showAnswesCheck($option,$optionUser,$optionTrue,$ContentAnswer,$op){
	/*user anwer true
	user anwer false
	system true 
	system false*/
	$classLabel='';
	$spanContent='';
	
	if($option==$optionUser){
		if($optionUser==$optionTrue){
			$spanContent='&nbsp;<span class="glyphicon glyphicon-ok"></span>';
			$classLabel='label label-success';
            }else{
            	$spanContent='&nbsp;<span class="glyphicon glyphicon-remove"></span>';
            }
	 }else{
		if($option==$optionTrue){
			
			$classLabel='label label-success';
            }else{
            	$classLabel='';
           }
	}
	$xhtml='<div class="radio">
                  <label class="'.$classLabel.'"><input type="radio" name="radio" value="option" disabled="disabled">'.$op.': '.$ContentAnswer.'</label>
                  '.$spanContent.'
                </div>';
	
 		return $xhtml;   
  
}

if(empty($_POST["array_data"])){
  redirect("index.php");
}

$data=unserialize($_POST["array_data"]);
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

// echo "<pre>";
// print_r($data);
// echo "</pre>";

$html='';
$i=1;
 $count=0;
 $countTrue=0;
if(!empty($data)){
  foreach ($data as $key => $value) {

    $count++;
    if($_POST['question_'.$value['id']]==$value['answer']){
      $countTrue+=1;
    }
    $option0=showAnswesCheck('option_0',$_POST['question_'.$value['id']],$value['answer'],$value['option_0'],'A');
   
    $option1=showAnswesCheck('option_1',$_POST['question_'.$value['id']],$value['answer'],$value['option_1'],'B');
    
    $option2=showAnswesCheck('option_2',$_POST['question_'.$value['id']],$value['answer'],$value['option_2'],'C');
       
    $option3=showAnswesCheck('option_3',$_POST['question_'.$value['id']],$value['answer'],$value['option_3'],'D');
    

    $html.=' <div style="font-size:28px;font-family:Comic Sans MS;border-bottom:1px solid black; margin-bottom:50px;padding-bottom:50px;" class="form-group">
            <div class="row">
             <div class="col-md-6">
            <div class="box-image">
            
             </div>
             <audio id="'.trim($value['audio']).'">
               <source src="public/frontend/Audios/'.trim($value['audio']).'">
            </audio>

            <span style="padding-right:2px">
               <button onclick="playAudio('."'".trim($value['audio'])."'".')" type="button" style="font-size:12px;color:green"><img style="width:400px; height:400px;" src="public/frontend/images/'.$value['quetion'].'"/>
               </button>
            </span>
            </div>

             <div class="col-md-6">
            <p><b>'.$i.': '.$value["englishWord"].' </b> </p>
            <div class="row">
              <div class="col-md-6">
                '.$option0.$option1.'
              </div>

               <div class="col-md-6">
                '.$option2.$option3.'
              </div>
            </div>
            </div>
             </div>
          </div>';
          $i++;
  }
}
?>


    
  <link href="css/style.css" rel="stylesheet" type="text/css">
  
  
	    <div style="font-size:20px;"class="container list-quiz ">
        <h1 class="page-header">Kết Quả trắc nghiệm trực tuyến</h1>
        <form class="border-form" action="#" method="post" name="test-form" id="test-form">
          <?php
          echo $html;
          ?>
          <label>Kết Quả:</label>
        <input type="text" name="thongke" value="<?php echo "Bạn Đúng: " .$countTrue ."/".$count." Đáp án"; ?>">
      </br>
          <a class="btn btn-primary" href="{{URL::to('/Exercise3')}}">Làm Lại</a>
        </form>
      </div>

      <script language="javascript">
function playAudio(id_audio) {  
 var x = document.getElementById(id_audio);
 x.load();
  x.play(); 
} 
</script>
      @endsection('content')
    