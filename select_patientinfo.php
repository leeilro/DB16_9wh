<?php

$servername = "localhost";
$username = "kms312003";
$password = "kim339352";
$dbname = "kms312003";

$p_seq = $_POST["p_seq"];

  $con = mysql_connect($servername,$username,$password)or die('Could not connect: ' . mysql_error());

   mysql_query("set session character_set_connection=utf8;");
   mysql_query("set session character_set_results=utf8;");
   mysql_query("set session character_set_client=utf8;");

   mysql_select_db($dbname);

   $result = mysql_query("select * from patient where p_seq='".$p_seq."'");

   while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
   printf("%s/%s", $row[1], $row[2]);
   }

   mysql_free_result($result);


mysql_close($con);
?>
