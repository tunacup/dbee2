<?php

$connect = new mysqli('localhost','root','','dbee');
// Start the session
session_start();

$email=$_POST['email'];
$name=$_POST['name'];
$ques=$_POST['ques'];
$uid=$_SESSION["udid"];
require_once('connect.php');

 $q= "INSERT INTO question (user_id,email,name,question) VALUES('$uid','$email','$name','$ques')";

$result = $mysqli->query($q);

if(!$result){
	die('ERROR:' .$q." ".$mysqli->error);
}

header("Location: thankyou.php");
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
