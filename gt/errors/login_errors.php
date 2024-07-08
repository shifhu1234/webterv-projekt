<?php
    function kiiratas(){
        
    $user_name_error = "";
    $pswd_error = "";
    $pswd_2_error = ""; 
    $file1_error = "";
    $file2_error = "";
    $file3_error = "";
    $file4_error = "";
    $file5_error = "";
    $email_error = "";
    $date_error = "";
    $sex_error = "";

    if(isset($_SESSION["message"])){
        $keys = array_keys($_SESSION["message"]);
        for($i=0; $i < count($_SESSION["message"]); $i++) {

            if ($keys[$i] == 'file1') {
                $file1_error .= $_SESSION["message"][$keys[$i]] . ' ';
                echo $file1_error . "<br>";
            }
            if ($keys[$i] == 'file2') {
                $file2_error .= $_SESSION["message"][$keys[$i]] . ' ';
                echo $file2_error . "<br>";
            }
            if ($keys[$i] == 'file3') {
                $file3_error .= $_SESSION["message"][$keys[$i]] . ' ';
                echo $file3_error . "<br>";
            }
            if ($keys[$i] == 'file4') {
                $file4_error .= $_SESSION["message"][$keys[$i]] . ' ';
                echo $file4_error . "<br>";
            }
            if ($keys[$i] == 'file5') {
                $file5_error .= $_SESSION["message"][$keys[$i]] . ' ';
                echo $file5_error . "<br>";
            }
            if ($keys[$i] == 'user_name') {
                $user_name_error .= $_SESSION["message"][$keys[$i]] . ' ';
                echo $user_name_error . "<br>";
            }
            if ($keys[$i] == 'pswd') {
               $pswd_error .= $_SESSION["message"][$keys[$i]] . ' ';
                echo $pswd_error . "<br>";
            }
            if ($keys[$i] == 'pswd_2') {
                $pswd_2_error .= $_SESSION["message"][$keys[$i]] . ' ';
                echo $pswd_2_error . "<br>";
            }
            if ($keys[$i] == 'email') {
                $email_error .= $_SESSION["message"][$keys[$i]] . ' ';
                echo $email_error . "<br>";
            }
            if ($keys[$i] == 'date') {
                $date_error .= $_SESSION["message"][$keys[$i]] . ' ';
                echo $date_error . "<br>";
            }
             if ($keys[$i] == 'sex') {
                $sex_error .= $_SESSION["message"][$keys[$i]] . ' ';
                echo $sex_error . "<br>";
            }
        }

        // After we got the message, set it to null, so it doesn't linger in the system indefinitely.
        unset($_SESSION["message"]);
        //header("Location: login.php");
    }
    }
?>