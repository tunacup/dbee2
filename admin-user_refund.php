<!DOCTYPE html>
<?php require_once('connect.php');?>
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
 
 
  <div class="py-5" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="" >Refund Info</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12" style="">
          <ul class="nav nav-tabs">
            <li class="nav-item"> <a href="" class="active nav-link" data-toggle="tab" data-target="#tabone">Zone A1</a> </li>
            <li class="nav-item"> <a class="nav-link" href="" data-toggle="tab" data-target="#tabtwo">Zone A2</a> </li>
            <li class="nav-item"> <a href="" class="nav-link" data-toggle="tab" data-target="#tabthree">Zone B</a> </li>
            <li class="nav-item"> <a href="" class="nav-link" data-toggle="tab" data-target="#tabfour">Zone C</a> </li>
          </ul>
          <div class="tab-content mt-2">
            <div class="tab-pane fade show active" id="tabone" role="tabpanel">

			<?php
			$q="SELECT t.*,u.* FROM refund t,user u WHERE t.user_id=u.user_id AND t.zone='A1' order by refund_id DESC";
			if($result=$mysqli->query($q)){
			echo '<table>';
			echo "<tr><th width='200px'>refund_id</th><th width='200px'>ticket_id</th><th width='200px'>user_id</th><th width='200px'>Payment_id</th><th width='200px'>Name</th><th width='200px'>Email</th><th width='200px'>Booking date</th><th width='200px'>Time</th><th width='200px'>Quantity</th><th width='200px'>Total price</th></tr>";
				while($row=$result->fetch_array()){
					 echo "<tr>";
					echo "<td width='200px'>".$row['refund_id']."</td>";
					echo "<td width='200px'>".$row['ticket_id']."</td>";
					echo "<td width='200px'>".$row['user_id']."</td>";
					echo "<td width='200px'>".$row['payment_id']."</td>";
					 echo "<td width='200px'>".$row['f_name']." ".$row['l_name']."</td>";
					 echo "<td width='200px'>".$row['email']."</td>";
					 echo "<td width='200px'>".$row['date_book']."</td>";
					 echo "<td width='200px'>".$row['time_book']."</td>";
					 echo "<td width='200px'>".$row['quantity']."</td>";
					 echo "<td width='200px'>".$row['total_price']."</td>";
			
					 
				
				}
			echo '</table>';
	
			}

			?>			
            
             
            </div>
			
			
            <div class="tab-pane fade" id="tabtwo" role="tabpanel">
              <?php
			$q="SELECT t.*,u.* FROM refund t,user u WHERE t.user_id=u.user_id AND t.zone='A2' order by refund_id DESC";
			if($result=$mysqli->query($q)){
			echo '<table>';
			echo "<tr><th width='200px'>refund_id</th><th width='200px'>ticket_id</th><th width='200px'>user_id</th><th width='200px'>Payment_id</th><th width='200px'>Name</th><th width='200px'>Email</th><th width='200px'>Booking date</th><th width='200px'>Time</th><th width='200px'>Quantity</th><th width='200px'>Total price</th></tr>";
				while($row=$result->fetch_array()){
					 echo "<tr>";
					echo "<td width='200px'>".$row['refund_id']."</td>";
					echo "<td width='200px'>".$row['ticket_id']."</td>";
					echo "<td width='200px'>".$row['user_id']."</td>";
					echo "<td width='200px'>".$row['payment_id']."</td>";
					 echo "<td width='200px'>".$row['f_name']." ".$row['l_name']."</td>";
					 echo "<td width='200px'>".$row['email']."</td>";
					 echo "<td width='200px'>".$row['date_book']."</td>";
					 echo "<td width='200px'>".$row['time_book']."</td>";
					 echo "<td width='200px'>".$row['quantity']."</td>";
					 echo "<td width='200px'>".$row['total_price']."</td>";
					 
				
				}
			echo '</table>';
	
			}

			?>		
            </div>
			
			
            <div class="tab-pane fade" id="tabthree" role="tabpanel">
              <?php
			$q="SELECT t.*,u.* FROM refund t,user u WHERE t.user_id=u.user_id AND t.zone='B' order by refund_id DESC";
			if($result=$mysqli->query($q)){
			echo '<table>';
			echo "<tr><th width='200px'>refund_id</th><th width='200px'>ticket_id</th><th width='200px'>user_id</th><th width='200px'>Payment_id</th><th width='200px'>Name</th><th width='200px'>Email</th><th width='200px'>Booking date</th><th width='200px'>Time</th><th width='200px'>Quantity</th><th width='200px'>Total price</th></tr>";
				while($row=$result->fetch_array()){
					 echo "<tr>";
					echo "<td width='200px'>".$row['refund_id']."</td>";
					echo "<td width='200px'>".$row['ticket_id']."</td>";
					echo "<td width='200px'>".$row['user_id']."</td>";
					echo "<td width='200px'>".$row['payment_id']."</td>";
					 echo "<td width='200px'>".$row['f_name']." ".$row['l_name']."</td>";
					 echo "<td width='200px'>".$row['email']."</td>";
					 echo "<td width='200px'>".$row['date_book']."</td>";
					 echo "<td width='200px'>".$row['time_book']."</td>";
					 echo "<td width='200px'>".$row['quantity']."</td>";
					 echo "<td width='200px'>".$row['total_price']."</td>";
					 
					
				}
			echo '</table>';
	
			}

			?>		
            </div>
			
			
			
			<div class="tab-pane fade" id="tabfour" role="tabpanel">
              <?php
			$q="SELECT t.*,u.* FROM refund t,user u WHERE t.user_id=u.user_id AND t.zone='C' order by refund_id DESC";
			if($result=$mysqli->query($q)){
			echo '<table>';
		echo "<tr><th width='200px'>refund_id</th><th width='200px'>ticket_id</th><th width='200px'>user_id</th><th width='200px'>Payment_id</th><th width='200px'>Name</th><th width='200px'>Email</th><th width='200px'>Booking date</th><th width='200px'>Time</th><th width='200px'>Quantity</th><th width='200px'>Total price</th></tr>";
				while($row=$result->fetch_array()){
					 echo "<tr>";
					echo "<td width='200px'>".$row['refund_id']."</td>";
					echo "<td width='200px'>".$row['ticket_id']."</td>";
					echo "<td width='200px'>".$row['user_id']."</td>";
					echo "<td width='200px'>".$row['payment_id']."</td>";
					 echo "<td width='200px'>".$row['f_name']." ".$row['l_name']."</td>";
					 echo "<td width='200px'>".$row['email']."</td>";
					 echo "<td width='200px'>".$row['date_book']."</td>";
					 echo "<td width='200px'>".$row['time_book']."</td>";
					 echo "<td width='200px'>".$row['quantity']."</td>";
					 echo "<td width='200px'>".$row['total_price']."</td>";
					 
				
				}
			echo '</table>';
	
			}

			?>		
            </div>
			
			
			
			
          </div>
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