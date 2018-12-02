<?php
	include_once 'database/db.php';
?>
<!DOCTYPE html>
<html>
<head>

	<?php include_once("./templates/header.php"); ?>
</head>
<body>
	

<?php


 


if(isset($_POST['addartist_btn']))
{

	//echo "received values: " .  $_POST['fname'] . " " . $_POST['lname'] . " " . $_POST['dob'];

	$sql = "insert into artist (fname,lname,dateOfBirth) values('" . $_POST['fname'] . "','" . $_POST['lname'] . "','" . $_POST['dob'] . "')";
//	$sql = "select * from song inner join songartist on (song.song_id=songartist.song_id) inner join artist on (artist.artist_id = songartist.artist_id) where artist.artist_id=" .  $_GET["artist_id"];
 	
 	echo "\r\n"  .  $sql;

	if ($result = mysqli_query($conn,$sql))
	{
		echo "artist add success \r\n";
		header('Location: ./addartist.php?result=true');
     	exit();
	}
	else
	{

		echo "query run error: \r\n" . mysqli_error($conn) . "\r\n" ;//. mysql_error();

	}


}



?>

</body>
</html>
