<?php
	if(!isset($_SESSION)){session_start();}
    include "errors/login_errors.php";
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <title>G & T kurzus</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/form.css">
    <link rel="icon" href="img/logo2.png">
    <link rel="stylesheet" href="style/test.css">
</head>

<body>
    <header>
        <section class="menu-bar">
            <div class="logo alcim-load2 nav-list1">
                <img class="logo-img" src="img/logo2.png" alt="Logo" title="Logo">
                <a class="nav-list1" href="index.php">G & T kurzus</a>
            </div>
            <nav class="alcim-load2">
                <ul class="nav-list">
                    <li><a href="courses.php">Tanfolyamok</a></li>
                    <li><a href="free.php">Ingyenes</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="ourselves.php">Rólunk</a></li>
                    <li class="current-page"><a href="login.php">Belépés</a></li>
                </ul>
            </nav>
        </section>
    </header>
    <!--style="height:900px"-->
    <main class="height-class">

        <div id="error-msgs" <?php echo isset($_SESSION["message"]) && !empty($_SESSION["message"]) ? 'class="show"' : ''; ?>>

            <?php
                kiiratas();
            ?>
        </div>
        <div class="flex grid-cols-2 signika">
            <div class="bal-div-load">
                <form id="login" action="functions/login_check.php" method="POST">
                    <fieldset class="login-div">
                        <legend class="font-change-medium">Belépés</legend>
                        <label for="username">Felhasználónév:</label>
                        <input class="input-hover" type="text" placeholder="Felhasználónév" id="username"
                            name="username" size="25" value="">
                        <br>
                        <label for="pswd">Jelszó:</label>
                        <input placeholder="Jelszó" type="password" id="pswd" name="pswd">
                        <br>
                        <input id="submit-btn" type="submit" name="btn-submit" value="Belépés">
                    </fieldset>
                </form>

            </div>
            <div class="jobb-div-load">
                <form id="user-info" action="functions/regist_check.php" method="POST" enctype="multipart/form-data">
                    <fieldset class="reg-div">
                        <legend class="font-change-medium">Regisztráció</legend>
                        <label for="username">Felhasználónév:</label>
                        <input placeholder="(minimum 5 karakter)" type="text" id="reg-username" name="reg-username"
                            size="25" value="">
                        <br>
                        <label for="email">E-mail cím:</label>
                        <input placeholder="(e-mail cím)" type="email" id="email" name="email">
                        <br>
                        <label for="pswd">Jelszó:</label>
                        <input placeholder="(minimum 6 karakter)" type="password" id="reg-pswd" name="reg-pswd">
                        <br>
                        <label for="pswd">Jelszó újra:</label>
                        <input placeholder="(fentivel megegyező)" type="password" id="check-pswd" name="reg-check-pswd">
                        <br>
                        <label for="date-of-birth">Születésnap:</label>
                        <input type="date" id="date-of-birth" name="date-of-birth" min="1920-01-01">
                        <br>
                        <label>Nem:</label>
                        <input type="radio" id="op1" name="sex" value="m">
                        <label class="sex" for="op1">Férfi</label>
                        <input type="radio" id="op2" name="sex" value="f">
                        <label class="sex" for="op2">Nő</label>
                        <input type="radio" id="op3" name="sex" value="other">
                        <label class="sex" for="op3">Egyéb</label>
                        <br>
                        <label for="file-upload">Profilkép feltöltése:</label>
                        <input type="file" id="file-upload" name="profile-pic">
                        <br>
                        <input onclick="" id="register-btn" type="submit" name="register-btn" value="Regisztáció">
                        <input id="reset-btn" type="reset" name="btn-reset" value="Visszaállít">
                    </fieldset>
                </form>

            </div>
        </div>
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
            <p class="signika">+36 20 012 34f56</p>
            <p class="signika">+36 30 215 8401</p>
        </div>
    </footer>
    <script src="script/script.js"></script>
</body>

</html>