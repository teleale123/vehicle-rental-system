<?php
	include("connect.php");  
 session_start();
if(isset($_SESSION['user_id']))
 {
  $mail=$_SESSION['user_id'];
 } else {
 ?>

<!--<script>
  alert('You are not logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script-->
 <?php
 }
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
<style type="text/css">
h1,h2,h3,h4,h5,h6 {
	font-weight: bold;
}
body,td,th {
	color: #000;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
<script type="text/javascript">
function validateid(fld) {
		var error = "";
		var illegalChars = /^[0-9]+$/; // allow letters, numbers, and underscores
	 
		if (fld.value == "") {
			
			error = " -You Didn't Enter employee Id.\n";
		} else if (!illegalChars.test(fld.value)) {
			
			error = " -The employee id only nuber.\n";
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
		} else if (!illegalChars.test(fld.value)) {
			
			error = " -The First Name Contains Illegal Characters.\n";
		} else {
			fld.style.background = 'White';
		}
		return error;
	}


	function validateLastname(fld) {
		var error = "";
		var illegalChars = /^[a-zA-Z]+$/; // allow letters, numbers, and underscores
	 
		if (fld.value == "") {
			
			error = " -You Didn't Enter Last Name.\n";
		} else if ((fld.value.length < 4) || (fld.value.length > 15)) {
			
			error = " -The Last Name Must Be More Than 4 Characters.\n";
		} else if (!illegalChars.test(fld.value)) {
			
			error = " -The Last Name Contains Illegal Characters.\n";
		} else {
			fld.style.background = 'White';
		}
		return error;
	}
 
 function validateagename(fld) {
		var error = "";
		var illegalChars = /^[0-9]+$/; // allow letters, numbers, and underscores
	 
		if (fld.value == "") {
			
			error = " -You Didn't Enter Age.\n";
		} else if ((fld.value.length < 1) || (fld.value.length > 7)) {
			
			error = " -Age Must Be More Than or equal to 1 digit.\n";
		} else if (!illegalChars.test(fld.value)) {
			
			error = " -The Age Contains Illegal Characters.\n";
		} else {
			fld.style.background = 'White';
		}
		return error;
	}

	function validaterolename(fld) {
		var error = "";
		var illegalChars = /^[a-zA-Z]+$/; // allow letters, numbers, and underscores
	 
		if (fld.value == "") {
			
			error = " -Please choose the role.\n";
		} else {
			fld.style.background = 'White';
		}
		return error;
	}
  
  function validateUsername(fld) {
		var error = "";
		var illegalChars = /^[a-zA-Z]+$/; // allow letters, numbers, and underscores
	 
		if (fld.value == "") {
			
			error = " -You Didn't Enter User Name.\n";
		} else if ((fld.value.length < 4) || (fld.value.length > 15)) {
			
			error = " -The User Name Must Be More Than 4 Characters.\n";
		} else if (!illegalChars.test(fld.value)) {
			
			error = " -The User Name Contains Illegal Characters.\n";
		} else {
			fld.style.background = 'White';
		}
		return error;
	}

	function validatePassword(fld) {
		var error = "";
		var illegalChars = /[\W_]/; // allow only letters and numbers 
	 
		if (fld.value == "") {
			
			error = " -You Didn't Enter A Password.\n";
		} else if ((fld.value.length < 6) || (fld.value.length > 15)) {
			error = " -The Password Must Be More Than 6 Characters. \n";
			
		} else if (illegalChars.test(fld.value)) {
			error = " -The Password Contains Illegal Characters.\n";
			
		} else if (!((fld.value.search(/(a-z)+/)) && (fld.value.search(/(0-9)+/)))) {
			error = " -The Password Must Contain At Least One Numeral.\n";
			
		} else {
			fld.style.background = 'White';
		}
	   return error;
	}   

	function trim(s)
	{
	  return s.replace(/^\s+|\s+$/, '');
	}

	function validateEmail(fld) {
		var error="";
		var tfld = trim(fld.value);                        // value of field with whitespace trimmed off
		var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;
		var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;
	   
		if (fld.value == "") {
			
			error = " -You Didn't Enter An Email Address.\n";
		} else if (!emailFilter.test(tfld)) {              //test email for illegal characters
		
			error = " -Please Enter A Valid Email Address.\n";
		} else if (fld.value.match(illegalChars)) {
			
			error = " -The Email Address Contains Illegal Characters.\n";
		} else {
			fld.style.background = 'White';
		}
		return error;
	}
	function equalPassword(e,r)
	{
		var error = "";
		if (r.value == "") {
			
			error = " -You didn't Re Enter A Password.\n";
		} else if (r.value != e.value) {              //test email for illegal characters
			
			error = " -Please Re Enter A Match Password.\n";
		}
		return error;
	}
	function validateFormOnSubmit(theForm) {
		var reason = "";
		  reason+=validateid(theForm.id);
		  reason+=validateFirstname(theForm.fn);
		  reason+=validateLastname(theForm.ln);
		  reason+=validateagename(theForm.age);
		  reason+=validaterolename(theForm.role);
		  reason += validateUsername(theForm.un);
		  reason += validatePassword(theForm.pass);
		  reason += equalPassword(theForm.pass,theForm.rePass);
		  reason += validateEmail(theForm.email);
		  
		      
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
<body onLoad="timeimgs('1');" >
<center>
<table style="border:1px solid gray" width="935">
<tr>
<td colspan="3" height="100px" style="border:1px solid gray"><img src="image/logo2.png" height="191" width="935"></td>
</tr>
<tr>
<td colspan="3" height="40px" width="863" style="border:1px solid gray; font-size: 18px; font-family: Verdana, Arial, Helvetica, sans-serif, times-new-roman;" id="dropdown">
<!--Main Menus-->
<li><b><a href="indx.php">Home</a></b></li>

<li><b><a href="view signup.php">Signup</a></b>
<li>
</td>
</tr>
</table>
<table width="935" height="718" style="border:1px solid gray">
<tr>
<td  height="641" width="104" bgcolor="#3C598E" id="menu-bar"style="border:0px solid #000000" valign="top">
<!--Side Bar-->
<table width="54%">
 <tr>
 
 </tr>
</table>
</td> 
<!--End Of Side Bar-->
<td width="0"></td>
<td width="674" style="border:0px solid #336699" valign="top">
<table bgcolor="#eeeeee"style="border-radius:5px;border:2px solid black;width:150px;height:200px>
<tr><td width="433" height="633" valign="top">
<h1><marquee height="40" behavior="slide" direction="up" scrollamount="3"  align="center"><a href"#">
<font  color="blue"style='font-family:Times New Roman;font-size:30px;line-height:55px;right-align:
justify;padding-left:0px; margin-top:0px;'>

<td width="470px" style="border:0px solid #336699" valign="top">
<table bgcolor="#FFFFFF"style="border:0px solid #000000" width="123" height="764">
<tr><td bgcolor="#3366CC" height="52" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font color="white" size="5px" align="center">Registration form</td></tr>
         <p align="center"><img src="Images/newusers.png" width="301" height="83"/></p>
<td valign="top" height="69"  width="335" margin-left:7%;><table bgcolor="#eeeeee" width="550px" height="500px"id="si" align="center" style="margin-top:40px;">
 <tr><td font style='font-family:Times New Roman;font-size:14px;line-height:18px;left-align:justify;padding-left:70px; 
margin-top:0px; '><font color="	#000000"size="5px">
<form  method='POST' action='connect2.php'onsubmit='return formValidation()'>

<tr>
<td>
<font color="red">*</font><label>First Name</label>
</td>
<td>
<input type="text" name="fname" required/>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>Middle Name</label>
</td>
<td>
<input type="text" name="mname" required/>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>Last Name</label>
</td>
<td>
<input type="text" name="lname" required/>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>User ID</label>
</td>
<td>
<input type="text" name="user_id" required/>
</td>
</tr>
<tr>
                
                <td><font color="red">*</font> Sex:</td>
                <td><input type="radio"  name="sex" value="male" title="choose either male by clicking here" required />
                  Male
                  <input type="radio" name="sex" value="female" title='choose female by clicking here' required />
                  Female</td>
              </tr>
			  <tr>
<td>
<font color="red">*</font><label>Age</label>
</td>
<td>
<input type="text" name="age" maxlength='2' onKeyPress="return isNumberKey(event)" required/>
</td>
</tr>
<tr>
<td>
&nbsp;<label>Phone No</label>
</td>
<td>
<input type="text" name="phone" maxlength='10' onKeyPress="return isNumberKey(event)" />
</td>
</tr>
<tr>
<td>
&nbsp;<label>Email</label>
</td>
<td>
<input type="text" name="email" />
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>User Type</label>
</td>
<td>
<select name="utype" required>
<option></option>
<option >manager</option>
<option >employee</option>
<option >customer</option>
</select>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>User Name</label>
</td>
<td>
<input type="text" name="user" required/>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>Password</label>
</td>
<td>
<input type="password" name="pass" required/>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>Confirm Password</label>
</td>
<td>
<input type="password" name="cpass" required/>
</td>
</tr>
<tr>
<td>
</td>
<td>
<input type="submit" name="ok" value="Register" class="button_example"/>
<input type="reset" value="Reset" class="button_example"/>
</td>
</tr>
<tr>
<td><br>
</td>
<td>
<font color="red">*</font> is Manadatory Field.
</td>
</tr>
</form></table>
<br><br><br><br>
</table>
</form>
</td>

</td>
</tr>
</table>
</td>
<!----td colspan="3" bgcolor="#000000" height="69" style="border:0px solid #000000"align="center">


<p align=center><font color="#ffffff" size="4px" font="font"><a href="http//:www.facebook.com">

<img src="images/facebook-icon.png" height="35px" width="60px">
<img src="images/youtube.jpg" height="35px" width="60px"></a>;copyRight;<font color="green">Online vehicle rental system</font>. Design By <a href="#"><font color="green" >WSU CSIT 4Th year G13 Students</a></font></p>

</table></td---->
</tr>
</table>
</body>
</center>
</html>

