<?php
session_start();

 $mysqli = new mysqli('localhost','root','','dbee');
 if($mysqli->connect_errno){
 echo $mysqli->connect_errno.": ".$mysqli->connect_error;
 }

 $tic_id = $_GET['tic_id'];
$_SESSION["tic_id"]=$tic_id;

$q="DELETE FROM ticket where ticket_id=$tic_id";
 if(!$mysqli->query($q)){
echo "DELETE failed. Error: ".$mysqli->error ;
 }
 $mysqli->close();
 //redirect
header("Location: refund_suc.php ");
?>
