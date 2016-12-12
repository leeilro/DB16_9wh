<?php

$servername = "localhost";
$username = "kms312003";
$password = "kim339352";
$dbname = "kms312003";



  $con = mysql_connect($servername,$username,$password)or die('Could not connect: ' . mysql_error());

 $p_seq = $_POST["p_seq"];
 $Name = $_POST["Name"];
 $RRN = $_POST["RRN"];
 $PhoneNum = $_POST["PhoneNum"];
 $Sex = $_POST["Sex"];
 $Height = $_POST["Height"];
 $Weight = $_POST["Weight"];
 $Pname = $_POST["Pname"];
 $PAge = $_POST["PAge"];
 $Pressure = $_POST["Pressure"];
 $ProNum = $_POST["ProNum"];


   mysql_query("set session character_set_connection=utf8;");
   mysql_query("set session character_set_results=utf8;");
   mysql_query("set session character_set_client=utf8;");

   mysql_select_db($dbname);

   mysql_query("UPDATE `patient` SET `Name`='".$Name."',`RRN`='".$RRN."',`PhoneNum`='".$PhoneNum."',`Sex`='".$Sex."',`Height`='".$Height."',`Weight`='".$Weight."',`Pressure`='".$Pressure."',`Pname`='".$Pname."',`PAge`='".$PAge."',`ProNum`='".$ProNum."' WHERE `p_seq`='".$p_seq."'");



mysql_close($con);
?>
