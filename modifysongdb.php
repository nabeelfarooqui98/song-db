  <?php include_once("./templates/header.php"); ?>

<form method="POST" action="./queryhandler.php" style="width:90%;">
  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">Song Name</label>
    <div class="col-10">
      <input class="form-control" type="text"   name="songname" required>
    </div>
  </div>

<div class="form-group row">
    <label for="example-date-input" class="col-2 col-form-label">Release Date</label>
    <div class="col-10">
      <input class="form-control" type="date"  name="releasedate" required>
    </div>
  </div>
 
  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">Youtube Link</label>
    <div class="col-10">
      <input class="form-control" type="text"  name="youtube" required>
    </div>
  </div>
 
  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">Lyrics Link</label>
    <div class="col-10">
      <input class="form-control" type="text"  name="lyrics" required>
    </div>
  </div>

  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">Select Artist</label>
  <div class="col-10">

  <select class="form-control" id="sel1" name="artistname">
    
<?php
            $sql = "select * from artist";
            if ($result = mysqli_query($conn,$sql))
            {
                while ($row = $result->fetch_assoc()) 
                {
                  
                echo     '<option>' . $row['fname'] . " " . $row['lname'] .'</option>';
          
                }
            }
            else
            {
              echo "query run error: \r\n" . mysqli_error($conn) . "\r\n" ;//. mysql_error();
            }
        ?>

  </select>
  </div>
</div>


<div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">Select Album</label>
  <div class="col-10">

  <select class="form-control" id="sel1" name="albumname">
    
<?php
            $sql = "select * from album";
            if ($result = mysqli_query($conn,$sql))
            {
                while ($row = $result->fetch_assoc()) 
                {
                  
                echo     '<option>'  . $row['album_name'] .'</option>';
          
                }
            }
            else
            {
              echo "query run error: \r\n" . mysqli_error($conn) . "\r\n" ;//. mysql_error();
            }
        ?>

  </select>
  </div>
</div>


<div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">Select Genre</label>
  <div class="col-10">

  <select class="form-control" id="sel1" name="genrename">
    
<?php
            $sql = "select * from genre";
            if ($result = mysqli_query($conn,$sql))
            {
                while ($row = $result->fetch_assoc()) 
                {
                  
                echo     '<option>' .  $row['genre_name'] .'</option>';
          
                }
            }
            else
            {
              echo "query run error: \r\n" . mysqli_error($conn) . "\r\n" ;//. mysql_error();
            }
        ?>

  </select>
  </div>
</div>

<button type="submit" name="addsong_btn" class="btn btn-primary">Insert Song</button>

<?php

//to display success or failure when we return from the queryhandler (whhich passess the result in url)

if(isset($_GET['result']))
{
  if( $_GET['result'] == 'true')
  {
    echo "Success!";
  }
if( $_GET['result'] == 'false')
  {
    echo "An Error Occured!";
  }

}
?>
</form>


<!----------------------------------------->
<!---------------table onwards---------------->
<!----------------------------------------->


    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Song ID</th>
          <th scope="col">Song Name</th>
          <th scope="col">Release Date</th>
          <th scope="col">Album</th>
          <th scope="col">Artist</th>
          <th scope="col">Genre</th>
          <th scope="col">YouTube Link</th>
          <th scope="col">Lyrics Link</th> 
        </tr>
      </thead>

      <tbody>
        
        <?php

            $sql = "select * from song inner join artist on (song.artist_id = artist.artist_id) inner join album on (song.album_id = album.album_id) inner join genre on (song.genre_id = genre.genre_id)";
            

            if ($result = mysqli_query($conn,$sql))
            {
                while ($row = $result->fetch_assoc()) 
                {
                  
                  echo '<tr>';
                  
                  echo '<th scope="row">' . $row['song_id'] . '</th>'; //first col aesa show hota hai
                  echo '<td>' . $row['songName'] .     '</td>';
                  echo '<td>' . $row['releaseDate'] .     '</td>';
                  echo '<td>' . $row['album_name'] .       '</td>';
                  echo '<td>' . $row['fname'] . " " . $row['lname'] .  '</td>';
                  echo '<td>' . $row['genre_name'] .       '</td>';
                  echo '<td><a href="' . $row['musicLink'] . '">YouTube</a></td>';  
                  echo '<td><a href="' . $row['lyricsLink'] . '">Lyrics</a></td>';

                  echo '<td><a href="./queryhandler.php?delete_song=' . $row['song_id'] .  '">Delete Song</a></td>';
                  
                  echo '</tr>';

//                  echo "<b>".$row['songName']."</b> " . '<a href="' . $row['musicLink'] . '">YouTube Link</a> <br>';
                }
            }
            else
            {
              echo "query run error: \r\n" . mysqli_error($conn) . "\r\n" ;//. mysql_error();
            }
        ?>


      </tbody>

    </table>

