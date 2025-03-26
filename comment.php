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
<link href="generic.css" rel="stylesheet" type="text/css" />
	<script language="javascript" type="text/javascript" src="Javascript/Tools/Datepicker/datetimepicker.js">
</script>
<body onLoad="timeimgs('1');">
<center>
<table style="border:1px solid gray" width="635">
<tr>
<td colspan="3" height="100px" style="border:1px solid gray"><img src="image/dd.png" height="200" width="980"></td>
</tr>
<tr>
<td colspan="3" height="40px" width="900" style="border:1px solid gray; font-size: 18px; font-family: Verdana, Arial, Helvetica, sans-serif, times-new-roman;" id="dropdown">
<!--Main Menus-->
<li><b><a href="customer.php">Home</a></b></li>
 
</td>
</tr>
</table>
<table width="100" height="718" style="border:1px solid gray style="border:1px solid gray; font-size: 18px; font-family: Verdana, Arial, Helvetica, sans-serif, times-new-roman;"">
<tr>
<td  height="641" width="14" bgcolor="#3C598E" style="border:1px solid gray; font-size: 18px; font-family: Verdana, Arial, Helvetica, sans-serif, times-new-roman;"id="menu-bar"style="border:0px solid #000000" valign="top">
<!--Side Bar-->
<table width="40">
 <tr>
 <td>
 
</td> 
 </tr>
  </tr><td valign="top" style="border:1px solid #3366CC;border-radius:3px ">
  <h3>Pls select what you want</h>
  <h3>help for customers</h>
  <h3>we are social</h>
  <h3>contact us</h>
  <h3>call us</h>
 
<!--End Of Side Bar-->
<td width="0"></td>
<td width="2" style="border:0px solid #336699" valign="top">
<table bgcolor="#eeeeee"style="border:0px solid #000000" width="100" height="639">
<tr><td width="100" height="633" valign="top">
<form  method='POST' action='cmnt2.php' name="demo" onSubmit="return validateFormOnSubmit(this)">
<input type="hidden" name="role" id="name" value="<?php echo '4'; ?>" />
<table bgcolor="#ffffff" width="550px" height="500px"id="si" align="center" style="margin-top:40px;">
<h><p><font color="#444sd" style='font-family:Times New Roman;font-size:25px;line-height:20px;left-align:justify;padding-left:0px; margin-top:0px; '>Comment Here!!</h>
<tr><td font style='font-family:Times New Roman;font-size:14px;line-height:18px;left-align:justify;padding-left:70px; margin-top:0px; '><font color="	#000000"size="5px">
First Name:</font></p>
<td><input type="text" name="fname" id="fname"  placeholder='First Name'></input></td></tr>
<tr><td font style='font-family:Times New Roman;font-size:14px;line-height:18px;left-align:justify;padding-left:70px; margin-top:0px; '><font color="	#000000"size="5px">
Last Name :</font></p>
<td><input type="text" name="lname" id="lname" placeholder='last Name'></input></td></tr>
<tr><td font style='font-family:Times New Roman;font-size:14px;line-height:18px;left-align:justify;padding-left:70px; margin-top:0px; '><font color="	#000000"size="5px">
E-mail :</font></p>
<td><input type="text" name="email" id="e_mail" placeholder='Email'></input></td></tr>
<tr><td font style='font-family:Times New Roman;font-size:18px;line-height:18px;left-align:justify;padding-left:70px; margin-top:0px; '>
<font color="#000000"size="5px">Message :
<td><textarea name="message" id="message" cols="16" rows="8" placeholder="Enter comment..."></textarea></td>
	</font></td>
<tr><td colspan="4" align="center">
<input name="Submit" type="submit" value="submit">
            <input  type="reset" value="Cancel" /></td></tr></table>

</form>
</fieldset>	
</table>
</form>
<td width="231" bgcolor="#3C598E"style="border:0px solid #000000" valign="center">
<fieldset style=" border-color:#45565C; text-color:#C39;height:510px;">
<legend><font color="white" size="5px">Advertisement</font></legend>

<img src="images/DSC01857.jpg" height="497" width="255" name="demo" align="center">
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

