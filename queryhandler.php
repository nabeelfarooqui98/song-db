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


 


if(isset($_POST['addartist_btn']))
{

	echo "received values: " .  $_POST['fname'] . " " . $_POST['lname'] . " " . $_POST['dob'];
}



?>

</body>
</html>
