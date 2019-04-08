<?php

$connect = new mysqli('localhost','root','','dbee');
// Start the session
session_start();

if(isset($_SESSION["aemail"])){
$aemail=$_SESSION["aemail"];
}

$aaemail=$_POST['aaemail'];
$aapass=$_POST['aapass'];
$adid=$_POST['adid'];


require_once('connect.php');

 $q= "UPDATE admin SET email_ad='$aaemail', pass_ad='$aapass' where admin_id='$adid';";

$result = $mysqli->query($q);

if(!$result){
	die('ERROR:' .$q." ".$mysqli->error);
}

header("Location: log_in2.php ");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	

<body>
</body>
</html>
