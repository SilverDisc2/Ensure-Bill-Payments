<?php
session_start();

if(session_destroy()){
	
		$_SESSION=array();

	
	//header("locaion: loginn.php");
	header("location: login.php");
exit;

}
?>

