<?php
$con=mysqli_connect('localhost','root','','vehiclerental');
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$OPassword=$_POST['OPassword'];
$NPassword=$_POST['NPassword'];
$RPassword=$_POST['RPassword'];	
$sex=$_POST['sex'];	
 
$query ="SELECT * FROM adminregistration WHERE id='$id'";
$result = mysqli_query($con,$query);
        if(!$result) 
        {
            echo " <br> The admin is already Registered with this id number ";
        }
		else
		{
$sql="INSERT INTO adminregistration (id, fname, lname, Opassword, Npassword, Rpassword, sex)
VALUES('$id','$fname', '$lname','$OPassword','$NPassword', '$RPassword','$sex')";
$resu=mysqli_query($con,$sql);
if($resu)
{
echo "Admin submitted successfully";
}
else
{
$res="The Admin is Already Registered";
echo nl2br("<b><i><font  color='green'>$res</font></i></b>")."<br>";
}
}
//}
mysqli_close($con);

?>