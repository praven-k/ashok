<script type="text/javascript">
                 function Captcha2(){
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
                    document.getElementById("mainCaptcha2").value = code
                  }
                  function ValidCaptcha34(){
                     /* var string1 = removeSpaces(document.getElementById('mainCaptcha2').value);
                      var string2 = removeSpaces(document.getElementById('txt').value);
                      if (string1 == string2){
                       getResult();    */
					   
					   
					   var string1 = removeSpaces(document.getElementById('mainCaptcha2').value);
                    var    string2 = removeSpaces(document.getElementById('txt').value);
					var string3 = removeSpaces(document.getElementById('nam').value);
					var string4 = removeSpaces(document.getElementById('mobile').value);
					var string5 = removeSpaces(document.getElementById('mess').value);
					var string6 = removeSpaces(document.getElementById('reg').value);
					
                      if (string1 == string2){
						  document.writeln("");
					   window.location.href = "practise2.php?id="+string6+"&id2=staff"+"&id3="+string5+"&id4="+string3+"&id5="+string4;
					   
					   
					   
                      }
                      else{        
                        alert("Enter Correct CAPTCHA. \nNo need to enter the space between the letters.");
                      }
                  }
                  function removeSpaces(string){
                    return string.split(' ').join('');
                  }
             </script> 
			 
			
			<div class="row">
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 blog-content">
					<!-- article -->
					<article >



						<div class="post-meta clearfix">
							
								
							<div class="post-title">
								<h4><font size="3" color="#FF0066">Staff Grievance Redressal</font></h4>
								
							</div>
						
						

						</article></div></div>


									<form   id="contactform" action="redresselsnext.php" name="contact" method="post" onSubmit="return chklogfrm(contact.name.value,contact.mobile.value)"> 
			
        
     <ul class="form-style-1">
   

	
   <li>
	 <label>Emp Name</label><input type="text" name="nam" id="nam" placeholder="Enter Your name" required="" class="field-long" />
			</li>

			 <li>
	 <label>Emp Code</label><input type="text" name="reg" id="reg" placeholder="Enter your Emp Code" required="" class="field-long" />
			</li>

			 <li>
	 <label>Mobile</label><input type="text" name="mobile" id="mobile" placeholder="Enter Mobile Number" required="" class="field-long" />
			</li>
			 <li>
	 <label>Enter the message</label><input type="text" name="mess" id="mess" placeholder="Enter the message" required="" class="field-long" />
			</li>


<li>
	 <label>Enter Captcha</label><input type="text" id="mainCaptcha2" readonly/><input type="button" id="refresh" value="Show Captcha" onclick="Captcha2();" />
			</li>
			<li><input type="text" id="txt" name="txt"/></li>




	

    		<li>
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Proceed" type="submit" onClick="ValidCaptcha34();"> </li></ul>
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
			}  */
		
		?>
	</div>


<script type="text/javascript">
		function chklogfrm(name,mobile)
		{
			//alert("sdf");
			if(regno=="")
			{
			//alert("sdf");
				document.getElementById("logerr").innerHTML="<font color='#FF0000' style='text-align:justify;font-size:11px;font-family:Verdana, Arial, Helvetica, sans-serif'><b>Required fields are empty.</b></font>";
				return false;
			}

			if(mobile=="")
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
