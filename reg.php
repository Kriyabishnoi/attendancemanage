<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>REGISTRATION FORM</title>
</head>

<body>
<center>
<h1>REGISTRATION FORM</h1>
<form name="good" action="dbUPDATE.php" method= "post"> 
<table border="0" width="36%">
	<tr>
		<td width="213">Name</td>
		<td><input type="text" name="T1" size="45"></td>
	</tr>
	<tr>
		<td width="213">RFID</td>
		<td><input type="text" name="T2" size="45" value= "<?php echo $_GET['x']; ?>"></td>
	</tr>
	<tr>
		<td width="213">E-Mail</td>
		<td><input type="text" name="T3" size="45"></td>
	</tr>
	<tr>
		<td width="213">AADHAR CARD No.</td>
		<td><input type="text" name="T4" size="45"></td>
	</tr>
	<tr>
		<td width="213">MOBILE NO.</td>
		<td><input type="text" name="T5" size="45"></td>
	</tr>

	<tr>
		<td colspan="2">
		<form method="POST" action="--WEBBOT-SELF--">
			<p align="center"><input type="submit" value="Submit" name="B1"><input type="reset" value="Reset" name="B2"></p>
		</form>
		<p>&nbsp;</td>
	</tr>
</table>
</form>
</center>
</body>

</html>