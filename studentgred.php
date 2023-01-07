
<?php $a = "hello";?>
<script type="text/javascript">
var string1;
                 function Captcha(){
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
                    document.getElementById("mainCaptcha").value = code
					string1 = removeSpaces(document.getElementById('mainCaptcha').value);
                  }
                  function ValidCaptcha(){
                      var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
                    var    string2 = removeSpaces(document.getElementById('txtInput').value);
					var string3 = removeSpaces(document.getElementById('names').value);
					var string4 = removeSpaces(document.getElementById('msg').value);
                      if (string1 == string2){
						  document.writeln("");
					   window.location.href = "practise2.php?id="+string3+"&id2=student"+"&id3="+string4+"&id4=student&id5=123456";

						  
						  
						  
                       
					  
					   
                      }
                      else{        
                        alert("Enter Correct CAPTCHA. \nNo need to enter the space between the letters.");
						
                      }
                  }
                  function removeSpaces(string){
                    return string.split(' ').join('');
                  }
				  function getresults(){
					  
					   
				  }
             </script> 
			 
			 
			 
			 <section id="blog-post">
		<div class="container" style="margin-top: 10px;">
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
								<h2><font size="" color="#FF0066">Grievance Registration Form</font></h2>
								
							</div>
						</div>

		
		<!--<font size="" color="#FF3366"><b>Online Tution fee payment portal will be started soon.</b></font>-->












<form  id="contactform"  name="contact" method="post"  style="margin-top: -30px;"> 
			
        
     <ul class="form-style-1">
   

	
   <li>
	 <label>Register No</label><input type="text" name="names" id="names" placeholder="Enter Register Number" required="" class="field-long" />
			</li>
  
<li>
	 <label>Message</label><input type="text" name="msg" id="msg" placeholder="Enter the message" required="" class="field-long" />
			</li>
  
<li>
	 <label>Enter Captcha</label><input type="text" id="mainCaptcha" readonly/><input type="button" id="refresh" value="Show Captcha" onclick="Captcha();" />
			</li>
			<li><input type="text" id="txtInput" name="txtInput"/></li>



    	

				






    		<li>
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Proceed" type="submit" onclick = "ValidCaptcha()"; > </li></ul>
   </form> 

						
					
<div id="logerr">
		<?php
		/*
			if(isset($_SESSION['ERRMSG_ARR']))
			{
					if($_SESSION['ERRMSG_ARR']!='')
					{
							echo $_SESSION['ERRMSG_ARR'];
							unset($_SESSION['ERRMSG_ARR']);
					}
			}
		*/
		?>


	</div>
	<script>

		 var mah = removeSpaces(document.getElementById('mainCaptcha').value);
		
		
	
</script>




<script>
function getresult(){
	  ' <?php
	  $b =  "<script>document.writeln(string1);</script>";
	    //echo $_POST['regno'];
	echo "success";?>

</script>

<script type="text/javascript">
		function chklogfrm(regno)
		{
			//alert("sdf");
			if(regno=="")
			{
			//alert("sdf");
				document.getElementById("logerr").innerHTML="<font color='#FF0000' style='text-align:justify;font-size:11px;font-family:Verdana, Arial, Helvetica, sans-serif'><b>Required fields are empty.</b></font>";
				return false;
			}
			/*if(vmd.length!=9)
			{
				document.getElementById("logerr").innerHTML="<font color='#820000' style='text-align:justify;font-size:11px;font-family:Verdana, Arial, Helvetica, sans-serif'>Invalid VMID/PASSWORD</font>";
				return false;
			}*/
		}
	</script>
	</div></div></div></section>
