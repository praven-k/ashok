<script type="text/javascript">
                 function Captcha1(){
                     var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
                     var i;
                     for (i=0;i<6;i++){
                       var a = alpha[Math.floor(Math.random() * alpha.length)];
                       var b = alpha[Math.floor(Math.random() * alpha.length)];
                       var c = alpha[Math.floor(Math.random() * alpha.length)];
                       var d = alpha[Math.floor(Math.random() * alpha.length)];
                       var e = alpha[Math.floor(Math.random() * alpha.length)];
                       var f = alpha[Math.floor(Math.random() * alpha.length)];
                       var g = alpha[Math.floor(Math.random() * alpha.length)];
                      }
                    var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' '+ f + ' ' + g;
                    document.getElementById("mainCaptcha1").value = code
                  }
                  function ValidCaptcha1(){
                      var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
                      var string2 = removeSpaces(document.getElementById('txtInput').value);
                      if (string1 == string2){
                       getResult();
					   
                      }
                      else{        
                        alert("Enter Correct CAPTCHA. \nNo need to enter the space between the letters.");
                      }
                  }
                  function removeSpaces(string){
                    return string.split(' ').join('');
                  }
             </script> 

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
						<h1>Online Grievance Redressal</h1>
					</div> <!-- /.title -->
					<!-- .page-breadcumb -->
					<div class="page-breadcumb pull-right" style="margin-top: 10px; margin-bottom: 15px;">
						<i class="fa fa-home"></i> <a href="http://www.vignanlara.org">Vignan's Lara</a> <i class="fa fa-angle-right"></i> <span><a href="grievancehome.php">Grievance Redressal</a></span>
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
				<div class="col-lg-3 wow slideInLeft">


					<div class="service-tab-title">
						<ul class="clearfix">

                            <li class="active" data-tab-name="committee">Committee</li>
							<li data-tab-name="grievance">Student&nbsp;Grievance&nbsp;Registration</li>
							<li data-tab-name="parent">Parent Grievance Registration</li>
							<li data-tab-name="staff">Staff Grievance Registration</li>
							<li data-tab-name="Admin">Grievance tatus</li>
							
							
						</ul>
					</div>
				</div>
				<div class="col-lg-9 col-md-8 wow slideInRight">
					<div class="row">
						<div class="service-tab-content clearfix">



<div id="committee">
								<div class="col-lg-12 col-md-12 col-sm-12">

 <?php

		include_once 'grievancecommittee.html';
		   ?>
		

								</div>
								
							</div>

















						<div id="grievance">
								<div class="col-lg-12 col-md-12 col-sm-12" >
									<?php

		include_once 'studentgred.php';
		   ?>
									
								</div>
								
							</div>





<div id="parent">
								<div class="col-lg-12 col-md-12 col-sm-12">

 <?php

		include_once 'gredparent.php';
		   ?>
		

								</div>
								
							</div>

<div id="staff">
								<div class="col-lg-12 col-md-12 col-sm-12">

 <?php

		include_once 'gredstaff.php';
		   ?>
		

								</div>
								
							</div>








							<div id="Admin">
								<div class="col-lg-12 col-md-12 col-sm-12">
									
									<?php

		include_once 'gredstudent.php';
		   ?>
								</div>
								
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
 
<div style="top: 350.5px; left: -20.5px; display: none; position:fixed; " id="dialog" class="window">
<a href="http://vignanuniversity.org/aavishkaara/"><img src="projexpo.jpg" style="position: relative; top: 0; left: 0; width:375px; 
  height:183px;"/></a>
<a href="#" class="close"><img src="cute_ball_stop.png" style="position: absolute; top: 5px; left: 10px;"/></a>




<div style="top: 350.5px; left: -20.5px; display: none; position:fixed; " id="dialog" class="window">

<!--<a href="http://vignanuniversity.org/vcmeet/"><img src="img/vcmeet.jpg" style="position: relative; top: 0; left: 0;"/></a>--><a href="http://sdpro.in"><center><b><font size="" color="#FF3399">Live Streaming</font></b></center><img src="img/conv4.jpg" style="position: relative; top: -100; left: 0;"/></a>
<a href="#" class="close"><img src="img/cute_ball_stop.png" style="position: absolute; top: 5px; left: 10px;"/></a>
<ul1>

  

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



   

   
 

   

  
   </ul>

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