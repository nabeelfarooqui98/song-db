<?php
	include_once 'database/db.php';
	 include_once("./templates/header.php"); 
	if(!isset($_SESSION['username']))
	{
		header("location: ../song-db/loginpage.php");
		exit();
	}
?>

<html>
<body>

<?php 


$sql = "select * from artist where artist_id = " .  $_GET["artist_id"];
//echo $sql;

	if ($result = mysqli_query($conn,$sql))
	{
		$rowcount=mysqli_num_rows($result);

		while ($row = $result->fetch_assoc()) 
		{		   
			$artist_id = $row['artist_id'];
			$fname = $row['fname'];
			$lname = $row['lname'];
			$dateOfBirth = $row['dateOfBirth'];
		}
	}
	else
	{
		echo "query run error: \r\n" . mysqli_error($conn) . "\r\n" ;//. mysql_error();
	}


echo '	<form method="POST" action="./updatequeryhandler.php?artist_id='. $artist_id.'" style="width:90%;">
  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">First Name</label>
    <div class="col-10">
      <input class="form-control" type="text"  value="'.$fname.'" name="fname" required>
    </div>
  </div>

  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">Last Name</label>
    <div class="col-10">
      <input class="form-control" type="text"  value="'.$lname.'" name="lname" >
    </div>
  </div>


  <div class="form-group row">
    <label for="example-date-input" class="col-2 col-form-label">Date of Birth</label>
    <div class="col-10">
      <input class="form-control" type="date" value="'.$dateOfBirth.'" name="dob" required>
    </div>
  </div>

<button type="submit" name="updateartist_btn" class="btn btn-primary">update Artist</button>
</form>';




 ?>

</body>
</html>