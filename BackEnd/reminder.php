<?php
  @$UUID=$_GET['UUID'];
  $link=mysqli_connect('localhost','*','*','hospital'); /*星星處請填入資料庫帳號密碼*/
  mysqli_query($link,"SET NAMES UTF8");
  $sql="SELECT * FROM reminder";
  $result=mysqli_query($link,$sql);
  $row_array=array();
  $return_arr=array();
  while($row=mysqli_fetch_array($result, MYSQL_ASSOC)){
    $row_array['no'] = $row['no'];
    $row_array['Name'] = $row['Name'];
    $row_array['quantity'] = $row['quantity'];
    $row_array['unit'] = $row['unit'];
    $row_array['Time'] = $row['Time'];
    $row_array['MON'] = $row['MON'];
    $row_array['TUE'] = $row['TUE'];
    $row_array['WED'] = $row['WED'];
    $row_array['THU'] = $row['THU'];
    $row_array['FRI'] = $row['FRI'];
    $row_array['SAT'] = $row['SAT'];
    $row_array['SUN'] = $row['SUN'];

    array_push($return_arr,$row_array);
  }

  echo json_encode($return_arr);
?>