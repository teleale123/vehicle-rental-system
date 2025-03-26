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
       <li><b><a href="">Select Your Task</a></b>
  <ul>
           <li><b><a href="Vehicle registration.php">vehicle registration</a></b></li>
			<li><b><a href="Update_vehicle.php">Update vehicle</a></b></li>
			<li><b><a href="add vehicle.php">Add vehicle images to view</a></b></li>
			<li><b><a href="empview.php">view vehicle </a></b></li>
            <li><b><a href="reservedvehicle.php">View reservation</a></b></li>
          </ul>
		  </li>
	        		  </li>
<li><b><a href="logout.php">Logout</a></b></li>
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

<?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("vehiclerental", $con);
$result = mysql_query("SELECT * FROM vehicleregistration");
echo"<h2 align='left'>Available vehicles</h2>";
echo "<table border='1' cellpadding='5' align='left' >
<tr>
<th>vehiclename</th>
<th>plate_no</th>
<th>brand</th>
<th>model</th>
<th>daily_price</th>
<th>status</th>
</tr>";
/*while($row =mysql_fetch_array($result,'mysql_con'))*/
while($row = mysql_fetch_array($result))
{

echo "<tr>";
echo "<td>" . $row['vehiclename'] . "</td>";
echo "<td>" . $row['plate_no'] . "</td>";
echo "<td>" . $row['brand'] . "</td>";
echo "<td>" . $row['model'] . "</td>";
echo "<td>" . $row['daily_price'] . "</td>";
echo "<td>" . $row['status'] . "</td>";
echo "<td >" ."<a href='deletevehicle.php ?del=$row[plate_no]'>Delete</a> ". "</td>";
echo "<td >" ."<a href='vehicle registration.php ?del=$row[plate_no]'>update</a> ". "</td>";

echo "</tr>";
}
echo "</table>";
 //print("<td><a href = 'update_vehicle1.php?key=".$ctrl."'><img src = 'images/edit.jpg' border = '0' title='Edit' ></img></a></td>");
  print ("</tr>");
print( "</table>");

//mysql_close($conn);
?>

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

