<?php
  $lat=$_GET['lat'];
  $lng=$_GET['lng'];
  $link=mysqli_connect('localhost','*','*','hospital'); /*星星處請填入資料庫帳號密碼*/
  mysqli_query($link,"SET NAMES UTF8");
  $sql="SELECT * FROM uv ";
  $result=mysqli_query($link,$sql);
  $row_array=array();
  $return_arr=array();
  while($row=mysqli_fetch_array($result, MYSQL_ASSOC)){
    $row_array['SiteName'] = $row['SiteName'];
    $row_array['Lat'] = $row['Lat'];
    $row_array['Lng'] = $row['Lng'];

    $radLat1 = deg2rad($lat);
    $radLat2 = deg2rad($row['Lat']);
    $a = $radLat1 - $radLat2;
    $b = deg2rad($lng) - deg2rad($row['Lng']);
    $s = 2*asin(sqrt(pow(sin($a*0.5),2) + cos($radLat1)*cos($radLat2)*pow(sin($b*0.5),2) ));
    $distance = $s*6378.137;
    $row_array['distance'] = $distance;

    array_push($return_arr,$row_array);
  }
  foreach ($return_arr as $key => $value) {  
    $SiteName1[$key] = $value['SiteName'];
    $Lat1[$key] = $value['Lat'];
    $Lng1[$key] = $value['Lng'];
    $distance1[$key] = $value['distance'];
  } 
  array_multisort($distance1,SORT_ASC,$return_arr,SORT_ASC);
  if($distance1==[]){
    echo json_encode($distance1);
  }else{
  echo json_encode($return_arr);
  }
?>