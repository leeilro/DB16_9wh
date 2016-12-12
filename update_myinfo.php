<?php

$servername = "localhost";
$username = "kms312003";
$password = "kim339352";
$dbname = "kms312003";



  $con = mysql_connect($servername,$username,$password)or die('Could not connect: ' . mysql_error());
 
 $seq = $_POST["seq"];
 $name = $_POST["name"];
 $sex = $_POST["sex"];
 $phonenum = $_POST["phonenum"];
 $job = $_POST["job"];
 $dept = $_POST["dept"];
 $room = $_POST["room"];
 
 
   mysql_query("set session character_set_connection=utf8;");
   mysql_query("set session character_set_results=utf8;");
   mysql_query("set session character_set_client=utf8;");
   
   mysql_select_db($dbname);
    
   mysql_query("UPDATE `member` SET `name`='".$name."',`department`='".$dept."',`room`='".$room."',`phonenum`='".$phonenum."',`sex`='".$sex."',`job`='".$job."' WHERE `seq`='".$seq."'");


   
mysql_close($con);
?>
