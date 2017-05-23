<?php
error_reporting (E_ALL ^ E_NOTICE);
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
		<title>PACES</title>
		<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>

<?php
//get connection

//create connection
$conn = oci_connect("luchime", "024", "//168.28.245.66/csuit");   

$tablename = 'location';
$loc_id = $_POST ['loc_id'];
$loc_name = $_POST['loc_name'];
$loc_address1 = $_POST['loc_address1'];
$loc_city = $_POST['loc_city'];
$loc_state = $_POST['loc_state'];
$loc_zip = $_POST['loc_zip'];
$loc_county = $_POST['loc_county'];

$sql = "INSERT INTO location VALUES('$loc_id','$loc_name', '$loc_address1','$loc_city', '$loc_state', '$loc_zip', '$loc_county')";

$stmt= oci_parse($conn, $sql);

if($stmt){
echo"<h2> 
New Location Added:
</h2>
<table>
<tr>";
echo "<td>Location ID:</td>";
echo "<td>$loc_id</td>";
echo "</tr>";
echo "<td>Location Name:</td>";
echo "<td>$loc_name</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Location Address:</td>";
echo "<td>$loc_address1</td>";
echo "</tr>";
echo "<tr>";
echo "<td>City:</td>";
echo "<td>$loc_city</td>";
echo "</tr>";
echo "<tr>";
echo "<td>State:</td>";
echo "<td>$loc_state</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Zip:</td>";
echo "<td>$loc_zip</td>";
echo "</tr>";
echo "<tr>";
echo "<td>County:</td>";
echo "<td>$loc_county</td>";
echo "</tr>";
echo "<tr>";
echo "</table><br />";
}
else {
	exit("SQL Statement Error: ". $sql);
}
oci_execute($stmt,OCI_DEFAULT);
oci_commit($conn);
oci_close($conn);

?>

<br/>
<hr />
<p class="footer">
	<a href="Forms.html">
Return to Forms page
</p>
</a><a href="showlocation.php">Show Location</a>
<hr />
		</body>
	</html>