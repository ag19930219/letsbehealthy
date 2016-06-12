<?php
  @$Urinary_state=$_GET['Urinary_state'];
  @$Respiratory_state=$_GET['Respiratory_state'];
  @$UUID=$_GET['UUID'];
  $link=mysqli_connect('localhost','*','*','hospital'); /*星星處請填入資料庫帳號密碼*/
  mysqli_query($link,"SET NAMES UTF8");
  $sql="SELECT * FROM user_symptom WHERE UUID='$UUID' ";
  $result=mysqli_query($link,$sql);
  $row_array=array();
  $return_arr=array();
  while($row=mysqli_fetch_array($result, MYSQL_ASSOC)){
    $row_array['UUID'] = $row['UUID'];
    $row_array['Respiratory'] = $row['Respiratory'];
    $row_array['Urinary'] = $row['Urinary'];
    array_push($return_arr,$row_array);
  }
  if($return_arr[0][UUID] != null){
  	$sql="UPDATE user_symptom SET Respiratory ='$Respiratory_state' , Urinary='$Urinary_state'  WHERE UUID='$UUID' ";
  }else{
  	$sql="INSERT INTO user_symptom ( UUID, Respiratory, Urinary ) VALUES ( '$UUID','$Respiratory_state', '$Urinary_state' )";
  }
  mysqli_query($link,$sql) or die ("無法更新".mysql_error());
?>