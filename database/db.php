<?php
	$conn = mysqli_connect('localhost','root','','firebase2');
	
	if (mysqli_connect_errno())
  	{
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
?>