<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: none;
  width: 70%;
  border-left: none;
  height: 300px;
}
</style>
</head>
<body>

<img src = "mainlogo3.jpg" width = "1500px" height = "130px" >

<div class="tab">
	  <button class="tablinks" onclick="openCity(event, 'Mechanism')" id="defaultOpen">Mechanism</button>
	  <button class="tablinks" onclick="openCity(event, 'Committee')">Committee</button>
	  <button class="tablinks" onclick="openCity(event, 'sgr')">STUDENT-GRIEVENCE REGISTRATION</button>
	    <button class="tablinks" onclick="openCity(event, 'pgr')" id="defaultOpen">PARENT GRIEVENCE REGISTRATION</button>
  <button class="tablinks" onclick="openCity(event, 'sgrr')">STAFF GRIEVENCE REGISTRATION</button>
  <button class="tablinks" onclick="openCity(event, 'gs')">GRIEVENCE STATUS</button>
</div>

<div id="Mechanism" class="tabcontent">
  
 <p> <?php include('pgmechanism.php');?></p>
</div>

<div id="Committee" class="tabcontent">
  
  <p><?php include('grievancecommittee.html');?></p> 
</div>

<div id="sgr" class="tabcontent">
  
  <p><?php include('studentgred.php');?></p>
</div>  


<div id="pgr" class="tabcontent">
  
 <p>  <?php include('gredparent.php');?> </p>
</div>

<div id="sgrr" class="tabcontent">
 
  <p><?php include('gredstaff.php');?> </p> 
</div>

<div id="gs" class="tabcontent">
  
  <p><?php echo "wait";?> </p>
</div>




<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 
