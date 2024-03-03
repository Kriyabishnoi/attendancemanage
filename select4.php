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

$dt1=$_POST['y'];
$dt2=$_POST['z'];
echo($dt1);
echo($dt2);
$dt1=str_replace("-", "/", $dt1);
$dt2=str_replace("-", "/", $dt2);
$sql = "SELECT *FROM `table` WHERE DATE<="."'$dt1' AND DATE>="."'$dt2'";
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