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
<td colspan="3" height="100px" style="border:1px solid gray"><img src="image/ff.png" height="200" width="980"></td>
</tr>
<tr>
<td colspan="3" height="40px" width="900" style="border:1px solid gray; font-size: 18px; font-family: Verdana, Arial, Helvetica, sans-serif, times-new-roman;" id="dropdown">
<!--Main Menus-->
<li><b><a href="Employee.php">Home</a></b></li>
<li><b><a href="view vehicleimg.php">Vehicle catalog</a></b>
       
		  </li>
	        		
</td>
</tr>
</table>
<table width="100" height="718" style="border:1px solid gray style="border:1px solid gray; font-size: 18px; font-family: Verdana, Arial, Helvetica, sans-serif, times-new-roman;"">
<tr>
<td  height="641" width="14" bgcolor="#3C598E" style="border:1px solid gray; font-size: 18px; font-family: Verdana, Arial, Helvetica, sans-serif, times-new-roman;"id="menu-bar"style="border:0px solid #000000" valign="top">
<!--Side Bar-->
<table width="19%" height="267">
 <tr>
 <td><b>Duties/responsiblities of employees is that 
employees can mange all the vehicle informations on the organization and manage the vehicles </p></td> 
 </b></tr>
  </table>
</td> 
 
<!--End Of Side Bar-->
<td width="0"></td>
<td width="2" style="border:0px solid #336699" valign="top">
<table bgcolor="#eeeeee"style="border:0px solid #000000" width="100" height="639">
<tr><td width="100" height="633" valign="top">
<table bgcolor="#FFFFFF"style="border:0px solid #000000" width="510" height="530px">
<tr><td class align="center">
<p><font color="#000000" style='font-family:Times New Roman;font-size:25px;line-height:20px;left-align:justify;padding-left:0px; margin-top:0px; '>
Vehicle registration</p>
<font color="white" size="5px" align="center">vehicle registration form</td></tr>
<tr>

<td valign="top" height="500px"  width="100px" margin-left:7%;> 
	         
<fieldset style=" border-color:	#ffffff; height:700px;">

<input type="hidden" name="role" id="name" value="<?php echo '4'; ?>" />
<table bgcolor="#eeeeee" width="250px" height="500px"id="si" align="center" style="margin-top:40px;">
<form action="vehreg.php" method="post" name="frmMain" id="frmMain">
  <cfif IsDefined("form.SelectedDate")>
  
<tr><td font style='font-family:Times New Roman;font-size:14px;line-height:18px;left-align:justify;padding-left:70px; margin-top:0px; '><font color="	#000000"size="5px">
Vehicle-Name:</font></p>
<td><input type="text" name="vehiclename" id="Vehicle-Name" required x-moz-errormessage="Please Enter The Vehicle-Name"placeholder='Vehicle-Name'required></input></td></tr>
<tr><td font style='font-family:Times New Roman;font-size:14px;line-height:18px;left-align:justify;padding-left:70px; margin-top:0px; '><font color="	#000000"size="5px">
plate-number:</font></p>
<td><input type="text" name="plate_no" id="plate-number"required x-moz-errormessage="Please Enter The plate-number" placeholder='plate-number'required></input></td></tr>
<tr><td font style='font-family:Times New Roman;font-size:18px;line-height:18px;left-align:justify;padding-left:70px; margin-top:0px; '><font color="	#000000"size="5px">vehicle-brand :</font></p>
<td><input type="text" name="brand" id="vehicle-brand"required x-moz-errormessage="Please Enter The vehicle-brand" placeholder='vehicle-brand'required></input></td></tr>
<tr><td font style='font-family:Times New Roman;font-size:18px;line-height:18px;left-align:justify;padding-left:70px; margin-top:0px; '><font color="	#000000"size="5px">Vehicle Model :</font></p>
<td><input type="text" name="model" id="Vehicle Model"required x-moz-errormessage="Please Enter The Vehicle Model" placeholder='Vehicle Model'required></input></td></tr>
<tr><td font style='font-family:Times New Roman;font-size:18px;line-height:18px;left-align:justify;padding-left:70px; margin-top:0px; '><font color="	#000000"size="5px">daily-price :</font></p>
<td><input type="text" name="daily_price" id="daily-price"required x-moz-errormessage="Please Enter The daily-price" placeholder='daily-price'required></input></td></tr>
<tr><td font style='font-family:Times New Roman;font-size:18px;line-height:18px;left-align:justify;padding-left:70px; margin-top:0px; '><font color="	#000000"size="5px">status :</font></p>
<td><input type="text" name="status" id="status"required x-moz-errormessage="Please Enter The status" placeholder='status'required></input></td></tr>
       <tr><td colspan="4" align="center">
<input type='submit' value='Submit' name='submitMain' Onclick="return check(this.form);" required/>
<input type='reset' value='clear'/></td></tr></table>
</form>
</table>

<td width="231" bgcolor="#3C598E"style="border:0px solid #000000" valign="center">
<fieldset style=" border-color:#45565C; text-color:#C39;height:510px;">
<legend><font color="white" size="5px">Advertisement</font></legend>

<img src="images/DSC01857.jpg" height="497" width="200" name="demo" align="center">
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

