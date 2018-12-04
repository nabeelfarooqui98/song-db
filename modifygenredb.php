  <?php include_once("./templates/header.php"); ?>

<form method="POST" action="./queryhandler.php" style="width:90%;">
  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">Genre</label>
    <div class="col-10">
      <input class="form-control" type="text"   name="genrename">
    </div>
  </div>


<button type="submit" name="addgenre_btn" class="btn btn-primary">Insert Genre</button>

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
          <th scope="col">Genre Name</th> 
        </tr>
      </thead>

      <tbody>
        
        <?php

            $sql = "select * from genre";
            

            if ($result = mysqli_query($conn,$sql))
            {
                while ($row = $result->fetch_assoc()) 
                {
                  
                  echo '<tr>';
                  
                  echo '<th scope="row">' . $row['genre_id'] . '</th>'; //first col aesa show hota hai
                  echo '<td>' . $row['genre_name'] .     '</td>';
                                    

                  echo '<td><a href="./queryhandler.php?delete_genre=' . $row['genre_id'] .  '">Delete Genre</a></td>';
                  
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
