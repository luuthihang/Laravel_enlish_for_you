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
    

    $html.=' <div class="form-group">
            <p><b>'.$i.': '.$value['quetion'].'</b> </p>
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
          <a class="btn btn-primary" href="{{URL::to('/Exercise')}}">Làm Lại</a>
        </form>
      </div>
      @endsection('content')
    