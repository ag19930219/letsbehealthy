<?php
  @$UUID=$_GET['UUID'];
  @$Name=$_GET['Name'];
  @$quantity=$_GET['quantity'];
  @$unit=$_GET['unit'];
  @$Time=$_GET['Time'];
  @$MON=$_GET['MON'];
  if($MON=='true'){
    $MON = 1;
  }else{
    $MON = 0;
  }
  @$TUE=$_GET['TUE'];
  if($TUE=='true'){
    $TUE = 1;
  }else{
    $TUE = 0;
  }
  @$WED=$_GET['WED'];
  if($WED=='true'){
    $WED = 1;
  }else{
    $WED = 0;
  }
  @$THU=$_GET['THU'];
  if($THU=='true'){
    $THU = 1;
  }else{
    $THU = 0;
  }
  @$FRI=$_GET['FRI'];
  if($FRI=='true'){
    $FRI = 1;
  }else{
    $FRI = 0;
  }
  @$SAT=$_GET['SAT'];
  if($SAT=='true'){
    $SAT = 1;
  }else{
    $SAT = 0;
  }
  @$SUN=$_GET['SUN'];
  if($SUN=='true'){
    $SUN = 1;
  }else{
    $SUN = 0;
  }
  $link=mysqli_connect('localhost','root','','hospital');
  mysqli_query($link,"SET NAMES UTF8");
  $sql="INSERT INTO reminder(UUID,Name,quantity,unit,Time,MON,TUE,WED,THU,FRI,SAT,SUN) VALUES ('$UUID','$Name','$quantity','$unit','$Time','$MON','$TUE','$WED','$THU','$FRI','$SAT','$SUN')";
  mysqli_query($link,$sql) or die ("無法更新".mysql_error());
?>