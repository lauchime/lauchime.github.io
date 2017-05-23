<?php
error_reporting (E_ALL ^ E_NOTICE);
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
		<title>New Contact </title>
		<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>

<?php
//get connection

//create connection
$conn = oci_connect("luchime", "024", "//168.28.245.66/csuit");   

$tablename = 'contact_org';
$org_id = $_POST ['org_id'];
$contact_org_id = $_POST['contact_org_id'];
$contact_org_name = $_POST['contact_org_name'];
$contact_org_phone_area_code = $_POST['contact_org_phone_area_code'];
$contact_org_phone_numb = $_POST['contact_org_phone_numb'];
$contact_org_phone_ext = $_POST['contact_org_phone_numb'];
$contact_org_email = $_POST['contact_org_email'];

$sql = "INSERT INTO contact_org VALUES('$org_id','$contact_org_id', '$contact_org_name', '$contact_org_phone_area_code', '$contact_org_phone_numb', '$contact_org_phone_ext', '$contact_org_email')";

$stmt= oci_parse($conn, $sql);

if($stmt){
echo"<h2> 
New Organization Contact Person Added:
</h2>
<table>
<tr>";
echo "<td>Organization ID:</td>";
echo "<td>$org_id</td>";
echo "</tr>";
echo "<td>Contact Organization ID:</td>";
echo "<td>$contact_org_id</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Organization Name:</td>";
echo "<td>$contact_org_name</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Area Code:</td>";
echo "<td>$contact_org_phone_area_code</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Phone:</td>";
echo "<td>$contact_org_phone_numb</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Email:</td>";
echo "<td>$contact_org_email</td>";
echo "</tr>";
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
</a><a href="showcontactorg.php">Show Organization Contact</a>
<hr />
		</body>
	</html>