<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerExercise extends Controller
{
    #1
    public function show_exercise(){
    	return view('pages.exsice');
    }

    public function show_result1(){
    	return view('pages.resule_learn1');
    }
	#2
     public function show_exercise2(){
    	return view('pages.exsice_2');
    }

    public function show_result2(){
    	return view('pages.resule_learn2');
    }

    #3
     public function show_exercise3(){
    	return view('pages.exsice_3');
    }

    public function show_result3(){
    	return view('pages.resule_learn3');
    }

    








    

public function createDatat($fileQuestion="F:\laragon\www\GetData\TracNghiem\tracNghiem3\data\question.txt",$fileOption="F:\laragon\www\GetData\TracNghiem\tracNghiem3\data\result.txt"){
	
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
	 //return view('pages.exsice',compact('arrayQuestion'));
}

//tra ve cac dau an cau cau hoi
public function ShowAnswer($idQuestion,$value,$answer,$op){
	$xhtml='<div class="radio">
                  <label><input type="radio" name="question_'.$idQuestion.'"  value="'.$value.'" >'.$op.': '.$answer.'</label>
                </div>';
	return $xhtml;
}

//chuyen huong trang khi ngươi dung co tinh truy cap vao trang index
public function redirect($fileName){
	if(file_exists($fileName)){
		header("Location:$fileName");
		exit();
	}
}

public function showAnswesCheck($option,$optionUser,$optionTrue,$ContentAnswer,$op){
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


public function countResult($optionUser,$optionTrue){
	$count=0;
	if($optionUser==$optionTrue){
		$count++;
	}
	return $count;

}
}
