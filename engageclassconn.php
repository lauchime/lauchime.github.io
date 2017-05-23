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

$tablename = 'engageclass';
$eng_id = $_POST ['eng_id'];
$class_id = $_POST['class_id'];
$assessment = $_POST['assessment'];
$assessment_date = $_POST['assessment_date'];
$student_participants = $_POST['student_participants'];

$sql = "INSERT INTO ENGAGEMENT VALUES('$eng_id','$class_id', '$assessment', '$assessment_date', '$student_participants',)"; 

$stmt= oci_parse($conn, $sql);

if($stmt){
echo"<h2> 
New Engagement Class Added:
</h2>
<table>
<tr>";
echo "<td>Engagement ID:</td>";
echo "<td>$eng_id</td>";
echo "</tr>";
echo "<td>Class ID:</td>";
echo "<td>$class_id</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Assessment:</td>";
echo "<td>$assessment</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Assessment Date:</td>";
echo "<td>$assessment_date</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Student Participants:</td>";
echo "<td>$student_participants</td>";
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