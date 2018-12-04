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


$sql = "select * from genre where genre_id = " .  $_GET["genre_id"];
//echo $sql;

	if ($result = mysqli_query($conn,$sql))
	{
		$rowcount=mysqli_num_rows($result);

		while ($row = $result->fetch_assoc()) 
		{		   
			$genre_id = $row['genre_id'];
			$genre_name = $row['genre_name'];
		}
	}
	else
	{
		echo "query run error: \r\n" . mysqli_error($conn) . "\r\n" ;//. mysql_error();
	}


echo '	<form method="POST" action="./updatequeryhandler.php?genre_id='. $genre_id .'" style="width:90%;">
  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">Genre name</label>
    <div class="col-10">
      <input class="form-control" type="text" value="'. $genre_name .'"  name="genrename">
    </div>
  </div>


<button type="submit" name="updategenre_btn" class="btn btn-primary">Update Genre</button>

</form> ';




 ?>

</body>
</html>