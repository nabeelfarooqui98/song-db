<?php

	include_once("./templates/header.php"); 


if(isset($_SESSION["username"]))
{

	header("location: ../song-db/home.php");
	exit();
}
?>

<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
	<br><br>
	<div class="container">
		<div class="card mx-auto" style="width: 20rem;">
		  <img class="card-img-top mx-auto" style="width: 60%;" src="./images/login.png" alt="login icon">
		  <div class="card-body">
		    <form class="form-signup" action="includes/signup.php" method= "post">
			  	<div class="form-group">
			    	<label>Email address</label>
			    	<input name="username" type="text" class="form-control"  placeholder="Enter email">
		  		</div>
		  	 <div class="form-group">
		    	<label>Password</label>
		    	<input name="password" type="password" class="form-control" placeholder="Password">
		 	 </div>
		  <button name="signup-submit" type="submit" class="btn btn-primary mx-auto">Submit</button>
		  <span><a href="#">Register</a></span>
		</form>
  </div>
  <div class="card-footer" style="height: 80%;"><a href="#">forgotPassword?</a></div>
</div>
	</div>
	
</body>
</html>
