<?php

$servername = "localhost";
$username = "kms312003";
$password = "kim339352";
$dbname = "kms312003";


// Create connection
$conn = mysql_connect($servername, $username, $password);
$db_connect = mysql_select_db($dbname,$connect);
$query = 'SELECT * FROM patient';
$result = mysql_query($query,$conn);
$row = mysql_fetch_array($result);
$record = mysql_num_rows($result);
$field = mysql_num_fields($result);
?>

<h2> 검색결과 </h2>
<table width="800" border ="1" cellspacing="0" cellpadding="5">
  <tr align ="center">
    <td>이름</td>
    <td>주민번호</td>
    <td>나이</td>
    <td>123</td>

  </tr>
  <?
  for($i=0;$i<=$record;$i++){
    echo'<tr align="center">';
  //  echo'<td>$row[1]</td>';
    for($j=0;$j<$field;$j++){
      $data=mysql_result($result,$j);
      echo'<td>$data</td>';
    }
    echo'<tr>';

  }
  mysql_close();
  ?>
