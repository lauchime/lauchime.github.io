<?php

// Create connection to Oracle
$conn = oci_connect("luchime", "024", "//168.28.245.66/csuit");
if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}
else {
   print "Connected to Oracle!";
}

// Close the Oracle connection
oci_close($conn);

?>