<?php
	if(!isset($_SESSION)){session_start();}
	//ini_set('session.gc_maxlifetime', 0);
	if(isset($_SESSION["user_name"])){
		session_unset();
		session_destroy();
		header('location: ../index.php');
		die;
	}
	else{
		// What to do if there was no $_SESSION["user_name"]
		header('location: ../index.php');
		die;
	}
?>