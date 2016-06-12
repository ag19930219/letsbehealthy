<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="maincss.css" />
    <link rel="Shortcut Icon" type="image/x-icon" href="short_cut.ico"/>
    <title>醫起藥健康 - 選項搜尋</title>
  </head>
  <body>
<?php
$city=$_POST['city'];
$section=$_POST['section'];
	$link=mysqli_connect('localhost','*','*','hospital'); /*星星處請填入資料庫帳號密碼*/
	mysqli_query($link,"SET NAMES UTF8");
  if($section!=NULL){       //如果有選鄉鎮市區
    $sql_search="SELECT zip FROM zip WHERE (city='$city' AND section='$section')";
    $result_search=mysqli_query($link,$sql_search);
    $zip_result=mysqli_fetch_array($result_search);
	  $sql="select * from hospital WHERE zip='$zip_result[0]'";
  if($result=mysqli_query($link,$sql)){
    echo "<table id='tb-border'>";
    echo "<caption>以下為位在「".$city."".$section."」的醫院</caption>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>醫院名稱</th>";
    echo "<th>電話</th>";
    echo "<th>地址</th>";
    echo "</tr>";
    echo "</thead>"; 
    while($row=mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td>".$row[1]."</td>";
      echo "<td>".$row[2]."</td>";
      echo "<td>".$row[4]."</td>";
      echo "</tr>";  
      }
    echo "</table>";    
  }
  $result2=mysqli_query($link,$sql);
  if((mysqli_fetch_row($result2))==False){
      echo "<img src='No_data.png'>";
  }
  }else{                          //如果沒選鄉鎮市區
	  $sql="select * from hospital WHERE Address LIKE '%$city%'";
    if($result=mysqli_query($link,$sql)){
      echo "<table id='tb-border'>";
      echo "<caption>以下為位在「".$city."」的醫院</caption>";
      echo "<thead>";
      echo "<tr>";
      echo "<th>醫院名稱</th>";
      echo "<th>電話</th>";
      echo "<th>地址</th>";
      echo "</tr>";
      echo "</thead>"; 
      while($row=mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$row[1]."</td>";
        echo "<td>".$row[2]."</td>";
        echo "<td>".$row[4]."</td>";
        echo "</tr>";  
      }
      echo "</table>";    
    }
    $result2=mysqli_query($link,$sql);
    if((mysqli_fetch_row($result2))==False){
      echo "<img src='No_data.png'>";
    }
  }
?>
  </body>
</html>