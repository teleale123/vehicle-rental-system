<?php   
 session_start();
 include("connect.php");
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Online Vehicle Rental System</title>
<link rel="icon" type="image/ico" href="images/App Icon.ico"/>
<link rel="stylesheet" href="css/newstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/3.css" type="text/css" media="all" />
    <link href="themes/4/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/4/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
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
	
</head>
<body onLoad="timeimgs('1');" >
<center>
<table width="1291" height="263" style="border:solid gray">
<tr>
<td width="1277" height="10px" colspan="3" bgcolor=white style="border:1px solid gray">
<p align="right"bgcolor=red><b><font color="black" size=4px>
</td></tr>
<tr>
  <td>
<img src="image/logo2.png" height="155" width="1274"></td>
</tr>
<tr>
<td colspan="3" height="40px" style="border:0px solid gray" id="dropdown">
<!--Main Menus-->
<li><b><a href="indx.php">Home</a></b></li>
 <li><b><a href="#">Select</a></b>
 
       	  <li style="padding-left:500px"></li>
<!--End Of Main menus-->
</td>
</tr>
</table>
<table style="border:solid gray">
<tr>
<td width="1273" height="205" colspan="3"" valign="top" style="border:0px solid gray">
<!--Slide show-->
     
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
#imagelist{
border: thin solid silver;
float:left;
padding:5px;
width:auto;
margin: 0 5px 0 0;
}
p{
margin:0;
padding:0;
text-align: center;
font-style: italic;
font-size: smaller;
text-indent: 0;
}
#caption{
margin-top: 5px;
}
img{
height: 225px;
}
-->   <body>
	<div class="asWrap">
    
    	<div class="asHeader">
    	  <div align="center" class="active">
    	    <div align="left">view and select</div>
    	  </div>
    	</div>
    	<div align="center" class="active">   	  
    	  <div align="left">The vehicle you Want!!!</div>
    	</div>
   	 <style type="text/css">
</style>

<!--form action="addexec.php" method="post" enctype="multipart/form-data" name="addroom">
 Select Image: <br />
 <input type="file" name="image" class="ed"><br />
 Caption<br />
 <input name="caption" type="text" class="ed" id="brnu" />
 <br />
 <input type="submit" name="Submit" value="Upload" id="button1" />
 </form-->
<br />
Photo Archieve
<br />
<br />
<?php
include('config.php');
$result = mysql_query("SELECT * FROM photos");
while($row = mysql_fetch_array($result))
{
echo '<div id="imagelist">';
echo '<p><img src="'.$row['location'].'"></p>';
echo '<p id="caption">'.$row['caption'].' </p>';
echo '</div>';
}
?>

                <div class="asFirstColumnBox">
                	<div class="asColumn asColumnFirst">
					
                	  <p>
                       	  <b><img src="images/ptphoto/100.jpg" alt="" width="150" height="166" style="float:left; padding-right:10px;" title=""/></b>veh-name =TOYOTA</p>
                      <p>plate-no =SN 1001           </p>
                      <p>brand  =TOYOTA</p>
                          <p> model=2003
                          <p>dailyprice=2000 birr                         
                          <p><span class="asColumn"><a href="rentregistration.php">
                      </p>
rent</a> <a href="Reservation.php">reserve</a>
                          <div class="asColumn">
                        <p> <b><img src="images/newp/images8.jpg" alt="" width="252" height="179" style="float:left; padding-right:10px;" title=""/></b>veh-name=SUZUKI</p>
                          <p>plate-no=AA 1002</p>
                          <p>brand=SUZUKI</p>
                          <p> model=2004</p>
                          <p>dailyprice=3000birr</p><a href="rentregistration.php">rent</a> <a href="Reservation.php">reserve</a></p>
                          </div></p>
<div class="asReadMore"></div>
                  </div>
                    <div class="asColumn">
                    	<img src="images/1500_500_P5251478.jpg" alt="" width="200" height="201" style="float:left; padding-right:10px;" title=""/>
                    	<p>veh-name=MINBUS</p>
                        <p>plate-no=SN 1003</p>
                        <p>brand=TOYOTA</p>
                      <p>model=1998</p>
                      <p>dailyprice=1456</p>
                        <h2><a href="rentregistration.php">rent</a></a> <a href="Reservation.php">reserve</a>
                          </p>
                        </h2>
                  </div>
                  <div class="asColumn">
                    	<img src="images/ptphoto/100.jpg" alt="" height="158" style="float:left; padding-right:10px;" title=""/>
                    	<p>veh-name=HILUX</p>
                        <p>plate-no=ET 1004</p>
                         <p>brand=HILUX</p>
                        <p>model=2006</p>
                        <p>dailyprice=2900
                    </p><a href="rentregistration.php">rent</a> <a href="Reservation.php">reserve</a></p></div></div><div class="asSecondColumnBox"><div class="asColumn asColumnFirst"><div class="asColumn">
                  	  </div>
                <div class="asColumn">
                          <p> <b><img src="images/ptphoto/1009.jpg" alt="" width="143" height="161" style="float:left; padding-right:10px;" title=""/></b>veh-name=	TAXI</p>
                          <p>plate-no=SN 1005</p>
                  <p>brand=TOYOTA</p>
                  <p> model=2003</p>
                          <p>dailyprice=1235birr<a href="rentregistration.php">
                  </p>
rent</a> <a href="Reservation.php">reserve</a></p>
              </div>
                <div class="asColumn">
                          <p> <b><img src="images/ptphoto/1009.jpg" alt="" width="150" height="190" style="float:left; padding-right:10px;" title=""/></b>veh-name=ALMERO</p>
                          <p>plate-no=SN 1006</p>
                  <p>brand=TOYOTA</p>
                  <p> model=1995</p>
                  <p>dailyprice=2012birr</p>
                          <p><a href="rentregistration.php">
                  </p>
rent</a> <a href="Reservation.php">reserve</a></p>
                </div>
                <div class="asColumn">
                          <p> <b><img src="images/brand/990734-141x106.jpg" alt="" width="155" height="185" style="float:left; padding-right:10px;" title=""/></b>veh-name=LONGBENCH</p>
                          <p>plate-no=ET 1007</p>
                  <p>brand=SUNLONG</p>
                      <p> model=2009</p>
                      <p>dailyprice=4000birr</p>
                      <p><a href="rentregistration.php">
                  </p>
rent</a> <a href="Reservation.php">reserve</a> </p>
                </div>
              <div class="asColumn">
                          <p> <b><img src="images/newp/mini-bus-414x232.jpg" alt="" width="183" height="232" style="float:left; padding-right:10px;" title=""/></b>veh-name=MINBUS</p>
                          <p>plate-no=AA 1008</p>
                  <p>brand=TOYOTA</p>
                  <p> model=2001</p>
                  <p>dailyprice=2015birr</p>
<P><a href="rentregistration.php">rent</a> <a href="Reservation.php">reserve</a></p>
              </div>
<div class="clear"></div>
                        </div>
                        
                        <div class="asReadMore"></div>
                    </div>
                    <div class="asColumn">
                      <p>&nbsp;</p>
                      <p> <div class="asColumn">
                          <p> <b><img src="images/newp/index.jpg" alt="" width="223" height="194" style="float:left; padding-right:10px;" title=""/></a></b>veh-name=skyBus</p>
                          <p>plate-no=ET 1009</p>
                          <p>brand=SUNLONG</p>
                          <p> model=2008</p>
                          <p>dailyprice=5000</p>
                      </div></p>
                <a href="rentregistration.php">
                </p>
rent</a> <a href="Reservation.php">reserve</a>
<p><div class="asColumn">
                          <p> <b><img src="images/newp/images2.jpg" alt="" width="228" height="194" style="float:left; padding-right:10px;" title=""/></b>veh-name=BUS</p>
                          <p>plate-no=ET 1010</p>
                          <p>brand=DAEWO</p>
                          <p> model=2009</p>
                          <p>dailyprice=4000</p>
                </div>
                      <a href="rentregistration.php">
                      </p>
                      rent</a> <a href="Reservation.php">reserve</a>
<p>&nbsp;</p>
                        <div class="asAuthor"><!-- end --></div>
                    </div>
          </div>
      </div>
</div>
        <div class="asFooter">
          <div class="asFooterLeft"></div>
            <div class="asFooterRight"></div>
            <div class="clear"></div>
        </div>
    
    </div>
</body>
</html>