<?php

$connect = new mysqli('localhost','root','','dbee');
// Start the session
session_start();

if(isset($_SESSION["aemail"])){
$aemail=$_SESSION["aemail"];

}

$uuemail=$_POST['uuemail'];
$uupass=$_POST['uupass'];
$udid=$_POST['udid'];


require_once('connect.php');

 $q= "UPDATE user SET email='$uuemail', pass='$uupass' where user_id='$udid';";

$result = $mysqli->query($q);

if(!$result){
	die('ERROR:' .$q." ".$mysqli->error);
}

header("Location: log_in.php ");
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
