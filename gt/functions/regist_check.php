<?php
	if(!isset($_SESSION)){session_start();}
	include("connection.php");
	
	global $path;

    $problems = array();

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		// There was a POST
		$user_name = $_POST["reg-username"];
		$email = $_POST["email"];
		$pswd = $_POST["reg-pswd"];
		$pswd_2 = $_POST["reg-check-pswd"];
		$date = $_POST["date-of-birth"];
        $sex = $_POST["sex"];

        

		if (isset($_FILES["profile-pic"]) && is_uploaded_file($_FILES["profile-pic"]["tmp_name"])) {  // ha töltöttek fel fájlt...
			$allowed_extensions = ["png", "jpg", "jpeg"];                                           // az engedélyezett kiterjesztések tömbje
			$extension = strtolower(pathinfo($_FILES["profile-pic"]["name"], PATHINFO_EXTENSION));  // a feltöltött fájl kiterjesztése
	  
			if (in_array($extension, $allowed_extensions)) {      // ha a fájl kiterjesztése megfelelő...
			  if ($_FILES["profile-pic"]["error"] === 0) {        // ha a fájl feltöltése sikeres volt...
				if ($_FILES["profile-pic"]["size"] <= 31457280) { // ha a fájlméret nem nagyobb 30 MB-nál
				  $path = "uploads/" . $user_name . "." . $extension;   // a cél útvonal összeállítása
				  if (!move_uploaded_file($_FILES["profile-pic"]["tmp_name"], "../$path")) { // fájl átmozgatása a cél útvonalra
					$problems['file1'] = 'A fájl átmozgatása nem sikerült!';
				  }
				    } else {
                    $problems['file2'] = 'A fájl mérete túl nagy!';
				}
			  } else {
			    $problems['file3'] = 'A fájlfeltöltés nem sikerült!';
			  }
			} else {
                $problems['file4'] = 'A fájl kiterjesztése nem megfelelő!';
			}
		  }else{
            $problems['file5'] = 'Nem töltöttél fel fájlt!';
          }
		
		// Check if the data is valid

		// ki lehet törölni, átírni a hibak[]-ra ^^^fajlfeltoltes_hiba!!!! tesztelgetes!
        
       
		
		if(empty($user_name) or $user_name==0 or is_numeric($user_name)){
			$problems['user_name'] = 'Nem adtál meg felhasználónevet!';
		}
		if(is_numeric($user_name)){
			$problems['user_name'] = 'A felhasználónévben nem szerepelhetnek számok!';
		}
		/*if(strlen($pswd)<5){
			$problems['pswd'] = 'The username should be at least 5 characters long!';
		}*/
		if(strlen($pswd)<6){
			$problems['pswd'] = 'A jelszónak legalább 6 karakter hosszúnak kell lennie!';
		}
		if($pswd != $pswd_2){
			$problems['pswd_2'] = 'A jelszavak nem egyeznek!';
		}

		if(empty($email) or $email==0){
			$problems['email'] = 'Nem adtál meg emailt!';
		}
		if(empty($date) or $date==0){
			$problems['date'] = 'Nem adtál meg születési dátumot!';
		}
		if(empty($sex) or $sex==0){
			$problems['sex'] = 'Nem választottad ki a nemed!';
		}
		// Check if we have this username already
		$query = "select * from users where nev = '$user_name' limit 1";
		$query_result = mysqli_query($con, $query);

		$query2 = "select * from users where email = '$email' limit 1";
		$query_result2 = mysqli_query($con, $query2);
		if(($query_result && mysqli_num_rows($query_result) > 0) || ($query_result2 && mysqli_num_rows($query_result2) > 0)){
			$problems['user_name'] = 'Ez a felhasználónév vagy email már foglalt. Válasst másikat!';
		}
		
		// If there is no problem, save to database
		if(count($problems)==0){
			// password hash
			$pswd = password_hash($pswd, PASSWORD_DEFAULT);
			
			$query = "insert into users (nev, email, jelszo, szuletesiDatum, nem, kep) values('$user_name', '$email', '$pswd', '$date', '$sex', '$path')";
			mysqli_query($con, $query);
			$_SESSION["user_name"] = $user_name;
			header("Location: ../profile.php");
			mysqli_close($con);
		}
		else{

            //foreach, uzenetes oldal
			$_SESSION["message"] = $problems;
    //nem előnyös kitörölni!
            header("Location: ../login.php");
            // innentol -> login.php            

            

            mysqli_close($con);
            die;
        }
	}
	else{
		# TODO
		# close the database connection
		header("Location: ../login.php");
		mysqli_close($con);
	}
	

?>