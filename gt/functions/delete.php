<?php
	if(!isset($_SESSION)){session_start();}
	include("connection.php");

	if(isset($_SESSION["user_name"])){
		//session_unset();
		//session_destroy();
        $name = $_SESSION["user_name"];
        $sql = "delete from users where nev = '$name'";
        mysqli_query($con, $sql);        
        session_unset();
		session_destroy();        
        header("Location: ../index.php");
        mysqli_close($con);
        die;
	}
	else{
		// What to do if there was no $_SESSION["user_name"]
		header('location: ../index.php');
		die;
	}
?>