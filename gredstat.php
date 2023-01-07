 <section id="blog-post">
		<div class="container" style="margin-top: -80px;">
			<div class="row">
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 blog-content">
					<!-- article -->
					<article >



						<div class="post-meta clearfix">
							
								
							<div class="post-title">
								<h2><font size="" color="#FF0066">Student Grievance Redressal Statistics</font></h2>
								
							</div>
						

						<?php
						require_once('connect.php');

						$query200=mysql_query("select count(*) as cnt1 from grievanceregister where gid!=''");

while($ro4 = mysql_fetch_array($query200))
{
$cnt1=$ro4['cnt1'];

}


$query201=mysql_query("select count(*) as cnt2 from grievanceregister where rstatus!='1' and gid!=''");

while($ro41 = mysql_fetch_array($query201))
{
$cnt2=$ro41['cnt2'];

}



$query202=mysql_query("select count(*) as cnt3 from grievanceregister where rstatus='1'");

while($ro42 = mysql_fetch_array($query202))
{
$cnt3=$ro42['cnt3'];

}








$query300=mysql_query("select count(*) as cnt5 from grievanceoregister where gid!=''");

while($ro410 = mysql_fetch_array($query300))
{
$cnt5=$ro410['cnt5'];

}


$query301=mysql_query("select count(*) as cnt6 from grievanceoregister where rstatus!='1' and gid!=''");

while($ro4100 = mysql_fetch_array($query301))
{
$cnt6=$ro4100['cnt6'];

}



$query302=mysql_query("select count(*) as cnt7 from grievanceoregister where rstatus='1'");

while($ro4200 = mysql_fetch_array($query302))
{
$cnt7=$ro4200['cnt7'];

}




?>

						</article></div></div></div></section>
 
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
<tbody>
<tr>
<th >
 Total No. of Grievances</strong> 
</th>
<th  >
 In Prosess</strong> 
</th>


<th >
 Solved 
</th>
</tr>

<tr>
<td  >
<?php echo $cnt1; ?>
</td>
<td  >
<?php echo $cnt2; ?>
</td>
<td  >
<?php echo $cnt3; ?>
</td>
</tr>

</tbody>
</table><br>

<section id="blog-post">
		<div class="container" style="margin-top: -80px;">
			<div class="row">
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 blog-content">
					<!-- article -->
					<article >


<div class="post-title">
								<h2><font size="" color="#FF0066">Staff & Parent Grievance Redressal Statistics</font></h2>
								
							</div></article></div></div></div></section>


<table style="margin-top: -160px;">
<tbody>
<tr>
<th >
 Total No. of Grievances</strong> 
</th>
<th  >
 In Prosess</strong> 
</th>


<th >
 Solved 
</th>
</tr>

<tr>
<td  >
<?php echo $cnt5; ?>
</td>
<td  >
<?php echo $cnt6; ?>
</td>
<td  >
<?php echo $cnt7; ?>
</td>
</tr>

</tbody>
</table>