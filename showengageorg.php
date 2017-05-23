<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<title>PACES</title>
		<link rel="stylesheet" type="text/css" href="style2.css">
	</head>
	
	<body LINK="yellow" VLINK="008000">
<?PHP
$conn = oci_connect("luchime", "024", "//168.28.245.66/csuit");

$query = 'select * from engage_org';
$stid = oci_parse($conn, $query);
$r = oci_execute($stid);

// Fetch each row in an associative array
print '<center><table border="1" width="70%" valign="top" bgcolor="#F0F0FF"></center>';
while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
   print '<tr>';
   foreach ($row as $item) {
       print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
   }
   print '</tr>';
}
print '</table>';
?>
<a href="index.html">Back to Milestones</a>||<a href="forms.html">Back to Forms</a>||<a href="paces.html">Go to Home</a>||<a href="reports.html">Go to Reports</a>
</body>

</html>