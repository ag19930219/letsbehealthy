<?php
  $link=mysqli_connect('localhost','*','*','hospital'); /*星星處請填入資料庫帳號密碼*/
  mysqli_query($link,"SET NAMES UTF8");
  $sql="SELECT food_1 FROM incompatible_food GROUP BY food_1 ORDER BY food_1 ASC";
  $result=mysqli_query($link,$sql);
  $row_array=array();
  $return_arr=array();
  while($row=mysqli_fetch_array($result, MYSQL_ASSOC)){
    $row_array['food_1'] = $row['food_1'];
    array_push($return_arr,$row_array);
  }
  echo json_encode($return_arr);
?>