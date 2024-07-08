<?php
	//if(!isset($_SESSION)){session_start();}
	include("connection.php");
    function list(){
        $name = $_SESSION["user_name"];
        $sql = "select * from users where nev = '$name' limit 1";
        $row = mysqli_query($con, $sql);
        $result = mysqli_fetch_row($row);
        mysqli_close($con);

        

        $GLOBALS['nev'] = $result[1];
        $GLOBALS['email'] = $result[2];
        $GLOBALS['datum'] = $result[4];
        $GLOBALS['kep'] = $result[6];
    }
    /*
	if(isset($_SESSION["user_name"])){
	
        
	}
	else{
		// What to do if there was no $_SESSION["user_name"]
		header('location: ../index.php');
		die;
	}*/
?>