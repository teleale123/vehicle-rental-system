<?php
session_start();
$conn=mysql_connect("localhost","root","");
mysql_select_db("vehiclerental",$conn);
if($log != "log"){
	header ("Location: Available vehicle.php");
}
$ctrl = $_REQUEST['plate_no'];
$SQL = "DELETE FROM vehicleregistration WHERE plate_no = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'Available vehicle.php'</script>";
?>