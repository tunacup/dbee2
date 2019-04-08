<?php


require_once('connect.php');
session_start();
$_SESSION["email"]=$_POST['uemail'];
$_SESSION["passw"]=$_POST['upassw'];

$uemail=$_POST['uemail'];
$upassw=$_POST['upassw'];

$q1="select * from user where email = '$uemail';";
$result1=$mysqli->query($q1);
$row1=$result1->fetch_array();
$udid=$row1['user_id'];
$_SESSION["udid"]=$udid;
$_SESSION["f_name"]=$row1['f_name'];


 $q= "select * from user where email='$uemail' and pass='$upassw'";

$result = $mysqli->query($q);

if(!$result){
	die('ERROR:' .$q." ".$mysqli->error);
}

$count = $result->num_rows;
if(mysqli_num_rows($result) == 1){
	header("Location: user-profile.php");
}
else{
	header("Location: log_in_wrong.php");
	$_SESSION["fail"]='Wrong Email or Password';
		
}
	

						
?>	
