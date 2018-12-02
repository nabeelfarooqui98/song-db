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


 


if(isset($_POST['addartist_btn'])) //agar artist button se is page par aye hain
{
	$sql = "insert into artist (fname,lname,dateOfBirth) values('" . $_POST['fname'] . "','" . $_POST['lname'] . "','" . $_POST['dob'] . "')";
	
	if ($result = mysqli_query($conn,$sql))
	{
		echo "artist add success \r\n";
		header('Location: ./addartist.php?result=true');
     	exit();
	}
	else
	{
		echo "query run error: \r\n" . mysqli_error($conn) . "\r\n" ;
		header('Location: ./addartist.php?result=false');
	}
}

if(isset($_GET['delete_artist']))
{
	$sql = "delete from artist where artist_id=" . $_GET['delete_artist'];

	if ($result = mysqli_query($conn,$sql))
	{
		echo "artist deleted \r\n";
		header('Location: ./addartist.php');
     	exit();
	}
	else
	{
		echo "query run error: \r\n" . mysqli_error($conn) . "\r\n" ;
		
	}
}



?>

</body>
</html>
