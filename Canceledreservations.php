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
<title>OVRS</title>
<link rel="icon" type="image/ico" href="images/App Icon.ico"/>
<link rel="stylesheet" href="css/newstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/3.css" type="text/css" media="all" />
    <link href="themes/4/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/4/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
</head>
<body onLoad="timeimgs('1');" >
<center>
<table style="border:1px solid gray" width="1388">
<tr>
<td bgcolor=white colspan="3" height="1px" style="border:1px solid gray"> <font></b></li>
<p align="right" color=red ><b><font color="black" size=4px>
</td>
</tr>
<tr>
<td>
<img src="images/admin1.jpg" height="119" width="790"></td>
</tr>
<tr>
<td colspan="3" height="40px" width="1322px" style="border:0px solid #000000" id="dropdown">
<!--Main Menus-->
<li><b><a href="manager.php">Home</a></b></li>

        <li><b><a href="#">Report</a></b></li>
        
<!--End Of Main menus-->
</td>
</tr>
</table>
<table style="border:1px solid gray" width="1400px">
<tr>
<td colspan="3" height="190px" style="border:0px solid #336699" valign="top">
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
            <a onClick="imageSlider.previous()" class="group1-Prev"></a>
            <a onClick="imageSlider.next()" class="group1-Next"></a>
        </div>
        <!--nav bar-->
        <div style="text-align:center;padding:2px;z-index:2;">
            <a onClick="imageSlider.previous()" class="group2-Prev"></a>
            <a id='auto' onClick="switchAutoAdvance()"></a>
            <a onClick="imageSlider.next()" class="group2-Next"></a>
        </div>
    </div>
 <?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("vehiclerental", $con);
$result = mysql_query("SELECT * FROM canceledreservations");
echo"<h2 align='left'>Canceled Reservations</h2>";
echo "<table border='1' cellpadding='5' align='left' >
<tr>
<th>Cust_name</th>
<th>cust_id</th>
<th>vehicle_name</th>
<th>plate_no</th>
<th>cause</th>
</tr>";
while($row = mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['cust_name'] . "</td>";
echo "<td>" . $row['cust_id'] . "</td>";
echo "<td>" . $row['vehicle_name'] . "</td>";
echo "<td>" . $row['plate_no'] . "</td>";
echo "<td>" . $row['cause'] . "</td>";
//echo "<td >" ."<a href='deletecom.php ?del=$row[cust_id]'>Delete</a> ". "</td>";
echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>	 
 

</td>
</tr>
</table>
</td>

</tr>

<td colspan="3" bgcolor="#000000" height="60px" style="border:0px solid #000000"align="center">

<font color="#ffffff" font size="4px" ><p align=left><a href="face.php">

<img src="images/facebook.jpg" height="35px" width="60px"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
copy&copy;online vehicle Rental System. Design By WSU CSIT 4Th year G-13 Students</p>
</td>
</tr>
</table>
</body>
</center>
</html>