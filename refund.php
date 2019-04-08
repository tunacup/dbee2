<?php
 $ticket_id = $_GET['id'];
 $mysqli = new mysqli('localhost','root','','dbee');
 if($mysqli->connect_errno){
 echo $mysqli->connect_errno.": ".$mysqli->connect_error;
 }
$q="DELETE FROM ticket where ticket_id=$ticket_id";
 if(!$mysqli->query($q)){
echo "DELETE failed. Error: ".$mysqli->error ;
 }
 $mysqli->close();
 //redirect
 header("Location: admin-user_status.php");
?>
