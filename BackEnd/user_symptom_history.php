<?php
  @$UUID=$_GET['UUID'];
  $link=mysqli_connect('localhost','*','*','hospital'); /*星星處請填入資料庫帳號密碼*/
  mysqli_query($link,"SET NAMES UTF8");
  $sql="SELECT * FROM user_symptom WHERE UUID='$UUID' ";
  $result=mysqli_query($link,$sql);
  $row_array=array();
  $return_arr=array();
  while($row=mysqli_fetch_array($result, MYSQL_ASSOC)){
    $row_array['UUID'] = $row['UUID'];
    $row_array['Respiratory'] = $row['Respiratory'];
    $row_array['Urinary'] = $row['Urinary'];
    array_push($return_arr,$row_array);
  }
  echo json_encode($return_arr);
?>