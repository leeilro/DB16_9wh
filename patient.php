<?php

$servername = "localhost";
$username = "kms312003";
$password = "kim339352";
$dbname = "kms312003";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$conn->query("set session character_set_connection=utf8;");
$conn->query("set session character_set_results=utf8;");
$conn->query("set session character_set_client=utf8;");

$Name = $_POST["Name"];
$RRN = $_POST["RRN"];
$Age = $_POST["Age"];
$PhoneNum = $_POST["PhoneNum"];
$Height = $_POST["Height"];
$Weight = $_POST["Weight"];
$Sex = $_POST["Sex"];
$Pressure = $_POST["Pressure"];
$Pname = $_POST["Pname"];
$PAge = $_POST["PAge"];
$ProNum = $_POST["ProNum"];
$seq = $_POST["seq"];
$relation = $_POST["relation"];


$sql = "INSERT INTO patient (Name, RRN, Age, PhoneNum, Height, Weight, Sex, Pressure ,Pname, PAge, ProNum, Relation, seq) 
   values ('$Name', '$RRN', '$Age', '$PhoneNum', '$Height', '$Weight','$Sex', '$Pressure', '$Pname', '$PAge', '$ProNum', '$relation', '$seq')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
