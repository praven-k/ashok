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
								<h2><font size="" color="#FF0066">Resolved(Student) Issues</font></h2>
								
							</div>
						</div>

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
<tr><th>S.No</th><th>Grievance ID</th><th>Reg. No</th><th>Name</th><th>Mobile</th><th>Grievance</th> <th>Regd. Date</th><th>Resolution</th><th>Solved Date</th></tr>


<?php
			$resul411 = mysql_query("select * from grievanceregister where rstatus='1'");
$i=0;
while($ro4 = mysql_fetch_array($resul411))
  {
	  ++$i;
	  ?>

				
<tr><td ><center><?php echo $i;?></center></td><td ><center><?php echo $ro4['gid'];?></center></td><td ><center><?php echo $ro4['regno'];?></center></td><td><center><?php echo $ro4['name'];?></center></td><td><center><?php echo $ro4['mobile'];?></center></td><td ><center><a href="javascript: void(0)" style="text-decoration: none;" 
   onclick="popup('descg.php?variable=<?php echo $ro4['gid'];?>')">Show Grievance</a>
   <!--<?php echo $ro4['grievance'];?>--></center></td>
<td ><center><?php echo $ro4['cur'];?></center></td>
<td ><center><a href="javascript: void(0)" style="text-decoration: none;" 
   onclick="popup('descr.php?variable=<?php echo $ro4['gid'];?>')">Show Resolution</a>
   <!--<?php echo $ro4['grievance'];?>--></center></td><td ><center><?php echo $ro4['rdate'];?></center></td></tr> 

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
								<h2><font size="" color="#FF0066">Resolved (Parent&Staff) Issues</font></h2>
								
							</div>
						</div>

						</article></div></div></div></section>


	<table style="margin-top: -160px;">
<tr><th>S.No</th><th>Grievance ID</th><th>Reg. No</th><th>Name</th><th>Mobile</th><th>Grievance</th> <th>Regd. Date</th><th>Resolution</th><th>Solved Date</th></tr>


<?php
			$resul4111 = mysql_query("select * from grievanceoregister where rstatus='1'");
$i=0;
while($ro41 = mysql_fetch_array($resul4111))
  {
	  ++$i;
	  ?>

				
<tr><td ><center><?php echo $i;?></center></td><td ><center><?php echo $ro41['gid'];?></center></td><td ><center><?php echo $ro41['regno'];?></center></td><td><center><?php echo $ro41['name'];?></center></td><td><center><?php echo $ro41['mobile'];?></center></td><td ><center><a href="javascript: void(0)" style="text-decoration: none;" 
   onclick="popup('descgp.php?variable=<?php echo $ro41['gid'];?>')">Show Grievance</a>
   <!--<?php echo $ro4['grievance'];?>--></center></td>
<td ><center><?php echo $ro41['cur'];?></center></td>
<td ><center><a href="javascript: void(0)" style="text-decoration: none;" 
   onclick="popup('descrp.php?variable=<?php echo $ro41['gid'];?>')">Show Resolution</a>
   <!--<?php echo $ro4['grievance'];?>--></center></td><td ><center><?php echo $ro41['rdate'];?></center></td></tr> 

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