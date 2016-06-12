<?php
  @$food=$_GET['food'];
  $link=mysqli_connect('localhost','*','*','hospital'); /*星星處請填入資料庫帳號密碼*/
  mysqli_query($link,"SET NAMES UTF8");
  $sql="SELECT * FROM incompatible_food WHERE food_1 = '$food'";
  $result=mysqli_query($link,$sql);
  $row_array=array();
  $return_arr=array();
  while($row=mysqli_fetch_array($result, MYSQL_ASSOC)){
    $row_array['food_1'] = $row['food_1'];
    $row_array['food_2'] = $row['food_2'];
    $row_array['symptom'] = $row['symptom'];
    $row_array['solution'] = $row['solution'];
    array_push($return_arr,$row_array);
  }
  echo json_encode($return_arr);
?>