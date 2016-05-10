<?php
  @$no=$_GET['no'];
  $link=mysqli_connect('localhost','root','','hospital');
  mysqli_query($link,"SET NAMES UTF8");
  $sql="DELETE FROM reminder WHERE no='$no'";
  mysqli_query($link,$sql) or die ("無法更新".mysql_error());
?>