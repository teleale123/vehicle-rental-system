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
<title>ovrs</title>
<link rel="icon" type="image/ico" href="images/App Icon.ico"/>
<link rel="stylesheet" href="css/newstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/3.css" type="text/css" media="all" />
    <link href="themes/4/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/4/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
</head>
<body onLoad="timeimgs('1');">
<center>
<table style="border:1px solid gray" width="1400px">
<tr>
<td bgcolor=white colspan="3" height="10px" style="border:1px solid gray">
<p align="right"bgcolor=red><b><font color="black" size=4px>
<?php echo ''."&nbsp;".$Name."&nbsp;".$Lname."&nbsp;".'<font color=white>'."&nbsp;"; ?></font></b></p>
</td></tr>
<tr>
<td>
<img src="image/logo.jpg" height="150px" width="1404px"></td>
</tr>
<tr>
<td colspan="3" height="40px" width="1322px" style="border:1px solid gray" id="dropdown">
<!--Main Menus-->
<li><b><a href="manager.php">Home</a></b></li>

		<li><b><a href="view vehicle">Vehicle catalog</a></b>
 		  <li style="padding-left:900px"><b><a href="login.php">Logout</a></b></li>
<!--End Of Main menus-->
</td>
</tr>
</table>
<table style="border:1px dotted black" width="1408px">
<tr>
<td colspan="3" height="190px" style="border:1px solid gray"" valign="top">
<!--Slide show-->
<div id="sliderFrame">
        <div id="slider">
           <img src="images/product-img1.jpg">
            
         <img src="images/DSC0186a.jpg" />
		  <img src="images/DSCA.jpg" />
		  <img src="images/DSC01870.jpg" />
		   <img src="images/b1.jpg" />
		    <img src="images/b2.jpg" />
			 <img src="images/b3.jpg" />
        </div>
        <!--Custom navigation buttons on both sides-->
        <div class="group1-Wrapper">
            <a onclick="imageSlider.previous()" class="group1-Prev"></a>
            <a onclick="imageSlider.next()" class="group1-Next"></a>
        </div>
        <!--nav bar-->
        <div style="text-align:center;padding:2px;z-index:2;">
            <a onclick="imageSlider.previous()" class="group2-Prev"></a>
            <a id='auto' onclick="switchAutoAdvance()"></a>
            <a onclick="imageSlider.next()" class="group2-Next"></a>
        </div>
    </div>
<!--End of slide show-->
</td>
</tr>
</table>
<table style="border:1px solid gray" width="1409px">
<tr>
<td  height="500px" width="3500px" bgcolor="#3C598E" id="menu-bar" style="border:0px solid #000000" valign="top">
<!--Side Bar-->
<table width="25%">
 
 <tr>
 <td>
  <a href="viewreserve.php">View Reservation</a>
  
</td> 
 </tr>

 <tr>
 <td>
  <a href="viewrent.php">ViewRentRegistration</a>
</td> 
 </tr>
 <tr>
 <td>
  <a href="cancelreservation.php">CancelRentReservation</a>
</td> 
 </tr>
 <tr>
 <td>
  <a href="Rcpchangepass.php">ChangePassword</a>
</td> 
 </tr>
  </table>

</td> 
<!--End Of Side Bar-->
</td>
<td width="450px" style="border:0px solid #336699" valign="top"width="1408px">
<form action="#" method="post">
<table bgcolor="#FFFFFF" style="border:0px solid #000000" width="1150px" height="550px">
<tr><td valign="top">
<br><br>
<table align='center' border="1" style=' -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);'>
<tr>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Fname</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Lname</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Email</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Country</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>City</th>

<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Moble no</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>model</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Brand</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Reservation_date</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>cust_Id </th>

<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Daily_price</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>duration</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>View</th>
</tr>  
</form>
<?php

$result = mysql_query("SELECT * FROM reservation");
if(!$result)
{
echo"Not Reserved!";
}
else
{
while($row = mysql_fetch_array($result))
  {
$ctrl = $row['Plate_no'];
$Fname=$row['fname'];
$LName=$row['lname'];
$e_mail=$row['e_mail'];
$country=$row['country'];
$city=$row['city'];
$mobile_No=$row['mobile_No'];
$model = $row['model'];
$Brand=$row['brand'];
$Reservation_date=$row['Reservation_date'];
$cust_Id=$row['cust_Id'];
$Daily_price=$row['daily_price'];
$duration=$row['duration'];
}
</tr>
</table>

</td>

</tr>

<td colspan="3" bgcolor="#000000" height="60px" style="border:0px solid #000000"align="center">

<font color="#ffffff" font size="4px" ><p align=left><a href="face.php">

<img src="images/facebook-icon.png" height="35px" width="60px">
<img src="images/youtube.jpg" height="35px" width="60px"></a>
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
copy&copy; Attcr Online Reservation System. Design By IT 4Th year Students</p>
</td>
</tr>
</table>
</body>
</center>
</html>