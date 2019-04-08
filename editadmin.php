<?php

$connect = new mysqli('localhost','root','','dbee');
// Start the session
session_start();

if(isset($_SESSION["aemail"])){
$aemail=$_SESSION["aemail"];
}

$aaname=$_POST['aaname'];


require_once('connect.php');

 $q= "UPDATE admin SET name_ad='$aaname' where email_ad='$aemail';";

$result = $mysqli->query($q);

if(!$result){
	die('ERROR:' .$q." ".$mysqli->error);
}

header("Location: admin-profile.php ");
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
