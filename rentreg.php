<html>
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
$rent_date=$_POST['rent_date'];
$return_date=$_POST['return_date'];

$query="INSERT INTO rentregistration(customer_id ,Customer_Name,sex,City,phone_no,vehicle_name,plate_number,brand,model,dailyprice,rent_date,return_date)VALUES('$customer_id' ,'$Customer_Name','$sex','$City','$phone_no','$vehicle_name','$plate_number','$brand','$model','$dailyprice','$rent_date','$return_date')";
$resu=mysql_query($query);
if(!$resu)
{
echo "YOUR RENTREGISTRATION IS NOT SUBMITED SUCCESSFULLY!!!".mysql_error();
}
else
{
echo "YOUR RENTREGISTRATION IS SUBMITED SUCCESSFULLY!!!";
}
mysql_close($con);

?>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
<html><a href="rentregistration.php">BACK</a></html>
</html>