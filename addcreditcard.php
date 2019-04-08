<?php


// Start the session
session_start();
if (isset($_SESSION["udid"])){
	$udid=$_SESSION["udid"];
	}
if (isset($_SESSION["quality"])){
	$quality=$_SESSION["quality"];
	$total_price=$_SESSION["total_price"];
}

$zone=$_SESSION["zone"];
$price=$_SESSION["price"];
$cardno=$_POST['cardno'];
$cardname=$_POST['cardname'];
$bankname=$_POST['bankname'];
$exp=$_POST['exp'];
$cvv=$_POST['cvv'];

require_once('connect.php');



 $q6= "INSERT INTO ticket (user_id,date_book,time_book,zone,price,quantity,total_price) VALUES('$udid',CURDATE(),CURTIME(),'$zone','$price','$quality','$total_price')";
 $result6 = $mysqli->query($q6);



$q5= "select * from ticket where user_id='$udid' order by Ticket_id DESC";
 $result5 = $mysqli->query($q5);	
$row5=$result5->fetch_array();		
$ticketid=$row5['ticket_id'];
echo $ticketid;


 $q= "INSERT INTO payment (user_id,ticket_id,ticket_status,total_price,card_number,card_expdate,card_cvv,bank_name,nameoncard) VALUES('$udid','$ticketid','Available','$total_price','$cardno','$exp','$cvv','$bankname','$cardname')";

$result = $mysqli->query($q);

if(!$result){
	die('ERROR:' .$q." ".$mysqli->error);
}




header("Location: user-my_ticket.php");

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
