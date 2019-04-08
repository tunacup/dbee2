<?php

session_start();
require_once('connect.php');
	if (isset($_SESSION["udid"])){
	$udid=$_SESSION["udid"];
	}

$q5= "select * from ticket where user_id='$udid' order by Ticket_id DESC";
 $result5 = $mysqli->query($q5);	
$row5=$result5->fetch_array();		
$ticketid=$row5['ticket_id'];
echo $ticketid;

$q="DELETE FROM ticket where ticket_id=$ticketid";
 if(!$mysqli->query($q)){
echo "DELETE failed. Error: ".$mysqli->error ;
 }
 $mysqli->close();
 //redirect
header("Location: buy_ticket.php");
?>
