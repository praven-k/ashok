<?php
ob_start();
session_start();
require_once('connect.php');
?>
<?php

		include_once 'headerg.php';
		   ?>
		



<!-- #page-title -->
	<section id="page-title"  style="background-color:#000" >
		<div class="container" style="margin-top: -40px;">
			<div class="row">
				<div class="col-lg-12">
					<!-- .title -->
					<div class="title pull-left" style="margin-top: 10px; margin-bottom: 15px;">
						<h1>Online Student Grievance Redressel</h1>
					</div> <!-- /.title -->
					<!-- .page-breadcumb -->
					<div class="page-breadcumb pull-right" style="margin-top: 10px; margin-bottom: 15px;">
						<i class="fa fa-home"></i> <a href="index.php">Home</a> <i class="fa fa-angle-right"></i> <span>Grievance Redressel</span>
					</div> <!-- /.page-breadcumb -->
				</div>
			</div>
		</div>
	</section> <!-- /#page-title -->
	

<!-- #service-we-provide -->
	<section id="service-we-provide">
		<div class="container">
			<!--<div class="section-title">
				<h1>Online Student Grievance Redressel</h1>
			</div>-->


			<div class="row">
				
				<div class="col-lg-9 col-md-8 wow slideInRight">
					<div class="row">
						<div class="service-tab-content clearfix">




								<div class="col-lg-12 col-md-12 col-sm-12" >
									<!--start-->
<section id="blog-post">
		<div class="container" style="margin-top: -80px;">
			<div class="row">
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 blog-content">
					<!-- article -->
					<article >


					<!--<div class="post-meta clearfix">
							
								
							<div class="post-title"><br>
								<h2>Convocation - 2016</h2>&nbsp;&nbsp;<a href="pdf/Degree_Certificate.pdf" target="blank"><b>Download Convocation Application</b></a>
								
							</div>
						</div>-->

<!--<img src="4th_Convocation.jpg" width="500px;" height="438px;"></img>-->

						
						<div class="post-meta clearfix">
							
								
							<div class="post-title">
								<h2><font size="" color="#FF0066">Grievance Admin</font></h2>
								
							</div>
						</div>

		
		<!--<font size="" color="#FF3366"><b>Online Tution fee payment portal will be started soon.</b></font>-->
<?php

if(isset($_POST['submit']))
	{
$uname=$_POST['uname'];

$passd=$_POST['passd'];



if($uname == 'admin' && $passd == 'admin')
		{
echo $passd;
	$_SESSION['gred']=$uname;

header('location: gredadminhome.php');
		exit();
		}

else
			{
echo "<b><div style=\"color: red; text-align: center;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>Please try again with correct user name and password.</div></b>";
		}
	}
?>

	<form  id="contactform" action=" " name="contact" method="post" onSubmit="return chklogfrm(contact.compliant.value)"> 
			
        
     <ul class="form-style-1">
   

	
   <li>
	 <label>User Name</label><input type="text" name="uname" id="name" placeholder="Enter  User Name" required="" class="field-long" />
			</li>
    		
    		
		<li>
	 <label>Password</label><input type="password" name="passd" id="name" placeholder="Enter Password" required="" class="field-long" />
			</li>
    					
				



				






    		<li>
			
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Submit" type="submit"> </li></ul>
   </form> 

						
					
<div id="logerr">
		<?php
		
			if(isset($_SESSION['ERRMSG_ARR']))
			{
					if($_SESSION['ERRMSG_ARR']!='')
					{
							echo $_SESSION['ERRMSG_ARR'];
							unset($_SESSION['ERRMSG_ARR']);
					}
			}
		
		?>
	</div>


<script type="text/javascript">
		function chklogfrm(compliant)
		{
			//alert("sdf");
			if(compliant=="")
			{
			//alert("sdf");
				document.getElementById("logerr").innerHTML="<font color='#FF0000' style='text-align:justify;font-size:11px;font-family:Verdana, Arial, Helvetica, sans-serif'><b>Required fields are empty.</b></font>";
				return false;
			}
			
		}
	</script>










									
	</div></div></div></section>

									<!--end-->
									
								
								
							</div>




























						









							


							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> <!-- /#service-we-provide -->




	
	<!-- #who-we-are -->
	

	

	

	



	

	



<?php

		include_once 'footerg.php';
		   ?>
	
	<div id="boxes">
 
<!--<div style="top: 350.5px; left: -20.5px; display: none; position:fixed; " id="dialog" class="window">
<a href="http://vignanuniversity.org/aavishkaara/"><img src="projexpo.jpg" style="position: relative; top: 0; left: 0; width:375px; 
  height:183px;"/></a>
<a href="#" class="close"><img src="cute_ball_stop.png" style="position: absolute; top: 5px; left: 10px;"/></a>-->




<div style="top: 350.5px; left: -20.5px; display: none; position:fixed; " id="dialog" class="window">

<!--<a href="http://vignanuniversity.org/vcmeet/"><img src="img/vcmeet.jpg" style="position: relative; top: 0; left: 0;"/></a>--><a href="http://sdpro.in"><center><b><font size="" color="#FF3399">Live Streaming</font></b></center><img src="img/conv4.jpg" style="position: relative; top: -100; left: 0;"/></a>
<a href="#" class="close"><img src="img/cute_ball_stop.png" style="position: absolute; top: 5px; left: 10px;"/></a>
<!--<ul1>

  

   <li><a href="javascript: void(0)" style="text-decoration: none;" 
   onclick="popup('Admission notification 2016.jpg')"><font size="" color="#6633FF">Admission Notification 2016</font>&nbsp;<img src="./images/123.gif"style="margin-top:-5px;"></a></li>

  <li><a href="javascript: void(0)" style="text-decoration: none;" 
   onclick="popup('V-Sat _ Application.pdf')">V-SAT'16  Application form</a></li>

   <li><a href="javascript: void(0)" style="text-decoration: none;" 
   onclick="popup('Instruction Guide.pdf')">V-SAT'16 Instruction Guide</a></li>

   
   

   <li><a href="javascript: void(0)" style="text-decoration: none;"
   onclick="popup('Availability of V SAT Application forms.pdf')">Availability of V-SAT'16 Application forms</a></li>
   
	<li><a href="javascript: void(0)" style="text-decoration: none;" 
   onclick="popup('Newsletter.pdf')">International Admissions</a></li>


<li><a href="javascript: void(0)" style="text-decoration: none;" 
   onclick="popup('contactdetailsaddmissions16.pdf')">Contact Details</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="admissions.php">To know more Please click here...</a></li>



   

   
 

   

  
   </ul>-->

</div>

<!--end of admission pallet-->

<!-- Mask to cover the whole screen -->
<div style="width: 1478px; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
</div>

    </body>

</html>

<style type="text/css">
.form-style-1 {
    margin:10px auto;
    max-width: 800px;
    padding: 3px 12px 10px 20px;
    font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	margin-left: -10px;
}
.form-style-1 li {
    padding: 0;
    display: block;
    list-style: none;
    margin: 10px 0 0 0;
}
.form-style-1 label{
    margin:0 0 3px 0;
    padding:0px;
    display:block;
    font-weight: bold;
}
.form-style-1 input[type=text],
.form-style-1 input[type=date],
.form-style-1 input[type=datetime],
.form-style-1 input[type=number],
.form-style-1 input[type=search],
.form-style-1 input[type=time],
.form-style-1 input[type=url],
.form-style-1 input[type=email],
.form-style-1 input[type=mobile],
textarea,
select{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    border:1px solid #BEBEBE;
    padding: 7px;
    margin:0px;
	/*width: 100%;*/
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none; 
}





.form-style-1 
select{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    border:1px solid #BEBEBE;
    padding: 7px;
    margin:0px;
	width: 100%;
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none; 
}

.form-style-1 input[type=text]:focus,
.form-style-1 input[type=date]:focus,
.form-style-1 input[type=datetime]:focus,
.form-style-1 input[type=number]:focus,
.form-style-1 input[type=search]:focus,
.form-style-1 input[type=time]:focus,
.form-style-1 input[type=url]:focus,
.form-style-1 input[type=email]:focus,
.form-style-1 input[type=mobile]:focus,
.form-style-1 textarea:focus,
.form-style-1 select:focus{
    -moz-box-shadow: 0 0 8px #88D5E9;
    -webkit-box-shadow: 0 0 8px #88D5E9;
    box-shadow: 0 0 8px #88D5E9;
    border: 1px solid #88D5E9;
}
.form-style-1 .field-divided{
    width: 49%;
}

.form-style-1 .field-long{
    width: 100%;
}
.form-style-1 .field-select{
    width: 100%;
}
.form-style-1 .field-textarea{
    height: 100px;
}
.form-style-1 input[type=submit], .form-style-1 input[type=button]{
    background: #4B99AD;
    padding: 8px 15px 8px 15px;
    border: none;
    color: #fff;
}
.form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
    background: #4691A4;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
}
.form-style-1 .required{
    color:red;
}
</style>