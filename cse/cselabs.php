<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Smart Class: coaching classes" />
	<meta property="og:title" content="Smart Class: coaching classes" />
	<meta property="og:description" content="Smart Class: coaching classes" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="https://www.vignanlara.org/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="https://www.vignanlara.org/images/favicon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>VIGNAN : LARA</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="https://www.vignanlara.org/css123/style.css">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="https://www.vignanlara.org/css123/responsive.css">
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="https://www.vignanlara.org/css/plugins.min.css">
	<link rel="stylesheet" type="text/css" href="../../plugins/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://www.vignanlara.org/plugins/line-awesome/css/line-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://www.vignanlara.org/plugins/flaticon/flaticon.css">
	<link rel="stylesheet" type="text/css" href="https://www.vignanlara.org/plugins/themify/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="https://www.vignanlara.org/css/style.min.css">
	<link class="skin" rel="stylesheet" type="text/css" href="https://www.vignanlara.org/css/skin/skin-1.min.css">
	<script src="https://www.vignanlara.org/js/tabcontent.js" type="text/javascript"></script>
    <link href="https://www.vignanlara.org/css/tabcontent.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="https://www.vignanlara.org/css/templete.min.css">
 <style>
  .class-details>li:hover
   {
      background-color: #CE660B;
   }
   .class-details>li:hover:nth-child(2n+1)
   {
      background-color: #CE660B;
   }
   </style>
	
	<style>
	@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap');
	
	table td
	{
		padding:2px 10px;
	}
	table { 
  width: 100%; 

  border-collapse: collapse; 
}
/* Zebra striping */

tr:nth-of-type(odd) { 
  
  background: #eee; 
}
th { 
  background: #595959; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}
	</style>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
         $("#target").prop("selectedIndex", 0);
        });
    }).change();
});
</script>
	
</head>
<body id="bg">
<div class="page-wraper">


<!--- Header start -->

<?php include ('cseheader.php'); ?>


<!-- Header End -->

      <!-- inner page banner END -->


<div class="content-block">
         <div class="section-full bg-white content-inner">
           <div class="container-fluid" style="padding:10px 30px 10px 80px">
               
                  <div class="row">
                      <?php include ('csesidebar.php');?>
        <div class="col-lg-9 col-md-12 col-sm-12" > 

       <h3 style="font-size: 23px;background-color: #1C378A;color: white;font-weight:500;padding-left: 5px">  Laboratories</h3>              
     <div >
	 <select id="target">
            <option >Select Laboratories </option>
            <option value="dsl">Data Science Lab</option>
            <option value="bpl">Basic Programming Lab</option>
            <option value="addl">Application Design & Development Lab</option>
            <option value="nsl">Networks & Security Lab</option>
            <option value="stl">Software Tools Lab</option>
            <option value="aal">Algorithm Analysis Lab</option>
            <option value="pl">Project Lab</option>
            <option value="hpcl">High Performance Computing Lab</option>


            </select>

</div>

<div class="dsl box" style="padding-top:2%">
<h3 style=" font-size:18px;padding: 0.5em;  color: #010101;  background: #eaf3ff;  border-bottom: solid 3px #516ab6;">
    Data Science Lab   
    </h3>
    <p><strong>Objectives:</strong></p>
<ul class=list-check>
<li>To develop basic programming skills using Java and Python.</li>
<li>To handle Decision Making, Functions and File handling in Java and Python.</li>
</ul>
<p><strong>Total Equipment: </strong>76</p>
<p>70-Lenovo Think Centre, Intel Core I5 <a href="mailto:3470@3.20">3470@3.20</a>,8 GB DDR3 RAM, 500GB Sata HDD, Intel Sibel Graphics/Sound Gigabit Ethernet Card, HP Keyboard, HP Mouse, AOC 18.5 TFT Monitor</p>
<p>6-Lenovo Think Centre, Intel Core I3 <a href="mailto:2100@3.1GHz">2100@3.1GHz</a>, 2 GB DDR3 RAM, 320GB Sata HDD, Intel Sibel Graphics/Sound Gigabit Ethernet Card, HP Keyboard, HP Mouse, AOC 18.5 TFT Monitor</p>
<p><strong>Software: </strong></p>
<p>Oracle 11g, Weka3.6, JDK 1.6, XML, Visual Paradigm, Apache Tomcat, Putty(Remote Terminal), Python, Hadoop, PIG,HIVE.</p>
<p><strong>Outcomes:</strong></p>
<p>Ability to:</p>
<ul class=list-check>
<li>Implement the solutions using Java and Python.</li>
<li>Describe the Numbers, Math functions, Strings, List, Tuples and Dictionaries in Python.</li>

<li>Express different Decision Making statements and Functions.</p>
</ul>

    </div>


    <div class="bpl box" style="padding-top:2%">
<h3 style=" font-size:18px;padding: 0.5em;  color: #010101;  background: #eaf3ff;  border-bottom: solid 3px #516ab6;">
    Basic Programming Lab  
    </h3>
    <p><strong>Objectives:</strong></p>
<ul class=list-check>
<li>To design and implement relational database systems using MySQL.</li>
<li>To design queries for retrieving the data from the database.</li>
<li>To design database applications.</li>
<li>To analyze various kinds of data using data mining techniques.</li>
</ul>
<p>  </p>
<p><strong>Total Equipment: </strong> 62</p>
<p>20-Core2 duo Processor, 2GB RAM, 160GB HDD</p>
<p>30- Dell Systems, Core2 Duo 2GB RAM, 160GB HDD</p>
<p>12-Dell &amp; Lenovo Systems, Core 2 Duo 2GB RAM, 160GB HDD</p>
<p><strong>  </strong></p>
<p><strong>Software: </strong>Putty(Remote Terminal), gcc compiler, Python, MS Office</p>
<p><strong>Outcomes:</strong></p>
<p>Ability to:</p>
<ul class=list-check>
<li>Design and development of relational database systems and applications using MySQL.</li>
<li>Express queries using SQL correctly.</li>
<li>Build Data Warehouse and Explore WEKA.</li>
<li>Perform data preprocessing tasks and demonstrate performing association rule mining on data sets.</li>

<li>Perform classification, clustering and regression on data sets.</p>
</ul>

    </div>


    <div class="addl box" style="padding-top:2%">
<h3 style=" font-size:18px;padding: 0.5em;  color: #010101;  background: #eaf3ff;  border-bottom: solid 3px #516ab6;">
    Application Design & Development Lab   
    </h3>

    <p><strong>Objectives:</strong></p>
<ul class=list-check>
<li>To learn the application design skills.</li>
<li>To introduce Android platform and its architecture.</li>
<li>To understand importance of architecture in building effective, efficient, competitive software product.</li>
<li>To develop applications for solving societal problems using jdk 6, Net beans, HTML, JavaScript, PHP, XML, CSS etc.</li>
<li>To design and implement the algorithms for various problems such as travelling salesman problem, search etc.</li>
<li>To understand the creational and structural patterns.</li>
</ul>
<p><strong>Equipment: </strong>Total 70:</p>
<p>HP Pro 3005 AMD Phenom II X2 550 Processor 3.10GHZ,2GB RAM, 320GB SATA HDD 18.5&rsquo;&rsquo; LCD Monitor</p>
<p><strong>Software: </strong></p>
<p>Hadoop, Ruby, Perl, Sun Java Wireless Toolkit, Eclipse, WEKA, Oracle 11g, JDK 1.6, XML, Visual Paradigm, Apache Tomcat, Netbeans, Turbo C Compiler, Putty, Python, XILINX, TASM, KEIL.</p>
<p><strong>Outcomes:</strong></p>
<p>Ability to</p>
<ul class=list-check>
<li>Describe Android platform, Architecture and features.</li>
<li>Ability to develop web applications using HTML, XML, PHP, JavaScript, CSS etc.</li>
<li>Analyze the architecture and build the system from the components.</li>
<li>Students will cite knowledge of various approaches to document a software system.</li>

<li>Design creational and structural patterns.</p>
</ul>

    </div>

    <div class="nsl box" style="padding-top:2%">
<h3 style=" font-size:18px;padding: 0.5em;  color: #010101;  background: #eaf3ff;  border-bottom: solid 3px #516ab6;">
    Networks & Security Lab   
    </h3>
    <p><strong>Objectives:</strong></p>
<ul class=list-check>
<li>To develop TCP/UDP based client server applications using Java.</li>
<li>To understand and implement various network protocols.</li>
<li>To create both liner and non liner data structures and performing various operations on these.</li>
<li>To list resources involved in process creation and management.</li>
</ul>
<p>  </p>
<p><strong>  Equipment:</strong> Total 64:</p>
<p>19-Lenovo Think Centre M 71E Desktop,Intel Core I3 2100@3.1 GHZ Intel H61 Chipset,2GB DDR3RAM, 320GB SATA HDD, Integrated Graphics/Sound,Gigabyt Ethernet Card, Lenovo Keyboard, Lenovo Mouse, Lenovo 18.5 Tft Monitor.</p>
<p>30-Acer Intel Dual Core E5200 Processor,G-31 Mother board,2GB DDR2 RAM,160GB SATA HDD,Acer Keyboard, Acer Optical Mouse,10/100/1000 Gigabit LAN,18.5 TFT MONITOR</p>
<p>15- Pentium D-Processor, 3.0 GHz, 1GB DDR2 RAM, 80GB HDD</p>
<p>  </p>
<p><strong>Software: </strong>Putty<strong>(</strong>Remote Terminal<strong>),</strong>gcc, jdk 1.8</p>
<p>  </p>
<p><strong>Outcomes:</strong></p>
<p>Ability to</p>
<ul class=list-check>
<li>Implement few functionalities in data link layer, network layer.</li>
<li>Simulation of wired/wireless protocols using NS2 Ability to design algorithms for secure communication.</li>
<li>Awareness of concepts of multiprogramming, multithreading and multitasking.</li>
</ul>


    </div>

    <div class="stl box" style="padding-top:2%">
<h3 style=" font-size:18px;padding: 0.5em;  color: #010101;  background: #eaf3ff;  border-bottom: solid 3px #516ab6;">
    Software Tools Lab  
    </h3>
<p><strong>Objectives:</strong></p>
<ul class=list-check>
<li>To design the models for real time problems using UML diagrams.</li>
<li>To design test plans.</li>
</ul>
<p><strong>Equipment:</strong>Total 60:</p>
<p>Intel Core I5 Processor, 8 GB DDR3 RAM, 500GB Sata HDD, Keyboard, Mouse, 19&rdquo; LCD Monitor</p>
<p><strong>Software: </strong></p>
<p>Rational Rose, Turbo C Compiler, Putty <strong>(</strong>Remote Terminal<strong>)</strong>, Star UML.</p>
<p><strong>Outcomes:</strong></p>
<p>Ability to:</p>
<ul class=list-check>
<li>Investigate the reason for bugs and analyze the principles in software testing to prevent and remove bugs.</li>

<li>Test the developed solutions.</p>
</ul>
    </div>

    <div class="aal box" style="padding-top:2%">
<h3 style=" font-size:18px;padding: 0.5em;  color: #010101;  background: #eaf3ff;  border-bottom: solid 3px #516ab6;">
    Algorithm Analysis Lab   
    </h3>
<p><strong>Objectives:</strong></p>
<ul class=list-check>
<li>To design and implement the algorithms for various problems such as travelling salesman problem, search etc.</li>
</ul>
<p><strong>Equipment:</strong> Total 60:</p>
<p>Intel Core I5 Processor, 8 GB DDR3 RAM, 500GB Sata HDD, Keyboard, Mouse,                 19&rdquo; LCD Monitor</p>
<p><strong>Software: </strong>Putty <strong>(</strong>Remote Termianl<strong>)</strong>, gcc compiler, MS Office</p>
<p><strong>Outcomes:</strong></p>
<p>Ability to:</p>
<p>Understand the problem, design of algorithms/solutions to perform different operations on data structures.</p>

    </div>

    <div class="pl box" style="padding-top:2%">
<h3 style=" font-size:18px;padding: 0.5em;  color: #010101;  background: #eaf3ff;  border-bottom: solid 3px #516ab6;">
    Project Lab   
    </h3>
<p><strong>Objectives:</strong></p>
<ul class=list-check>
<li>To implement minor projects</li>
<li>To implement semester long projects</li>
</ul>
<p><strong>  </strong></p>
<p><strong>Equipment:</strong> Total 60:</p>
<p>Core I5 Processor, 8GB RAM, 1TB HDD, Keyboard, Mouse, 18.5&rdquo; LED Monitor</p>
<p>  </p>
<p><strong>Software: </strong>XAMPP, My SQL, Net beans, Apache Tomcat, Java.</p>
<p><strong>Outcomes:</strong></p>
<p>Ability to:</p>
<ul class=list-check>
<li>Develop solutions using the concepts learned in the courses</li>

<pli>Work in a team</p>
</ul>
    </div>

    <div class="hpcl box" style="padding-top:2%">
<h3 style=" font-size:18px;padding: 0.5em;  color: #010101;  background: #eaf3ff;  border-bottom: solid 3px #516ab6;">
    High Performance Computing Lab   
    </h3>
<p><strong>Objectives:</strong> To carry out research in various areas such as image processing, data mining, big data analytics, machine learning, deep learning and cloud computing etc.,.</p>
<p><strong>Equipment: </strong>Total 14:</p>
<p>1-<strong>(HP Z4 G4 90 1000W Chassis)</strong>,Intel Xeon W-2135 3.7 2666MHz 8.25 6C,32GB (2x16GB) DDR4 2666 DIMM ECC,256GB SATA SSD,1TB 7200RPM SATA 3.5in ,Nvidia GEFORCE&reg; GTX1080Ti 11GB GDDR5X ,HP Z4 Std CPU Cooling Solution,HP Z4 G4 Fan and Front Card Guide Kit</p>
<p>2-<strong> Precision 7920 Tower Chassis (BC_PCIe) CL</strong>,Precision 7920 Tower XCTO Base Intel Xeon Silver 4114, 2.2GHz, 3.0GHz Turbo,10C, 9.6GT/s 2UPI, 14MB Cache, HT,32GB (2x16GB) DDR4 2666MHz RDIMM ECC,2.5" 1TB 7200rpm SATA HardDrive M.2 -1TB PCIeNVMe SED (OPAL 2.0) Class 40 Solid State Drive, volume is greater than 2TB, NvidiaQuadro RTX5000, 16GB, 4DP</p>
<p>1-<strong> Form Factor: Tower</strong>,Intel Xeon E3-1225v5 Processor,32 GB DDR4-2133 RAM,1TB 7200 rpm SATA,Graphics : AMD FirePro W2100 2GB</p>
<p>10- Intel Core I5 Processor, 8GB RAM, 500GB SATA HDD, Keyboard, Mouse, 19&rdquo; LCD Monitor</p>
<p><strong>Software</strong>:</p>
<p>Matlab, Python, R, Weka, etc.</p>
<p><strong>Outcomes:</strong></p>
<p>Papers publications in reputed journals and doing their research work.</p>

    </div>












	 <!--
	 <ul class="tabs" data-persist="true">
                           <li><a href="#view1"> Data Science   </a></li>
                           <li><a href="#view2"> Networks & Security   </a></li>
                           <li><a href="#view3"> Application Design & Development   </a></li>
                           <li><a href="#view4"> Basic Programming   </a></li>
                           <li><a href="#view5"> Project   </a></li>
                           <li><a href="#view6"> Research   </a></li>





                        </ul>
	 <div class="tabcontents">
                           <div id="view1">	

   	 
	 <h3 style=" font-size:18px;padding: 0.5em;  color: #010101;  background: #eaf3ff;  border-bottom: solid 3px #516ab6;">
	 Data Science   
	 </h3>
	  
	 <img style="width:40%; height:40%; float:right; padding-right:3%"src="images/gallery/labs/cse/1.jpg"/>
<p><strong>Objective:</strong></p>
<ul>
<li>To design the models for real time problems using UML diagrams.</li>
<li>Designing test plans.</li>
<li>To develop basic programming skills using Java.</li>
</ul>
<p><strong>  Total Equipment: </strong>76</p>
<p align="justify"><b>70</b>-Lenovo Think Centre, Intel Core I5 <a href="mailto:3470@3.20">3470@3.20</a>,8 GB DDR3 RAM, 500GB Sata HDD, Intel Sibel Graphics/Sound Gigabit Ethernet Card, HP Keyboard, HP Mouse, AOC 18.5 TFT Monitor</p>
<p align="justify"><b>6</b>-Lenovo Think Centre, Intel Core I3 <a href="mailto:2100@3.1GHz">2100@3.1GHz</a>, 2 GB DDR3 RAM, 320GB Sata HDD, Intel Sibel Graphics/Sound Gigabit Ethernet Card, HP Keyboard, HP Mouse, AOC 18.5 TFT Monitor</p>
<p><strong>Software: </strong></p>
<p>My SQL, Oracle 11g, Weka3.6, R Tool, JDK 1.6, XML, Visual Paradigm, Apache Tomcat, Netbeans, Turbo C Compiler, Putty, Python, Hadoop, PIG,HIVE.</p>
<p><strong>Outcomes:</strong></p>
<p>Ability to:</p>
<ul>
<li>Investigate the reason for bugs and analyze the principles in software testing to prevent and remove bugs.</li>
<li>Implement the solutions using Java</li>
<li>Test the developed solutions</li>
</ul>

</div>


  <div id="view2">

  	<h3 style=" font-size:18px;padding: 0.5em;  color: #010101;  background: #eaf3ff;  border-bottom: solid 3px #516ab6;">
	 Networks & Security Lab   
	 </h3>
	  
	 <img style="width:40%; height:40%; float:right; padding-right:3%"src="images/gallery/labs/cse/2.jpg"/>
 

<p><strong>Objective:</strong></p>
<ul>
<li>To design the models for real time problems using UML diagrams.</li>
<li>Basics of Python programming</li>
<li>Decision Making ,Functions and File handling in Python.</li>
<li>To design and implement relational database systems using MySQL.</li>
<li>To design queries for retrieving the data from the database.</li>
<li>To design database applications.</li>
<li>Analyze various kinds of data using data mining techniques.</li>
</ul>
<p>  </p>
<p><strong>Total Equipment: </strong>62</p>
<p><b>20</b>-Core2 duo Processor, 2GB RAM, 160GB HDD</p>
<p><b>30</b>- Dell Systems, Core2 Duo 2GB RAM, 160GB HDD</p>
<p><b>12</b>-Dell &amp; Lenovo Systems, Core 2 Duo 2GB RAM, 160GB HDD</p>
<p><strong>Software: </strong>Putty, gcc compiler, Python, MS Office</p>
<p><strong>Outcomes:</strong></p>
<p>Ability to:</p>
<ul>
<li>Design and development of relational database systems and applications using MySQL.</li>
<li>Express queries using SQL correctly.</li>
<li>Describe the Numbers, Math functions, Strings, List, Tuples and Dictionaries in Python.</li>
<li>Express different Decision Making statements and Functions.</li>
<li>Ability to build Data Warehouse and Explore WEKA.</li>
<li>Ability to perform data preprocessing tasks and demonstrate performing association rule mining on data sets.</li>
<li>Ability to perform classification, clustering and regression on data sets.</li>

</ul>
  </div>

  <div id="view3">
  	<h3 style=" font-size:18px;padding: 0.5em;  color: #010101;  background: #eaf3ff;  border-bottom: solid 3px #516ab6;">
	Application Design & Development Lab   
	 </h3>
	  
	 <img style="width:40%; height:40%; float:right; padding-right:3%"src="images/gallery/labs/cse/3.jpg"/>
  <p><strong>Objective:</strong></p>
<ul>
<li>To learn the application design skills.</li>
<li>To introduce Android platform and its architecture.</li>
<li>To understand importance of architecture in building effective, efficient, competitive software product.</li>
<li>To develop applications for solving societal problems using jdk 6, Net beans, HTML, JavaScript, PHP, XML, CSS etc.</li>
<li>Design and implementation of algorithms for various problems such as travelling salesman problem, search etc.</li>
<li>Understand the creational and structural patterns.</li>
</ul>
<p><strong>Total Equipment: </strong>70</p>
<p>HP Pro 3005 AMD Phenom II X2 550 Processor 3.10GHZ,2GB RAM, 320GB SATA HDD 18.5&rsquo;&rsquo; LCD Monitor</p>
<p><strong>Software: </strong></p>
<p>Hadoop, My SQL, Ruby, Perl, Sun Java Toolkit, Eclipse, WEKA, Oracle 11g, R Tool, JDK 1.6, XML, Visual Paradigm, Apache Tomcat, Netbeans, Turbo C Compiler, Putty, Python, XILINX, TASM, KEIL.</p>
<p><strong>Outcomes:</strong></p>
<ul>
<li>Describe Android platform, Architecture and features.</li>
<li>Ability to develop web applications using HTML, XML, PHP, JavaScript, CSS etc.</li>
<li>Analyze the architecture and build the system from the components.</li>
<li>Students will cite knowledge of various approaches to document a software system.</li>
  <li>Design creational and structural patterns.</li>
</ul>
  </div>

  <div id="view4">
  	<h3 style=" font-size:18px;padding: 0.5em;  color: #010101;  background: #eaf3ff;  border-bottom: solid 3px #516ab6;">
	 Basic Programming Lab   
	 </h3>
	  
	 <img style="width:40%; height:40%; float:right; padding-right:3%"src="images/gallery/labs/cse/4.jpg"/>
  <p align="justify"><strong>Objectives:</strong></p>
<ul>
<li>To develop TCP/UDP based client server applications using Java.</li>
<li>To understand and implement various network protocols.</li>
<li>To create both liner and non liner data structures and performing various operations on these.</li>
<li>Design and implementation of algorithms for various problems such as travelling salesman problem, search etc.</li>
<li>List resources involved in process creation and management.</li>
</ul>

<p><strong>Total Equipment:</strong>64</p>
<p align="justify"><b>19</b>-Lenovo Think Centre M 71E Desktop,Intel Core I3 2100@3.1 GHZ Intel H61 Chipset,2GB DDR3RAM, 320GB SATA HDD, Integrated Graphics/Sound,Gigabyt Ethernet Card, Lenovo Keyboard, Lenovo Mouse, Lenovo 18.5 Tft Monitor.</p>
<p align="justify"><b>30</b>-Acer Intel Dual Core E5200 Processor,G-31 Mother board,2GB DDR2 RAM,160GB SATA HDD,Acer Keyboard, Acer Optical Mouse,10/100/1000 Gigabit LAN,18.5 TFT MONITOR</p>
<p align="justify"><b>15</b>- Pentium D-Processor, 3.0 GHz, 1GB DDR2 RAM, 80GB HDD</p>
<p><strong>Software: </strong>gcc, jdk 1.8</p>
<p><strong>Outcomes:</strong></p>
<p>Ability to</p>
<ul>
<li>Understand the problem, design of algorithms/solutions to perform different operations on data</li>
<li>Implement few functionalities in data link layer, network layer.</li>
<li>Simulation of wired/wireless protocols using NS2 Ability to design algorithms for secure communication.</li>
<li>Awareness of concepts of multiprogramming, multithreading and multitasking.</li>
</ul>
  </div>

  <div id="view5">
  	<h3 style=" font-size:18px;padding: 0.5em;  color: #010101;  background: #eaf3ff;  border-bottom: solid 3px #516ab6;">
	 Project Lab   
	 </h3>
	  
	 <img style="width:40%; height:40%; float:right; padding-right:3%"src="images/gallery/labs/cse/5.jpg"/>
  <p><strong>Objectives:</strong></p>
<ul>
<li>To implement minor projects</li>
<li>To implement semester long projects</li>
</ul>
<p><strong>Total  Equipment: </strong>60</p>
<p>HP core I5 8GB RAM, 1TB HDD,Keyboard,Mouse,18.5&rdquo; HP Compact LED Monitor.</p>
<p><strong>  Software: </strong></p>
<p>Hadoop, PIG, HIVE, My SQL.</p>
<p><strong>  Outcomes:</strong></p>
<p>Ability to:</p>
<ul>
<li>Develop solutions using the concepts learned in the courses</li>
<li>Work in a team</li>
</ul>

  </div>

  <div id="view6">
  	<h3 style=" font-size:18px;padding: 0.5em;  color: #010101;  background: #eaf3ff;  border-bottom: solid 3px #516ab6;">
	 Research Lab   
	 </h3>
	  
	 <img style="width:40%; height:40%; float:right; padding-right:3%"src="images/gallery/labs/cse/6.jpg"/>
  <p align="justify"><strong>Objective:</strong> To carry out research in various areas such as image processing, data mining, big data analytics, machine learning, deep learning and cloud computing etc.,.</p>
<p><strong>Total Equipment: </strong>14</p>
<p align="justify">1-<strong>(HP Z4 G4 90 1000W Chassis)</strong>,Intel Xeon W-2135 3.7 2666MHz 8.25 6C,32GB (2x16GB) DDR4 2666 DIMM ECC,256GB SATA SSD,1TB 7200RPM SATA 3.5in ,Nvidia GEFORCE&reg; GTX1080Ti 11GB GDDR5X ,HP Z4 Std CPU Cooling Solution,HP Z4 G4 Fan and Front Card Guide Kit</p>
<p align="justify">2-<strong> Precision 7920 Tower Chassis (BC_PCIe) CL</strong>,Precision 7920 Tower XCTO Base Intel Xeon Silver 4114, 2.2GHz, 3.0GHz Turbo,10C, 9.6GT/s 2UPI, 14MB Cache, HT,32GB (2x16GB) DDR4 2666MHz RDIMM ECC,2.5" 1TB 7200rpm SATA HardDrive M.2 -1TB PCIeNVMe SED (OPAL 2.0) Class 40 Solid State Drive, volume is greater than 2TB, NvidiaQuadro RTX5000, 16GB, 4DP</p>
<p align="justify">1-<strong> Form Factor: Tower</strong>,Intel Xeon E3-1225v5 Processor,32 GB DDR4-2133 RAM,1TB 7200 rpm SATA,Graphics : AMD FirePro W2100 2GB</p>
<p align="justify">10- Lenovo Think Centre, Intel Core I5 <a href="mailto:3470@3.20">3470@3.20</a>,8 GB DDR3 RAM, 500GB Sata HDD, Intel Sibel Graphics/Sound Gigabit Ethernet Card, HP Keyboard, HP Mouse, AOC 18.5 TFT Monitor</p>
<p><strong>Software</strong>:</p>
<p>Matlab, Python, R, Weka, etc.</p>
<p><strong>Outcomes:</strong></p>
<ul>
<li>Papers publications in reputed journals and doing their research work</li>
</ul>
  </div>

</div>




<p><strong>1.Data Science   </strong></p>
<p><strong>Objective:</strong></p>
<ul>
<li>To design the models for real time problems using UML diagrams.</li>
<li>Designing test plans.</li>
<li>To develop basic programming skills using Java.</li>
</ul>
<p><strong>  Equipment: </strong></p>
<strong>Total: 76 Systems</strong></p>
<p><b>70</b>-Lenovo Think Centre, Intel Core I5 <a href="mailto:3470@3.20">3470@3.20</a>,8 GB DDR3 RAM, 500GB Sata HDD, Intel Sibel Graphics/Sound Gigabit Ethernet Card, HP Keyboard, HP Mouse, AOC 18.5 TFT Monitor</p>
<p><b>6</b>-Lenovo Think Centre, Intel Core I3 <a href="mailto:2100@3.1GHz">2100@3.1GHz</a>, 2 GB DDR3 RAM, 320GB Sata HDD, Intel Sibel Graphics/Sound Gigabit Ethernet Card, HP Keyboard, HP Mouse, AOC 18.5 TFT Monitor</p>
<p><strong>Software: </strong></p>
<p>My SQL, Oracle 11g, Weka3.6, R Tool, JDK 1.6, XML, Visual Paradigm, Apache Tomcat, Netbeans, Turbo C Compiler, Putty, Python, Hadoop, PIG,HIVE.</p>
<p><strong>Outcomes:</strong></p>
<p>Ability to:</p>
<ul>
<li>Investigate the reason for bugs and analyze the principles in software testing to prevent and remove bugs.</li>
<li>Implement the solutions using Java</li>
<li>Test the developed solutions</li>
</ul>
<p></p>
          
         <p><strong>2.Networks & Security   </strong></p>
         <p><strong>Objective:</strong></p>
<ul>
<li>To design the models for real time problems using UML diagrams.</li>
<li>Basics of Python programming</li>
<li>Decision Making ,Functions and File handling in Python.</li>
<li>To design and implement relational database systems using MySQL.</li>
<li>To design queries for retrieving the data from the database.</li>
<li>To design database applications.</li>
<li>Analyze various kinds of data using data mining techniques.</li>
</ul>

<p><strong>Equipment: </strong>Total 62:</p>
20-Core2 duo Processor, 2GB RAM, 160GB HDD<br>
30- Dell Systems, Core2 Duo 2GB RAM, 160GB HDD<br>
12-Dell &amp; Lenovo Systems, Core 2 Duo 2GB RAM, 160GB HDD</p>
<p><strong>Software: </strong>Putty, gcc compiler, Python, MS Office</p>
<p><strong>Outcomes:</strong></p>
<p>Ability to:</p>
<ul>
<li>Design and development of relational database systems and applications using MySQL.</li>
<li>Express queries using SQL correctly.</li>
<li>Describe the Numbers, Math functions, Strings, List, Tuples and Dictionaries in Python.</li>
<li>Express different Decision Making statements and Functions.</li>
<li>Ability to build Data Warehouse and Explore WEKA.</li>
<li>Ability to perform data preprocessing tasks and demonstrate performing association rule mining on data sets.</li>
<li>Ability to perform classification, clustering and regression on data sets.</li>
</ul>



        <p><strong>3. Application Design and Development   </strong></p>
        <p><strong>Objective:</strong></p>
<ul>
<li>To learn the application design skills.</li>
<li>To introduce Android platform and its architecture.</li>
<li>To understand importance of architecture in building effective, efficient, competitive software product.</li>
<li>To develop applications for solving societal problems using jdk 6, Net beans, HTML, JavaScript, PHP, XML, CSS etc.</li>
<li>Design and implementation of algorithms for various problems such as travelling salesman problem, search etc.</li>
<li>Understand the creational and structural patterns.</li>
</ul>
<p><strong>Equipment: </strong></p>
<p>70 Systems HP Pro 3005 AMD Phenom II X2 550 Processor 3.10GHZ,2GB RAM, 320GB SATA HDD 18.5&rsquo;&rsquo; LCD Monitor</p>
<p><strong>Software: </strong></p>
<p>Hadoop, My SQL, Ruby, Perl, Sun Java Toolkit, Eclipse, WEKA, Oracle 11g, R Tool, JDK 1.6, XML, Visual Paradigm, Apache Tomcat, Netbeans, Turbo C Compiler, Putty, Python, XILINX, TASM, KEIL.</p>
<p><strong>Outcomes:</strong></p>
<ul>
<li>Describe Android platform, Architecture and features.</li>
<li>Ability to develop web applications using HTML, XML, PHP, JavaScript, CSS etc.</li>
<li>Analyze the architecture and build the system from the components.</li>
<li>Students will cite knowledge of various approaches to document a software system.</li>
</ul>
<p>Design creational and structural patterns.</p>

<p><strong>4.Basic Programming   </strong></p>
<p><strong>Objectives:</strong></p>
<ul>
<li>To develop TCP/UDP based client server applications using Java.</li>
<li>To understand and implement various network protocols.</li>
<li>To create both liner and non liner data structures and performing various operations on these.</li>
<li>Design and implementation of algorithms for various problems such as travelling salesman problem, search etc.</li>
<li>List resources involved in process creation and management.</li>
</ul>
<p><strong>Software: </strong>gcc, jdk 1.8</p>
<p><strong>  Equipment:</strong></p>
<p>Total:64</p>
<p>19:Lenovo Think Centre M 71E Desktop,Intel Core I3 2100@3.1 GHZ Intel H61 Chipset,2GB DDR3RAM, 320GB SATA HDD, Integrated Graphics/Sound,Gigabyt Ethernet Card, Lenovo Keyboard, Lenovo Mouse, Lenovo 18.5 Tft Monitor.</p>
<p>30:Acer Intel Dual Core E5200 Processor,G-31 Mother board,2GB DDR2 RAM,160GB SATA HDD,Acer Keyboard, Acer Optical Mouse,10/100/1000 Gigabit LAN,18.5 TFT MONITOR</p>
<p>15: Pentium D-Processor, 3.0 GHz, 1GB DDR2 RAM, 80GB HDD</p>
<p><strong>Outcomes:</strong></p>
<ul>
<li>Understand the problem, design of algorithms/solutions to perform different operations on data</li>
<li>Implement few functionalities in data link layer, network layer.</li>
<li>Simulation of wired/wireless protocols using NS2 Ability to design algorithms for secure communication.</li>
<li>Awareness of concepts of multiprogramming, multithreading and multitasking.</li>
</ul>      

<p><strong>5.Project   </strong></p>
<p><strong>Objectives:</strong></p>
<ul>
<li>To implement minor projects</li>
<li>To implement semester long projects</li>
</ul>
<p><strong>  Equipment: </strong></p>
<p>60 systems,HP core I5 8GB RAM, 1TB HDD,Keyboard,Mouse,18.5&rdquo; HP Compact LED Monitor.</p>
<p><strong>  Software: </strong><br><br>
Hadoop, PIG, HIVE, My SQL.
<p><strong>  Outcomes:</strong><br>
<ul>
<li>Develop solutions using the concepts learned in the courses</li>
<li>Work in a team</li>
</ul>


<p><strong>6.Research   </strong></p>
<p><strong>Objective:</strong> To carry out research in various areas such as image processing, data mining, big data analytics, machine learning, deep learning and cloud computing etc.,.</p>
<p><strong>Equipment: </strong>Total-14:</p>
<p>1-<strong>(HP Z4 G4 90 1000W Chassis)</strong>,Intel Xeon W-2135 3.7 2666MHz 8.25 6C,32GB (2x16GB) DDR4 2666 DIMM ECC,256GB SATA SSD,1TB 7200RPM SATA 3.5in ,Nvidia GEFORCE&reg; GTX1080Ti 11GB GDDR5X ,HP Z4 Std CPU Cooling Solution,HP Z4 G4 Fan and Front Card Guide Kit</p>
<p>2-<strong> Precision 7920 Tower Chassis (BC_PCIe) CL</strong>,Precision 7920 Tower XCTO Base Intel Xeon Silver 4114, 2.2GHz, 3.0GHz Turbo,10C, 9.6GT/s 2UPI, 14MB Cache, HT,32GB (2x16GB) DDR4 2666MHz RDIMM ECC,2.5" 1TB 7200rpm SATA HardDrive M.2 -1TB</p>  
<b>Outcomes:</b></p>
<ul>
<li>Papers publications in reputed journals and doing their research work.</li>
</ul>

   -->                       
                          
							
                          
                          
                         



<!-- content start -->



<!-- content end -->





                     </div>
                  </div>
               </div>
            </div>
         </div>
        





<!-- Footer start -->

<?php include ('footer.php'); ?>
<!-- Footer end -->
<!-- JAVASCRIPT FILES ========================================= -->
<script src="https://www.vignanlara.org/js/combining.js"></script><!-- Combining JS  -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyBjirg3UoMD5oUiFuZt3P9sErZD-2Rxc68&amp;sensor=false"  ></script><!-- GOOGLE MAP -->
<script src='www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->
<script src="https://www.vignanlara.org/js/jquery.marquee.js"></script><!-- LOADING JS -->
<script>
	$(function(){
		$('.marquee').marquee({
			speed: 100,
			gap: 0,
			delayBeforeStart: 0,
			direction: 'left',
			duplicated: true,
			pauseOnHover: true
		});	
		$('.marquee1').marquee({
			speed: 50,
			gap: 0,
			delayBeforeStart: 0,
			direction: 'up',
			duplicated: true,
			pauseOnHover: true
		});	
	});
</script>
</body>
</html>
