<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="maincss.css" />
    <link rel="Shortcut Icon" type="image/x-icon" href="short_cut.ico"/>
    <title>醫起藥健康 - 詳細資訊</title>
<?php
$H_sn=$_GET['H_sn'];
$link=mysqli_connect('localhost','*','*','hospital'); /*星星處請填入資料庫帳號密碼*/
mysqli_query($link,"SET NAMES UTF8");
$sql="SELECT * FROM hospital WHERE H_sn=$H_sn";
mysqli_query($link,"SET NAMES UTF8");
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_array($result);
echo "<title>醫院詳細資訊 - ".$row[1]." - 醫起藥健康</title>";
echo "</head>";
echo "<body>";
echo "<div class='wrap'>";

echo "<br/>";
echo "<br/>";

  echo "<br/>";
  echo "<div class='top'>";
  echo "<table id='tb-border2'>";
  echo "<caption>以下為「".$row[1]."」的基本資料</caption>";
  echo "<thead>";
  echo "<tr><th>醫院名稱</th>";
  echo "<td>".$row[1]."</td></tr>";
  echo "<tr><th>電話</th>";
  echo "<td>".$row[2]."</td></tr>";
  echo "<tr><th>地址</th>";
  echo "<td>".$row[4]."</td></tr>";
  echo "</thead>";   
  echo "</table>";
  echo "</div>";
  echo "<br/><br/>";
  
  echo "<div class='content'>";
  $sql2="SELECT * FROM division WHERE H_sn=$H_sn";
  mysqli_query($link,"SET NAMES UTF8");
  if($result2=mysqli_query($link,$sql2)){
  echo "<div class='left'>";
  echo "<table id='tb-border'>";
  echo "<thead>";
  echo "<tr>";
  echo "<th>科別</th>";
  echo "</tr>";
  echo "</thead>";
  while($row2=mysqli_fetch_array($result2)){
  echo "<tr>";
  echo "<td>".$row2[2]."</td>";
  echo "</tr>";
  }
  }
  echo "</table>";
  echo "</div>";
  echo "<br/><br/>";
  
  echo "<div class='right'>"; 
  echo "<td>地圖<img src='No_data.png' width='500'></td>";
  echo "</div>";
  echo "<div class='clear'>";
  echo "</div>";
  echo "</div>";
  echo "</div>"; 
?>
</div>
</body>
</html>