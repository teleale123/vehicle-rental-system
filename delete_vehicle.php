<?php
session_start();
include 'connect.php';
//$user = $_SESSION['email'];
//$log = $_SESSION['password'];
if($log != "log"){
	header ("Location: view_vehicle.php");
}

$ctrl = $_REQUEST['key'];


$SQL = "DELETE FROM add_vehicle WHERE Plate_no = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'view_vehicle.php'</script>";
?>