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
<script type="text/javascript">
function validateid(fld) {
		var error = "";
		var illegalChars = /^[0-9]+$/; // allow letters, numbers, and underscores
	 
		if (fld.value == "") {
			
			error = " -You Didn't Enter custormer Id.\n";
		} else if (!illegalChars.test(fld.value)) {
			
			error = " -The custormer id only nuber.\n";
		} else {
			fld.style.background = 'White';
		}
		return error;
	}
function validateFirstname(fld) {
		var error = "";
		var illegalChars = /^[a-zA-Z]+$/; // allow letters, numbers, and underscores
	 
		if (fld.value == "") {
			
			error = " -You Didn't Enter First Name.\n";
		} else if ((fld.value.length < 4) || (fld.value.length > 15)) {
			
			error = " -The First Name Must Be More Than 4 Characters.\n";
		}  else {
			fld.style.background = 'White';
		}
		return error;
	}

function validatesex(fld) {
		var error = "";
		var illegalChars = /^[a-zA-Z]+$/; // allow letters, numbers, and underscores
	 
		if (fld.value == "") {
			
			error = " -You Didn't select the sex.\n";
		}  else {
			fld.style.background = 'White';
		}
		return error;
	}

function validatecity(fld) {
		var error = "";
		var illegalChars = /^[a-zA-Z]+$/; // allow letters, numbers, and underscores
	 
		if (fld.value == "") {
			
			error = " -You Didn't Enter city.\n";
		} else if ((fld.value.length < 4) || (fld.value.length > 50)) {
			
			error = " -The city Must Be More Than 4 Characters.\n";
		}  else {
			fld.style.background = 'White';
		}
		return error;
	}
  
 function validatephone(fld) {
		var error = "";
		var illegalChars = /^[0-9]+$/; // allow letters, numbers, and underscores
	 
		if (fld.value == "") {
			
			error = " -You Didn't Enter phone number.\n";
		} else if ((fld.value.length < 10) || (fld.value.length > 10)) {
			
			error = " -Age Must Be 10 digit.\n";
		} else if (!illegalChars.test(fld.value)) {
			
			error = " -The phone Contains Illegal Characters.\n";
		} 
		else {
			fld.style.background = 'White';
		}
		return error;
	}
	
 
 function validatevname(fld) {
		var error = "";
		var illegalChars = /^[a-zA-Z]+$/; // allow letters, numbers, and underscores
	 
		if (fld.value == "") {
			
			error = " -You Didn't Enter vehicle Name.\n";
		} else if ((fld.value.length < 2) || (fld.value.length > 25)) {
			
			error = " -The vehicle Name Must Be More Than 4 Characters.\n";
		}  else {
			fld.style.background = 'White';
		}
		return error;
	}
	
	function validateplate(fld) {
		var error = "";
		var illegalChars = /^[0-9]+$/; // allow letters, numbers, and underscores
	 
		if (fld.value == "") {
			
			error = " -You Didn't Enter plate number.\n";
		}else {
			fld.style.background = 'White';
		}
		return error;
	}
    
		
	function validatebrand(fld) {
		var error = "";
		var illegalChars = /^[a-zA-Z]+$/; // allow letters, numbers, and underscores
	 
		if (fld.value == "") {
			
			error = " -You Didn't Enter brand.\n";
		} else if ((fld.value.length < 4) || (fld.value.length > 15)) {
			
			error = " -The brand Must Be More Than 4 Characters.\n";
		}  else {
			fld.style.background = 'White';
		}
		return error;
	}
 
 function validatemodel(fld) {
		var error = "";
		var illegalChars = /^[0-9]+$/; // allow letters, numbers, and underscores
	 
		if (fld.value == "") {
			
			error = " -You Didn't Enter model.\n";
		}else if (!illegalChars.test(fld.value)) {
			
			error = " -The model Contains Illegal Characters.\n";
		} else {
			fld.style.background = 'White';
		}
		return error;
	}
    	function validatepriece(fld) {
		var error = "";
		var illegalChars = /^[0-9]+$/; // allow letters, numbers, and underscores
	 
		if (fld.value == "") {
			
			error = " -You Didn't Enter daily price.\n";
		}else if (!illegalChars.test(fld.value)) {
			
			error = " -The daily price Contains Illegal Characters.\n";
		} else {
			fld.style.background = 'White';
		}
		return error;
	}
	
	function validaterdate(fld) {
		var error = "";
		var illegalChars = /^[0-9]+$/; // allow letters, numbers, and underscores
	 
		if (fld.value == "") {
			
			error = " -You Didn't select pickup adte.\n";
		} else {
			fld.style.background = 'White';
		}
		return error;
	}
	
	
	function validateddate(fld) {
		var error = "";
		var illegalChars = /^[0-9]+$/; // allow letters, numbers, and underscores
	 
		if (fld.value == "") {
			
			error = " -You Didn't select dropoff date.\n";
		} else {
			fld.style.background = 'White';
		}
		return error;
	}
	

	
	function validateFormOnSubmit(theForm) {
		var reason = "";
		  reason+=validateid(theForm.customer_id);
		  reason+=validateFirstname(theForm.Customer_Name);
		  reason+=validatesex(theForm.sex);
		  reason+=validatecity(theForm.City);
		  reason+=validatephone(theForm.phone_no);
		  reason+=validatevname(theForm.vehicle_name);
		  reason+=validateplate(theForm.plate_number);
		  reason+=validatebrand(theForm.brand);
		  reason+=validatemodel(theForm.model);
		  reason+=validatepriece(theForm.dailyprice);
		  reason+=validaterdate(theForm.rdate);
		 reason+=validateddate(theForm.ddate);
		 
		      
		  if (reason != "") {
		    alert("Some Fields Need Correction:\n" + reason);
		    return false;
		  }
		
		  return true;
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
 
       	  <li style="padding-left:500px"></li>

</td>
</tr>
</table>
<table width="100" height="718" style="border:1px solid gray style="border:1px solid gray; font-size: 18px; font-family: Verdana, Arial, Helvetica, sans-serif, times-new-roman;"">
<tr>
<td  height="641" width="14" bgcolor="#3C598E" style="border:1px solid gray; font-size: 18px; font-family: Verdana, Arial, Helvetica, sans-serif, times-new-roman;"id="menu-bar"style="border:0px solid #000000" valign="top">
<!--Side Bar-->
<table width="90">
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
<table bgcolor="#eeeeee"style="border:0px solid #000000" width="850" height="639">
<font color="white" size="5px" align="center"> Reservation form</td></tr>
<td valign="top" height="50px"  width="100px" margin-left:7%;>   
<fieldset style=" border-color:	#ffffff; height:700px;">
<input type="hidden" name="role" id="name" value="<?php echo '4'; ?>" />
<table bgcolor="#eeeeee" width="450px" height="400px"id="si" align="center" style="margin-top:40px;">
<form  method='POST' action='reservn.php' onSubmit='return validateFormOnSubmit(this)'>  
 <tr><td font style='font-family:Times New Roman;font-size:14px;line-height:18px;left-align:justify;padding-left:70px; margin-top:0px; '><font color="	#000000"size="5px">
customer_id:</font></p>
<td><input type="text" onBlur="userid_validation(5,12)" name="customer_id" id="customer_id"  placeholder='Customer-id'></input></td></tr>
<tr><td font style='font-family:Times New Roman;font-size:14px;line-height:18px;left-align:justify;padding-left:70px; margin-top:0px; '><font color="	#000000"size="5px">
Customer_Name:</font></p>
<td><input type="text" name="Customer_Name" id="Customer_Name" placeholder='Customer-name'></input></td></tr>
<tr><td font style='font-family:Times New Roman;font-size:18px;line-height:18px;left-align:justify;padding-left:70px; 
margin-top:0px; '>
  <font color="	#ffffFF"size="5px"><font color="#000000"size="5px">Sex :</font></td>
  <td><select name="sex"  id="sex" placeholder='sex' >
  <option></option>
  <option>Male</option>
  <option>Female</option>
</select></td></tr>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<tr><td font style='font-family:Times New Roman;font-size:18px;line-height:18px;left-align:justify;padding-left:70px; 
margin-top:0px; '>
  <font color="	#ffffFF"size="5px"><font color="#000000"size="5px">City :</font></td>
  <td><select name="City"  id="gender" placeholder='City' >
  <option></option>
  <option>Wolaita Sodo</option>
  <option>Arbaminch</option>
  <option>Shashamane</option>
  <option>Hossana</option>
  <option>Hawassa</option>
  <option>Adama</option>
  <option>Addis</option>
  <option>Dire</option>
</select></td></tr>
<tr><td font style='font-family:Times New Roman;font-size:14px;line-height:18px;left-align:justify;padding-left:70px; margin-top:0px; '><p><font color="	#000000"size="5px">phone no:</font>
<td><input type="text" name="phone_no" id="phone_no" placeholder='phone_no'></input></td></tr>
<tr><td font style='font-family:Times New Roman;font-size:14px;line-height:18px;left-align:justify;padding-left:70px; margin-top:0px; '><font color="	#000000"size="5px">vehicle_name:</font></p>
<td><input type="text" name="vehicle_name" id="vehicle_name" placeholder='vehicle_name'></input></td></tr>
<tr><td font style='font-family:Times New Roman;font-size:14px;line-height:18px;left-align:justify;padding-left:70px; margin-top:0px; '><font color="	#000000"size="5px">plate-number:</font></p>
<td><input type="text" name="plate_number" id="plate_number" placeholder='plate-number'></input></td></tr>
<tr><td font style='font-family:Times New Roman;font-size:14px;line-height:18px;left-align:justify;padding-left:70px; margin-top:0px; '><font color="	#000000"size="5px">Brand:</font></p>
<td><input type="text" name="brand" id="brand" placeholder='brand'></input></td></tr>
<tr><td font style='font-family:Times New Roman;font-size:14px;line-height:18px;left-align:justify;padding-left:70px; margin-top:0px; '><font color="	#000000"size="5px">model:</font></p>
<td><input type="text" name="model" id="model" placeholder='model'></input></td></tr>
<tr><td font style='font-family:Times New Roman;font-size:14px;line-height:18px;left-align:justify;padding-left:70px; margin-top:0px; '><font color="	#000000"size="5px">dailyprice:</font></p>
<td><input type="text" name="dailyprice" id="dailyprice" placeholder='dailyprice'></input></td></tr>
<tr><td font style='font-family:Times New Roman;font-size:18px;line-height:18px;left-align:justify;padding-left:70px; margin-top:0px; '><p><font color="	#000000"size="5px">pickupdate:</font></td>
      <!--Source: http://www.javascriptkit.com/script/script2/tengcalendar.shtml -->
      <td><input name="rdate" type=" text" id="rdate" maxlength="10" size="20" value=""> 
        <a href="javascript:NewCal('rdate','MMddyyyy')"> <img src= "Javascript/Tools/Datepicker/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>   
		</td>

<tr><td font style='font-family:Times New Roman;font-size:18px;line-height:18px;left-align:justify;padding-left:70px; margin-top:0px; '><p><font color="	#000000"size="5px">dropoffdate:</font></td>
      <!--Source: http://www.javascriptkit.com/script/script2/tengcalendar.shtml -->
      <td><input name="ddate" type=" text" id="ddate" maxlength="10" size="20" value=""> 
        <a href="javascript:NewCal('ddate','MMddyyyy')"> <img src= "Javascript/Tools/Datepicker/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>   
		</td>
<tr>
  <td font style='font-family:Times New Roman;font-size:18px;line-height:18px;left-align:justify;padding-left:70px; 
  
  margin-top:0px; '><p align="center"><br />
      <input type="submit" />
      <input name="Submit2" type="reset" class="style2" value="Reset" />
      </p>
    <div class="date"> </div>
<p>&nbsp;</p></form>
<!--td width="131" bgcolor="#3C598E"style="border:0px solid #000000" valign="center">
<fieldset style=" border-color:#45565C; text-color:#C39;height:510px;">
<legend><font color="white" size="5px">Advertisement</font></legend>

<img src="images/DSC01857.jpg" height="497" width="115" name="demo" align="center">
</fieldset></font>
</td>
</tr-->
<table>
<tr>
<!--td colspan="3" bgcolor="#000000" height="9" style="border:0px solid #000000"align="center"><p align=center><font color="#ffffff" size="4px" font="font"><a href="face.php"><img src="images/facebook-icon.png" height="35px" width="60px">
<img src="images/youtube.jpg" height="35px" width="60px"></a>&nbsp;copyRight&copy;<font color="green">Online vehicle rental system</font>. Design By <a href="#"><font color="green" >WSU CSIT 4Th year G13 Students</a></font></p>
</tr>
</table></td-->
</tr>
</table>
</body>
</center>
</html>

