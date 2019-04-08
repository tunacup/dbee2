<?php
session_start();
require_once('connect.php');
	if (isset($_SESSION["email"])){
	$email=$_SESSION["email"];
	}
if (isset($_SESSION["f_name"])){
	$f_name=$_SESSION["f_name"];
	
	
	}

?>

<!DOCTYPE html>
<!โค้ดแทบบน>
<html>


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
	<?php
$q="select * from user where email = '$email';";
$result=$mysqli->query($q);
$row=$result->fetch_array();		
						
?>	
<body >
<div class="py-3 bg-warning">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center d-md-flex justify-content-between align-items-center">
          <ul class="nav d-flex justify-content-center">
            <li class="nav-item text-dark" style=""> <a class="nav-link active" href="concert_info.php"><b class="">HOME</b></a> </li>
            <li class="nav-item text-dark"> <a class="nav-link" href="buy_ticket.php"><b>BUY TICKET</b></a> </li>
            <li class="nav-item"> <a class="nav-link" href="line_up.php"><b>LINE UP</b></a> </li>
            <li class="nav-item"> <a class="nav-link" href="location.php"><b>LOCATION</b></a> </li>
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
          </ul> <a class="btn btn-primary" href="contact_us.php">Q&amp;A</a>
          	<?php	  
	if (isset($_SESSION["f_name"])&isset($_SESSION["l_name"])){?>
		<div class="btn-group"> <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><?php echo ("Hi! ".$f_name." ");?></button>

	<?php }
		else{?>
			<div class="btn-group"> <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">USER</button>
		<?php }?>
            <div class="dropdown-menu"> <a class="dropdown-item" href="user-profile.php">MY PROFILE</a>
              <div class="dropdown-divider"></div> <a class="dropdown-item" href="user-my_ticket.php" style="">MY TICKET</a>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="anwer_user.php" style="" >MESSAGE</a>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="user-changepass.php" style="">CHANGE PASSWORD</a>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="home_page.php" style="">LOG OUT</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <form action="edituser_pass.php" method="post">
    <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3" style="">
			<div class="w3-center">
				<img class="img-fluid d-block rounded-circle" src="si.png">
			
				</div>
		  </div>
      </div>
    </div>
  </div>
  
	
	<div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">User Info<br></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
			<input type="hidden"  name="udid" value="<?php echo($row['user_id'])?>">
			<input type="email" name="uuemail" class="form-control m-2 w-50" placeholder="DBeeadmin001@gmail.com">
			<input type="password" name="uupass" class="form-control m-2 w-50" placeholder="**********"></div>
		  </div>
		<div class="row">
        <div class="col-md-12"><input class="btn m-3 btn-primary" type="submit" value="Change Password" ></div>
      </div>
      </div>
      
    </div>
  </div>
	</form>
	
  <div class="py-3" >
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center d-md-flex align-items-center"> <i class="d-block fa fa-stop-circle fa-2x mr-md-5 text-primary"></i>
          <ul class="nav mx-md-auto d-flex justify-content-center">
            <li class="nav-item"> <a class="nav-link active" href="#">&nbsp;</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
          </ul>
          <div class="row">
            <div class="col-md-12 d-flex align-items-center justify-content-md-between justify-content-center my-2"> <a href="#">
                <i class="d-block fa fa-facebook-official text-muted fa-lg mx-2"></i>
              </a> <a href="#">
                <i class="d-block fa fa-instagram text-muted fa-lg mx-2"></i>
              </a> <a href="#">
                <i class="d-block fa fa-twitter text-muted fa-lg ml-2"></i>
              </a> </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mt-2 mb-0">© 1993-2018 DBMusic. All rights reserved</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

