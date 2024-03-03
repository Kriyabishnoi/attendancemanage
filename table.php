<center>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rfid";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `emp` order by ID DESC";
$result = $conn->query($sql);
?>
<table border="1">
    <tr><td> ID</td><td> NAME</td> <td> RFID </td> <td> E_MAIL</td> <td> AADHAAR</td> <td>MOBILE </td></tr>
<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
<tr><td> <?php echo $row["ID"];  ?></td><td> <?php echo $row["NAME"]; ?></td> <td> <a href="reg.php?x=<?php echo $row["RFID"] ;?>" ><?php echo $row["RFID"] ;?> </a> </td> <td> <?php echo $row["EMAILID"] ;?> </td> <td> <?php echo $row["AADHARCARDNO"] ; ?> </td> <td> <?php echo $row["MOBILENO"] ; ?> </td></tr>
    
  <?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</center>
