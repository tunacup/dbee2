<?php

$connect = new mysqli('localhost','root','','dbee');
// Start the session
session_start();

if(isset($_SESSION["email"])){
$email=$_SESSION["email"];
}

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$tel=$_POST['tel'];
$DOB=$_POST['DOB'];

require_once('connect.php');

 $q= "UPDATE user SET f_name='$fname',l_name='$lname',tel='$tel',dateofbirth='$DOB' where email='$email';";

$result = $mysqli->query($q);

if(!$result){
	die('ERROR:' .$q." ".$mysqli->error);
}

header("Location: user-profile.php ");
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
