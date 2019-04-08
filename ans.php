<?php


// Start the session
session_start();
$_SESSION["checkans"]=$_POST['ques_no'];
$ques_no = $_POST['ques_no'];
$ans=$_POST['ans'];
$user_id=$_SESSION["udid"];
require_once('connect.php');

 $q= "UPDATE question SET user_id='$user_id',answer='$ans' where ques_no='$ques_no';";

$result = $mysqli->query($q);

if(!$result){
	die('ERROR:' .$q." ".$mysqli->error);
}

header("Location: QandA_admin.php");

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
