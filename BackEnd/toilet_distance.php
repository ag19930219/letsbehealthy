<?php
  @$lat=$_GET['lat'];
  @$lng=$_GET['lng'];
  $link=mysqli_connect('localhost','*','*','hospital'); /*星星處請填入資料庫帳號密碼*/
  mysqli_query($link,"SET NAMES UTF8");
  $sql="SELECT * FROM toilet";
  $result=mysqli_query($link,$sql);
  $row_array=array();
  $return_arr=array();
  while($row=mysqli_fetch_array($result, MYSQL_ASSOC)){
    $row_array['no'] = $row['no'];
    $row_array['T_name'] = $row['T_name'];
    $row_array['Address'] = $row['Address'];
    $row_array['lat'] = $row['lat'];
    $row_array['lng'] = $row['lng'];
    $radLat1 = deg2rad($lat);
    $radLat2 = deg2rad($row['lat']);
    $a = $radLat1 - $radLat2;
    $b = deg2rad($lng) - deg2rad($row['lng']);
    $s = 2*asin(sqrt(pow(sin($a*0.5),2) + cos($radLat1)*cos($radLat2)*pow(sin($b*0.5),2) ));
    $distance = $s*6378.137;
    $row_array['distance'] = $distance;
    
    if($distance<=100){
      array_push($return_arr,$row_array);
    }else{}
  }
  foreach ($return_arr as $key => $value) {  
      $station_name1[$key] = $value['no'];
      $station_type1[$key] = $value['T_name'];
      $address1[$key] = $value['Address'];
      $lat1[$key] = $value['lat'];
      $lng1[$key] = $value['lng'];
      $distance1[$key] = $value['distance'];
  } 
  array_multisort($distance1,SORT_ASC,$return_arr,SORT_ASC);

  $sliced_array = array_slice($return_arr, 0, 50);

  echo json_encode($sliced_array);
?>