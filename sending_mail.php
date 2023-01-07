<?php

$a = $_GET['id'];
$b = $_GET['id2'];
$msg = $_GET['id3'];
$status = "pending";
$name = $_GET['id4'];
$ph = $_GET['id5'];
//echo $msg;
echo $b;
//$db = mysqli_connect("localhost","root","","grievence") or die("unable ton connect");
$db = mysqli_connect("localhost","id18827540_vignanletters","Surya@laxmi0056","viglet") or die("unable to connect");
date_default_timezone_set("Asia/kolkata");
$tos = "principal";
$date = date("Y-m-d")." at ".date("h:i");
$sqlw = "select max(id) as maa from laragrv";
$qwert = mysqli_query($db,$sqlw);
while($bvn = mysqli_fetch_array($qwert)){
	$mlp = $bvn['maa'];
}



$rows = $mlp+1;echo $rows;
$nbvdf = "select * from data where ph = '$ph'";
$iopk = mysqli_query($db,$nbvdf);
while($pm = mysqli_fetch_array($iopk)){
	$phkj = $pm['ph'];
	
}
if($phkj == $ph){


$sql = "insert into laragrv (id,froms,tos,message,time,type,status,name,ph) VALUES ('$rows','$a','$tos','$msg','$date','$b','$status','$name','$ph')";

if($b == "student"){
	$org = "Student Registration no : ".$a;
} else if($b == "parent"){
	$org = "Parent name is ".$name."<br> Ward register number is : ".$a;
} else if($b == "staff") {
	$org = "Name of the staff :".$name . "<br>Employee code is : ".$a."<br>Ph number is ".$ph;
} else {
	$org = "Student Registration no : ".$a;
	
}
$we = mysqli_query($db,$sql);
if($we){
	echo "success";
	
	$to = "admin@vignanslara.live";
$subject = "Grievance of id ".strval($rows);
$from="praveen@vignanslara.live";
$header = 'MIME-VERSION:1.0'."\r\n";
$header .= 'Content-type:text/html;charset=iso-8859-1'."\r\n";
$header .='Content-type:image/jpeg;';
$link1 = "http:vignanslara.live/viglet/larag/pstatus.php?id=".$rows;
$link2 = "http:vignanslara.live/viglet/larag/pstatus2.php?id=".$rows;
$html = '
<html>
<head>

<style>

body {
    margin: 0 auto !important;
    padding: 0 !important;
    height: 100% !important;
    width: 100% !important;
    background: #f1f1f1;
}

/* What it does: Stops email clients resizing small text. */
* {
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}

/* What it does: Centers email on Android 4.4 */
div[style*="margin: 16px 0"] {
    margin: 0 !important;
}

/* What it does: Stops Outlook from adding extra spacing to tables. */
table,
td {
    mso-table-lspace: 0pt !important;
    mso-table-rspace: 0pt !important;
}

/* What it does: Fixes webkit padding issue. */
table {
    border-spacing: 0 !important;
    border-collapse: collapse !important;
    table-layout: fixed !important;
    margin: 0 auto !important;
}

/* What it does: Uses a better rendering method when resizing images in IE. */
img {
    -ms-interpolation-mode:bicubic;
}

/* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
a {
    text-decoration: none;
}

/* What it does: A work-around for email clients meddling in triggered links. */
*[x-apple-data-detectors],  /* iOS */
.unstyle-auto-detected-links *,
.aBn {
    border-bottom: 0 !important;
    cursor: default !important;
    color: inherit !important;
    text-decoration: none !important;
    font-size: inherit !important;
    font-family: inherit !important;
    font-weight: inherit !important;
    line-height: inherit !important;
}

/* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
.a6S {
    display: none !important;
    opacity: 0.01 !important;
}

/* What it does: Prevents Gmail from changing the text color in conversation threads. */
.im {
    color: inherit !important;
}

/* If the above doesnt work, add a .g-img class to any image in question. */
img.g-img + div {
    display: none !important;
}

/* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
/* Create one of these media queries for each additional viewport size youd like to fix */

/* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
@media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
    u ~ div .email-container {
        min-width: 320px !important;
    }
}
/* iPhone 6, 6S, 7, 8, and X */
@media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
    u ~ div .email-container {
        min-width: 375px !important;
    }
}
/* iPhone 6+, 7+, and 8+ */
@media only screen and (min-device-width: 414px) {
    u ~ div .email-container {
        min-width: 414px !important;
    }
}

    </style>

    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>

	    /* What it does: Hover styles for buttons */
	    .primary{
	background: #448ef6;
}
.bg_white{
	background: #ffffff;
}
.bg_light{
	background: #fafafa;
}
.bg_black{
	background: #000000;
}
.bg_dark{
	background: rgba(0,0,0,.8);
}
.email-section{
	padding:2.5em;
}

/*BUTTON*/
.btn{
	padding: 5px 15px;
	display: inline-block;
}
.btn.btn-primary{
	border-radius: 30px;
	background: #448ef6;
	color: #ffffff;
}
.btn.btn-white{
	border-radius: 30px;
	background: #ffffff;
	color: #000000;
}
.btn.btn-white-outline{
	border-radius: 30px;
	background: transparent;
	border: 1px solid #fff;
	color: #fff;
}

h1,h2,h3,h4,h5,h6{
	font-family: Josefin Sans, sans-serif;
	color: #000000;
	margin-top: 0;
	font-weight: 400;
}

body{
	font-family: Josefin Sans, sans-serif;
	font-weight: 400;
	font-size: 15px;
	line-height: 1.8;
	color: rgba(0,0,0,.4);
}

.logo{
	margin: 0;
	display: inline-block;
	position: absolute;
	top: 10px;
	left: 0;
	right: 0;
	margin-bottom: 0;
}

.logo a{
	color: #fff;
	font-size: 24px;
	font-weight: 700;
	text-transform: uppercase;
	font-family: Josefin Sans, sans-serif;
	display: inline-block;
	border: 2px solid #fff;
	line-height: 1.3;
	padding: 10px 15px 4px 15px;
	margin: 0;
}
.logo h1 a span{
	line-height: 1;
}

.navigation{
	padding: 0;
}
.navigation li{
	list-style: none;
	display: inline-block;;
	margin-left: 5px;
	font-size: 13px;
	font-weight: 500;
}
.navigation li a{
	color: rgba(0,0,0,.4);
}









</style>




</head>
<img src = "http://vignanslara.live/viglet/mi2.jpeg">

<body>

<div style="max-width: 600px; margin: 0 auto;" class="email-container">
    	<!-- BEGIN BODY -->
      <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
	      <tr>
          <td valign="middle" class="hero bg_white" style="background-image: url(mi2.jpeg); background-size: cover; height: 400px;">
          	<div class="overlay"></div>
            
          </td>
	      </tr><!-- end tr -->
	      <tr>
	        <td class="bg_white email-section">
	        	<div class="heading-section" style="text-align: center; padding: 0 30px;">
	          	<h2>You received a Grievance</h2>
	        	</div>
	        	<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
	        		<tr>
          			<td style="padding-bottom: 30px;">
          				<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
          					<!--<td valign="middle" width="50%">
		                  <img src="images/work-1.jpg" alt="" style="width: 100%; max-width: 600px; height: auto; margin: auto; display: block;">
		                </td>-->
		                <td valign="middle" width="50%">
		                  <div class="text-blog" style="text-align: left; padding-left:25px;">
		                  	<p class="meta"><span>This was a '.$b.' grievance </p>
				              	<h2>DETAILS OF THE GRIEVANCE REPORT</h2>
								<h3>Refrence number is : '.strval($rows).'</h3>
								<p><span style = color:green>'.$org.' </span>
								 <h3><span style = color:red>The Grievance report is : </h3>'.$msg.
								 '<p>Date and time :'.$date.
								
				         
				              	'<p><a href='.$link1 ." ".'class=btn btn-primary>Issue assigned</a></p><br>
								<p><a href='.$link2 ." ".'class=btn btn-primary>Issue solved</a></p><br>
							  	
							
		                  </div>
		                </td>
          				</table>

</div>















</html>';

if(mail($to,$subject,$html,$header	)){
echo "<script>if(confirm('Your Record Sucessfully Inserted. Now Track Your Status with the id .$rows')){document.location.href='mainpage_gre.php'};</script>";
} else {
	echo "<script>alert('OOps , Something went wrong');</script>";
	
}
	
	
	
	
	
	
} else {
	echo "not success";
}
} else {
	echo "<script>if(confirm('Your ph number is not recognised')){document.location.href='mainpage_gre.php'};</script>";
	
	
	
}



?>