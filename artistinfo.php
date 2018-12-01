<?php
	include_once 'database/db.php';
	 include_once("./templates/header.php"); 

?>

<html>
<body>

<?php 


//echo 'test: ' . $_GET["fname"] . ' ' . $_GET["lname"];

$sql = "select * from song inner join songartist on (song.song_id=songartist.song_id) inner join artist on (artist.artist_id = songartist.artist_id) where artist.artist_id=" .  $_GET["artist_id"];
//echo $sql;

	if ($result = mysqli_query($conn,$sql))
	{
		$rowcount=mysqli_num_rows($result);

		while ($row = $result->fetch_assoc()) 
		{
		   
		    //use artist id
		    //echo  $row['fname'] . ' ' . $row['lname']  .'">' . $artistname . '</a>	';

			echo "<b>".$row['songName']."</b> " . '<a href="' . $row['musicLink'] . '">YouTube Link</a> <br>';


		}
	}
	else
	{

		echo "query run error: \r\n" . mysqli_error($conn) . "\r\n" ;//. mysql_error();

	}


 ?>

</body>
</html>