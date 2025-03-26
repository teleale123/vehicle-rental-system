<?php
	include("connect.php");  
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript">
function isConfirmlog()
  
  {
   var r = confirm('Are you sure you want to log out !!');
   if(!r)
   {
   alert(window.location='view_vehicle.php');
   
   }
   else
   {
     return false;
   }
  }
  
  function check()
  {
   if(document.getElementById("txt_id").value =="")
   {
    alert('Please Enter The ItemId !!'); 
    document.getElementById("txt_id").focus();
    return false;
   }
   if(document.getElementById("txt_mo").value =="")
   {
    alert('Please Enter The Model Of Item !!'); 
    document.getElementById("txt_mo").focus();
    return false;
   }
   if(document.getElementById("txt_name").value =="")
   {
     alert('Please Enter BradName !!'); 
    document.getElementById("txt_name").focus();
    return false;
   }
   if(document.getElementById("txt_size").value =="")
   {
    alert('Please Enter ScreenSize!!'); 
    document.getElementById("txt_size").focus();
    return false;
   }
   if(document.getElementById("txt_pro").value =="")
   {
    alert('Please Enter Processer !!'); 
    document.getElementById("txt_pro").focus();
    return false;
   }
 if(document.getElementById("txt_ram").value =="")
   {
     alert('Please Enter RAM !!'); 
    document.getElementById("txt_ram").focus();
    return false;
   }
   
   
   
   if(document.getElementById("txt_hard").value =="")
   {
     alert('Please Enter The HardDrive !!'); 
    document.getElementById("txt_hard").focus();
    return false;
   }
  
 if(document.getElementById("txt_max").value =="")
   {
     alert('Please Enter MaxScreenResolution!!'); 
    document.getElementById("txt_max").focus();
    return false;
   }
   if(document.getElementById("txt_memory").value =="")
   {
     alert('Please Enter MemorySpeed!!'); 
    document.getElementById("txt_memory").focus();
    return false;
   }
   if(document.getElementById("txt_price").value =="")
   {
     alert('Please Enter Price!!'); 
    document.getElementById("txt_price").focus();
    return false;
   }
   if(document.getElementById("fileimage").value =="")
   {
     alert('Please Browse The image!!'); 
    document.getElementById("fileimage").focus();
    return false;
   }
  }
  </script>
  <script>
  function isdelete()
  {
   var d = confirm('Are you sure you want to Delete !!');
   if(!d)
   {
    alert(window.location='view_vehicle.php');
   }
   else
   {
   return false;
    
   }
  }
  </script>
<title>oh my God</title>
<link rel="icon" type="image/ico" href="images/App Icon.ico"/>
<link rel="stylesheet" href="css/newstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/3.css" type="text/css" media="all" />
    <link href="themes/4/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/4/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
</head>
<body>
<center>
<table style="border:1px solid gray" width="1010px">
<tr>
<td>
<img src="image/ff.png" height="200" width="1110px"></td>
</tr>
<tr>
<td colspan="3" height="40px" width="1030px" style="border:1px solid gray" id="dropdown">
<!--Main Menus-->
<li><b><a href="employee.php">Home</a></b></li>
<!--End Of Main menus-->
</td>
</tr>
</table>
<table style="border:1px solid gray" width="600px">
<tr>
<td height="700px" width="20px" bgcolor="#3C598E" id="menu-bar"style="border:0px solid #000000" valign="top">
<!--Side Bar-->
<table width="25%">
<tr>
 <td>
  <a href="AddVehicle.php"></a>
</td> 
 </tr>
 
 <tr>
 <td>
  <a href="view_vehicle.php"></a>
</td> 
 </tr>
 <tr>
 <td>
  <a href="update_vehicle.php"></a>
</td> 
 </tr>
 <tr>
 <td>
  <a href="changepass.php"></a>
</td> 
 </tr>
  </table>
</td> 
<!--End Of Side Bar-->
</td>
<td width="750px" bgcolor="white" style="border:0px solid #336699" valign="top" >
<br><br>

 <?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("vehiclerental", $con);
//$result = mysql_query("SELECT * FROM reservation");
$result = mysql_query("SELECT * FROM reservation");
if(!$result)
{
echo"Not Reserved!";
}
else
{

echo"<h2 align='left'>Reservedvehicles</h2>";
echo "<table border='1' cellpadding='5' align='left' >
<tr>
<th>customer_id</th>
<th>Customer_Name</th>
<th>sex</th>
<th>City</th>
<th>phone_no</th>
<th>vehicle_name</th>
<th>plate_number</th>
<th>brand</th>
<th>model</th>
<th>dailyprice</th>
<th>rdate</th>
<th>ddate</th>
</tr>";
/*while($row =mysql_fetch_array($result,'mysql_con'))*/
while($row = mysql_fetch_array($result))
{

echo "<tr>";
echo "<td>" . $row['customer_id'] . "</td>";
echo "<td>" . $row['Customer_Name'] . "</td>";
echo "<td>" . $row['sex'] . "</td>";
echo "<td>" . $row['City'] . "</td>";
echo "<td>" . $row['phone_no'] . "</td>";
echo "<td>" . $row['vehicle_name'] . "</td>";
echo "<td>" . $row['plate_number'] . "</td>";
echo "<td>" . $row['brand'] . "</td>";
echo "<td>" . $row['model'] . "</td>";
echo "<td>" . $row['dailyprice'] . "</td>";
echo "<td>" . $row['rdate'] . "</td>";
echo "<td>" . $row['ddate'] . "</td>";
echo "<td >" ."<a href='deletereserv.php customer_id=$row[customer_id]'>Delete</a> ". "</td>";
echo "</tr>";
}}
echo "</table>";
mysql_close($con);
?>	 
 


</td>

</tr>

<td colspan="3" bgcolor="#000000" height="60px" style="border:0px solid #000000"align="center">

<font color="#ffffff" font size="4px" ><p align=left><a href="face.php">

<img src="images/facebook-icon.png" height="35px" width="60px">
<img src="images/youtube.jpg" height="35px" width="60px"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;copyRight&copy;<font size="4px">online rentals. Design By </font><a href="#"><font color="green" >WSU CSIT 4Th year G-13 Students</a></p></font>
</td>
</tr>
</table>
</body>
</center>
</html>


