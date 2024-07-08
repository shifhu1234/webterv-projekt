<?php
    if(!isset($_SESSION)){session_start();}
    include "errors/profile_errors.php";
    include("functions/connection.php");


    $name = $_SESSION["user_name"];
    $sql = "select * from users where nev = '$name' limit 1";
    $row = mysqli_query($con, $sql);
    $result = mysqli_fetch_row($row);
    mysqli_close($con);

    

    $GLOBALS['nev'] = $result[1];
    $GLOBALS['email'] = $result[2];
    $GLOBALS['datum'] = $result[4];
    $GLOBALS['kep'] = $result[6];
?>


<!DOCTYPE html>
<html lang="hu">

<head>
    <title>G & T kurzus</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="img/logo2.png">
    <link rel="stylesheet" href="style/form.css">
    <link rel="stylesheet" href="style/test.css">
    <script src="script/script.js"></script>
</head>

<body>
    <header>
        <section class="menu-bar">
            <div class="alcim-load logo nav-list1">
                <img class="logo-img nav-load" src="img/logo2.png" alt="Logo" title="Logo">
                <a class="nav-load nav-list1" href="index.php">G & T kurzus</a>
            </div>

            <!--alcim-load, lehet szebb-->
            <nav class="alcim-load">
                <ul class="nav-list">
                    <li><a href="courses.php">Tanfolyamok</a></li>
                    <li><a href="free.php">Ingyenes</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="ourselves.php">Rólunk</a></li>
                    <li class="current-page">
                        <?php
                        if(isset($_SESSION["user_name"])){
                            echo '<a href="profile.php">Profil</a>';

                        }else{
                            echo '<a href="login.php">Belépés</a>';
                        }
                    ?>
                    </li>
                </ul>
            </nav>
        </section>
    </header>


    <main>
        <div id="error-msgs" <?php echo isset($_SESSION["message"]) && !empty($_SESSION["message"]) ? 'class="show"' : ''; ?>>

            <?php
                kiiratas();
            ?>
            <script>
                if (document.getElementById('error-msgs').classList.contains('show')) {
                setTimeout(function () {
                    document.getElementById('error-msgs').classList.remove('show');
                }, 7000); //5-7 sec
                }
            </script>
        </div>
        <section class="grid-cols-2">

            <div class="div-marg-color right-pos bal-div-load milyen-az-elet">
                <p class="div-cimek left-pos">Saját adatok</p><br>
                <section class="grid-cols-new">
                    <div>
                        <p class="left-pos2 bigger-size"><strong>Felhasználónév: <?php  echo $GLOBALS['nev']; ?> </strong></p><br>
                        <p class="left-pos2 bigger-size"><strong>E-mail cím: <?php   echo $GLOBALS['email'];   ?></strong></p><br>
                        <p class="left-pos2 bigger-size"><strong>Születési dátum: <?php   echo $GLOBALS['datum'];   ?></strong></p><br>
                    </div>

                </section>
        
        <br> 
        <p class="logoutbutton"><a class="bigger-span free-format4 ingyenes5 alcim-load3"
                href="functions/logout.php">KIJELENTKEZÉS</a>
        </p>

            </div>            
            <div class="">
                <img class="jobb-div-load milyen-az-elet free-blog-img" src=" <?php echo $GLOBALS['kep'];?> " alt="" title="" style="width: 75vh; height:50vh;">
            </div>
        </section>
        <section class="grid-cols-3">
            <div id="profile-divs" class="profile-divs">
                <form class="bal-div-load signika" action="functions/update.php" method="POST"
                   >
                    <fieldset class="reg-div profile-change">
                        <legend class="font-change-medium">Felhasználónév módosítás</legend>
                        <label for="old-name">Felhasználónév:</label>
                        <input placeholder="(jelenlegi)" type="text" id="old-name" name="old-name" size="25"
                            value="">
                        <br>
                        <label for="new-name">Új felhasználónév:</label>
                        <input placeholder="(minimum 5 karakter)" type="text" id="new-name" name="new-name"
                            size="25" value="">
                        <br>
                        <input onclick="" id="name-up" type="submit" name="name-up" value="Módosítás">
                    </fieldset>
                </form>
            </div>
<script>window.onbeforeunload = function() {
  sessionStorage.setItem("scrollPos", window.scrollY);
}
window.onload = function() {
  var scrollPos = sessionStorage.getItem("scrollPos");
  if (scrollPos) {
    window.scrollTo(0, scrollPos);
    sessionStorage.removeItem("scrollPos");
  }
}</script>
            <div class="profile-divs">
                <form class="bal-div-load signika" action="functions/update.php" method="POST"
                   >
                    <fieldset class="reg-div profile-change">
                        <legend class="font-change-medium">E-mail cím módosítás</legend>
                        <label for="old-email">E-mail cím:</label>
                        <input placeholder="(jelenlegi)" type="email" id="old-email" name="old-email">
                        <br>
                        <label for="new-email">Új e-mail cím:</label>
                        <input placeholder="(új e-mail cím)" type="email" id="new-email" name="new-email">
                        <br>
                        <input onclick="" id="email-up" type="submit" name="email-up" value="Módosítás">
                    </fieldset>
                </form>
            </div>

            <div class="profile-divs">
                <form class="bal-div-load signika" action="functions/update.php" method="POST"
                   >
                    <fieldset class="reg-div profile-change">
                        <legend class="font-change-medium">Jelszó módosítás</legend>
                        <label for="old-pswd">Jelszó:</label>
                        <input placeholder="(jelenlegi)" type="password" id="old-pswd" name="old-pswd">
                        <br>
                        <label for="new-pswd">Új jelszó:</label>
                        <input placeholder="(minimum 7 karakter)" type="password" id="new-pswd" name="new-pswd">
                        <br>
                        <label for="check-pswd">Új jelszó újra:</label>
                        <input placeholder="(fentivel megegyező)" type="password" id="new-pswd2" name="new-pswd2">
                        <input onclick="" id="pswd-up" type="submit" name="pswd-up" value="Módosítás">
                    </fieldset>
                </form>
            </div>
        </section>
        <section class="grid-cols-2">
            <div class="profile-divs2">
                <form class="bal-div-load signika" action="functions/update.php" method="POST"
                   >
                    <fieldset class="reg-div profile-change">
                        <legend class="font-change-medium">Születésnap módosítás</legend>
                        <label for="new-date">Új születésnap:</label>
                        <input type="date" id="new-date" name="new-date" min="1920-01-01">
                        <input onclick="" id="date-up" type="submit" name="date-up" value="Módosítás">

                    </fieldset>
                </form>
            </div>
            <div class="profile-divs2">
                <form class="bal-div-load signika" action="functions/update.php" method="POST" enctype="multipart/form-data">
                    <fieldset class="reg-div profile-change">
                        <legend class="font-change-medium">Profilkép módosítás</legend>
                        <label for="file-upload">Új kép feltöltése:</label>
                        <input type="file" id="file-upload" name="new-pic">
                        <br>
                        <input onclick="" id="pic-up" type="submit" name="pic-up" value="Módosítás">
                    </fieldset>
                </form>
            </div>
        </section>
        <p class="logoutbutton"><a class="bigger-span free-format4 ingyenes5 alcim-load3" href="functions/delete.php" onclick="aljara()">ADATOK TÖRLÉSE</p></a>
    </main>
    <footer>
        <a class="bigger-span free-format4 ingyenes3 alcim-load3" href="#">OLDAL TETEJÉRE</a>
        <div class="alcim-load3">
            <span class="bigger-span">CÍMEK</span>
            <p class="signika">6720 Szeged Tisza Lajos krt. 103.</p>
            <p class="signika">6720 Szeged, Aradi vértanúk tere 1.</p>
            <p class="signika">6720 Szeged, Dugonics tér 13.</p>
        </div>
        <div class="alcim-load3">
            <span class="bigger-span">TELEFON</span>
            <p class="signika">+36 20 012 3456</p>
            <p class="signika">+36 30 215 8401</p>
        </div>
        <script>               
        
             function aljara() {
                    window.scrollTo({
                        top: document.body.scrollHeight,
                        behavior: 'smooth'
                    });}

const changeOldUserInput = document.getElementById("old-name");
const changeNewUserInput = document.getElementById("new-name");
const changeOldPasswordInput = document.getElementById("old-pswd");
const changeNewPasswordInput = document.getElementById("new-pswd");
const changeNewPasswordInput2 = document.getElementById("new-pswd2");
const changeOldEmailInput = document.getElementById("old-email");
const changeNewEmailInput = document.getElementById("new-email");
const changeDateInput = document.getElementById("new-date");
const changePicInput = document.getElementById("new-pic");


const changeUserButton = document.getElementById("name-up");
const changePasswordButton = document.getElementById("pswd-up");
const changeEmailButton = document.getElementById("email-up");
const changeDateButton = document.getElementById("date-up");
const changePicButton = document.getElementById("pic-up");

changeUserButton.style.backgroundColor = "#EF634C";
changePasswordButton.style.backgroundColor = "#EF634C";
changeEmailButton.style.backgroundColor = "#EF634C";
changeDateButton.style.backgroundColor = "#EF634C";
changePicButton.style.backgroundColor = "#EF634C";

function checkChangeInputs() {
    //const date = new Date(regDateInput.value);
    if (changeOldUserInput.value.length >= 5 && changeNewUserInput.value.length>= 5 && changeOldUserInput.value != changeNewUserInput.value) {
        changeUserButton.style.backgroundColor = "#4cb93e";
        changeUserButton.style.scale = (1.05);
    } else {
        changeUserButton.style.backgroundColor = "#EF634C";
        changeUserButton.style.scale = (1);
    }
    
    if (changeOldPasswordInput.value.length >= 6 && changeNewPasswordInput.value.length >= 6 && changeNewPasswordInput2.value.length >= 6 && changeNewPasswordInput.value == changeNewPasswordInput2.value) {
        changePasswordButton.style.backgroundColor = "#4cb93e";
        changePasswordButton.style.scale = (1.05);
    } else {
        changePasswordButton.style.backgroundColor = "#EF634C";
        changePasswordButton.style.scale = (1);
    }
        
    if (changeNewEmailInput.value.length >= 3 && changeOldEmailInput.value.length >= 3 && changeNewEmailInput.value != changeOldEmailInput.value && changeNewEmailInput.value.indexOf("@") >= 0 && changeOldEmailInput.value.indexOf("@") >= 0) {
        changeEmailButton.style.backgroundColor = "#4cb93e";
        changeEmailButton.style.scale = (1.05);
    } else {
        changeEmailButton.style.backgroundColor = "#EF634C";
        changeEmailButton.style.scale = (1);
    }

    if (changeDateInput) {
        changeDateButton.style.backgroundColor = "#4cb93e";
        changeDateButton.style.scale = (1.05);
    } else {
        changeDateButton.style.backgroundColor = "#EF634C";
        changeDateButton.style.scale = (1);
    }
    
   /*if (changePicInput.value !== '') {
        changePicButton.style.backgroundColor = "#4cb93e";
        changePicButton.style.scale = (1.05);
    } else {
        changePicButton.style.backgroundColor = "#EF634C";
        changePicButton.style.scale = (1);
    }*/
}
    
    /*if (changeOldUserInput && !isNaN(date.getTime())) {
        regButton.style.backgroundColor = "#4cb93e";
        regButton.style.scale = (1.05);
    } else {
        regButton.style.backgroundColor = "#EF634C";
        regButton.style.scale = (1);
    }*/
changeOldUserInput.addEventListener("input", checkChangeInputs);
changeNewUserInput.addEventListener("input", checkChangeInputs);
changeOldPasswordInput.addEventListener("input", checkChangeInputs);
changeNewPasswordInput.addEventListener("input", checkChangeInputs);
changeNewPasswordInput2.addEventListener("input", checkChangeInputs);
changeOldEmailInput.addEventListener("input", checkChangeInputs);
changeNewEmailInput.addEventListener("input", checkChangeInputs);
changeDateInput.addEventListener("input", checkChangeInputs);
changePicInput.addEventListener("input", checkChangeInputs);



        </script>
    </footer>
</body>

</html>