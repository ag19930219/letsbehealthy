<?php
  @$keyword=$_GET['keyword'];
  $county=$_GET['county'];
  @$District=$_GET['District'];
  @$zipcode=$_GET['zipcode'];
  $d_catagory=$_GET['d_catagory'];
  @$lat=$_GET['lat'];
  @$lng=$_GET['lng'];
  $link=mysqli_connect('localhost','*','*','hospital'); /*星星處請填入資料庫帳號密碼*/
  mysqli_query($link,"SET NAMES UTF8");
  if($county=="台北市"){
    $county="臺北市";
  }
  if($county=="台中市"){
    $county="臺中市";
  }
  if($county=="台南市"){
    $county="臺南市";
  }
  if($county=="台東市"){
    $county="臺東市";
  }
  $sql="SELECT * FROM hospital as a, division as b WHERE (b.D_catagory LIKE '$d_catagory') AND (b.H_sn=a.H_sn) AND (a.Counties LIKE '$county')";

  $result=mysqli_query($link,$sql);
  $row_array=array();
  $return_arr=array();
  while($row=mysqli_fetch_array($result, MYSQL_ASSOC)){
    $row_array['H_sn'] = $row['H_sn'];
    $row_array['H_code'] = $row['H_code'];
    $row_array['H_name'] = $row['H_name'];
    $row_array['Telphone'] = $row['Telphone'];
    $row_array['Zip'] = $row['Zip'];
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

    array_push($return_arr,$row_array);
  }
  foreach ($return_arr as $key => $value) {  
    $H_sn1[$key] = $value['H_sn'];
    $H_code1[$key] = $value['H_code'];
    $H_name1[$key] = $value['H_name'];
    $Telphone1[$key] = $value['Telphone'];
    $Zip1[$key] = $value['Zip'];
    $Address1[$key] = $value['Address'];
    $lat1[$key] = $value['lat'];
    $lng1[$key] = $value['lng'];
    $distance1[$key] = $value['distance'];
  } 
  array_multisort($distance1,SORT_ASC,$return_arr,SORT_ASC);
  if($distance1==[]){
    echo json_encode($distance1);
  }else{
  echo json_encode($return_arr);
  }
?>