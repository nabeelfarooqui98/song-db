<?php include_once('templates/header.php') ?>
<br>
<br>
<div class="card mx-auto" style="width: 40rem;">
  <img class="card-img-top mx-auto" src="images/search_icon.png" alt="Card image cap" style="width:50%;">
  <div class="card-body ">
    <h5 class="card-title " align="center"><i class=""></i>Search</h5>
    <form method="POST" action="./result.php">
    	<input type="text" name="song_query" class="search" placeholder="Enter keyword (song name / artist name)" style="width: 100%; ">
    	<input type="submit" name="submit" value="Search" />
    	
    </form>
  </div>
</div>
<a href="./result.php" class="btn btn-primary " align="center" style="width: 20%; margin-left: 230px;margin-top: 30px;">Search</a>
