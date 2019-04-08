<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css">
</head>

<body >
  <div class="py-3 bg-warning">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center d-md-flex justify-content-between align-items-center">
          <ul class="nav d-flex justify-content-center">
            <li class="nav-item text-dark" style=""> <a class="nav-link active" href="#"></a> </li>
            <li class="nav-item text-dark"> <a class="nav-link" href="#"></a> </li>
            <li class="nav-item"> <a class="nav-link" href="#"></a> </li>
            <li class="nav-item"> <a class="nav-link" href="#"></a> </li>
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
          </ul>
        </div>
      </div>
    </div>
  </div>
</body>

</html>


<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css">
</head>

<body>
  <div class="py-2 text-center" >
    <div class="container">
      <div class="row">
        <div class="mx-auto col-lg-12 col-10" style="">
          <h1>Sign Up</h1>
		  <br> 
			<form action="adduser.php" name="f" method="POST">
          <div class="text-left">
            <div class="form-row">
              <div class="form-group col-md-6"> 
			 
				<label for="form19">First Name</label> 
				<input type="text" name="fname" class="form-control" id="form19" placeholder="First Name"> 
			  </div>
              <div class="form-group col-md-6"> 
				<label for="form20">Last Name</label> 
				<input type="text" name="lname" class="form-control" id="form20" placeholder="Last Name"> 
			  </div>
            </div>
            <div class="form-group"> 
				<label for="form17">Tel</label> 
				<input type="text" name="tel" class="form-control" id="form17" placeholder="081 234 5678"> 
			</div>
            <div class="form-row">
              <div class="form-group col-md-6"> 
				<label for="form19">Email</label> 
				<input type="text" name="email" class="form-control" id="email" required placeholder="Email"> 
			  </div>
              <div class="form-group col-md-6"> 
			    <label for="form20">Confirm Email</label> 
				<input type="text" class="form-control" id="confirm_email" placeholder="Confirm Email"> 
			  </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6"> 
				<label for="form19">Password</label> 
				<input type="password" name="passw" class="form-control"  id="password" required placeholder="••••"> 
			  </div>
              <div class="form-group col-md-6"> 
				<label for="form20">Confirm Password</label> 
				<input type="password" name="passw2" class="form-control" id="confirm_password" required placeholder="••••"> 
			  </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6"> 
				<label for="form19">Birthday</label> 
				<input type="date" name="DOB" class="form-control" id="form19" placeholder="••••"> 
			  </div>
              <div class="form-group col-md-6"></div>
            </div>
            <div class="form-group">
              <div class="form-check"> 
				<input class="form-check-input" type="checkbox" id="form21" value="on"> 
				<label class="form-check-label" for="form21"> I Agree with <a href="#">Term and Conditions</a> of the service </label> 
			  </div>
            </div> 
				<input class="btn btn-primary" type="submit" value="Sign up" >
        </div>
				</form>
		<script>
			var password = document.getElementById("password")
			  , confirm_password = document.getElementById("confirm_password");

			function validatePassword(){
			  if(password.value != confirm_password.value) {
				confirm_password.setCustomValidity("Passwords Don't Match");
			  } else {
				confirm_password.setCustomValidity('');
			  }
			}

			password.onchange = validatePassword;
			confirm_password.onkeyup = validatePassword;
		</script>
		
		<script>
			var email = document.getElementById("email")
			  , confirm_email = document.getElementById("confirm_email");

			function validateemail(){
			  if(email.value != confirm_email.value) {
				confirm_email.setCustomValidity("Email Don't Match");
			  } else {
				confirm_email.setCustomValidity('');
			  }
			}

			email.onchange = validateemail;
			confirm_email.onkeyup = validateemail;
		</script>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>