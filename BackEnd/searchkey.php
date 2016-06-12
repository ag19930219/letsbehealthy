<?php
  @$keyword=$_GET['keyword'];
  @$Country=$_GET['Country'];
  @$District=$_GET['District'];
  @$zipcode=$_GET['zipcode'];
  @$d_catagory=$_GET['d_catagory'];
  $link=mysqli_connect('localhost','*','*','hospital'); /*星星處請填入資料庫帳號密碼*/
  mysqli_query($link,"SET NAMES UTF8");
  if($Country=="台北市"){
    $Country="臺北市";
  }
  if($Country=="台中市"){
    $Country="臺中市";
  }
  if($Country=="台南市"){
    $Country="臺南市";
  }
  if($Country=="台東市"){
    $Country="臺東市";
  }
  if($keyword==NULL){
    if($zipcode==NULL){
      if($d_catagory==NULL){ //皆無，有縣市
        $sql="SELECT * FROM hospital WHERE (Counties LIKE '$Country')";
      }else{  //科別+縣市
        $sql="SELECT * FROM hospital as a, division as b WHERE (b.D_catagory LIKE '$d_catagory') AND (b.H_sn=a.H_sn) AND (a.Counties LIKE '$Country')";
      }
    }else{
      if($d_catagory==NULL){  //只有郵遞區號
        $sql="SELECT * FROM hospital WHERE Zip='$zipcode'";
      }else{  //郵遞區號+科別
        $sql="SELECT * FROM hospital as a, division as b WHERE (b.D_catagory LIKE '$d_catagory') AND (b.H_sn=a.H_sn) AND (a.Zip='$zipcode')";
      }

    }
  }else{
    if($zipcode==NULL){
      if($d_catagory==NULL){  //只有關鍵字
        $sql="SELECT * FROM hospital WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND (Counties LIKE '$Country')";
      }else{  //關鍵字+科別
        $sql="SELECT * FROM hospital as a, division as b WHERE (b.D_catagory LIKE '$d_catagory') AND (b.H_sn=a.H_sn) AND (a.Counties LIKE '$Country') AND ( (a.Address LIKE '%$keyword%' ) OR (a.H_name LIKE '%$keyword%' ) )";
      }
    }else{
      if($d_catagory==NULL){  //關鍵字+郵遞區號
        $sql="SELECT * FROM hospital WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND (Zip='$zipcode')";
      }else{  //全有
        $sql="SELECT * FROM hospital as a, division as b WHERE (b.D_catagory LIKE '$d_catagory') AND (b.H_sn=a.H_sn) AND ( (a.Address LIKE '%$keyword%' ) OR (a.H_name LIKE '%$keyword%' ) ) AND (a.Zip='$zipcode')";
      }
    }
  }

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
    array_push($return_arr,$row_array);
  }

  echo json_encode($return_arr);
?>