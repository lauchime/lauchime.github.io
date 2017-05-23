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

$tablename = 'organization';
$org_id = $_POST ['org_id'];
$org_name = $_POST['org_name'];
$org_address1 = $_POST['org_address1'];
$org_city = $_POST['org_city'];
$org_state = $_POST['org_state'];
$org_zip = $_POST['org_zip'];
$org_website = $_POST['org_website'];

$sql = "INSERT INTO organization VALUES($org_id,'$org_name', '$org_address1', '$org_city', '$org_state', '$org_zip', '$org_website')";

$stmt= oci_parse($conn, $sql);

if($stmt){
echo"<h2> 
New Organizatin Added:
</h2>
<table>
<tr>";
echo "<td>Organization ID:</td>";
echo "<td>$org_id</td>";
echo "</tr>";
echo "<td>Organization Name:</td>";
echo "<td>$org_name</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Organization Address:</td>";
echo "<td>$org_address1</td>";
echo "</tr>";
echo "<td>City:</td>";
echo "<td>$org_city</td>";
echo "</tr>";
echo "<tr>";
echo "<td>State:</td>";
echo "<td>$org_state</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Zip:</td>";
echo "<td>$org_zip</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Website:</td>";
echo "<td>$org_website</td>";
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
</a><a href="showorganization.php">Show Organization</a>
<hr />
		</body>
	</html>