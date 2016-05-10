<?php
  $link=mysqli_connect('localhost','root','','hospital');
  mysqli_query($link,"SET NAMES UTF8");
  $sql="SELECT D_catagory FROM division GROUP BY D_catagory ORDER BY D_catagory ASC";
  $result=mysqli_query($link,$sql);
  $row_array=array();
  $return_arr=array();
  while($row=mysqli_fetch_array($result, MYSQL_ASSOC)){
    $row_array['D_catagory'] = $row['D_catagory'];
    array_push($return_arr,$row_array);
  }
  echo json_encode($return_arr);
?>