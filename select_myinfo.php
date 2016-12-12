<?php

$servername = "localhost";
$username = "kms312003";
$password = "kim339352";
$dbname = "kms312003";

$seq = $_POST["seq"];

  $con = mysql_connect($servername,$username,$password)or die('Could not connect: ' . mysql_error());
   
   mysql_query("set session character_set_connection=utf8;");
   mysql_query("set session character_set_results=utf8;");
   mysql_query("set session character_set_client=utf8;");
   
   mysql_select_db($dbname);
    
   $result = mysql_query("select * from member where seq='".$seq."'");
   
   while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
   printf("%s/%s/%s/%s/%s/%s", $row[3], $row[7], $row[6], $row[8], $row[4], $row[5]);  
   }	
   
   mysql_free_result($result);

   
mysql_close($con);
?>
