<?php
	if(!isset($_SESSION)){session_start();}
	include("connection.php");

    $problems = array();

	if($_SERVER['REQUEST_METHOD'] == "POST"){

		if (isset($_POST['name-up'])) {
            // form1 adatok feldolgozása
            $old_name = $_POST["old-name"];
            $new_name = $_POST["new-name"];

            if(empty($old_name) or $old_name==0){
                $problems['name1'] = 'Nem adtad meg a régi felhasználónevet!';
            }
            if(empty($new_name) or $new_name==0){
                $problems['name2'] = 'Nem adtad meg az új felhasználónevet!';
            }

            if(!(empty($new_name) && empty($old_name))){

                $query = "select * from users where nev = '$old_name' limit 1";
                $query_result = mysqli_query($con, $query);
                if($query_result && mysqli_num_rows($query_result) == 0){
                    $problems['name3'] = 'A régi felhasználónév hibás!';
                }
    
                $query1 = "select * from users where nev = '$new_name' limit 1";
                $query_result1 = mysqli_query($con, $query1);
                if($query_result1 && mysqli_num_rows($query_result1) > 0){
                    $problems['name4'] = 'A felhasználónév már foglalt!';
                }
            }

            if(count($problems)==0){
                $sql = "update users set nev = '$new_name' WHERE nev = '$old_name'";
                mysqli_query($con, $sql);                
                $_SESSION["user_name"] = $new_name;
                header("Location: ../profile.php");
                mysqli_close($con);
            }
            else{
                $_SESSION["message"] = $problems;
    
                header("Location: ../profile.php");
                mysqli_close($con);
                die;
            }

        }

        if (isset($_POST['email-up'])) {
            // form2 adatok feldolgozása
            $old_email = $_POST["old-email"];
            $new_email = $_POST["new-email"];

            if(empty($old_email) or $old_email==0){
                $problems['email1'] = 'Nem adtad meg a régi email címed!';
            }
            if(empty($new_email) or $new_email==0){
                $problems['email2'] = 'Nem adtad meg az új email címed!';
            }

            if(!(empty($new_email) && empty($old_email))){

                $query = "select * from users where email = '$old_email' limit 1";
                $query_result = mysqli_query($con, $query);
                if($query_result && mysqli_num_rows($query_result) == 0){
                    $problems['email3'] = 'A régi email cím hibás!';
                }
    
                $query1 = "select * from users where email = '$new_email' limit 1";
                $query_result1 = mysqli_query($con, $query1);
                if($query_result1 && mysqli_num_rows($query_result1) > 0){
                    $problems['email4'] = 'Az új email cím már foglalt!';
                }
            }

            if(count($problems)==0){
                $sql = "update users set email = '$new_email' WHERE email = '$old_email'";
                mysqli_query($con, $sql);                
                header("Location: ../profile.php");
                mysqli_close($con);
            }
            else{
                $_SESSION["message"] = $problems;
    
                header("Location: ../profile.php");
                mysqli_close($con);
                die;
            }
        }

        if (isset($_POST['date-up'])) {
            // form2 adatok feldolgozása
            $new_date = $_POST["new-date"];

            if(empty($new_date)){
                $problems['date'] = 'Nem adtad meg az új dátumot!';
            }

            if(count($problems)==0){
                $name = $_SESSION["user_name"];
                $sql = "update users set szuletesiDatum = '$new_date' WHERE nev = '$name'";
                mysqli_query($con, $sql);                
                header("Location: ../profile.php");
                mysqli_close($con);
            }
            else{
                $_SESSION["message"] = $problems;
    
                header("Location: ../profile.php");
                mysqli_close($con);
                die;
            }
        }  

        if (isset($_POST['pswd-up'])) {
            // form3 adatok feldolgozása

            $old_pswd = $_POST["old-pswd"];
            $new_pswd = $_POST["new-pswd"];
            $new_pswd2 = $_POST["new-pswd2"];

            if(empty($old_pswd) or $old_pswd==0){
                $problems['pswd1'] = 'Nem adtad meg a régi jelszavad!';
            }
            if(empty($new_pswd) or $new_pswd==0){
                $problems['pswd2'] = 'Nem adtad meg az új jelszavad!';
            }

            if(!empty($new_pswd) && strlen($new_pswd)<6){
                $problems['pswd3'] = 'A jelszónak legalább 6 karakter hosszúnak kell lennie!';
            }

            if($new_pswd != $new_pswd2){
                $problems['pswd4'] = 'A jelszavak nem egyeznek!';
            }

            $name = $_SESSION["user_name"];
            $pswd_query = "select jelszo from users where nev = '$name' limit 1";
            $pswd_row = mysqli_query($con, $pswd_query);
            $pswd_result = mysqli_fetch_row($pswd_row);

            if(!empty($old_pswd) && $pswd_row && mysqli_num_rows($pswd_row) != 0){   
                if(!password_verify($old_pswd, $pswd_result[0])){
                    $problems['pswd5'] = 'Hibás a régi jelszó!';
                }
                
            }

            if(count($problems)==0){
                $new_pswd = password_hash($new_pswd, PASSWORD_DEFAULT);
                $sql = "update users set jelszo = '$new_pswd' WHERE nev = '$name'";
                mysqli_query($con, $sql);                
                header("Location: ../profile.php");
                mysqli_close($con);
            }
            else{
                $_SESSION["message"] = $problems;
    
                header("Location: ../profile.php");
                mysqli_close($con);
                die;
            }
        }  

        if (isset($_POST['pic-up'])) {
            // form4 adatok feldolgozása

            $name = $_SESSION["user_name"];
            if (isset($_FILES["new-pic"]) && is_uploaded_file($_FILES["new-pic"]["tmp_name"])) {  // ha töltöttek fel fájlt...
                $allowed_extensions = ["png", "jpg", "jpeg"];                                           // az engedélyezett kiterjesztések tömbje
                $extension = strtolower(pathinfo($_FILES["new-pic"]["name"], PATHINFO_EXTENSION));  // a feltöltött fájl kiterjesztése
          

                $path;
                $current_time = date("YmdHis");
                if (in_array($extension, $allowed_extensions)) {      // ha a fájl kiterjesztése megfelelő...
                  if ($_FILES["new-pic"]["error"] === 0) {        // ha a fájl feltöltése sikeres volt...
                    if ($_FILES["new-pic"]["size"] <= 31457280) { // ha a fájlméret nem nagyobb 30 MB-nál
                      $path = "uploads/" . "$current_time" . "." . $extension;   // a cél útvonal összeállítása
                      if (!move_uploaded_file($_FILES["new-pic"]["tmp_name"], "../$path")) { // fájl átmozgatása a cél útvonalra
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
              if(count($problems)==0){
                $sql = "update users set kep = '$path' WHERE nev = '$name'";
                mysqli_query($con, $sql);            
                header("Location: ../profile.php");
                mysqli_close($con);
            }
            else{
                $_SESSION["message"] = $problems;
    
                header("Location: ../profile.php");
                mysqli_close($con);
                die;
            }
        }
		
	
	else{
        header("Location: ../profile.php");
		mysqli_close($con);
	}
	
    }
?>