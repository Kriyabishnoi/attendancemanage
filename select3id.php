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
$eid=$_POST['x'];


$sql = "SELECT *FROM `table` WHERE CID="."'$eid' ";
$result = $conn->query($sql);
?>
<table border="1">
    <tr><td> ID</td><td> NAME</td> <td> DATE </td> <td>TIME</td> <td>CID</td></tr>
<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
<tr><td> <?php echo $row["ID"];  ?></td><td> <?php echo $row["NAME"]; ?></td> <td> <?php echo $row["DATE"] ;?> </td> <td> <?php echo $row["TIME"] ; ?> </td> <td> <?php echo $row["CID"] ; ?> </td></tr>
    
  <?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>

</table>
</center>