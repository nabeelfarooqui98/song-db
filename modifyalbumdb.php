  <?php include_once("./templates/header.php"); ?>

<form method="POST" action="./queryhandler.php" style="width:90%;">
  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">album Name</label>
    <div class="col-10">
      <input class="form-control" type="text"   name="albumname" required>
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
    <label for="example-date-input" class="col-2 col-form-label">Releases Date</label>
    <div class="col-10">
      <input class="form-control" type="date"  name="releaseDate" required>
    </div>
  </div>

<button type="submit" name="addalbum_btn" class="btn btn-primary">Insert Album</button>

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
          <th scope="col">Album ID</th>
          <th scope="col">Album Name</th> 
                  <th scope="col">Release Date</th> 
                            <th scope="col">Artist</th> 
        </tr>
      </thead>

      <tbody>
        
        <?php

            $sql = "select * from album inner join artist on (album.artist_id = artist.artist_id) ";
            

            if ($result = mysqli_query($conn,$sql))
            {
                while ($row = $result->fetch_assoc()) 
                {
                  
                  echo '<tr>';
                  
                  echo '<th scope="row">' . $row['album_id'] . '</th>'; //first col aesa show hota hai
                  echo '<td>' . $row['album_name'] .     '</td>';
                  echo '<td>' . $row['releaseDate'] .     '</td>';
                  echo '<td>' . $row['fname'] . " " . $row['lname'] .  '</td>';

                  echo '<td><a href="./queryhandler.php?delete_album=' . $row['album_id'] .  '">Delete Album</a></td>';
                  
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
