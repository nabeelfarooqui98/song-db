<?php
	session_start();
    unset($_SESSION);
    session_destroy();
    header("location: ../song-db/loginpage.php?this_isnt_workin");
?>