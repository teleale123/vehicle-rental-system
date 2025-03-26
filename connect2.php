<html>
<?php
$con=mysql_connect('127.0.0.1','root','') or die("Faild to connect database".mysql_error());
$db=mysql_select_db('vehiclerental',$con) or die("Database is not connect".mysql_errno());


 $fname=$_POST['fname'];
 $mname=$_POST['mname'];
 $lname=$_POST['lname'];
 $user_id=$_POST['user_id'];
 $sex=$_POST['sex'];
 $age=$_POST['age'];
 $phone=$_POST['phone'];
 $email=$_POST['email'];
 $utype=$_POST['utype'];
 $user=$_POST['user'];
 $pass=$_POST['pass'];
 $cpass=$_POST['cpass'];
 

$query="INSERT INTO user (fname,mname,lname,user_id,sex,age,phone,email,role,username,pass,status)
VALUES('$fname','$mname','$lname','$user_id','$sex','$age','$phone','$email','$utype','$user','$pass','1')";

$resu=mysql_query($query);
if(!$resu)
{
echo "YOUR ARE REGISTERED SUCCESSFULLY!!!".mysql_error();
}
else
{
echo "YOUR ARE REGISTERED SUCCESSFULLY!!!!!!";
}
mysql_close($con);

?>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
<html><a href="signup.php">BACK</a></html>
</html>