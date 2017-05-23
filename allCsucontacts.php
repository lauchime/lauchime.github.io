<?php
error_reporting (E_ALL ^ E_NOTICE);
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<title>PACES</title>
		<link rel="stylesheet" type="text/css" href="style2.css">
	</head>
	
	<body>

<?php
$conn = oci_connect("luchime", "024", "//168.28.245.66/csuit");

$Tablename = 'CONTACT_CSU';
$Contact_CSU_ID = stripslashes ($_POST['Contact_CSU_ID']);
$Contact_CSU_Name = stripslashes ($_POST['Contact_CSU_Name']);
$Contact_CSU_Phone_Area_Code  = stripslashes ($_POST['Contact_CSU_Phone_Area_Code']);
$Contact_CSU_Phone_Numb = stripslashes($_POST['Contact_CSU_Phone_Numb']);
$Contact_CSU_Phone_Ext = stripslashes ($_POST['Contact_CSU_Phone_Ext']);
$Contact_CSU_Email = stripslashes ($_POST['Contact_CSU_Email']);

$sql = "Insert into CONTACT_CSU Values('$Contact_CSU_ID', '$Contact_CSU_Name', '$Contact_CSU_Phone_Area_Code', '$Contact_CSU_Phone_Numb', '$Contact_CSU_Phone_Ext', '$Contact_CSU_Email')";

$stmt= oci_parse($conn, $sql);

echo "<h1>View Contact Page </h1> <hr />";

if ($stmt) {
	echo "<h2> New contact has been added: </h2>
<table>
	<tr>";
  echo "<td>Contact ID: </td>";
  echo "<td>$Contact_CSU_ID</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Contact_CSU_Name: </td>";
  echo "<td>$Contact_CSU_Name</td>";
  echo "</tr>";
  echo "<td>Contact_CSU_Phone_Area_Code: </td>";
  echo "<td>$Contact_CSU_Phone_Area_Code</td>";
  echo "</tr>";
  echo "<td>Contact_CSU_Phone_Numb </td>";
  echo "<td>$Contact_CSU_Phone_Numb</td>";
  echo "</tr>";
  echo "<td>Contact_CSU_Phone_Ext </td>";
  echo "<td>$Contact_CSU_Phone_Ext</td>";
  echo "<tr>";
  echo "<td>Contact_CSU_Email: </td>";
  echo "<td>$Contact_CSU_Email</td>";
  echo "</tr>";
echo "</table><br />";
}
else {
	exit ("SQL statement error: ". $SQL);
}
oci_execute($stmt, OCI_DEFAULT);
oci_commit($conn);
oci_close($conn);
?>
<br />
<hr />
</body>
<a href="showcsucontact.php">Show Contacts</a>
</html>