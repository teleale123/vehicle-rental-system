<?php
$con=mysql_connect('localhost','root','') or die("Faild to connect database".mysql_error());
$db=mysql_select_db('vehiclerental',$con) or die("Database is not connect".mysql_errno());

$customer_id=$_POST['customer_id'];
$Customer_Name=$_POST['Customer_Name'];
$sex=$_POST['sex'];
$City=$_POST['City'];
$phone_no=$_POST['phone_no'];
$vehicle_name=$_POST['vehicle_name'];
$plate_number=$_POST['plate_number'];
$brand=$_POST['brand'];
$model=$_POST['model'];
$dailyprice=$_POST['dailyprice'];
$rdate=$_POST['rdate'];
$ddate=$_POST['ddate'];

$query="INSERT INTO reservation(customer_id ,Customer_Name,sex,City,phone_no,vehicle_name,plate_number,brand,model,dailyprice,rdate,ddate)VALUES('$customer_id','$Customer_Name','$sex','$City','$phone_no','$vehicle_name','$plate_number','$brand','$model','$dailyprice','$rdate','$ddate')";
$resu=mysql_query($query);
if(!$resu)
{
echo "YOUR RESERVATION IS NOT SUBMITED SUCCESSFULLY!!!".mysql_error();
}
else
{
echo"YOUR RESERVATION IS SUBMITED SUCCESSFULLY!!!";
}
mysql_close($con);

?>
<html><a href="reservation.php">BACK</a></html>