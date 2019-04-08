<?php
session_start();
require_once('connect.php');
if (isset($_SESSION["tic_id_ad"])){
	$tic_id_ad=$_SESSION["tic_id_ad"];
	}

$q6= "select * from payment where ticket_id='$tic_id_ad'";
 $result6 = $mysqli->query($q6);	
$row6=$result6->fetch_array();		
$paymentid=$row6['payment_id'];


$q1= "UPDATE refund SET payment_id='$paymentid' where ticket_id='$tic_id_ad';";
$result1 = $mysqli->query($q1);

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css">
</head>

<body>
 <div class="py-3 bg-warning" >
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center d-md-flex justify-content-between align-items-center">
          <ul class="nav d-flex justify-content-center">
            <li class="nav-item text-dark"> <a class="nav-link" href="admin-concert_status.php">CONCERT STATUS</a> </li>
            <li class="nav-item text-dark"> <a class="nav-link" href="admin-user_status.php">USER STATUS</a> </li>
            <li class="nav-item text-dark"> <a class="nav-link" href="QandA_admin.php">Q&amp;A</a> </li>
			<li class="nav-item text-dark"> <a class="nav-link" href="admin-user_refund.php">REFUND</a> </li>
          </ul>
        </div>
        <div class="col-md-6 text-center d-md-flex justify-content-between align-items-center">
          <ul class="nav d-flex justify-content-center">
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
          </ul>
          <ul class="nav d-flex justify-content-center">
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
          </ul>
          <ul class="nav d-flex justify-content-center">
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
          </ul>
          <ul class="nav d-flex justify-content-center">
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
          </ul>
          <ul class="nav d-flex justify-content-center">
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
          </ul>
          <ul class="nav d-flex justify-content-center">
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
            <div class="btn-group"> <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">ADMIN</button>
              <div class="dropdown-menu"> <a class="dropdown-item" href="admin-profile.php">ADMIN PROFILE</a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="admin-changepass.php" style="">CHANGE PASSWORD</a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="home_page.php" style="">LOG OUT</a>
              </div>
            </div>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-lg-5 col-md-7 col-10">
          <h1>REFUND SUCCESS!</h1>
          <h4>The ticket has been already cancel.&nbsp;</h4> <br><a class="btn btn-primary" href="admin-user_status.php">GO BACK</a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
</body>

</html>