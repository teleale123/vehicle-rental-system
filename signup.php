<?php   
 session_start();
 include("connect.php");
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
if (document.images) {     // Preloaded images
demo1 = new Image();
demo1.src="images/DSC01855.jpg"
demo2 = new Image();
demo2.src="images/DSC01867.jpg"
demo3 = new Image();
demo3.src="images/DSC01899.jpg"


demo4 = new Image();
demo4.src="images/DSC01909.jpg"
demo5 = new Image();
demo5.src="images/DSC01908.jpg" 
demo6= new Image();
demo6. src="images/DSC01872.jpg"
demo7=new Image();
demo7.src="images/DSC01865.jpg"
}
function timeimgs(numb) {  // Reusable timer
thetimer = setTimeout("imgturn('" +numb+ "')", 2000);
}

function imgturn(numb) {   // Reusable image turner
if (document.images) {

if (numb == "7") {         // This will loop the image
document["demo"].src = eval("demo7.src");
timeimgs('1');
}

else {
document["demo"].src = eval("demo" + numb + ".src");

timeimgs(numb = ++numb);
}
}
}

</script>

<title>ONLINE VEHICLE RENTAL SYSTEM </title>
<link rel="icon" type="image/ico" href="images/App Icon.ico"/>
<link rel="stylesheet" href="css/newstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/3.css" type="text/css" media="all" />
    <link href="themes/4/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/4/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
</head>
<body onLoad="timeimgs('1');">
<center>
<table style="border:1px solid gray" width="635">
<tr>
<td colspan="3" height="100px" style="border:1px solid gray"><img src="image/logo2.png" height="191" width="980"></td>
</tr>
<tr>
<td colspan="3" height="40px" width="900" style="border:1px solid gray; font-size: 18px; font-family: Verdana, Arial, Helvetica, sans-serif, times-new-roman;" id="dropdown">
<!--Main Menus-->
<li><b><a href="indx.php">Home</a></b></li>
<li><b> <a href="About Us.php">About Us</a></b></li>
<li><b><a href="contact Us.php">contactUs</a></b></li>
<li><b> <a href="photogalary.php">PhotoGallary</a></b></li>
<li><b><a href="signup.php">signup</a></li></a></b>
  <tr>
  
 </tr>
</td>
</tr>
</table>

</td>
</tr>
</table>
<table width="100" height="718" style="border:1px solid gray style="border:1px solid gray; font-size: 18px; font-family: Verdana, Arial, Helvetica, sans-serif, times-new-roman;"">
<tr>
<td  height="641" width="14" bgcolor="#3C598E" style="border:1px solid gray; font-size: 18px; font-family: Verdana, Arial, Helvetica, sans-serif, times-new-roman;"id="menu-bar"style="border:0px solid #000000" valign="top">
<!--Side Bar-->
<table width="18">
 <tr>
 <td>
 
</td> 
 </tr>
  </tr><td valign="top" style="border:1px solid #3366CC;border-radius:3px ">
  <h2>Pls login here</h>
<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("vehiclerental",$conn);
if (isset($_POST['Login'])){ 
	    $username=$_POST['un'];
	    $password=$_POST['pw'];
	    $sql ="SELECT * FROM user WHERE username='$username' AND pass='$password'";
	    $result = mysql_query($sql); 
		$rowCheck = mysql_num_rows($result);
		$row=mysql_fetch_array($result);
		if($row['role']=='manager'){ 
		$_SESSION['user_id']=$row['user_id'];
         echo "<script>window.location='manager.php';</script>";
		}	
		 
			else if($row['role']=='customer'){	
		$_SESSION['user_id']=$row['user_id'];
		 echo "<script>window.location='customer.php';</script>";
			} 
			
			
			else if($row['role']=='employee'){
		$_SESSION['user_id']=$row['user_id'];
		echo "<script>window.location='employee.php';</script>";
		}
		
		else {
		
		echo'<br>';
       echo' <p class="wrong" style="color:red;" >Check Your username or/and Password!</p>';                                
		   echo' <meta content="15;indx.php" http-equiv="refresh" />';	
		}
		}
    mysql_close($conn);
?>
                   <form  action="indx.php" method="post" name="form" onSubmit="return validate()"target=_self >
                  <!--form  action="indx.php.php" method="post" name="form" onSubmit="return validate()"target=_self --->
                        <p align="center"><img src="Images/ert.png" width="186" height="83"/></p> 
                        <label><p align="center">Username:&nbsp;&nbsp;</label>  <input type="text" name="un" size="15" placeholder="Name"/><span id="firstnameerror" class="error" ></span> <br />
                        <label><p align="center">Password :&nbsp;&nbsp;</label><input type="password" name="pw"  size="15" placeholder="**********" /><span id="passworderror" class="error" ></span></span><br />
                        <div align="center">
                        <p><input type="submit" value="Login" name="Login" Onclick="return check(this.form);"/>
                        <input name="reset" type="reset" value="Cancel" /></p>
                        <!--p><a href="forgetPasswordAdd.php">Forget Password?</a></p-->
                        </div>
                  </form> 
  </table>
</td> 
<!--End Of Side Bar-->
<td width="0"></td>
<td width="2" style="border:0px solid #336699" valign="top">
<table bgcolor="#eeeeee"style="border:0px solid #000000" width="100" height="639">
<tr><td width="100" height="633" valign="top">
<table bgcolor="#FFFFFF"style="border:0px solid #000000" width="570" height="530px">
<font color="red" size="5px" align="center">Signup form</td></tr>
<p align="left"><img src="Images/newusers.png" width="301" height="83"/></p>
<form  method='POST' action='connect2.php'onsubmit='return formValidation(this)'>
<tr>
<td>
<font color="red">*</font><label>First Name</label>
</td>
<td>
<input type="text" name="fname" required/>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>Middle Name</label>
</td>
<td>
<input type="text" name="mname" required/>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>Last Name</label>
</td>
<td>
<input type="text" name="lname" required/>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>User ID</label>
</td>
<td>
<input type="text" name="user_id" required/>
</td>
</tr>
<tr>
                
                <td><font color="red">*</font> Sex:</td>
                <td><input type="radio"  name="sex" value="male" title="choose either male by clicking here" required />
                  Male
                  <input type="radio" name="sex" value="female" title='choose female by clicking here' required />
                  Female</td>
              </tr>
			  <tr>
<td>
<font color="red">*</font><label>Age</label>
</td>
<td>
<input type="text" name="age" maxlength='2' onKeyPress="return isNumberKey(event)" required/>
</td>
</tr>
<tr>
<td>
&nbsp;<label>Phone No</label>
</td>
<td>
<input type="text" name="phone" maxlength='10' onKeyPress="return isNumberKey(event)" />
</td>
</tr>
<tr>
<td>
&nbsp;<label>Email</label>
</td>
<td>
<input type="text" name="email" />
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>User Type</label>
</td>
<td>
<select name="utype" required>
<option></option>
<!--option >manager</option-->
<!--soption >employee</option-->
<option >customer</option>
</select>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>User Name</label>
</td>
<td>
<input type="text" name="user" required/>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>Password</label>
</td>
<td>
<input type="password" name="pass" required/>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>Confirm Password</label>
</td>
<td>
<input type="password" name="cpass" required/>
</td>
</tr>
<tr>
<td>
</td>
<td>
<input type="submit" name="ok" value="Register" class="button_example"/>
<input type="reset" value="Reset" class="button_example"/>
</td>
</tr>
<tr>
<td><br>
</td>
<td>
<font color="red">*</font> is Manadatory Field.
</td>
</tr>
</form></table>
<td width="231" bgcolor="#3C598E"style="border:0px solid #000000" valign="center">
<fieldset style=" border-color:#45565C; text-color:#C39;height:510px;">
<legend><font color="white" size="5px">Advertisement</font></legend>

<img src="images/DSC01857.jpg" height="497" width="179" name="demo" align="center">
</fieldset></font>
</td>
</tr>

<td colspan="3" bgcolor="#000000" height="69" style="border:0px solid #000000"align="center"><p align=center><font color="#ffffff" size="4px" font="font"><a href="face.php"><img src="images/facebook-icon.png" height="35px" width="60px">
<img src="images/youtube.jpg" height="35px" width="60px"></a>&nbsp;copyRight&copy;<font color="green">Online vehicle rental system</font>. Design By <a href="#"><font color="green" >WSU CSIT 4Th year G13 Students</a></font></p>

</table></td>
</tr>
</table>
</body>
</center>
</html>

