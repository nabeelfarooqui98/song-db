<!DOCTYPE HTML>
<html>
<head>
<!-- 	<meta charset="utf-8">
	<meta name="viewport" conent="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>MY MUSIC DATABASE</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></link>
	<script type="text/javascript" src="./js/main.js"></script> -->
	<?php include_once("./templates/header.php"); ?>
</head>
<body>
	<!--navbar-->
	<br><br>
	<div class="container">
		<div class="card mx-auto" style="width: 20rem;">
		  <img class="card-img-top mx-auto" style="width: 60%;" src="./images/login.png" alt="login icon">
		  <div class="card-body">
		    <form>
			  	<div class="form-group">
			    	<label for="exampleInputEmail1">Email address</label>
			    	<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			    	<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  		</div>
		  	 <div class="form-group">
		    	<label for="exampleInputPassword1">Password</label>
		    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		 	 </div>
		  <button type="submit" class="btn btn-primary mx-auto">Submit</button>
		  <span><a href="#">Register</a></span>
		</form>
  </div>
  <div class="card-footer" style="height: 80%;"><a href="#">forget Password</a></div>
</div>
	</div>
	
</body>
</html>
