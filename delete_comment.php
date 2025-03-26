<?php
session_start();
$conn=mysql_connect("localhost","root","");
mysql_select_db("vehiclerental",$conn);
if($log != "log"){
	header ("Location: viewcomment.php");
}
$ctrl = $_REQUEST['id'];
$SQL = "DELETE FROM comment WHERE id = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'viewcomment.php'</script>";
?>