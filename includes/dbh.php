<?php
$dbconn= mysqli_connect("localhost","root","","project_music");
if(!$dbconn)
{
	die("connection_failed: ".mysql_connect_error());
}
