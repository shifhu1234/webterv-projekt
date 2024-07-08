<?php
    
    function kiiratas(){
        $name1_error = "";
  $name2_error = "";
  $name3_error = "";
  $name4_error = "";


  $email1_error = "";
  $email2_error = "";
  $email3_error = "";
  $email4_error = "";

  $pswd1_error = "";
  $pswd2_error = "";
  $pswd3_error = "";
  $pswd4_error = "";
  $pswd5_error = "";

  $file1_error = "";
  $file2_error = "";
  $file3_error = "";
  $file4_error = "";
  $file5_error = "";



  $date_error = "";




  if(isset($_SESSION["message"])){
      $keys = array_keys($_SESSION["message"]);
      for($i=0; $i < count($_SESSION["message"]); $i++) {


        // felhasznalonev valtoztatas error lekezeles
          if ($keys[$i] == 'name1') {
              $name1_error .= $_SESSION["message"][$keys[$i]] . ' ';
              echo $name1_error . "<br>";
          }
          if ($keys[$i] == 'name2') {
              $name2_error .= $_SESSION["message"][$keys[$i]] . ' ';
              echo $name2_error . "<br>";
          }
          if ($keys[$i] == 'name3') {
            $name3_error .= $_SESSION["message"][$keys[$i]] . ' ';
            echo $name3_error . "<br>";
        }
        if ($keys[$i] == 'name4') {
            $name4_error .= $_SESSION["message"][$keys[$i]] . ' ';
            echo $name4_error . "<br>";
        }
        // email valtoztatas error lekezeles
        if ($keys[$i] == 'email1') {
            $email1_error .= $_SESSION["message"][$keys[$i]] . ' ';
            echo $email1_error . "<br>";
        }
        if ($keys[$i] == 'email2') {
            $email2_error .= $_SESSION["message"][$keys[$i]] . ' ';
            echo $email2_error . "<br>";
        }
        if ($keys[$i] == 'email3') {
            $email3_error .= $_SESSION["message"][$keys[$i]] . ' ';
            echo $email3_error . "<br>";
        }
        if ($keys[$i] == 'email14') {
            $email4_error .= $_SESSION["message"][$keys[$i]] . ' ';
            echo $email4_error . "<br>";
        }

        // jelszo valtoztatas error lekezeles          
        if ($keys[$i] == 'pswd1') {
            $pswd1_error .= $_SESSION["message"][$keys[$i]] . ' ';
            echo $pswd1_error . "<br>";
        }
        if ($keys[$i] == 'pswd2') {
            $pswd2_error .= $_SESSION["message"][$keys[$i]] . ' ';
            echo $pswd2_error . "<br>";
        }
        if ($keys[$i] == 'pswd3') {
            $pswd3_error .= $_SESSION["message"][$keys[$i]] . ' ';
            echo $pswd3_error . "<br>";
        }
        if ($keys[$i] == 'pswd4') {
            $pswd4_error .= $_SESSION["message"][$keys[$i]] . ' ';
            echo $pswd4_error . "<br>";
        }
        if ($keys[$i] == 'pswd5') {
            $pswd5_error .= $_SESSION["message"][$keys[$i]] . ' ';
            echo $pswd5_error . "<br>";
        }
        // date valtoztatas error lekezeles          
        if ($keys[$i] == 'date') {
            $date_error .= $_SESSION["message"][$keys[$i]] . ' ';
            echo $date_error . "<br>";
        }
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
      }
      //header("Location: ../gt/profile.php");

      unset($_SESSION["message"]);
  }
    }

  
  ?>