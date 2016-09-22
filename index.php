<?php

function gen_one_to_three($array) {


 		if (is_array($array) && !empty($array)) {
		    foreach ($array as $key =>$val) {
		        yield $key;
		    }
		} else {
			throw new Exception("array is empty");
		}

}

$array=array("a"=>1,"b"=>2,"c"=>3);

$generator = gen_one_to_three($array);
$arrayFinal=[];

foreach ($generator as $value) {

    $arrayFinal[]=$value;

}
var_dump($arrayFinal);
?>