<?php


// Start the session
session_start();

$_SESSION["fname"]=$_POST['fname'];
$_SESSION["lname"]=$_POST['lname'];
$_SESSION["tel"]=$_POST['tel'];
$_SESSION["email"]=$_POST['email'];
$_SESSION["passw"]=$_POST['passw'];
$_SESSION["DOB"]=$_POST['DOB'];

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$passw=$_POST['passw'];
$DOB=$_POST['DOB'];
require_once('connect.php');

 $q= "INSERT INTO user (f_name,l_name,tel,email,pass,dateofbirth) VALUES('$fname','$lname','$tel','$email','$passw','$DOB')";

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
