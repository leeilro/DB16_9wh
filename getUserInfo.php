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
    
	$response = array();	
   $result = mysql_query("select * from patient where p_seq='".$seq."'");
	   $row = mysql_fetch_array($result);
			$response['Name'] = urldecode($row['Name']);
			$response['RRN'] = $row['RRN'];
			$response['Age'] = $row['Age'];
			$response['PhoneNum'] = $row['PhoneNum'];
			$response['Height'] = $row['Height'];
			$response['Weight'] = $row['Weight'];
			$response['Sex'] = $row['Sex'];
			$response['Pressure'] = $row['Pressure'];
			$response['Pname'] = $row['Pname'];
			$response['PAge'] = $row['PAge'];
			$response['Pronum'] = $row['Pronum'];
			$response['Relation'] = $row['Relation'];   
echo json_encode(array('data'=>$row));
mysql_free_result($result);
mysql_close($con);

?>
