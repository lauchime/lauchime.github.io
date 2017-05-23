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

$tablename = 'engagement';
$eng_id = $_POST ['eng_id'];
$eng_name = $_POST['eng_name'];
$eng_type = $_POST['eng_type'];
$eng_desc = $_POST['eng_desc'];
$eng_details = $_POST['eng_details'];
$eng_website = $_POST['eng_website'];
$eng_student_lvl = $_POST['eng_student_lvl'];
$eng_course_level = $_POST['eng_course_level'];
$eng_time_frame = $_POST['eng_time_frame'];
$eng_start_date = $_POST['eng_start_date'];
$eng_end_date = $_POST['eng_end_date'];
$eng_contact_csu_id = $_POST['eng_contact_csu_id'];
$eng_date_updated = $_POST['eng_date_updated'];


$sql = "INSERT INTO ENGAGEMENT VALUES('$eng_id','$eng_name', '$eng_type', '$eng_desc', '$eng_details', '$eng_website', '$eng_student_lvl', '$eng_course_level', '$eng_time_frame', to_date('$eng_start_date','yyyy-mm-dd'), to_date('$eng_end_date','yyyy-mm-dd'), '$eng_contact_csu_id', to_date('$eng_date_updated','yyyy-mm-dd'))";

$stmt= oci_parse($conn, $sql);


echo "<h1>
Engagement  
</h1>
<hr />";

if($stmt){
echo"<h2> 
New Engagement Added:
</h2>
<table>
<tr>";
echo "<td>Engagement ID:</td>";
echo "<td>$eng_id</td>";
echo "</tr>";
echo "<td>Name:</td>";
echo "<td>$eng_name</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Type of Engagement:</td>";
echo "<td>$eng_type</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Engagement Description:</td>";
echo "<td>$eng_desc</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Engagement Details:</td>";
echo "<td>$eng_details</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Website:</td>";
echo "<td>$eng_website</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Student level:</td>";
echo "<td>$eng_student_lvl</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Course Level:</td>";
echo "<td>$eng_course_level</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Time Frame:</td>";
echo "<td>$eng_time_frame</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Start date:</td>";
echo "<td>$eng_start_date</td>";
echo "</tr>";
echo "<tr>";
echo "<td>End Date:</td>";
echo "<td>$eng_end_date</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Contact CSU ID:</td>";
echo "<td>$eng_contact_csu_id</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Engagement Date Update:</td>";
echo "<td>$eng_date_updated</td>";
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
</a><a href="showengagement.php">Show Engagement Event</a>
<hr />
		</body>
	</html>