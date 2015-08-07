<?php
function fibonacci($limit){
    $result = array();
    $result[0] = 1;
    $temp = 0;
    
    for ($i=1; $i<$limit; $i++){
      $result[$i] = $result[$i-1]+$temp;
      $temp = $result[$i-1];
    }
    return $result;
  }
?>
<?php  
if($_SERVER["REQUEST_METHOD"] == "GET"){
    $value = $_GET["limite"];
  }else{    
    $value = $_POST["limite"];
  }
  $res = fibonacci($value);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Serie de fibonacci</title>
</head>
<body>
  <table border="1" cellpadding="1" cellspacing="2">
    <th>Fibonacci</th>
    <tbody>
      <?php  
          for ($i=0; $i<count($res); $i++){
          echo "<tr><td>$res[$i]</td></tr>";
        }
      ?>
    </tbody>
  </table>
</body>
</html>

