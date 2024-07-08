<?php
	if(!isset($_SESSION)){session_start();}
	include("connection.php");

    $problems = array();

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		/*echo "Ittvagyok!";
		die;*/


		$user_name = $_POST["username"];
		$pswd = $_POST["pswd"];
       
		if(empty($user_name)){
			$problems['user_name'] = 'Nem írtál be felhasználónevet!';
		}
		if(empty($pswd)){
			$problems['pswd'] = 'Nem írtál be jelszót!';
		}

        if(!empty($user_name) && !empty($pswd)){
            $name_query = "select nev from users where nev = '$user_name' limit 1";
            $name_row = mysqli_query($con, $name_query);

            $pswd_query = "select jelszo from users where nev = '$user_name' limit 1";
            $pswd_row = mysqli_query($con, $pswd_query);
            $pswd_result = mysqli_fetch_row($pswd_row);

            if($name_row && mysqli_num_rows($name_row) == 0){
                $problems['user_name'] = 'Rossz felhasználónév vagy jelszó!';        
            }
            if($pswd_row && mysqli_num_rows($pswd_row) != 0){   
                if(!password_verify($pswd, $pswd_result[0])){
                    $problems['user_name'] = 'Rossz felhasználónév vagy jelszó!';
                }
                
            }  
        }

		if(count($problems)==0){
			$_SESSION["user_name"] = $user_name;
			header("Location: ../profile.php");
			mysqli_close($con);
		}
		else{
			$_SESSION["message"] = $problems;
            header("Location: ../login.php");         
            mysqli_close($con);
            die;
        }
	}
	else{
		header("Location: ../login.php");
		mysqli_close($con);

	}
	

?>