<head>
	<title>VFSTR :: GRIVANCE REDRESSEL</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Edulearn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<!-- Bootstrap-Core-Css -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Style-Css -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Font-Awesome-Icons-Css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //Web-Fonts -->

</head>
<?php
require_once('connect.php');
$gid=$_GET['variable'];
$resul411 = mysql_query("select * from grievanceregister where gid='".$gid."'");

//echo $resul411;
/*SELECT * FROM alpersonal a,course c,branch b where (a.coursecode=c.coursecode) and (a.coursecode=b.coursecode) and (a.branchcode=b.branchcode) and (c.coursecode=b.coursecode) and a.registerno='".$regno."'*/

while($ro411 = mysql_fetch_array($resul411))
  {
?>
<div class="navigation">
			<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-nav">
				<font size="" text-align: color="white"><b><?php

echo $ro411['gid'];


?></b></font>
				
			</nav>
		</div>

<?php

echo $ro411['grievance'];


?>



<?php
  }

?>
 <style>
  table { 
  width: 90%; 
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 0px solid #ccc; 
  text-align: left; 
}


  </style>
  

