  <?php include_once("./templates/header.php"); ?>




<form method="POST" action="./queryhandler.php">
  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">First Name</label>
    <div class="col-10">
      <input class="form-control" type="text"   name="fname">
    </div>
  </div>

  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">Last Name</label>
    <div class="col-10">
      <input class="form-control" type="text"  name="lname">
    </div>
  </div>


  <div class="form-group row">
    <label for="example-date-input" class="col-2 col-form-label">Date of Birth</label>
    <div class="col-10">
      <input class="form-control" type="date"  name="dob">
    </div>
  </div>

<button type="submit" name="addartist_btn" class="btn btn-primary">Insert Artist</button>
<?php
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
                  echo '<th scope="row">' . $row['artist_id'] . '</th>';
  //                echo '<td>' . $row['artist_id'] . '</td>';
                  echo '<td>' . $row['fname'] .     '</td>';
                  echo '<td>' . $row['lname'] .     '</td>';
                  echo '<td>' . $row['dateOfBirth'] .       '</td>';
                  echo '</tr>';

//                  echo "<b>".$row['songName']."</b> " . '<a href="' . $row['musicLink'] . '">YouTube Link</a> <br>';
                }
            }
            else
            {
              echo "query run error: \r\n" . mysqli_error($conn) . "\r\n" ;//. mysql_error();
            }
        ?>


      <!--
       <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
-->


      </tbody>

    </table>

