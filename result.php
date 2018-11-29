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
	$sql = "SELECT * from song inner join songartist on (song.song_id=songartist.song_id) inner join artist on (artist.artist_id = songartist.artist_id) where songName='";
	//$sql = "SELECT * from song natural join songartist natural join artist where songName='";
	$sql .= $_POST['song_query'];
	$sql .= "' OR fname='";
	$sql .= $_POST['song_query'];
	$sql .= "' OR lname='";
	$sql .= $_POST['song_query'];
	$sql .= "'";
	//$sql .= " UNION SELECT * from song inner join artist on artist_id where fname='";
	//$sql .= $_POST['song_query'];
	//$sql .= "'";





	echo "running: " . $sql . "<br>";

	//$sql = " SELECT * from song inner join songartist on song.song_id=songartist.song_id inner join artist on artist.artist_id = songartist.artist_id ";

	$result = mysqli_query($conn,$sql);

	if (mysqli_query($conn,$sql) )
	{
		echo "query succes \r\n";
		$rowcount=mysqli_num_rows($result);
		echo 'row count: ' . $rowcount . "<br>";
		//echo 'success';
		while ($row = $result->fetch_assoc()) {
	    echo "<br>".$row['songName']." by ".$row['fname']." ".$row['lname']." ";
	    
	    echo '<a href="';
	    echo $row['musicLink'];
	    echo '">YouTube Link</a>';



	    /*
	    echo '<iframe width="420" height="315" src=" ';
	    echo $row['musicLink'];
	    echo '"></iframe>';
	    echo "<br>";
		*/
		}
	}
	else
	{

		echo "query run error: \r\n" . mysqli_error($conn) . "\r\n" ;//. mysql_error();

	}





?>
</body>
</html>
