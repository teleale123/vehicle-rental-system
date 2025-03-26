<?php 
mysql_select_db('vehiclerental',mysql_connect('localhost','root',''))or die(mysql_error());
 if(isset($_GET['del'])){
	 $fname=$_GET['del'];
	 	 $sql="Delete from comment where fname=$id";
	  	 $res=mysql_query($sql) or die("Faild".mysql_error());
	 echo"<meta http-equiv='refresh' content='0;url=viewcomment.php'>";
	 
	 }
?>