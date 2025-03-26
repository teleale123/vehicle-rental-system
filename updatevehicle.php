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
    <script src="themes/4/js-image-slider.js" type="text/javascript">
 </script></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
</head>
<body onLoad="timeimgs('1');" >
<center>
<table style="border:solid gray" width="1408px">
<tr>
<td bgcolor=white colspan="3" height="10px" style="border:1px solid gray">
<p align="right"bgcolor=red><b><font color="black" size=4px>
</font></b></p>
</td></tr>
<tr><td>
<img src="image/logo2.png" height="155" width="1846"></td>
</tr>
<tr>
<td colspan="3" height="40px" width="1322px" style="border:0px solid gray" id="dropdown">
<!--Main Menus-->
<li><b><a href="employee.php">Home</a></b></li>
<li><b><a href="#">Vehicle catalog</a></b></li>
<li><b><a href="employee.php">Back</a></b></li>

      </ul>
           	  <!--End Of Main menus-->
</td>
</tr>
</table>
<table style="border:1px solid gray" width="1408px">
<tr>
<td colspan="3" height="190px" style="border:0px solid #336699" valign="top">
<!--Slide show-->
<div id="sliderFrame">
        <div id="slider">
         
            <img src="images/product-img1.jpg">
            <img src="images/bb.jpg" />
         <img src="images/DSC0186a.jpg" />
		  <img src="images/DSCA.jpg" />
		  <img src="images/DSC01901.jpg" />
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
<!--End of slide show-->
</td>
</tr>
</table>
<table style="border:1px solid gray"  width="1411px">
<tr>
<td  height="500px" width="200" bgcolor="#3C598E" id="menu-bar"style="border:0px solid #000000" valign="top">
<!--Side Bar-->
<table width="25%">
 <tr>
 <td>
  <a href="photogalary.php">PhotoGallary</a>
</td> 
 </tr>
 <tr>
 <td>
  <a href="contact Us.php">contactUs</a>

</td> 
 </tr>
   </table>
</td> 
<!--End Of Side Bar-->
<td width="1808" style="border:0px solid #336699" valign="top">
<table bgcolor="#FFFFFF"style="border:0px solid #000000" width="1000px" height="700px">
<tr><td bgcolor="#3366CC" height="50px" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font color="white" size="5px" align="center">updatevehicle form</td></tr>
<tr>

<td valign="top" height="500px"  width="100px" margin-left:7%;> 
	         
<fieldset style=" border-color:	#ffffff; height:700px;">

<input type="hidden" name="role" id="name" value="<?php echo '4'; ?>" />
<table bgcolor="#eeeeee" width="850px" height="500px"id="si" align="center" style="margin-top:40px;">
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
<tr>
  <td font style='font-family:Times New Roman;font-size:18px;line-height:18px;left-align:justify;padding-left:70px; 
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</form>
</p>
    <p align="center">&nbsp; </p>
      <div class="clear"></div>
  </div>
    <div class="clear-10"></div>
    <div align="center"><a class="btn-search" href="#" title="Search Rentals"><span class="border"><span class="mag"></span></span></a></div>
    <div class="clear"></div>
    </div>
  </form>
  </div>
  </div>
  <div id="landing-why-book"></div>
  </div>
  </div>
</div>

</td>
</tr>
</table>
</td>
<td width="200" bgcolor="#3C598E"style="border:0px solid #000000" valign="center">
<fieldset style=" border-color:#45565C; height:510px;">
  <legend><font color="white" size="5px">Advertisement</font></legend>

<img src="images/DSC01870.jpg" height="400px" width="150px" name="demo" align="center">
</fieldset></font>
</td>
</tr>

<td colspan="3" bgcolor="#000000" height="60px" style="border:0px solid #000000"align="center">

<font color="#ffffff" font size="4px" >
<p align=left><a href="face.php">

<img src="images/facebook-icon.png" height="35px" width="60px">
<img src="images/youtube.jpg" height="35px" width="60px"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;copyRight&copy;<font size="4px">ATTCR Online Reservation System. Design By </font><a href="#"><font color="green" >IT 4Th year Students</a></p></font>
</td>
</tr>
</table>
</body>
</center>
</html>



