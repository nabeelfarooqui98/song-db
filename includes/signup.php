<?php
if(isset($_POST['signup-submit']))
{
	include('database/db.php');

	$username = $_POST['uid'];
	$password = $_POST['password'];

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
		$sql="SELECT username,password FROM users where username=?";
		$stmt=mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql))
		{
			header("location: ../loginpage.php?error=sqlfailure");
			exit();
		}
		else
		{
			mysqli_stmt_bind_param($stmt,"s",$username);
			mysqli_stmt_execute($stmt);
			$result= mysqli_stmt_get_result($stmt);

			if($row = mysqli_fetch_assoc($result))
			{
				$pwdCheck = password_verify($password,row['password']);
				if($pwdCheck==false){
					header("location: ../loginpage.php?error=invalid_id_password");
					exit();	
				}
				elseif($pwdcheck== true)
				{
					session_start();
					$_SESSION['userID'] = row['Uid'];
					$_SESSION['username'] = row['username'];
					header("location: ../home.php?loginSuccessful");
					exit();	
				}
				else{
					header("location: ../loginpage.php?error=invalid_id_password");
					exit();	
				}
				
			}
		}


	}


}
