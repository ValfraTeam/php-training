<?php
// SERVER

function calculate($edad){
	$result="";
	

	if (empty($edad)){
		$result= 'Error, you must enter value';
	}else{
		if (is_numeric($edad)){
			if($edad>='18' && $edad<='65'){
				echo 'es un adulto de: ',+$edad,' anios';
			}else{
				if ($edad>'65'){
					echo ' es jubilado de ',+$edad,' anios';
				}else{
					echo ' es joven',+$edad,' anios';
				}

			}
		}
	}

		return $result;
}
		




//usage

if ($_SERVER["REQUEST_METHOD"] == "GET"){
		$value= $_GET["edad"];
	}else{
		$value= $_POST["edad"];
	}

	$res=calculate($value);
	echo $res;



?>