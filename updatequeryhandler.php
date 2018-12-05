<?php
	include_once("./templates/header.php");
	include_once 'database/db.php';
	if(!isset($_SESSION['username']))
	{
		header("location: ../song-db/loginpage.php");
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php


if(isset($_POST['updategenre_btn']))
{
// 	echo $_GET['genre_id'];
// echo $_POST['genrename'];

$sql = 'update genre set genre_name ="' . $_POST['genrename'] . '" where genre_id = ' . $_GET['genre_id'];

if ($result = mysqli_query($conn,$sql))
	{
		echo "artist add success \r\n";
		header('Location: ./modifygenredb.php?result=true');
     	exit();
	}
	else
	{
		echo "query run error: \r\n" . mysqli_error($conn) . "\r\n" ;
		header('Location: ./modifygenredb.php?result=false');
	}

}
else if(isset($_POST['updateartist_btn']))
{
// 	echo $_GET['genre_id'];
// echo $_POST['genrename'];

$sql = 'update artist set fname ="' . $_POST['fname'] . '" , lname ="' . $_POST['lname'] . '", dateOfBirth ="' . $_POST['dob'] . '" where artist_id = ' . $_GET['artist_id'];

if ($result = mysqli_query($conn,$sql))
	{
		echo "artist add success \r\n";
		header('Location: ./modifyartistdb.php?result=true');
     	exit();
	}
	else
	{
		echo "query run error: \r\n" . mysqli_error($conn) . "\r\n" ;
		header('Location: ./modifyartistdb.php?result=false');
	}

}

?>
</body>
</html>