
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Normal Transaction</title>

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
	<style>
		body{
		font-family:Verdana, sans-serif	;
		font-size::12px;
		}
		.wrapper{
		width:100%;
		margin:0 auto;	
		}
		table{

		}
		tr{
			padding:5px
		}
		td{
		padding:5px;	
		}
		input{
		padding:5px;	
		}
	</style>
	<script type="text/javascript">
		function getData()
		{
			var d = new Date();
			var n = d.getTime();
			var orderID = n +  '' +randomFromTo(0,1000);
			
			document.getElementById("OrderId").value = orderID;
			return true;
		}

		function randomFromTo(from, to){
			return Math.floor(Math.random() * (to - from + 1) + from);
		}


	</script>
</head>
<?php
require_once('../connect.php');
if(isset($_POST['submit']))
	{
		
$regno=$_POST['course'];

	}

	$quer = "select * from tuitionfee where regno='".$regno."'";
$resul = mysql_query($quer);
while($roo4 = mysql_fetch_array($resul))
  {

	   $stat=$roo4['status'];
	   $txnid=$roo4['txnid'];
	    $name=$roo4['name'];
		 $name=$roo4['name'];

 $arrears=$roo4['arrears'];

 $tuitionfee=$roo4['tuitionfee'];


 $examfee=$roo4['examfee'];


 


 $cda=$roo4['cda'];
 $insurence=$roo4['insurence'];

 $total=$roo4['total'];

 $paid=$roo4['paid'];

 $balance=$roo4['balance'];
 $excess=$roo4['excess'];
  $total1=$arrears+$tuitionfee+$examfee+$cda+$insurence-$excess;
 $total=$arrears+$tuitionfee+$examfee+$cda+$insurence-$excess-$paid;
  }

if($total>0)
{  

		 $total=$arrears+$tuitionfee+$examfee+$cda+$insurence-$excess-$paid;

		 //echo  $total;
		 

?>
<body onload="getData();">

<div class="wrapper">
<center> <H3> Transaction Request </H3></center>
	<form action="tuTrnPay.php" method="post">
		<table>
		<tr>

<th><label for="one"> Arrears : </label><?php echo $arrears; ?> </th>
				<th><label for="one"> Tution Fee : </label><?php echo $tuitionfee; ?> </th>

                <th><label for="one"> Exam Fee : </label><?php echo $examfee; ?> </th>

				<th><label for="one"> CDA : </label><?php echo $cda; ?> </th>
				<th><label for="one"> Insurence : </label><?php echo $insurence; ?> </th>
				<th><label for="one"> Excess : </label><?php echo $excess; ?> </th>
				<th><label for="one"> Total : </label><?php echo $total1; ?> </th>
				
				<th><label for="one"> Paid : </label><?php echo $paid; ?> </th>

				<th><label for="one"> Due : </label><?php echo $total; ?> </th>



				</tr>
				</table><br><br>

				<table>

				<tr>

					<td><label for="addField1">Register No</label></td>
				<td><input type="text" name="addField1" id="addField1"  value="<?php echo $_POST['course']; ?>" readonly/></td>
					<td><label for="addField2">Name</label></td>
				<td><input type="text" name="addField2" id="addField2"  value="<?php echo $name; ?>" readonly/></td>

			
	
				
				
				
				
			</tr>
			
			<tr>



				<td><label for="one"> Order No.</label></td>
				<td><input type="text" value="" id="OrderId" name="OrderId" readonly></td>
				 
				<td><label for="one"> Total Amount (You can edit Amount) </label></td>
				<td><input type="text" value="<?php echo $total; ?>" id="amount" name="amount" ></td>
				
				<!--<input  for="addField3" type="hidden" name="addField3"  id="addField3" value="<?php echo $total; ?>" >-->

				<!--<td><label for="addField3">Total</label></td>-->
				<input type="hidden" name="addField3" id="addField3"  value="<?php echo $total; ?>" readonly/>

				<input type="hidden" name="addField5" id="addField5"  value="<?php echo $paid; ?>" readonly/>

				<input type="hidden" name="addField6" id="addField6"  value="<?php echo $total1; ?>" readonly/>
				
			</tr>
			
			<tr>

			<td><label for="one"> Currency Name </label></td>
				<td><input type="text" value="INR" id="currencyName" name="currencyName" > </td>

				<td><label for="two">Transaction Type (S/P/R)</label></td>
				<td><input type="text" value="S" id="meTransReqType" name="meTransReqType"></td>

			<!--	<td><label for="addField1">Register No</label></td>
				<td><input type="text" name="addField1" id="addField1"  value="<?php echo $_POST['course']; ?>" readonly/></td>-->
	
				
				
				
				
			</tr>
			
				
				<!--<td><label for="three">Merchant ID</label></td>-->
				<input type="hidden" name="mid" id="mid" value="WL0000000004746">
				
				
				<input type="hidden" name="enckey" id="enckey" value="0254eddfea8dcea4808a0a862f3b09bc"></td>
			
				<input type="hidden" name="responseUrl" id="https://vignan.ac.in/pnb/tuTrnSuccess.php" value="https://vignan.ac.in/pnb/tuTrnSuccess.php"/></td>
			
			<!--<tr>
				<td>
				<input type="submit" class="btn btn-danger btn-block" style="background:#33CC33;padding:5px;font-size:15px" 
					name="CHECKOUT" value= "CHECKOUT" />	
				</td>
			</tr>-->

		</table><br><br>

		<center><input type="submit" class="btn btn-danger btn-block" style="background:#33CC33;padding:5px;font-size:15px" 
					name="CHECKOUT" value= "CHECKOUT" />	</center>
	</form>
	<?php
}
		else

{
echo "Already paid. Your Txn ID is" .$txnid; 
}
?>

</div>

</body>
</html>
