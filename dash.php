<?php include_once("./templates/header.php"); 
	if(!isset($_SESSION['username']))
	{
		header("location: ../song-db/loginpage.php");
		exit();
	}

	?>

<!DOCTYPE HTML>
<html>
<head>
	
	
</head>
<body>
	<!--navbar-->
	<br><br>
	<div class="container">
		<div class="row" style="height:60%;">
			<div class="col-md-4">
				<div class="card mx-auto" style="width: 20rem;">
  					<img class="card-img-top mx-auto" style = "width: 60%;" src="./images/login.png" alt="Card image cap">
 					 <div class="card-body">
   						<h5 class="card-title"><i class="fa fa-user">&nbsp;</i>profile</h5>
    					<p class="card-text"><?php echo $_SESSION['username']; ?></p>
    					<p class="card-text">admin</p>
    					
 					</div>
				</div>
			</div>
			<div class= "col-md-8">
						<div class="card-body">
 						 <div class="accordion" id="accordionExample">
  						<div class="card">
    					<div class="card-header" id="headingOne">
      					<h5 class="mb-0">
        				<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				          edit options
				        </button>
				      </h5>
				    </div>
				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
					<div class="card-body">
					<a href="./modifysongdb.php" class=" btn btn-primary"><i class="fa fa-edit">&nbsp;</i>song</a>
						<a href="./modifyartistdb.php" class=" btn btn-primary"><i class="fa fa-edit">&nbsp;</i>artist</a>
						<a href="./modifyalbumdb.php" class=" btn btn-primary"><i class="fa fa-edit">&nbsp;</i>album</a>
						<a href="./modifygenredb.php" class=" btn btn-primary"><i class="fa fa-edit">&nbsp;</i>genre</a>
						
					</div>
				</div>
		</div>
		</div>
		
</div>

</div>
</div>
</div>
</div>
</body>
</html>
