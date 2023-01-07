
<html>
<head>
<style>
    
    .sign {
        padding-top: 40px;
        color: #8C55AA;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        font-size: 23px;
    }
    
    .un {
    width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 0px;
    
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }
    
    form.form1 {
        padding-top: 0px;
    }
    
    .pass {
            width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 26px;
    
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }
    
   
    .un:focus, .pass:focus {
        border: 2px solid rgba(0, 0, 0, 0.18) !important;
        
    }
    
    .submit {
      cursor: pointer;
        border-radius: 2em;
        color: #fff;
        background: linear-gradient(to right, #9C27B0, #E040FB);
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 7px;
        padding-top: 13px;
        font-family: 'Ubuntu', sans-serif;
        margin-left: 35%;
        font-size: 17px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    }
	.submits {
      cursor: pointer;
        border-radius: 5em;
        color: #fff;
        background: linear-gradient(to right, #9C27B0, #E040FB);
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 13px;
        padding-top: 13px;
        font-family: 'Ubuntu', sans-serif;
        margin-left: 35%;
        font-size: 10px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    }
    .hello{
        cursor: pointer;
        border-radius: 5em;
        color: #fff;
        background: linear-gradient(to right, #9C27B0, #E040FB);
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'Ubuntu', sans-serif;
        margin-left: 25%;
        font-size: 14px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    }
    
    .forgot {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #E1BEE7;
        padding-top: 10px;
    
    }
    .button {
  border: none;
  color: white;
  padding: 10px 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #9C27B0;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}
    a {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #E1BEE7;
        text-decoration: none
    }
 
    @media (max-width: 600px) {
        .main {
            border-radius: 0px;
        }
		
	}
	.show {
		width : 40px;
		height:20px;
		font-size:1dp;
	}
	.una {
		width: 56%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
	}
		

</style>

</head>
<body>
<html>

<head>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Sign in</title>
</head>

<body>


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
					var string3 = document.getElementById('names').value;
					var string4 = document.getElementById('msg').value;
					var string5 = document.getElementById('phnose').value;
                      if ((string1.length!=0 && string2.length!=0) && (string1 == string2)){
						  if(string3.length!=0 && string4.length!=0 && string5.length!=0){
						  document.writeln("");
					   window.location.href = "sending_mail.php?id="+string3+"&id2=student"+"&id3="+string4+"&id4=student&id5="+string5;
						  } else {
							  alert("All fields are required");
						  }

						  
						  
						  
                       
					  
					   
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
			 



  <div class="main">

    <form class="form1" method = "POST">
      <input class="un " type="text"  name = "names" id = "names" placeholder="Enter your Register number">
      <input class="pass" type="text"  placeholder="Enter your grievance" name = "msg" id = "msg">
	  <input class="pass" type="text"  placeholder="Enter your ph number" name = "phnose" id = "phnose">
       <input class="una " type="text"   id = "mainCaptcha" readonly /><input type = "button" class = "button button1" id = "refresh" value = "Show captcha" onclick = "Captcha();" /> 
      <input class="pass" type="text"  placeholder="Enter the Captcha" name = "txtInput" id ="txtInput" >
	  

      <input type = "submit" class = "submit"  name = "submit" value = "Send" id = "submit" onclick = "ValidCaptcha()";>
      
            
                
    </div>
     
</body>

</html>
</body>

</html>