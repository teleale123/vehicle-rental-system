<?php

$con=mysqli_connect("localhost","root","");
if(!$con)
{
die('couldnot connect:'.mysqli_error());
}
//mysqli_select_db('vehiclerental',$con);
if(isset($_POST['submit']) )
{
$cust_id=$_POST['cust_id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$sex=$_POST['sex'];
$mail=$_POST['mail'];
$pass=$_POST['pass'];
$rpass=$_POST['rpass'];
$mobile=$_POST['mobile'];
$city=$_POST['city'];
$role=$_POST['role'];

if($pass==$rpass){
$query="INSERT INTO emp/managerregistration(cust_id ,Fname,Lname,sex,e_mail,password,mobile,city,role)";
$query.="VALUES ('{$cust_id}','{$fname}','{$lname}','{$sex}','{$mail}','{$pass}','{$mobile}','{$city}');";
$result=mysql_query($query);
if(!$result){
echo '<div align="right"><strong><font color="#FF0000"> This E-Mail Is already Existed!!! </font></Strong></div>';
}
else{
  echo '<div align="right"><strong><font color="green"> you have to sucessfuly signup </font></Strong></div>';
}

else{
echo '<div align="right"><strong><font color="#FF0000"> Password Not Match</font></Strong></div>';  
}
mysql_close($conn);
}
?>