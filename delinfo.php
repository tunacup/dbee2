<?php
session_start();
 $ticket_id = $_GET['id'];
$_SESSION["tic_id_ad"]= $_GET['id'];
 $mysqli = new mysqli('localhost','root','','dbee');
 if($mysqli->connect_errno){
 echo $mysqli->connect_errno.": ".$mysqli->connect_error;
 }
$q="DELETE FROM ticket where ticket_id=$ticket_id";
 if(!$mysqli->query($q)){
echo "DELETE failed. Error: ".$mysqli->error ;
 }



 //redirect
header("Location: refund_suc_ad.php");
?>
