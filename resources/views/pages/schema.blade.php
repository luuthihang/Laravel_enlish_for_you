<?php
// echo count($nameImages)."</br>";
// $i=0;
// $j=0;
// foreach ($nameImages as $key => $value) {
// 	// if(is_object($value)){
// 	// 	echo "https://kndict.com/upload/images/".$key.'/'.$value->_id."/".$value->name.".".$value->type;
// 	// 	echo "</br>";
// 	// 	$i++;
// 	// }

// 	if(is_string($value)){
// 		echo "<pre>";
// 		print_r($value);
// 		echo "</pre>";
// 	}
// 	if(is_object($value)){
// 		echo "https://kndict.com/upload/images/".$key.'/'.$value->_id."/".$value->name.".".$value->type;
// 		echo "</br>";
		
// 	 }
// 	// 	else{
// 	// 	echo "---".$key."---</br>";
// 	// }
// }

// echo $i;




#get audio

foreach ($file_audios as $key => $value) {
	echo trim($value)."</br>";
}

?>