<?php

$servername = "localhost";
$username = "kms312003";
$password = "kim339352";
$dbname = "kms312003";

$seq = $_POST["p_seq"];

  $con = mysql_connect($servername,$username,$password)or die('Could not connect: ' . mysql_error());
   
   mysql_query("set session character_set_connection=utf8;");
   mysql_query("set session character_set_results=utf8;");
   mysql_query("set session character_set_client=utf8;");
   
   mysql_select_db($dbname);
    
	$row = "N";
   $result = mysql_query("delete from patient where p_seq='".$seq."'");
	if($result){
		$row = "Y";
	}
echo json_encode(array('data'=>$row));

?>
