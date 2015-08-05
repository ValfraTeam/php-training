<?php
// SERVER

function calculate($edad){
	$result="";
	$error="";

	if (empty($edad)){
		$error= 'Error, you must enter value';
	}else{
		if (is_numeric($edad)){
			if($edad>='18' && $edad<='65'){
				$result = 'es un adulto de: '.$edad;
			}else{
				if ($edad>'65'){
					$result = ' es jubilado de '.$edad;
				}else{
					$result = ' es joven de ' .$edad;
				}

			}
		}else{
			$error='error, you must enter numeric value';
		}
	}
	$response = array();
	
	if ($error == null){
			$response = array(
			"status" => true, 
			"data" => $result
			);
	}else{
		$response = array(
			"status" => false,
			"data" => $error);
	}
	
	return $response;
}
		




//usage

if ($_SERVER["REQUEST_METHOD"] == "GET"){
		$value= $_GET["edad"];
	}else{
		$value= $_POST["edad"];
	}

	$res=calculate($value);
	
?>
<!DOCTYPE html>
<html>
<head>
	<title> </title>
</head>
<body>
<div>
<select>
	<?php for ($i=1; $i<=10; $i++){
		echo "<option> $i </option>";
	}?>
</select>
	<?php if ($res["status"]) {?>
	Exito: <b><?php echo $res["data"]; ?> </b>
	<?php }else{ ?>
	Error: <b style="color: red;">
	 <?php echo $res["data"]; ?> </b>

	<?php } ?>
</div>
</body>
</html>