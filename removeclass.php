<?php
error_reporting (E_ALL ^ E_NOTICE);
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
		<title>New Engagement</title>
		<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>

<?php
//get connection

//create connection
$conn = oci_connect("luchime", "024", "//168.28.245.66/csuit");   

$tablename = 'class';
$query = $_POST ['remove_class'];

$sql = "Delete from $tablename class where class_id='$query' ";

$stmt= oci_parse($conn, $sql);


if($stmt){
echo"<h2> 
A class is been:
</h2>
<table>
<tr>";
echo "<td>Class ID:</td>";
echo "<td>$class_id</td>";
echo "</tr>";
echo "<td>CRN Number:</td>";
echo "<td>$crn_num</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Term:</td>";
echo "<td>$term</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Class Number:</td>";
echo "<td>$class_num</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Class Title:</td>";
echo "<td>$class_title</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Instruction Name:</td>";
echo "<td>$instruction_name</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Student Count:</td>";
echo "<td>$student_count</td>";
echo "</tr>";
echo "<tr>";
echo "</table><br />";
}
else {
	exit("SQL Statement Error: ". $sql);
}
oci_execute($query);
oci_commit($conn);
oci_close($conn);

?>

<br/>
<hr />
<p class="footer">
	<a href="Forms.html">
Return to Forms page
</p>
</a>
<hr />
		</body>
	</html>