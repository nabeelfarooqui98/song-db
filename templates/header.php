<!--navbar-->
<?php session_start(); ?>
  <!-- intial imports and bootstrap -->
  <meta charset="utf-8">
  <meta name="viewport" conent="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MY MUSIC DATABASE</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></link>
  <script type="text/javascript" src="./js/main.js"></script>

  <!-- include database connection -->
  <?php include_once('database/db.php')?>

<!-- navbar code -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="./index.php"><i class="fa fa-music"></i>iMusic</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav" style="width: 100%;">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="./dash.php"><i class="fa fa-home">&nbsp;</i>Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <ul class="navbar-nav right" align="right">
      <li class="nav-item active">
        

        <?php 
        
        if(!isset($_SESSION["username"]))
        echo '<a class="nav-link" href="loginpage.php">signin</a>';
        
        ?>


      </li>
      <li>
        <?php 
        
        if(isset($_SESSION["username"]))
        echo '<a class="nav-link" type="button" href="logout.php">logout</a>';
        
        ?>




      </li>
    </ul>
  </div>
</nav>