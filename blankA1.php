<?php
session_start();
require_once('connect.php');
	if (isset($_SESSION["udid"])){
	$udid=$_SESSION["udid"];
	}
	

if(isset($_POST['quality']))
{
	$int = $_POST['quality'];
}
if (isset($_SESSION["f_name"])){
	$f_name=$_SESSION["f_name"];
	
	
	}
$int2=(int)$int;
$int2=$int2*4500;

$_SESSION["quality"]=$int;
$_SESSION["total_price"]=$int2;	

$_SESSION["zone"]='A1';
$_SESSION["price"]='4500';


?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="theme.css" type="text/css">
</head>

<body >
	<?php
$q="select * from ticket ;";
$result=$mysqli->query($q);
$row=$result->fetch_array();		
						
?>	
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
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="" contenteditable="true">A1 STANDING Ticket</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-1 text-left">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="">Total Cost</h1>
        </div>
        <div class="col-md-6">
         
		  <h1 class=""><?php echo $int2;?> Baht</h1>
        </div>
      </div>
    </div>
  </div>

<?php
$q2 = "call avariable(10)";
$result2 = $mysqli->query($q2);
		
$q3 = "select * from ticket_avi";
$result3 = $mysqli->query($q3);
$row3=$result3->fetch_array();			
?>		

<?php if($row3['remainA1']>1){

	
?>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-tabs">
            <li class="nav-item"> <a href="" class="active nav-link" data-toggle="tab" data-target="#tabone">Credit Card / Debit Card</a> </li>
            <li class="nav-item"> <a class="nav-link" href="" data-toggle="tab" data-target="#tabtwo">Counter Service</a> </li>
          </ul>
          <div class="tab-content mt-2">
            <div class="tab-pane fade show active" id="tabone" role="tabpanel">
              <div class="row">
                <div class="mx-auto col-lg-6 col-10">
                  <h1>Credit Card / Debit Card</h1>
                  <form action="addcreditcard.php" method="POST">
				 
                    <div class="form-group"> <input type="text" name="cardno" class="form-control" id="form16" placeholder="Card Number" required> </div>
                    <div class="form-group">  <input type="text" name="cardname" class="form-control" id="form17" placeholder="Card Holder Name" required> </div>
					<div class="form-group"> <input type="text" name="bankname" class="form-control" id="form16" placeholder="Bank Name" required> </div>
                    <div class="form-group"><input type="date" name="exp" class="form-control" id="form17" required></div>
                    <div class="form-group"> <input type="text" name="cvv" class="form-control" id="form18" placeholder="CVC/CVV" required> </div>
                    <div class="form-group">
                      <div class="form-check"> <input class="form-check-input" type="checkbox" id="form21" value="on"> <label class="form-check-label" for="form21">Accept Term of Service</label> </div>
                    </div>
					<input class="btn btn-primary" type="submit" value="Payment">
                  </form>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tabtwo" role="tabpanel">
              <p class="lead text-center">Please bring this QR-code to counter service within 30 minuits.</p><img class="img-fluid d-block mx-auto" src="DBee_QRcode.png">
            </div>
            <div class="tab-pane fade" id="tabthree" role="tabpanel">
              <p class="">Tab pane three. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


    <?php }else{?>



  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-tabs">
            <li class="nav-item"> <a href="" class="active nav-link" data-toggle="tab" data-target="#tabone">Excess Supply</a> </li>
    
          </ul>
          <div class="tab-content mt-2">
            <div class="tab-pane fade show active" id="tabone" role="tabpanel">
              <div class="row">
                <div class="mx-auto col-lg-6 col-10">
					<h1>Message</h1>
                <h3 style="color: #FF0004">Your order is excess, please choose your ticket again</h3><br>
					
	<form action="access.php" method="post">
<input class="btn btn-primary" type="submit" value="BUY TICKET"></input>
	</form>
					
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </div>



        
         
     
			


<?php }?>




  <div class="py-5 text-center">
    <div class="container">
    </div>
  </div>
  <div class="py-3">
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