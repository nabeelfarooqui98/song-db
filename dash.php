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
    					<a href="#" class=" btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Edit Profile</a>
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
				          insert record
				        </button>
				      </h5>
				    </div>
				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
					<div class="card-body">
					<a href="./modifysongdb.php" class=" btn btn-primary"><i class="fa fa-edit">&nbsp;</i>add song</a>
						<a href="./modifyartistdb.php" class=" btn btn-primary"><i class="fa fa-edit">&nbsp;</i>add artist</a>
						<a href="./modifyalbumdb.php" class=" btn btn-primary"><i class="fa fa-edit">&nbsp;</i>add album</a>
						<a href="./modifygenredb.php" class=" btn btn-primary"><i class="fa fa-edit">&nbsp;</i>add genre</a>
						<a href="./modifyuserdb.php" class=" btn btn-primary"><i class="fa fa-edit">&nbsp;</i>add user</a>
					</div>
				</div>
		</div>
		<div class="card">
		    <div class="card-header" id="headingTwo">
		      <h5 class="mb-0">
				<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				      update record
						</button>
						</h5>
			</div>
			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
				<div class="card-body">
					<a href="#" class=" btn btn-primary"><i class="fa fa-edit">&nbsp;</i>update song</a>
					<a href="#" class=" btn btn-primary"><i class="fa fa-edit">&nbsp;</i>update artist</a>
					<a href="#" class=" btn btn-primary"><i class="fa fa-edit">&nbsp;</i>update album</a>
					<a href="#" class=" btn btn-primary"><i class="fa fa-edit">&nbsp;</i>update genre</a>
					<br><br>
					<a href="#" class=" btn btn-primary"><i class="fa fa-edit">&nbsp;</i>update user</a>
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