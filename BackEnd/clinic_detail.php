<?php
  @$Telephone=$_GET['Telephone'];
  @$county=$_GET['county'];
  $link=mysqli_connect('localhost','*','*','hospital'); /*星星處請填入資料庫帳號密碼*/
  mysqli_query($link,"SET NAMES UTF8");
  if($county == "彰化縣"){
    $sql="SELECT * FROM clinic_changhua WHERE Telephone='$Telephone'";
  
  }
  if($county == "嘉義縣" or $county == "嘉義市"){
    $sql="SELECT * FROM clinic_chiayi WHERE Telephone='$Telephone'";
  
  }
  if($county == "新竹市"){
    $sql="SELECT * FROM clinic_hsinchucity WHERE Telephone='$Telephone'";
  
  }
  if($county == "新竹縣"){
    $sql="SELECT * FROM clinic_hsinchucounty WHERE Telephone='$Telephone'";
  
  }
  if($county == "花蓮縣"){
    $sql="SELECT * FROM clinic_hualien WHERE Telephone='$Telephone'";
  
  }
  if($county == "高雄市"){
    $sql="SELECT * FROM clinic_kaohsiung WHERE Telephone='$Telephone'";
  
  }
  if($county == "基隆市"){
    $sql="SELECT * FROM clinic_keelung WHERE Telephone='$Telephone'";
  
  }
  if($county == "金門縣"){
    $sql="SELECT * FROM clinic_kinmen WHERE Telephone='$Telephone'";
  
  }
  if($county == "連江縣"){
    $sql="SELECT * FROM clinic_lianjiang WHERE Telephone='$Telephone'";
  
  }
  if($county == "苗栗縣"){
    $sql="SELECT * FROM clinic_miaoli WHERE Telephone='$Telephone'";
  
  }
  if($county == "南投縣"){
    $sql="SELECT * FROM clinic_nantou WHERE Telephone='$Telephone'";
  
  }
  if($county == "新北市"){
    $sql="SELECT * FROM clinic_newtaipei WHERE Telephone='$Telephone'";
  
  }
  if($county == "澎湖縣"){
    $sql="SELECT * FROM clinic_penghu WHERE Telephone='$Telephone'";
  
  }
  if($county == "屏東縣"){
    $sql="SELECT * FROM clinic_pingtung WHERE Telephone='$Telephone'";
  
  }
  if($county == "台中市"){
    $sql="SELECT * FROM clinic_taichung WHERE Telephone='$Telephone'";
  
  }
  if($county == "台南市"){
    $sql="SELECT * FROM clinic_tainan WHERE Telephone='$Telephone'";
  
  }
  if($county == "台北市"){
    $sql="SELECT * FROM clinic_taipei WHERE Telephone='$Telephone'";
  
  }
  if($county == "台東縣"){
    $sql="SELECT * FROM clinic_taitung WHERE Telephone='$Telephone'";
  
  }
  if($county == "桃園市"){
    $sql="SELECT * FROM clinic_taoyuan WHERE Telephone='$Telephone'";
  
  }
  if($county == "宜蘭縣"){
    $sql="SELECT * FROM clinic_yilan WHERE Telephone='$Telephone'";
  
  }
  if($county == "雲林縣"){
    $sql="SELECT * FROM clinic_yunlin WHERE Telephone='$Telephone'";
  
  }
  $result=mysqli_query($link,$sql);
  $row_array=array();
  $return_arr=array();
  while($row=mysqli_fetch_array($result, MYSQL_ASSOC)){
    $row_array['C_code'] = $row['C_code'];
    $row_array['C_name'] = $row['C_name'];
    $row_array['Division'] = $row['Division'];
    $row_array['Telephone'] = $row['Telephone'];
    $row_array['Zip'] = $row['Zip'];
    $row_array['Address'] = $row['Address'];
    $row_array['lat'] = $row['lat'];
    $row_array['lng'] = $row['lng'];

    array_push($return_arr,$row_array);
  }

  echo json_encode($return_arr);
?>