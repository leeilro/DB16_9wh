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

$id = $_POST["id"];
$pw = $_POST["pw"];
$name = $_POST["name"];
$job = $_POST["job"];
$department = $_POST["department"];
$room = $_POST["room"];
$phonenum = $_POST["phonenum"];
$sex = $_POST["sex"];


$sql = "INSERT INTO member (id, pw, name, department, room, phonenum, sex, job) 
   values ('$id', '$pw', '$name', '$department', '$room', '$phonenum', '$sex', '$job')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
