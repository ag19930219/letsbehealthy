<?php
  @$zipcode=$_GET['zipcode'];
  $link=mysqli_connect('localhost','*','*','hospital'); /*星星處請填入資料庫帳號密碼*/
  mysqli_query($link,"SET NAMES UTF8");
  $sql="SELECT * FROM zip WHERE Zip='$zipcode'";
  $result=mysqli_query($link,$sql);
  $row_array=array();
  $return_arr=array();
  while($row=mysqli_fetch_array($result, MYSQL_ASSOC)){
    $row_array['Zip'] = $row['Zip'];
    $row_array['City'] = $row['City'];
    $row_array['Section'] = $row['Section'];

    array_push($return_arr,$row_array);
  }

  echo json_encode($return_arr);
?>