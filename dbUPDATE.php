<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rfid";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
$rf1=$_POST["T1"];
$rf2=$_POST["T2"];
$rf3=$_POST["T3"];
$rf4=$_POST["T4"];
$rf5=$_POST["T5"];
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE EMP 
SET EMAILID = '$rf3', NAME = '$rf1', AADHARCARDNO='$rf4' , MOBILENO='$rf5'  WHERE RFID='$rf2'";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>