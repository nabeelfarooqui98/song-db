  <?php include_once("./templates/header.php"); ?>




<form method="POST" action="./queryhandler.php" style="width:90%;">
  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">First Name</label>
    <div class="col-10">
      <input class="form-control" type="text"   name="fname" required>
    </div>
  </div>

  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">Last Name</label>
    <div class="col-10">
      <input class="form-control" type="text"  name="lname" required>
    </div>
  </div>


  <div class="form-group row">
    <label for="example-date-input" class="col-2 col-form-label">Date of Birth</label>
    <div class="col-10">
      <input class="form-control" type="date"  name="dob" required>
    </div>
  </div>

<button type="submit" name="addartist_btn" class="btn btn-primary">Insert Artist</button>

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
          <th scope="col">Artist ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Date of Birth</th>
        </tr>
      </thead>

      <tbody>
        
        <?php

            $sql = "select * from artist";
            

            if ($result = mysqli_query($conn,$sql))
            {
                while ($row = $result->fetch_assoc()) 
                {
                  
                  echo '<tr>';
                  
                  echo '<th scope="row">' . $row['artist_id'] . '</th>'; //first col aesa show hota hai
                  echo '<td>' . $row['fname'] .     '</td>';
                  echo '<td>' . $row['lname'] .     '</td>';
                  echo '<td>' . $row['dateOfBirth'] .       '</td>';
                  echo '<td><a href="./queryhandler.php?delete_artist=' . $row['artist_id'] .  '">Delete Artist</a></td>';
                  
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

