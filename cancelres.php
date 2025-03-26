<html>
<?php
$con=mysql_connect('localhost','root','') or die("Faild to connect database".mysql_error());
$db=mysql_select_db('vehiclerental',$con) or die("Database is not connect".mysql_errno());

$Cust_name=$_POST['Cust_name'];
$Cust_id=$_POST['Cust_id'];
$vehicle_name=$_POST['vehicle_name'];
$plate_no=$_POST['plate_no'];
$cause=$_POST['cause'];
$date=date("y/m/d");

$query="INSERT INTO canceledreservations(Cust_name,Cust_id,vehicle_name,plate_no,cause)VALUES ('$Cust_name','$Cust_id','$vehicle_name','$plate_no','$cause');";

$resu=mysql_query($query);
if(!$resu)
{
echo "YOUR CANCEL MESSAGE IS NOT SUBMITED SUCCESSFULLY!!!".mysql_error();
}
else
{
echo "YOUR CANCEL MESSAGE IS SUBMITED SUCCESSFULLY!!!";
}
mysql_close($con);

?>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
<html><a href="cancel reservation.php">BACK</a></html>
</html>

