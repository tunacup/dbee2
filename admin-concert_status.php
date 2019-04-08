<html>
<?php
require_once('connect.php');
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css">
</head>

<body >
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
            <div class="btn-group"> <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">ADMIN</button>
              <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 40px, 0px); top: 0px; left: 0px; will-change: transform;"> <a class="dropdown-item" href="admin-profile.php">ADMIN PROFILE</a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="admin-changepass.php" style="">CHANGE PASSWORD</a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="home_page.php" style="">LOG OUT</a>
              </div>
            </div>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </div>
   <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">Concert Status</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <ul class="list-group">
		  
		<?php  $q="SELECT SUM(`quantity`) FROM `ticket` WHERE zone='A1'";
		$result=$mysqli->query($q);
		$row=$result->fetch_array();	
		?>
		
            <li class="list-group-item d-flex justify-content-between align-items-center w-50 m-2">Zone A1 <span class="badge badge-primary badge-pill" style=""><?php echo $row['SUM(`quantity`)']?>/1000</span></li>
			
		<?php  $q2="SELECT SUM(`quantity`) FROM `ticket` WHERE zone='A2'";
		$result2=$mysqli->query($q2);
		$row2=$result2->fetch_array();	
		?>	
            <li class="list-group-item d-flex justify-content-between align-items-center w-50 m-2">Zone A2 <span class="badge badge-primary badge-pill" style=""><?php echo $row2['SUM(`quantity`)']?>/1000</span></li>
			
		<?php  $q3="SELECT SUM(`quantity`) FROM `ticket` WHERE zone='B'";
		$result3=$mysqli->query($q3);
		$row3=$result3->fetch_array();	
		?>		
            <li class="list-group-item d-flex justify-content-between align-items-center w-50 m-2">Zone B <span class="badge badge-primary badge-pill" style=""><?php echo $row3['SUM(`quantity`)']?>/1000</span></li>
			
		<?php  $q4="SELECT SUM(`quantity`) FROM `ticket` WHERE zone='C'";
		$result4=$mysqli->query($q4);
		$row4=$result4->fetch_array();	
		?>		
            <li class="list-group-item d-flex justify-content-between align-items-center w-50 m-2">Zone C <span class="badge badge-primary badge-pill" style=""><?php echo $row4['SUM(`quantity`)']?>/1000</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
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

