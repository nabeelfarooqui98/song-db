<?php


if(isset($_POST['signup-submit']))
{
	include('../database/db.php');

	$username =$_POST['username'];
	$password =$_POST['password'];

	if(empty($username)|| empty($password))
	{
		header("location: ../loginpage.php?error=emptyfeild&uid=".$username);
		exit();
	}
	elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username))
	{
		header("location: ../loginpage.php?error=incorrect_username");
		exit();
	}
	else{
		$sql="SELECT username,password FROM users where username='$username' and password='$password'";
		
		$result= mysqli_query($conn,$sql);
		if (!$result) {
		    $message  = 'Invalid query: ' . mysqli_error() . "\n";
		    $message .= 'Whole query: ' . $query;
		    die($message);
		}
		else
		{
			if($row = mysqli_fetch_assoc($result))
			{
				session_start();
				$_SESSION['userID'] = $row['Uid'];
				$_SESSION['username'] = $row['username'];
				header("location: ../dash.php?loginSuccessful");
				exit();	
			}
			else{
				header("location: ../loginpage.php?error=invalid_id_password".$row['uid'].$row['username'].$row['	password']);
				exit();	
			}	
		}
				
	}
}
