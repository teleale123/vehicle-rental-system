<?php
	include("connect.php");  
 session_start();
if(isset($_SESSION['user_id']))
 {
 $mail=$_SESSION['user_id'];
 } else {
 ?>
<
<!--<script>
  alert('You are not logged In !! Please Login to access this page');
  alert(window.location='loginn.php');
 </script-->
 <?php
}
 ?>
 <?php

$user_id=$_SESSION['user_id'];
$result=mysql_query("select * from user where user_id='$user_id'"); //or die(mysql_error);
mysql_select_db("vehiclerental",$conn);
$row=mysql_fetch_array($result,$conn);
$FirstName=$row['fname'];
$MiddleName=$row['mname'];
?>

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
<td colspan="3" height="40px" width="1000" style="border:0px solid #000000" id="dropdown">
<!--Main Menus-->
<li><b><a href="manager.php">Home</a></b></li>
<li><b><a href="view vehicleimg.php">Vehicle catalog</a></b>
        <li><b><a href="#">GenerateReport</a></b>
  <ul>
            <li><b><a href="Available vehicle.php">Available
			Vehicles </a></b></li>
            <li><b><a href="rentedvehicle.php">Rented
			Vehicles</a></b></li>
			<li><b><a href="reservedvehicle.php">Reserved
			Vehicle </a></b></li>
		    <li><b><a href="canceledreservations.php">Canceled
			reservation</a></b></li>
			<li><b><a href="viewcomment.php">view
			comment</a></b></li>
          </ul>
		  <li><b><a href="logout.php">logout</a></b></li>
		  </li>
    
                    
 <?php echo '<img src="img/people.png" width="40px" height="30px">&nbsp;'.'<font style="text-transform:capitalize;" face="times new roman" color="green" size="3">Wel come Admin,&nbsp;'.$FirstName."&nbsp;".$MiddleName." ".'</font>';?></h1>
<br><br>

<p align="center"><a href="createAc.php" title="Create New Account"><img src="img/createacount.png" style="width:150px;border-radius:15px;padding:10px"></a></p>
<table align='center' valign='top' style='width:500px;border-radius:12px;border:1px solid #51a351; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);'>
<tr>
<th style='height:30px;text-align:center;color:#000;	font-weight:bold;background-color:#51a351;'><font color='white' size='2'>Names</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#51a351;'><font color='white' size='2'>User ID</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#51a351;'><font color='white' size='2'>Sex</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#51a351;'><font color='white' size='2'>Role</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#51a351;'><font color='white' size='2'>Username</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#51a351;'><font color='white' size='2'>Password</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#51a351;'><font color='white' size='2'>Status</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#51a351;'><font color='white' size='2'>Delete</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#51a351;'><font color='white' size='2'>Edit</th>
</tr>  
<?php
   $select = "SELECT * FROM user";
//mysql_select_db("sis",$conn);
$result=mysql_query($select,$conn);
while($row = mysql_fetch_array($result))
  {
$user_id= $row['user_id'];
$fname=$row['fname'];
$mname=$row['mname'];
$sex=$row['sex'];
$user_type=$row['role'];
$username=$row['username'];
$password=$row['password'];
$status=$row['status'];
?>
<tr>
<td><?php echo $fname."&nbsp;".$mname;?></td>
<td><?php echo $row['user_id'];?></td>
<td><?php echo $sex;?></td>
<td><?php echo $user_type;?></td>
<td><?php echo $username;?></td>
<td><?php echo $password;?></td>
<td><?php
						if(($status)=='0')
						{
						?>
                       			 <a href="status.php?status=<?php echo $row['user_id'];?>" onclick="return confirm('Really you activate (<?php echo $fname?>)');">
                        		<img src="IMG/deactivate.png" id="view" width="16" height="16" alt="" />Deactivated </a>
                        <?php
						}
						if(($status)=='1')
						{
						?>
                       			 <a href="status.php?status=<?php echo $row['user_id'];?>" onclick="return confirm('Really you De-activate (<?php echo $fname?>)');"> 
                       			 <img src="IMG/activate.png" width="16" id="view" height="16" alt=""  />Activated</a>
                        <?php
						}
                        ?>
						</td>	
						<?php
						print("<td style='height:30px;' align = 'center' width = '1'><a href = 'deleteuser.php?user_id=".$user_id."'><img width='15px' height='15px' src = 'img/actions-delete.png' title='Delete' onclick='isdelete();'></img></a></td>
		<td style='height:30px;'><a href = 'edituser.php?user_id=".$user_id."'><img src = 'img/actions-edit.png' width='15px' height='15px' title='Edit' ></img></a></td>
		");?>
		</tr>
<?php
  }
print( "</table><br><br><br>");
mysql_close($conn);
?>
<br><br></div>
        </div>
</td>
</tr>

</table>
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
</center>
</body>
</html>