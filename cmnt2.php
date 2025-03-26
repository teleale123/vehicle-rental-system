<HTML>
<?php
$con=mysql_connect('localhost','root','') or die("Faild to connect database".mysql_error());
$db=mysql_select_db('vehiclerental',$con) or die("Database is not connect".mysql_errno());

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$e_mail=$_POST['email'];
$message=$_POST['message'];
$date=date("y/m/d");


$query="INSERT INTO comment(fname,lname,e_mail,message,time)";
$query.="VALUES ('$fname','$lname','$e_mail','$message','$date');";

$resu=mysql_query($query) or die(mysql_errno());
if($resu)
{
echo "YOUR COMMENT IS SUCCESSFULLY SUBMITED!!!";
}
//else
{
//echo "The Admin is Already Registered";
}

//}
mysql_close($con);
?>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
<html><a href="comment.php">BACK</a></html>
</html>