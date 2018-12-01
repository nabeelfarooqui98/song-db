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


//	echo "running: " . $sql . "<br>";

?> 
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="fa fa-music">&nbsp;</i>Songs
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <?php

    		$sql = "SELECT * from song inner join songartist on (song.song_id=songartist.song_id) inner join artist on (artist.artist_id = songartist.artist_id) where songName='";
			//$sql = "SELECT * from song natural join songartist natural join artist where songName='";
			$sql .= $_POST['song_query'];
			$sql .= "' OR fname='";
			$sql .= $_POST['song_query'];
			$sql .= "' OR lname='";
			$sql .= $_POST['song_query'];
			$sql .= "'";

        	if ($result = mysqli_query($conn,$sql))
			{
//				echo "query succes \r\n";
				$rowcount=mysqli_num_rows($result);
//				echo 'row count: ' . $rowcount . "<br>";
				//echo 'success';
				while ($row = $result->fetch_assoc()) 
				{
				    echo "<b>".$row['songName']."</b> by ".$row['fname']." ".$row['lname']." ";
				    
				    echo '<a href="';
				    echo $row['musicLink'];
				    echo '">YouTube Link</a> <br>';
				}
			}		
			else
			{

				echo "query run error: \r\n" . mysqli_error($conn) . "\r\n" ;//. mysql_error();

			}
        ?>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <i class="fa fa-user">&nbsp;</i>Artists
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        

      	<?php

      		$sql = "SELECT * FROM artist where fname = '" . $_POST['song_query'] . "' or lname = '" . $_POST['song_query'] . "'";
        	
			// $result = mysqli_query($conn,$sql);

        	if ($result = mysqli_query($conn,$sql))
			{
				$rowcount=mysqli_num_rows($result);

				while ($row = $result->fetch_assoc()) 
				{
				    $artistname = $row['fname']." ".$row['lname'];
				    
				    //echo '<a href="' . $artistname . '">' . $artistname . '</a>	';

				    //use artist name in link v
//					echo '<a href="artistinfo.php/?fname=' . $row['fname'] . '&lname='. $row['lname'] .'">' . $artistname . '</a>	';

				    //use artist id
				    echo '<a href="artistinfo.php/?artist_id=' . $row['artist_id']  .'">' . $artistname . '</a>	';





				}
			}		
			else
			{

				echo "query run error: \r\n" . mysqli_error($conn) . "\r\n" ;//. mysql_error();

			}
        ?>


      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <i class="fa fa-book">&nbsp;</i>Albums
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      	<?php
      		$sql= "SELECT * FROM ALBUM WHERE album_name='".$_POST['song_query']."'";

      		if ($result = mysqli_query($conn,$sql))
			{
				$rowcount=mysqli_num_rows($result);

				while ($row = $result->fetch_assoc()) 
				{
				    echo $row['album_name']." <br>";
				    
				}
			}		
			else
			{

				echo "query run error: \r\n" . mysqli_error($conn) . "\r\n" ;//. mysql_error();

			}

      	?>
      </div>
    </div>
  </div>
</div>
</body>
</html>
