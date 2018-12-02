

<!DOCTYPE HTML>
<html>
<head>
	<?php include_once("./templates/header.php"); ?>
</head>
<body>
	<br><br>
	<div class="container">
		<div class="card mx-auto" style="width: 20rem;">
		  <img class="card-img-top mx-auto" style="width: 60%;" src="./images/login.png" alt="login icon">
		  <div class="card-body">
		    <form class="form-signup" action="includes/signup.php" method= "post">
			  	<div class="form-group">
			    	<label for="exampleInputEmail1">Email address</label>
			    	<input name="uid" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			    	
		  		</div>
		  	 <div class="form-group">
		    	<label for="exampleInputPassword1">Password</label>
		    	<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
