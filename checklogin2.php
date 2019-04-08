<?php
$aemail=$_POST['aemail'];
$apass=$_POST['apass'];

session_start();
$_SESSION["aemail"]=$_POST['aemail'];
$_SESSION["apass"]=$_POST['apass'];

require_once('connect.php');

 $q= "select * from admin where email_ad='$aemail' and pass_ad='$apass'";

$result = $mysqli->query($q);

if(!$result){
	die('ERROR:' .$q." ".$mysqli->error);
}

$count = $result->num_rows;
if(mysqli_num_rows($result) == 1){
	header("Location: admin-profile.php");
}
else{
	header("Location: log_in_wrong2.php");
	$_SESSION["fail"]='Wrong Email or Password';
	
	
}

?>