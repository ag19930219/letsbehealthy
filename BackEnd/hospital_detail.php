<?php
  @$H_sn=$_GET['H_sn'];
  $link=mysqli_connect('localhost','*','*','hospital'); /*星星處請填入資料庫帳號密碼*/
  mysqli_query($link,"SET NAMES UTF8");
  $sql="SELECT * FROM hospital WHERE H_sn='$H_sn'";
  $result=mysqli_query($link,$sql);
  $row_array=array();
  $return_arr=array();
  while($row=mysqli_fetch_array($result, MYSQL_ASSOC)){
    $row_array['H_sn'] = $row['H_sn'];
    $row_array['H_name'] = $row['H_name'];
    $row_array['Telphone'] = $row['Telphone'];
    $row_array['Zip'] = $row['Zip'];
    $row_array['Address'] = $row['Address'];
    $row_array['lat'] = $row['lat'];
    $row_array['lng'] = $row['lng'];

    array_push($return_arr,$row_array);
  }

  echo json_encode($return_arr);
?>