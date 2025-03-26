<?php
	include("connect.php");  
 session_start();
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
<title>ovrs</title>
<link rel="icon" type="image/ico" href="images/App Icon.ico"/>
<link rel="stylesheet" href="css/newstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/3.css" type="text/css" media="all" />
    <link href="themes/4/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/4/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
</head>
<body>
<center>
<table style="border:1px solid gray" width="1412px">
<tr>
<td bgcolor=white  colspan="3" height="10px" style="border:1px solid gray">
<p align="right" bgcolor=red><b><font color="black" size=4px></font></b></p>
</td>
</tr>
<tr>
<td>
<img src="images/admin.jpg" height="150px" width="1414px"></td>
</tr>
<tr>
<td colspan="3" height="40px" width="1332px" style="border:1px solid gray" id="dropdown">
<!--Main Menus-->
<li><b><a href="admin.php">Home</a></b></li>
<li style="padding-left:80px"><b><a href="#">MangageUserAcount</a></b>
  <ul>
            <li><b><a href="create.php"><font=2px>Create user Account</font></a></b></li>
			<li><b><a href="manage.php">Active and directive</a></b></li>
			
          </ul>
		  </li>
		 
       	  <li style="padding-left:800px"><b><a href="logout.php">Logout</a></b></li>
<!--End Of Main menus-->
</td>
</tr>
</table>
<table style="border:1px solid gray" width="1422px">
<tr>
<td height="700px" width="200px" bgcolor="#3C598E" id="menu-bar"style="border:0px solid #000000" valign="top">
<!--Side Bar-->
<table width="25%">
<tr>
 <td>
  <a href="AddVehicle.php">VehicleRegistration</a>
</td> 
 </tr>
 
 <tr>
 <td>
  <a href="view_vehicle.php">ViewRegistration</a>
</td> 
 </tr>
 <tr>
 <td>
  <a href="update_vehicle.php">UpdateVehicleInfo</a>
</td> 
 </tr>
 <tr>
 <td>
  <a href="changepass.php">ChangePassword</a>
</td> 
 </tr>
  </table>
</td> 
<!--End Of Side Bar-->
</td>
<td width="950px" height="700px"bgcolor="white" style="border:0px solid #336699" valign="top" >
<br><br>
<?php
$result = mysql_query("SELECT * FROM vehicleregistration");
echo "<table  border='1px' align=center  width=800px >
<tr>
<th height=40 width=100 bgcolor=#3366CC>Id</th>
<th height=40 width=100 bgcolor=#3366CC>Brand</th>
//<th height=40 width=100 bgcolor=#3366CC>SetQuantity</th>
<th height=40 width=100 bgcolor=#3366CC>DailyPrice</th>
<th height=40 width=100 bgcolor=#3366CC>Model</th>
<th height=40 width=100 bgcolor=#3366CC>Delete</th>
<th height=40 width=100 bgcolor=#3366CC>Edit</th>
</tr>";

while($row = mysql_fetch_array)
  {
  $ctrl = $row['Plate_no'];

  print ("<tr>");
 print ("<td>" . $row['Plate_no'] . "</td>");
  print ("<td>" . $row['brand'] . "</td>");
    print ("<td>" . $row['dayily_price'] . "</td>");
   print ("<td>" . $row['model'] . "</td>");
		print("<td align = 'center' width = '1'><a href = 'delete_vehicle.php?key=".$ctrl."'><img src = 'images/remove.png' border = '0' title='Delete' onclick='isdelete();'></img></a></td>
		<td><a href = 'view_detail.php?key=".$ctrl."'><img src = 'images/BlueOrbSearch.png' width='65px' height='50px' border = '0' title='View' ></img></a></td>
		");
  print ("</tr>");
  }
print( "</table>");

mysql_close($conn);
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
&nbsp;&nbsp;&nbsp;&nbsp;copyRight&copy;<font size="4px">ATTCR Online Reservation System. Design By </font><a href="#"><font color="green" >IT 4Th year Students</a></font></p>
</td>
</tr>
</table>
</body>
</center>
</html>
