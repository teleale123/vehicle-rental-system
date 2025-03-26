<html>
<h2></h2>
<?php
$con=mysql_connect('localhost','root','') or die("Faild to connect database".mysql_error());
$db=mysql_select_db('vehiclerental',$con) or die("Database is not connect".mysql_errno());

$cust_name=$_POST['cust_name'];
$cust_id=$_POST['cust_id'];
$vehicle_name=$_POST['vehiclename'];
$plate_no=$_POST['plate_no'];
$currentdays=$_POST['currentdays'];
$additional_days=$_POST['additional_days'];
$cause=$_POST['cause'];
$date=date("y/m/d");

$query="INSERT INTO updaterent(cust_name,cust_id,vehiclename,plate_no,currentdays,additional_days,cause)VALUES ('$cust_name','$cust_id','vehicle_name','$plate_no','$currentdays','$additional_days','$cause');";

$resu=mysql_query($query);
if(!$resu)
{
echo " YOUR RENTUPDATE IS NOT SUBMITED SUCCESSFULLY!!!".mysql_error();
}
else
{
echo "YOUR UPDATE IS SUBMITED SUCCESSFULLY!!!";
}
mysql_close($con);

?>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
<html><a href="update rent.php">BACK</a></html>
</html>