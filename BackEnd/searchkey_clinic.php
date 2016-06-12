<?php
  @$keyword=$_GET['keyword'];
  $county=$_GET['Country'];
  @$District=$_GET['District'];
  @$zipcode=$_GET['zipcode'];
  @$d_catagory=$_GET['d_catagory'];
  $link=mysqli_connect('localhost','*','*','hospital'); /*星星處請填入資料庫帳號密碼*/
  mysqli_query($link,"SET NAMES UTF8");
  if($county == "彰化縣"){
    if($keyword==NULL){
      if($zipcode==NULL){
        if($d_catagory==NULL){ //皆無
          $sql="SELECT * FROM clinic_changhua ";
        }else{  //只有科別
          $sql="SELECT * FROM clinic_changhua WHERE Division LIKE '$d_catagory'";
        }
      }else{
        if($d_catagory==NULL){  //只有郵遞區號
          $sql="SELECT * FROM clinic_changhua WHERE Zip='$zipcode'";
        }else{  //郵遞區號+科別
          $sql="SELECT * FROM clinic_changhua WHERE (Division LIKE '$d_catagory') AND (Zip='$zipcode')";
        }
      }
    }else{
      if($zipcode==NULL){
        if($d_catagory==NULL){  //只有關鍵字
          $sql="SELECT * FROM clinic_changhua WHERE (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )";
        }else{  //關鍵字+科別
          $sql="SELECT * FROM clinic_changhua WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND  (Division LIKE '$d_catagory')";
        }
      }else{
        if($d_catagory==NULL){  //關鍵字+郵遞區號
          $sql="SELECT * FROM clinic_changhua WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND (Zip='$zipcode')";
        }else{  //全有
          $sql="SELECT * FROM clinic_changhua WHERE (Division LIKE '$d_catagory') AND ( (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' ) ) AND (Zip='$zipcode')";
        }
      }
    }
  }
  if($county == "嘉義縣" or $county == "嘉義市"){
    if($keyword==NULL){
      if($zipcode==NULL){
        if($d_catagory==NULL){ //皆無
          $sql="SELECT * FROM clinic_chiayi ";
        }else{  //只有科別
          $sql="SELECT * FROM clinic_chiayi WHERE Division LIKE '$d_catagory'";
        }
      }else{
        if($d_catagory==NULL){  //只有郵遞區號
          $sql="SELECT * FROM clinic_chiayi WHERE Zip='$zipcode'";
        }else{  //郵遞區號+科別
          $sql="SELECT * FROM clinic_chiayi WHERE (Division LIKE '$d_catagory') AND (Zip='$zipcode')";
        }
      }
    }else{
      if($zipcode==NULL){
        if($d_catagory==NULL){  //只有關鍵字
          $sql="SELECT * FROM clinic_chiayi WHERE (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )";
        }else{  //關鍵字+科別
          $sql="SELECT * FROM clinic_chiayi WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND  (Division LIKE '$d_catagory')";
        }
      }else{
        if($d_catagory==NULL){  //關鍵字+郵遞區號
          $sql="SELECT * FROM clinic_chiayi WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND (Zip='$zipcode')";
        }else{  //全有
          $sql="SELECT * FROM clinic_chiayi WHERE (Division LIKE '$d_catagory') AND ( (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' ) ) AND (Zip='$zipcode')";
        }
      }
    }
  }
  if($county == "新竹市"){
    if($keyword==NULL){
      if($zipcode==NULL){
        if($d_catagory==NULL){ //皆無
          $sql="SELECT * FROM clinic_hsinchucity ";
        }else{  //只有科別
          $sql="SELECT * FROM clinic_hsinchucity WHERE Division LIKE '$d_catagory'";
        }
      }else{
        if($d_catagory==NULL){  //只有郵遞區號
          $sql="SELECT * FROM clinic_hsinchucity WHERE Zip='$zipcode'";
        }else{  //郵遞區號+科別
          $sql="SELECT * FROM clinic_hsinchucity WHERE (Division LIKE '$d_catagory') AND (Zip='$zipcode')";
        }
      }
    }else{
      if($zipcode==NULL){
        if($d_catagory==NULL){  //只有關鍵字
          $sql="SELECT * FROM clinic_hsinchucity WHERE (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )";
        }else{  //關鍵字+科別
          $sql="SELECT * FROM clinic_hsinchucity WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND  (Division LIKE '$d_catagory')";
        }
      }else{
        if($d_catagory==NULL){  //關鍵字+郵遞區號
          $sql="SELECT * FROM clinic_hsinchucity WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND (Zip='$zipcode')";
        }else{  //全有
          $sql="SELECT * FROM clinic_hsinchucity WHERE (Division LIKE '$d_catagory') AND ( (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' ) ) AND (Zip='$zipcode')";
        }
      }
    }
  }
  if($county == "新竹縣"){
  
    if($keyword==NULL){
      if($zipcode==NULL){
        if($d_catagory==NULL){ //皆無
          $sql="SELECT * FROM clinic_hsinchucounty ";
        }else{  //只有科別
          $sql="SELECT * FROM clinic_hsinchucounty WHERE Division LIKE '$d_catagory'";
        }
      }else{
        if($d_catagory==NULL){  //只有郵遞區號
          $sql="SELECT * FROM clinic_hsinchucounty WHERE Zip='$zipcode'";
        }else{  //郵遞區號+科別
          $sql="SELECT * FROM clinic_hsinchucounty WHERE (Division LIKE '$d_catagory') AND (Zip='$zipcode')";
        }
      }
    }else{
      if($zipcode==NULL){
        if($d_catagory==NULL){  //只有關鍵字
          $sql="SELECT * FROM clinic_hsinchucounty WHERE (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )";
        }else{  //關鍵字+科別
          $sql="SELECT * FROM clinic_hsinchucounty WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND  (Division LIKE '$d_catagory')";
        }
      }else{
        if($d_catagory==NULL){  //關鍵字+郵遞區號
          $sql="SELECT * FROM clinic_hsinchucounty WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND (Zip='$zipcode')";
        }else{  //全有
          $sql="SELECT * FROM clinic_hsinchucounty WHERE (Division LIKE '$d_catagory') AND ( (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' ) ) AND (Zip='$zipcode')";
        }
      }
    }
  }
  if($county == "花蓮縣"){
  
    if($keyword==NULL){
      if($zipcode==NULL){
        if($d_catagory==NULL){ //皆無
          $sql="SELECT * FROM clinic_hualien ";
        }else{  //只有科別
          $sql="SELECT * FROM clinic_hualien WHERE Division LIKE '$d_catagory'";
        }
      }else{
        if($d_catagory==NULL){  //只有郵遞區號
          $sql="SELECT * FROM clinic_hualien WHERE Zip='$zipcode'";
        }else{  //郵遞區號+科別
          $sql="SELECT * FROM clinic_hualien WHERE (Division LIKE '$d_catagory') AND (Zip='$zipcode')";
        }
      }
    }else{
      if($zipcode==NULL){
        if($d_catagory==NULL){  //只有關鍵字
          $sql="SELECT * FROM clinic_hualien WHERE (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )";
        }else{  //關鍵字+科別
          $sql="SELECT * FROM clinic_hualien WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND  (Division LIKE '$d_catagory')";
        }
      }else{
        if($d_catagory==NULL){  //關鍵字+郵遞區號
          $sql="SELECT * FROM clinic_hualien WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND (Zip='$zipcode')";
        }else{  //全有
          $sql="SELECT * FROM clinic_hualien WHERE (Division LIKE '$d_catagory') AND ( (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' ) ) AND (Zip='$zipcode')";
        }
      }
    }
  }
  if($county == "高雄市"){
  
    if($keyword==NULL){
      if($zipcode==NULL){
        if($d_catagory==NULL){ //皆無
          $sql="SELECT * FROM clinic_kaohsiung ";
        }else{  //只有科別
          $sql="SELECT * FROM clinic_kaohsiung WHERE Division LIKE '$d_catagory'";
        }
      }else{
        if($d_catagory==NULL){  //只有郵遞區號
          $sql="SELECT * FROM clinic_kaohsiung WHERE Zip='$zipcode'";
        }else{  //郵遞區號+科別
          $sql="SELECT * FROM clinic_kaohsiung WHERE (Division LIKE '$d_catagory') AND (Zip='$zipcode')";
        }
      }
    }else{
      if($zipcode==NULL){
        if($d_catagory==NULL){  //只有關鍵字
          $sql="SELECT * FROM clinic_kaohsiung WHERE (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )";
        }else{  //關鍵字+科別
          $sql="SELECT * FROM clinic_kaohsiung WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND  (Division LIKE '$d_catagory')";
        }
      }else{
        if($d_catagory==NULL){  //關鍵字+郵遞區號
          $sql="SELECT * FROM clinic_kaohsiung WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND (Zip='$zipcode')";
        }else{  //全有
          $sql="SELECT * FROM clinic_kaohsiung WHERE (Division LIKE '$d_catagory') AND ( (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' ) ) AND (Zip='$zipcode')";
        }
      }
    }
  }
  if($county == "基隆市"){
  
    if($keyword==NULL){
      if($zipcode==NULL){
        if($d_catagory==NULL){ //皆無
          $sql="SELECT * FROM clinic_keelung ";
        }else{  //只有科別
          $sql="SELECT * FROM clinic_keelung WHERE Division LIKE '$d_catagory'";
        }
      }else{
        if($d_catagory==NULL){  //只有郵遞區號
          $sql="SELECT * FROM clinic_keelung WHERE Zip='$zipcode'";
        }else{  //郵遞區號+科別
          $sql="SELECT * FROM clinic_keelung WHERE (Division LIKE '$d_catagory') AND (Zip='$zipcode')";
        }
      }
    }else{
      if($zipcode==NULL){
        if($d_catagory==NULL){  //只有關鍵字
          $sql="SELECT * FROM clinic_keelung WHERE (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )";
        }else{  //關鍵字+科別
          $sql="SELECT * FROM clinic_keelung WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND  (Division LIKE '$d_catagory')";
        }
      }else{
        if($d_catagory==NULL){  //關鍵字+郵遞區號
          $sql="SELECT * FROM clinic_keelung WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND (Zip='$zipcode')";
        }else{  //全有
          $sql="SELECT * FROM clinic_keelung WHERE (Division LIKE '$d_catagory') AND ( (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' ) ) AND (Zip='$zipcode')";
        }
      }
    }
  }
  if($county == "金門縣"){
  
    if($keyword==NULL){
      if($zipcode==NULL){
        if($d_catagory==NULL){ //皆無
          $sql="SELECT * FROM clinic_kinmen ";
        }else{  //只有科別
          $sql="SELECT * FROM clinic_kinmen WHERE Division LIKE '$d_catagory'";
        }
      }else{
        if($d_catagory==NULL){  //只有郵遞區號
          $sql="SELECT * FROM clinic_kinmen WHERE Zip='$zipcode'";
        }else{  //郵遞區號+科別
          $sql="SELECT * FROM clinic_kinmen WHERE (Division LIKE '$d_catagory') AND (Zip='$zipcode')";
        }
      }
    }else{
      if($zipcode==NULL){
        if($d_catagory==NULL){  //只有關鍵字
          $sql="SELECT * FROM clinic_kinmen WHERE (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )";
        }else{  //關鍵字+科別
          $sql="SELECT * FROM clinic_kinmen WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND  (Division LIKE '$d_catagory')";
        }
      }else{
        if($d_catagory==NULL){  //關鍵字+郵遞區號
          $sql="SELECT * FROM clinic_kinmen WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND (Zip='$zipcode')";
        }else{  //全有
          $sql="SELECT * FROM clinic_kinmen WHERE (Division LIKE '$d_catagory') AND ( (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' ) ) AND (Zip='$zipcode')";
        }
      }
    }
  }
  if($county == "連江縣"){
  
    if($keyword==NULL){
      if($zipcode==NULL){
        if($d_catagory==NULL){ //皆無
          $sql="SELECT * FROM clinic_lianjiang ";
        }else{  //只有科別
          $sql="SELECT * FROM clinic_lianjiang WHERE Division LIKE '$d_catagory'";
        }
      }else{
        if($d_catagory==NULL){  //只有郵遞區號
          $sql="SELECT * FROM clinic_lianjiang WHERE Zip='$zipcode'";
        }else{  //郵遞區號+科別
          $sql="SELECT * FROM clinic_lianjiang WHERE (Division LIKE '$d_catagory') AND (Zip='$zipcode')";
        }
      }
    }else{
      if($zipcode==NULL){
        if($d_catagory==NULL){  //只有關鍵字
          $sql="SELECT * FROM clinic_lianjiang WHERE (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )";
        }else{  //關鍵字+科別
          $sql="SELECT * FROM clinic_lianjiang WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND  (Division LIKE '$d_catagory')";
        }
      }else{
        if($d_catagory==NULL){  //關鍵字+郵遞區號
          $sql="SELECT * FROM clinic_lianjiang WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND (Zip='$zipcode')";
        }else{  //全有
          $sql="SELECT * FROM clinic_lianjiang WHERE (Division LIKE '$d_catagory') AND ( (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' ) ) AND (Zip='$zipcode')";
        }
      }
    }
  }
  if($county == "苗栗縣"){
  
    if($keyword==NULL){
      if($zipcode==NULL){
        if($d_catagory==NULL){ //皆無
          $sql="SELECT * FROM clinic_miaoli ";
        }else{  //只有科別
          $sql="SELECT * FROM clinic_miaoli WHERE Division LIKE '$d_catagory'";
        }
      }else{
        if($d_catagory==NULL){  //只有郵遞區號
          $sql="SELECT * FROM clinic_miaoli WHERE Zip='$zipcode'";
        }else{  //郵遞區號+科別
          $sql="SELECT * FROM clinic_miaoli WHERE (Division LIKE '$d_catagory') AND (Zip='$zipcode')";
        }
      }
    }else{
      if($zipcode==NULL){
        if($d_catagory==NULL){  //只有關鍵字
          $sql="SELECT * FROM clinic_miaoli WHERE (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )";
        }else{  //關鍵字+科別
          $sql="SELECT * FROM clinic_miaoli WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND  (Division LIKE '$d_catagory')";
        }
      }else{
        if($d_catagory==NULL){  //關鍵字+郵遞區號
          $sql="SELECT * FROM clinic_miaoli WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND (Zip='$zipcode')";
        }else{  //全有
          $sql="SELECT * FROM clinic_miaoli WHERE (Division LIKE '$d_catagory') AND ( (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' ) ) AND (Zip='$zipcode')";
        }
      }
    }
  }
  if($county == "南投縣"){
  
    if($keyword==NULL){
      if($zipcode==NULL){
        if($d_catagory==NULL){ //皆無
          $sql="SELECT * FROM clinic_nantou ";
        }else{  //只有科別
          $sql="SELECT * FROM clinic_nantou WHERE Division LIKE '$d_catagory'";
        }
      }else{
        if($d_catagory==NULL){  //只有郵遞區號
          $sql="SELECT * FROM clinic_nantou WHERE Zip='$zipcode'";
        }else{  //郵遞區號+科別
          $sql="SELECT * FROM clinic_nantou WHERE (Division LIKE '$d_catagory') AND (Zip='$zipcode')";
        }
      }
    }else{
      if($zipcode==NULL){
        if($d_catagory==NULL){  //只有關鍵字
          $sql="SELECT * FROM clinic_nantou WHERE (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )";
        }else{  //關鍵字+科別
          $sql="SELECT * FROM clinic_nantou WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND  (Division LIKE '$d_catagory')";
        }
      }else{
        if($d_catagory==NULL){  //關鍵字+郵遞區號
          $sql="SELECT * FROM clinic_nantou WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND (Zip='$zipcode')";
        }else{  //全有
          $sql="SELECT * FROM clinic_nantou WHERE (Division LIKE '$d_catagory') AND ( (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' ) ) AND (Zip='$zipcode')";
        }
      }
    }
  }
  if($county == "新北市"){
  
    if($keyword==NULL){
      if($zipcode==NULL){
        if($d_catagory==NULL){ //皆無
          $sql="SELECT * FROM clinic_newtaipei ";
        }else{  //只有科別
          $sql="SELECT * FROM clinic_newtaipei WHERE Division LIKE '$d_catagory'";
        }
      }else{
        if($d_catagory==NULL){  //只有郵遞區號
          $sql="SELECT * FROM clinic_newtaipei WHERE Zip='$zipcode'";
        }else{  //郵遞區號+科別
          $sql="SELECT * FROM clinic_newtaipei WHERE (Division LIKE '$d_catagory') AND (Zip='$zipcode')";
        }
      }
    }else{
      if($zipcode==NULL){
        if($d_catagory==NULL){  //只有關鍵字
          $sql="SELECT * FROM clinic_newtaipei WHERE (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )";
        }else{  //關鍵字+科別
          $sql="SELECT * FROM clinic_newtaipei WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND  (Division LIKE '$d_catagory')";
        }
      }else{
        if($d_catagory==NULL){  //關鍵字+郵遞區號
          $sql="SELECT * FROM clinic_newtaipei WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND (Zip='$zipcode')";
        }else{  //全有
          $sql="SELECT * FROM clinic_newtaipei WHERE (Division LIKE '$d_catagory') AND ( (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' ) ) AND (Zip='$zipcode')";
        }
      }
    }
  }
  if($county == "澎湖縣"){
  
    if($keyword==NULL){
      if($zipcode==NULL){
        if($d_catagory==NULL){ //皆無
          $sql="SELECT * FROM clinic_penghu ";
        }else{  //只有科別
          $sql="SELECT * FROM clinic_penghu WHERE Division LIKE '$d_catagory'";
        }
      }else{
        if($d_catagory==NULL){  //只有郵遞區號
          $sql="SELECT * FROM clinic_penghu WHERE Zip='$zipcode'";
        }else{  //郵遞區號+科別
          $sql="SELECT * FROM clinic_penghu WHERE (Division LIKE '$d_catagory') AND (Zip='$zipcode')";
        }
      }
    }else{
      if($zipcode==NULL){
        if($d_catagory==NULL){  //只有關鍵字
          $sql="SELECT * FROM clinic_penghu WHERE (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )";
        }else{  //關鍵字+科別
          $sql="SELECT * FROM clinic_penghu WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND  (Division LIKE '$d_catagory')";
        }
      }else{
        if($d_catagory==NULL){  //關鍵字+郵遞區號
          $sql="SELECT * FROM clinic_penghu WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND (Zip='$zipcode')";
        }else{  //全有
          $sql="SELECT * FROM clinic_penghu WHERE (Division LIKE '$d_catagory') AND ( (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' ) ) AND (Zip='$zipcode')";
        }
      }
    }
  }
  if($county == "屏東縣"){
    if($keyword==NULL){
      if($zipcode==NULL){
        if($d_catagory==NULL){ //皆無
          $sql="SELECT * FROM clinic_pingtung ";
        }else{  //只有科別
          $sql="SELECT * FROM clinic_pingtung WHERE Division LIKE '$d_catagory'";
        }
      }else{
        if($d_catagory==NULL){  //只有郵遞區號
          $sql="SELECT * FROM clinic_pingtung WHERE Zip='$zipcode'";
        }else{  //郵遞區號+科別
          $sql="SELECT * FROM clinic_pingtung WHERE (Division LIKE '$d_catagory') AND (Zip='$zipcode')";
        }
      }
    }else{
      if($zipcode==NULL){
        if($d_catagory==NULL){  //只有關鍵字
          $sql="SELECT * FROM clinic_pingtung WHERE (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )";
        }else{  //關鍵字+科別
          $sql="SELECT * FROM clinic_pingtung WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND  (Division LIKE '$d_catagory')";
        }
      }else{
        if($d_catagory==NULL){  //關鍵字+郵遞區號
          $sql="SELECT * FROM clinic_pingtung WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND (Zip='$zipcode')";
        }else{  //全有
          $sql="SELECT * FROM clinic_pingtung WHERE (Division LIKE '$d_catagory') AND ( (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' ) ) AND (Zip='$zipcode')";
        }
      }
    }
  }
  if($county == "台中市"){
  
    if($keyword==NULL){
      if($zipcode==NULL){
        if($d_catagory==NULL){ //皆無
          $sql="SELECT * FROM clinic_taichung ";
        }else{  //只有科別
          $sql="SELECT * FROM clinic_taichung WHERE Division LIKE '$d_catagory'";
        }
      }else{
        if($d_catagory==NULL){  //只有郵遞區號
          $sql="SELECT * FROM clinic_taichung WHERE Zip='$zipcode'";
        }else{  //郵遞區號+科別
          $sql="SELECT * FROM clinic_taichung WHERE (Division LIKE '$d_catagory') AND (Zip='$zipcode')";
        }
      }
    }else{
      if($zipcode==NULL){
        if($d_catagory==NULL){  //只有關鍵字
          $sql="SELECT * FROM clinic_taichung WHERE (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )";
        }else{  //關鍵字+科別
          $sql="SELECT * FROM clinic_taichung WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND  (Division LIKE '$d_catagory')";
        }
      }else{
        if($d_catagory==NULL){  //關鍵字+郵遞區號
          $sql="SELECT * FROM clinic_taichung WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND (Zip='$zipcode')";
        }else{  //全有
          $sql="SELECT * FROM clinic_taichung WHERE (Division LIKE '$d_catagory') AND ( (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' ) ) AND (Zip='$zipcode')";
        }
      }
    }
  }
  if($county == "台南市"){
  
    if($keyword==NULL){
      if($zipcode==NULL){
        if($d_catagory==NULL){ //皆無
          $sql="SELECT * FROM clinic_tainan ";
        }else{  //只有科別
          $sql="SELECT * FROM clinic_tainan WHERE Division LIKE '$d_catagory'";
        }
      }else{
        if($d_catagory==NULL){  //只有郵遞區號
          $sql="SELECT * FROM clinic_tainan WHERE Zip='$zipcode'";
        }else{  //郵遞區號+科別
          $sql="SELECT * FROM clinic_tainan WHERE (Division LIKE '$d_catagory') AND (Zip='$zipcode')";
        }
      }
    }else{
      if($zipcode==NULL){
        if($d_catagory==NULL){  //只有關鍵字
          $sql="SELECT * FROM clinic_tainan WHERE (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )";
        }else{  //關鍵字+科別
          $sql="SELECT * FROM clinic_tainan WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND  (Division LIKE '$d_catagory')";
        }
      }else{
        if($d_catagory==NULL){  //關鍵字+郵遞區號
          $sql="SELECT * FROM clinic_tainan WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND (Zip='$zipcode')";
        }else{  //全有
          $sql="SELECT * FROM clinic_tainan WHERE (Division LIKE '$d_catagory') AND ( (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' ) ) AND (Zip='$zipcode')";
        }
      }
    }
  }
  if($county == "台北市"){
  
    if($keyword==NULL){
      if($zipcode==NULL){
        if($d_catagory==NULL){ //皆無
          $sql="SELECT * FROM clinic_taipei ";
        }else{  //只有科別
          $sql="SELECT * FROM clinic_taipei WHERE Division LIKE '$d_catagory'";
        }
      }else{
        if($d_catagory==NULL){  //只有郵遞區號
          $sql="SELECT * FROM clinic_taipei WHERE Zip='$zipcode'";
        }else{  //郵遞區號+科別
          $sql="SELECT * FROM clinic_taipei WHERE (Division LIKE '$d_catagory') AND (Zip='$zipcode')";
        }
      }
    }else{
      if($zipcode==NULL){
        if($d_catagory==NULL){  //只有關鍵字
          $sql="SELECT * FROM clinic_taipei WHERE (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )";
        }else{  //關鍵字+科別
          $sql="SELECT * FROM clinic_taipei WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND  (Division LIKE '$d_catagory')";
        }
      }else{
        if($d_catagory==NULL){  //關鍵字+郵遞區號
          $sql="SELECT * FROM clinic_taipei WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND (Zip='$zipcode')";
        }else{  //全有
          $sql="SELECT * FROM clinic_taipei WHERE (Division LIKE '$d_catagory') AND ( (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' ) ) AND (Zip='$zipcode')";
        }
      }
    }
  }
  if($county == "台東縣"){
  
    if($keyword==NULL){
      if($zipcode==NULL){
        if($d_catagory==NULL){ //皆無
          $sql="SELECT * FROM clinic_taitung ";
        }else{  //只有科別
          $sql="SELECT * FROM clinic_taitung WHERE Division LIKE '$d_catagory'";
        }
      }else{
        if($d_catagory==NULL){  //只有郵遞區號
          $sql="SELECT * FROM clinic_taitung WHERE Zip='$zipcode'";
        }else{  //郵遞區號+科別
          $sql="SELECT * FROM clinic_taitung WHERE (Division LIKE '$d_catagory') AND (Zip='$zipcode')";
        }
      }
    }else{
      if($zipcode==NULL){
        if($d_catagory==NULL){  //只有關鍵字
          $sql="SELECT * FROM clinic_taitung WHERE (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )";
        }else{  //關鍵字+科別
          $sql="SELECT * FROM clinic_taitung WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND  (Division LIKE '$d_catagory')";
        }
      }else{
        if($d_catagory==NULL){  //關鍵字+郵遞區號
          $sql="SELECT * FROM clinic_taitung WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND (Zip='$zipcode')";
        }else{  //全有
          $sql="SELECT * FROM clinic_taitung WHERE (Division LIKE '$d_catagory') AND ( (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' ) ) AND (Zip='$zipcode')";
        }
      }
    }
  }
  if($county == "桃園市"){
  
    if($keyword==NULL){
      if($zipcode==NULL){
        if($d_catagory==NULL){ //皆無
          $sql="SELECT * FROM clinic_taoyuan ";
        }else{  //只有科別
          $sql="SELECT * FROM clinic_taoyuan WHERE Division LIKE '$d_catagory'";
        }
      }else{
        if($d_catagory==NULL){  //只有郵遞區號
          $sql="SELECT * FROM clinic_taoyuan WHERE Zip='$zipcode'";
        }else{  //郵遞區號+科別
          $sql="SELECT * FROM clinic_taoyuan WHERE (Division LIKE '$d_catagory') AND (Zip='$zipcode')";
        }
      }
    }else{
      if($zipcode==NULL){
        if($d_catagory==NULL){  //只有關鍵字
          $sql="SELECT * FROM clinic_taoyuan WHERE (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )";
        }else{  //關鍵字+科別
          $sql="SELECT * FROM clinic_taoyuan WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND  (Division LIKE '$d_catagory')";
        }
      }else{
        if($d_catagory==NULL){  //關鍵字+郵遞區號
          $sql="SELECT * FROM clinic_taoyuan WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND (Zip='$zipcode')";
        }else{  //全有
          $sql="SELECT * FROM clinic_taoyuan WHERE (Division LIKE '$d_catagory') AND ( (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' ) ) AND (Zip='$zipcode')";
        }
      }
    }
  }
  if($county == "宜蘭縣"){
  
    if($keyword==NULL){
      if($zipcode==NULL){
        if($d_catagory==NULL){ //皆無
          $sql="SELECT * FROM clinic_yilan ";
        }else{  //只有科別
          $sql="SELECT * FROM clinic_yilan WHERE Division LIKE '$d_catagory'";
        }
      }else{
        if($d_catagory==NULL){  //只有郵遞區號
          $sql="SELECT * FROM clinic_yilan WHERE Zip='$zipcode'";
        }else{  //郵遞區號+科別
          $sql="SELECT * FROM clinic_yilan WHERE (Division LIKE '$d_catagory') AND (Zip='$zipcode')";
        }
      }
    }else{
      if($zipcode==NULL){
        if($d_catagory==NULL){  //只有關鍵字
          $sql="SELECT * FROM clinic_yilan WHERE (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )";
        }else{  //關鍵字+科別
          $sql="SELECT * FROM clinic_yilan WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND  (Division LIKE '$d_catagory')";
        }
      }else{
        if($d_catagory==NULL){  //關鍵字+郵遞區號
          $sql="SELECT * FROM clinic_yilan WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND (Zip='$zipcode')";
        }else{  //全有
          $sql="SELECT * FROM clinic_yilan WHERE (Division LIKE '$d_catagory') AND ( (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' ) ) AND (Zip='$zipcode')";
        }
      }
    }
  }
  if($county == "雲林縣"){
  
    if($keyword==NULL){
      if($zipcode==NULL){
        if($d_catagory==NULL){ //皆無
          $sql="SELECT * FROM clinic_yunlin ";
        }else{  //只有科別
          $sql="SELECT * FROM clinic_yunlin WHERE Division LIKE '$d_catagory'";
        }
      }else{
        if($d_catagory==NULL){  //只有郵遞區號
          $sql="SELECT * FROM clinic_yunlin WHERE Zip='$zipcode'";
        }else{  //郵遞區號+科別
          $sql="SELECT * FROM clinic_yunlin WHERE (Division LIKE '$d_catagory') AND (Zip='$zipcode')";
        }
      }
    }else{
      if($zipcode==NULL){
        if($d_catagory==NULL){  //只有關鍵字
          $sql="SELECT * FROM clinic_yunlin WHERE (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )";
        }else{  //關鍵字+科別
          $sql="SELECT * FROM clinic_yunlin WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND  (Division LIKE '$d_catagory')";
        }
      }else{
        if($d_catagory==NULL){  //關鍵字+郵遞區號
          $sql="SELECT * FROM clinic_yunlin WHERE ((Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' )) AND (Zip='$zipcode')";
        }else{  //全有
          $sql="SELECT * FROM clinic_yunlin WHERE (Division LIKE '$d_catagory') AND ( (Address LIKE '%$keyword%' ) OR (H_name LIKE '%$keyword%' ) ) AND (Zip='$zipcode')";
        }
      }
    }
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
    array_push($return_arr,$row_array);
  }

  echo json_encode($return_arr);
?>