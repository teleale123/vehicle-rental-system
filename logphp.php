<?php
			
	   if (isset($_POST['log'])){ 
	    $fname=$_POST['fname'];
	    $password=$_POST['pass'];
	    $sql ="SELECT * FROM user WHERE fname='$fname' AND password='$pass'";
	    mysql_select_db("vehiclerental",$conn);
		$result = mysql_query($sql,$conn); 
		// TO check that at least one row was returned 
		$rowcheck = mysql_num_rows($result);
		//if($rowcheck>1){
	$row=mysql_fetch_array($result);
		$status=$row['status'];
		 if($row['role']=='manager'){
if($status==1)
		{		 
		$_SESSION['user_id']=$row['user_id'];
         echo "<script>window.location='manager.php';</script>";
		}
else
		{
		echo'<p class="wrong"> Your Account is not active Please contact the system Admin</p>';                                
		   echo' <meta content="15;manager.php" http-equiv="refresh" />';	
		}}		
			else if($row['role']=='employee'){
if($status==1)
		{			
		$_SESSION['user_id']=$row['user_id'];
		echo "<script>window.location='employee.php';</script>";
         //echo "<script>window.location='property_registration.php';</script>";
			}
			else
		{
		echo'<p class="wrong"> Your Account is not active Please contact the system Admin</p>'; 
		echo' <meta content="15;indx.php" http-equiv="refresh" />';
		}}
		
			else if($row['role']=='customer'){
			if($status==1)
		{
		$_SESSION['user_id']=$row['user_id'];
		
        echo "<script>window.location='customer.php';</script>";
		}
		else
		{
		echo'<p class="wrong"> Your Account is not active Please contact the system Admin</p>'; 
		echo' <meta content="15;indx.php" http-equiv="refresh" />';
		}}
		else {
		
		echo'<br>';
       echo'  <p class="wrong">Check Your username or/and Password!</p>';                                
		   echo' <meta content="15;indx.php" http-equiv="refresh" />';	
		}
		}
   //mysql_close($conn);
    ?>