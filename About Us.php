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
<tr><td bgcolor="#ffffff" height="30px" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font color=brown size="5px" align="center">For Local ReservationsWorking Hours </td></tr>
<tr>

<td bgcolor="#eeeeee"border=1px valign="top" height="300px"  width="112" margin-left:7%;> 
	     <p align="justify"><b><font color="#00CCFF">  online vehicle  rental & reservation System
</font></p>
<p><font size="4px">this online vehicle rental system gives services to  customers the reserving experience that they want.</font></p>
<p><font size="4px">Our Service is available online 24 hours a day, seven days a week,</font></p>
<p><font size="4px">meaning no waiting in queues or dealing with inconvenient opening hours. </font></p>
<p><font size="3px">We manage our own stock in our own warehouse, and you will always know what we have got available.</font></p>
<p><font color="#00CCFF">Features of our delivery service include:</font></p>

   <p> <font size="3px">We call ahead of time with an estimated 2 hour delivery window, and call again one hour before arrival.</font></p>
   
	<p><font size="4px">(We will let you know, prior to delivery, if this is going to happen).</font></p>	
</table>
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

