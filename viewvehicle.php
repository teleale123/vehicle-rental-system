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

        <li><b><a href="#">GenerateReport</a></b>
  <ul>
            <li><b><a href="reservedvehcile.php">RentedVehicle</a></b></li>
            <li><b><a href="viewcomment.php">viewcomment</a></b></li>
			<li><b><a href="Available.php">AvailableVehicle </a></b></li>
			
          </ul>
		  <li><b><a href="logout.php">logout</a></b></li>
		  </li>
        
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
 //print ("<td>" . $row['setquantity'] . "</td>");
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


manager page
</p>
<p><img src="images/images (4).jpg" height="225" width="635" align=center>
</p>

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
</html></a></b>
 
       	  <li style="padding-left:500px"></li>
<!--End Of Main menus-->
</td>
</tr>
</table>
<table style="border:solid gray">
<tr>
<td width="1273" height="205" colspan="3"" valign="top" style="border:0px solid gray">
<!--Slide show-->
    
</body>
</html>