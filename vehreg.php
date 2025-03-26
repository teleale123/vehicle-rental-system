<html>
<?php
$con=mysql_connect('localhost','root','') or die("Faild to connect database".mysql_error());
$db=mysql_select_db('vehiclerental',$con) or die("Database is not connect".mysql_errno());

$vehiclename=$_POST['vehiclename'];
$plate_no=$_POST['plate_no'];
$brand=$_POST['brand'];
$model=$_POST['model'];
$daily_price=$_POST['daily_price'];
$status=$_POST['status'];

$query="INSERT INTO vehicleregistration(vehiclename,plate_no,brand,model,daily_price,status)";
$query.="VALUES ('$vehiclename','$plate_no','$brand','$model','$daily_price','$status');";
$resu=mysql_query($query);
if(!$resu)
{
echo "THE VEHICLE REGISTERED SUCCESSFULLY!!!".mysql_error();
}
else
{
echo " THE VEHICLE REGISTERED SUCCESSFULLY!!!!!!";
}
mysql_close($con);

?>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
<html><a href="vehicle registration.php">BACK</a></html>
</html>

