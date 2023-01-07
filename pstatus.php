
<?php
$db = mysqli_connect("localhost","id18827540_vignanletters","Surya@laxmi0056","viglet") or die("unable to connect");
$a = $_GET['id'];
$msg = "Grievance was seen/assigned";
$sql = "UPDATE laragrv SET status = '$msg' where id = '$a'";
$as = mysqli_query($db,$sql);
if($as){
echo "<center><h1>Status changed to Grievance was seen/assigned</h1></center>";
} else {
echo "<center><h1>Failure occurred</h1></center>";
}


?>