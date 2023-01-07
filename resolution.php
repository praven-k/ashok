 <?php

require_once('connect.php');
?>
 
 <section id="blog-post">
		<div class="container" style="margin-top: -80px;">
			<div class="row">
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 blog-content">
					<!-- article -->
					<article >



						<div class="post-meta clearfix">
							
								
							<div class="post-title">
								<h2><font size="" color="#FF0066">Provide Resolution for Student Grievances</font></h2>
								
							</div>
						</div>

						</article></div></div></div></section>
<?php
						if(isset($_POST['submit1']))
	{

		
		

$regno=$_POST['regno'];
$name=$_POST['name'];
$gid=$_POST['gid'];
$resolution=$_POST['resolution'];
$mobile=$_POST['mobile'];

$resul444 = mysql_query("SELECT CURRENT_DATE as dd");
$cur='';
if($ro444 = mysql_fetch_array($resul444))
  {
$cur=$ro444['dd'];
  }


$query1="update grievanceregister set resolution= '".$resolution."', rstatus='1', rdate='".$cur."' where gid='".$gid."'";
$name = str_replace(' ','%20', $name);
//echo $query1;


if(mysql_query($query1))
		{

	 $msg="Dear%20".$name."(".$regno."),%0AYour%20Grievance(".$gid.")%20has%20been%20resolved.%0APlease%20check%20the%20Website%20for%20solution.";


		fopen("http://bulk.kitesms.com/spanelv2/api.php?username=laravignan&password=Laratech$459&to=".$mobile."&from=VLITSS&message=".$msg."","r");

echo "<b><div style=\"color: green; text-align: center;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>Resolution updated successfully.</div></b>";
		}
else
		{
echo "<b><div style=\"color: red; text-align: center;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>Problem Occured. Please try again and please avoid using singlecode(') in data updation.</div></b>";
		}

		}



		?>
 
 <style>
  table { 
  width: 100%; 
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
  border: 1px solid #ccc; 
  text-align: left; 
}


  </style>
  

									
								<table style="margin-top: -160px;">
<tr><th>S.No</th><th>Grievance ID</th><th>Reg. No</th><th>Name</th><th>Mobile</th><th>Description</th> <th>Regd. Date</th><th>Resolution</th><th>Update</th></tr>


<?php
			$resul411 = mysql_query("select * from grievanceregister where rstatus!='1' and gid!=''");
$i=0;
while($ro4 = mysql_fetch_array($resul411))
  {
	  ++$i;
	  ?>

				<form action="" method="post">
<tr><td ><center><?php echo $i;?></center></td><td ><center><?php echo $ro4['gid'];?></center></td><td ><center><?php echo $ro4['regno'];?></center></td><td><center><?php echo $ro4['name'];?></center></td><td><center><?php echo $ro4['mobile'];?></center></td><td ><center><a href="javascript: void(0)" style="text-decoration: none;" 
   onclick="popup('descg.php?variable=<?php echo $ro4['gid'];?>')">Show Grievance</a>
   <!--<?php echo $ro4['grievance'];?>--></center></td>
<td ><center><?php echo $ro4['cur'];?></center></td>
<td ><center><textarea type="text" name="resolution"></textarea></center></td><td ><center><input type="submit" name="submit1" value="Update"></center></td></tr> <input type="hidden" name="gid" value='<?php echo $ro4['gid'];?>'>
<input type="hidden" name="mobile" value='<?php echo $ro4['mobile'];?>'>
<input type="hidden" name="name" value='<?php echo $ro4['name'];?>'>
<input type="hidden" name="regno" value='<?php echo $ro4['regno'];?>'></form>

<?php

  }

  ?>


	 </table><br>



<section id="blog-post">
		<div class="container" style="margin-top: -80px;">
			<div class="row">
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 blog-content">
					<!-- article -->
					<article >



						
	 		<div class="post-meta clearfix">
							
								
							<div class="post-title">
								<h2><font size="" color="#FF0066">Provide Resolution for Staff & Parent Grievances</font></h2>
								
							</div>
						</div>

						</article></div></div></div></section>
<?php
						if(isset($_POST['submit2']))
	{

		
		

$regno=$_POST['regno'];
$name=$_POST['name'];
$gid=$_POST['gid'];
$resolution=$_POST['resolution'];
$mobile=$_POST['mobile'];

$resul444 = mysql_query("SELECT CURRENT_DATE as dd");
$cur='';
if($ro444 = mysql_fetch_array($resul444))
  {
$cur=$ro444['dd'];
  }


$query1="update grievanceoregister set resolution= '".$resolution."', rstatus='1', rdate='".$cur."' where gid='".$gid."'";
$name = str_replace(' ','%20', $name);
//echo $query1;


if(mysql_query($query1))
		{

	 $msg="Dear%20".$name."(".$regno."),%0AYour%20Grievance(".$gid.")%20has%20been%20resolved.%0APlease%20check%20the%20Website%20for%20solution.";


		fopen("http://bulk.kitesms.com/spanelv2/api.php?username=laravignan&password=Laratech$459&to=".$mobile."&from=VLITSS&message=".$msg."","r");

echo "<b><div style=\"color: green; text-align: center;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>Resolution updated successfully.</div></b>";
		}
else
		{
echo "<b><div style=\"color: red; text-align: center;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>Problem Occured. Please try again and please avoid using singlecode(') in data updation.</div></b>";
		}

		}



		?>
 


									
								<table style="margin-top: -160px;">
<tr><th>S.No</th><th>Grievance ID</th><th>Reg. No</th><th>Name</th><th>Mobile</th><th>Description</th> <th>Regd. Date</th><th>Resolution</th><th>Update</th></tr>


<?php
			$resul4112 = mysql_query("select * from grievanceoregister where rstatus!='1' and gid!=''");
$i=0;
while($ro42 = mysql_fetch_array($resul4112))
  {
	  ++$i;
	  ?>

				<form action="" method="post">
<tr><td ><center><?php echo $i;?></center></td><td ><center><?php echo $ro42['gid'];?></center></td><td ><center><?php echo $ro42['regno'];?></center></td><td><center><?php echo $ro42['name'];?></center></td><td><center><?php echo $ro42['mobile'];?></center></td><td ><center><a href="javascript: void(0)" style="text-decoration: none;" 
   onclick="popup('descs.php?variable=<?php echo $ro42['gid'];?>')">Show Grievance</a>
   <!--<?php echo $ro4['grievance'];?>--></center></td>
<td ><center><?php echo $ro42['cur'];?></center></td>
<td ><center><textarea type="text" name="resolution"></textarea></center></td><td ><center><input type="submit" name="submit2" value="Update"></center></td></tr> <input type="hidden" name="gid" value='<?php echo $ro42['gid'];?>'>
<input type="hidden" name="mobile" value='<?php echo $ro42['mobile'];?>'>
<input type="hidden" name="name" value='<?php echo $ro42['name'];?>'>
<input type="hidden" name="regno" value='<?php echo $ro42['regno'];?>'></form>

<?php

  }

  ?>


	 </table>


 <script language="JavaScript">
<!--
function openPop(form) {
var url=(form.dir.options[form.dir.selectedIndex].value);
myWindow = window.open(url, 'myWindow', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no,width=500,height=400');
}
// -->
</script>


  <script type="text/javascript">
<!--
function popup(url) 
{
 var width  = 400;
 var height = 300;


 var left   = (screen.width  - width)/2;
 var top    = (screen.height - height)/2;
 var params = 'width='+width+', height='+height;
 params += ', top='+top+', left='+left;
 params += ', directories=no';
 params += ', location=no';
 params += ', menubar=no';
 params += ', resizable=yes';
 params += ', scrollbars=yes';
 params += ', status=no';
 params += ', toolbar=no';
 newwin=window.open(url,'windowname5', params);
 if (window.focus) {newwin.focus()}
 return false;
}
// -->
</script>