<?php
  @$keyword=$_GET['keyword'];
  @$county=$_GET['county'];
  @$District=$_GET['District'];
  @$zipcode=$_GET['zipcode'];
  @$d_catagory=$_GET['d_catagory'];
  @$lat=$_GET['lat'];
  @$lng=$_GET['lng'];
  $link=mysqli_connect('localhost','*','*','hospital'); /*星星處請填入資料庫帳號密碼*/
  mysqli_query($link,"SET NAMES UTF8");
  if($county == "彰化縣"){
    $sql="SELECT * FROM clinic_changhua WHERE Division LIKE '$d_catagory'";
  }
  if($county == "嘉義縣" or $county == "嘉義市"){
    $sql="SELECT * FROM clinic_chiayi WHERE Division LIKE '$d_catagory'";
  }
  if($county == "新竹市"){
    $sql="SELECT * FROM clinic_hsinchucity WHERE Division LIKE '$d_catagory'";
  }
  if($county == "新竹縣"){
    $sql="SELECT * FROM clinic_hsinchucounty WHERE Division LIKE '$d_catagory'";
  }
  if($county == "花蓮縣"){
    $sql="SELECT * FROM clinic_hualien WHERE Division LIKE '$d_catagory'";
  }
  if($county == "高雄市"){
    $sql="SELECT * FROM clinic_kaohsiung WHERE Division LIKE '$d_catagory'";
  }
  if($county == "基隆市"){
    $sql="SELECT * FROM clinic_keelung WHERE Division LIKE '$d_catagory'";
  }
  if($county == "金門縣"){
    $sql="SELECT * FROM clinic_kinmen WHERE Division LIKE '$d_catagory'";
  }
  if($county == "連江縣"){
    $sql="SELECT * FROM clinic_lianjiang WHERE Division LIKE '$d_catagory'";
  
  }
  if($county == "苗栗縣"){
    $sql="SELECT * FROM clinic_miaoli WHERE Division LIKE '$d_catagory'";
  
  }
  if($county == "南投縣"){
    $sql="SELECT * FROM clinic_nantou WHERE Division LIKE '$d_catagory'";
  
  }
  if($county == "新北市"){
    $sql="SELECT * FROM clinic_newtaipei WHERE Division LIKE '$d_catagory'";
  
  }
  if($county == "澎湖縣"){
    $sql="SELECT * FROM clinic_penghu WHERE Division LIKE '$d_catagory'";
  
  }
  if($county == "屏東縣"){
    $sql="SELECT * FROM clinic_pingtung WHERE Division LIKE '$d_catagory'";
  
  }
  if($county == "台中市"){
    $sql="SELECT * FROM clinic_taichung WHERE Division LIKE '$d_catagory'";
  
  }
  if($county == "台南市"){
    $sql="SELECT * FROM clinic_tainan WHERE Division LIKE '$d_catagory'";
  
  }
  if($county == "台北市"){
    $sql="SELECT * FROM clinic_taipei WHERE Division LIKE '$d_catagory'";
  
  }
  if($county == "台東縣"){
    $sql="SELECT * FROM clinic_taitung WHERE Division LIKE '$d_catagory'";
  
  }
  if($county == "桃園市"){
    $sql="SELECT * FROM clinic_taoyuan WHERE Division LIKE '$d_catagory'";
  
  }
  if($county == "宜蘭縣"){
    $sql="SELECT * FROM clinic_yilan WHERE Division LIKE '$d_catagory'";
  
  }
  if($county == "雲林縣"){
    $sql="SELECT * FROM clinic_yunlin WHERE Division LIKE '$d_catagory'";
  
  }

  $result=mysqli_query($link,$sql);
  $row_array=array();
  $return_arr=array();
  while($row=mysqli_fetch_array($result, MYSQL_ASSOC)){
    $row_array['C_code'] = $row['C_code'];
    $row_array['C_name'] = $row['C_name'];
    $row_array['Telephone'] = $row['Telephone'];
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
    $C_code1[$key] = $value['C_code'];
    $C_name1[$key] = $value['C_name'];
    $Telephone1[$key] = $value['Telephone'];
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