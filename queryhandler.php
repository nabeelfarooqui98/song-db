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

	<?php ?>
</head>
<body>
	

<?php


 


if(isset($_POST['addartist_btn'])) //agar artist button se is page par aye hain
{
	$sql = "insert into artist (fname,lname,dateOfBirth) values('" . $_POST['fname'] . "','" . $_POST['lname'] . "','" . $_POST['dob'] . "')";
	
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
else if(isset($_GET['delete_artist']))
{
	$sql = "delete from artist where artist_id=" . $_GET['delete_artist'];

	if ($result = mysqli_query($conn,$sql))
	{
		echo "artist deleted \r\n";
		header('Location: ./modifyartistdb.php');
     	exit();
	}
	else
	{
		echo "query run error: \r\n" . mysqli_error($conn) . "\r\n" ;
		
	}
}
else if(isset($_POST['addgenre_btn']))
{

	$sql = 'insert into genre (genre_name) values ("' . $_POST['genrename'] . '")';

	if ($result = mysqli_query($conn,$sql))
	{
		echo "genre added \r\n";
		header('Location: ./modifygenredb.php');
     	exit();
	}
	else
	{
		echo "query run error: \r\n" . mysqli_error($conn) . "\r\n" ;
		
	}

}
else if(isset($_GET['delete_genre']))
{
	$sql = "delete from genre where genre_id=" . $_GET['delete_genre'];

	if ($result = mysqli_query($conn,$sql))
	{
		echo "genre deleted \r\n";
		header('Location: ./modifygenredb.php');
     	exit();
	}
	else
	{
		echo "query run error: \r\n" . mysqli_error($conn) . "\r\n" ;
		
	}
}
else if(isset($_POST['addsong_btn']))
{

//	print_r($_POST);
//	echo $_POST['artistname'];
	//CAHNGE

//artist
	$pieces = explode(" ", $_POST['artistname']);
	

	if(!isset($pieces[1]))
	{
		$sql = 'select artist_id from artist where fname="' . $pieces[0] . '"';
	}
	else{
		$sql = 'select artist_id from artist where fname="' . $pieces[0] . '" and lname ="' . $pieces[1] . '"';	
	}

	
	// echo 'QUERY=' .$sql . "END QUERY";
	echo $sql;
	if ($result = mysqli_query($conn,$sql))
	{
		while ($row = $result->fetch_assoc()) 
                {
                  	$artistid = $row['artist_id'];
                	echo $artistid . "<- \r\n";
                } 
	}
	else
	{
		echo "query run error: \r\n" . mysqli_error($conn) . "\r\n" ;
		
	}

//album
	
	
	$sql = 'select album_id from album where album_name="' .  $_POST['albumname'] . '"';
	// echo 'QUERY=' .$sql . "END QUERY";
	if ($result = mysqli_query($conn,$sql))
	{
		while ($row = $result->fetch_assoc()) 
                {
                  	$albumid = $row['album_id'];
                	// echo $artistid . "<- \r\n";
                } 
	}
	else
	{
		echo "query run error: \r\n" . mysqli_error($conn) . "\r\n" ;
		
	}

//song
		$sql = 'select genre_id from genre where genre_name="' .  $_POST['genrename'] . '"';
	// echo 'QUERY=' .$sql . "END QUERY";
	if ($result = mysqli_query($conn,$sql))
	{
		while ($row = $result->fetch_assoc()) 
                {
                  	$genreid = $row['genre_id'];
                	// echo $artistid . "<- \r\n";
                } 
	}
	else
	{
		echo "query run error: \r\n" . mysqli_error($conn) . "\r\n" ;
		
	}
	
	$sql = 'insert into song (songName,releaseDate,musicLink,LyricsLink,artist_id,album_id,genre_id) values ("' . $_POST['songname'] . '" ,"' . $_POST['releasedate'] . '","' .$_POST['youtube'].'","'.$_POST['lyrics'].'",' .$artistid . ',' . $albumid. ','.$genreid . ')';
	


	// $sql = 'insert into song (songName,releaseDate,artist_id,album_id,genre_id,musicLink,LyricsLink) values ("' . $_POST['songname'] . '" ,"' . $_POST['releasedate'] . '",' . $artistid . ',' . $albumid "," . $genreid . ',"' . $_POST['youtube'] . '","' . $_POST['lyrics'] . '")';

	//echo $sql;

	if ($result = mysqli_query($conn,$sql))
	{
		echo "song added \r\n";
		header('Location: ./modifysongdb.php');
     	exit();
	}
	else
	{
		echo "query run error: \r\n" . mysqli_error($conn) . "\r\n" ;
		
	}

}
else if(isset($_GET['delete_song']))
{
	$sql = "delete from song where song_id=" . $_GET['delete_song'];

	if ($result = mysqli_query($conn,$sql))
	{
		echo "song deleted \r\n";
		header('Location: ./modifysongdb.php');
     	exit();
	}
	else
	{
		echo "query run error: \r\n" . mysqli_error($conn) . "\r\n" ;
		
	}
}
else if(isset($_POST['addalbum_btn']))
{
	$pieces = explode(" ", $_POST['artistname']);
	
	if(!isset($pieces[1]))
	{
		$sql = 'select artist_id from artist where fname="' . $pieces[0] . '"';
	}
	else{
		$sql = 'select artist_id from artist where fname="' . $pieces[0] . '" and lname ="' . $pieces[1] . '"';	
	}

	// echo 'QUERY=' .$sql . "END QUERY";
	if ($result = mysqli_query($conn,$sql))
	{
		while ($row = $result->fetch_assoc()) 
                {
                  	$artistid = $row['artist_id'];
                	// echo $artistid . "<- \r\n";
                } 
	}
	else
	{
		echo "query run error: \r\n" . mysqli_error($conn) . "\r\n" ;
		
	}
	

//insert
//	$sql = 'insert into album (album_name,releaseDate,artist_id) values ("' . $_POST['albumname'] . '","' $_POST['releaseDate'] '",'.$artistid .')';

	$sql = 'insert into album (album_name,releaseDate,artist_id) values ("'.$_POST['albumname'].'","'.$_POST['releaseDate'].'",'. $artistid . ')';

	if ($result = mysqli_query($conn,$sql))
	{
		echo "album added \r\n";
		header('Location: ./modifyalbumdb.php');
     	exit();
	}
	else
	{
		echo "query run error: \r\n" . mysqli_error($conn) . "\r\n" ;
		
	}

}
else if(isset($_GET['delete_album']))
{
	$sql = "delete from album where album_id=" . $_GET['delete_album'];

	if ($result = mysqli_query($conn,$sql))
	{
		echo "album deleted \r\n";
		header('Location: ./modifyalbumdb.php');
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
