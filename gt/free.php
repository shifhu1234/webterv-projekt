<?php
    if(!isset($_SESSION)){session_start();}
?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <title>G & T kurzus</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="img/logo2.png">
    <link rel="stylesheet" media="print" href="style/print.css" />
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
                    <li class="current-page"><a href="free.php">Ingyenes</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="ourselves.php">Rólunk</a></li>
                    <li>
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
        <section class="grid-cols-2">
            <div class="">
                <img class="bal-div-load milyen-az-elet free-blog-img" src="img/free/htmlbase.png" alt="" title="">
            </div>
            <div class="div-marg-color right-pos jobb-div-load milyen-az-elet">
                <p class="div-cimek">2. fejezet</p><br>
                <p class="left-pos2 bigger-size">A fontosabb HTML elemekkel való ismerkedés folytatása. <br> A CSS nyelv
                    szintaxisának és néhány
                    alapvető formázási lehetőségének megismerése. <br> <br> A <strong> HTML (HyperText Markup Language)
                    </strong> egy
                    jelölőnyelv,
                    amelynek segítségével megmondhatjuk, hogy mi az, amit egy weboldalon látni szeretnénk (pl. szövegek,
                    képek, hivatkozások, táblázatok, multimédia stb.).

                    A HTML lehetőséget biztosít a weboldalak tartalmának strukturálására is. Ezt különböző szakaszok,
                    tartalmi egységek (pl. fejléc, menüsor, fő tartalom, lábléc stb.) kialakításával tehetjük meg.
                    <br> <br>

                    Ha a tartalmat formázni is szeretnénk, akkor a <strong> CSS-re (Cascading Style Sheets)</strong>
                    lesz szükségünk.
                </p>
                <br> <a class="signika read-more" href="https://okt.inf.szte.hu/webtervezes/gyakorlat/fejezet2/">Tovább
                    a
                    teljes anyagra →</a>
            </div>
        </section>

        <section class="grid-cols-2">
            <div>
                <img class="bal-div-load2 milyen-az-elet free-blog-img" src="img/free/form.png" alt="" title="">
            </div>
            <div class="div-marg-color right-pos jobb-div-load2 milyen-az-elet">
                <p class="div-cimek">4. fejezet</p><br>
                <p class="left-pos2 bigger-size">HTML5 űrlapok létrehozása és formázása, néhány fontosabb űrlapelem
                    megismerése. <br> <br> A HTML űrlapok lehetőséget biztosítanak arra, hogy a <strong> weboldalaink
                        felhasználói
                        bemenetet is tudjanak fogadni, amit később fel is tudunk dolgozni</strong>. Az űrlapok a modern
                    weboldalak
                    szerves részei, napi szinten találkozhatunk velük webes kalandozásaink során. Például ha be
                    szeretnénk lépni a kedvenc közösségi oldalunkra, akkor egy bejelentkezési
                    űrlapon adjuk meg a belépéshez szükséges adatainkat.</p><br>
                <a class="signika read-more" href="https://okt.inf.szte.hu/webtervezes/gyakorlat/fejezet4/">Tovább a
                    teljes anyagra →</a>
            </div>
        </section>

        <section class="grid-cols-2">
            <div>
                <img class="bal-div-load3 milyen-az-elet free-blog-img" src="img/free/phpbase.png" alt="" title="">
            </div>
            <div class="div-marg-color right-pos jobb-div-load3 milyen-az-elet">
                <p class="div-cimek">7. fejezet</p><br>
                <p class="left-pos2 bigger-size">Itt áttekintésre kerülnek a a PHP alapvető nyelvi elemei. <br> <br>
                    A <strong> PHP (PHP: Hypertext Preprocessor) </strong> nyelvvel fogunk foglalkozni, ami a
                    szerveroldali programozási
                    nyelvek közé tartozik. <br> <br> A PHP kódot egy PHP értelmező (más néven: PHP interpreter)
                    értelmezi
                    szerveroldalon. Felhasználói oldalon már csak a kód kimenetét, eredményét láthatjuk.

                    A PHP egy régóta jelen lévő programozási nyelv, amit számos különféle célra használhatunk például:

                    dinamikus HTML tartalmak generálása,
                    HTML űrlapok feldolgozása,
                    adatbázis-kezelés,
                    menetkövetés,
                    sütik küldése és fogadása,
                    fájlkezelés,
                    jogosultságkezelés,
                    objektumorientált programozás.</p> <br>
                <a class="signika read-more" href="https://okt.inf.szte.hu/webtervezes/gyakorlat/fejezet7/">Tovább
                    a
                    teljes anyagra →</a>
            </div>
        </section>

        <section class="grid-cols-2">
            <div>
                <img class="bal-div-load4 milyen-az-elet free-blog-img" src="img/free/cookies.png" alt="" title="">
            </div>
            <div class="div-marg-color right-pos jobb-div-load4 milyen-az-elet">
                <p class="div-cimek">10. fejezet</p><br>
                <p class="left-pos2 bigger-size">Ebben a részben megnézünk egy kliensoldali megoldást is, a
                    böngészősütik (angolul: <strong> cookie</strong>-k)
                    használatát. <br> <br>
                    A <strong> böngészősütik </strong>segítségével kliensoldalon, a böngészőben tárolhatunk el kis
                    mennyiségű adatot, így
                    azt nem kell újból megadni a weboldal egy későbbi felkeresése során.

                    Mivel a sütik kliensoldalon tárolódnak, ezért a felhasználók egyszerűen elérhetik és manipulálhatják
                    őket. Emiatt fontos, hogy a sütiket <u> NEM SZABAD</u> bizalmas adatok (pl. jelszavak) tárolására
                    használni!

                    Egy másik fontos probléma, amit érdemes észben tartani, hogy a felhasználó letilthatja a
                    weboldalunkon a sütik használatát. Emiatt a sütik használata mellett célszerű lehet egy alternatív
                    megoldást is kidolgozni.</p>
                <br> <a class="signika read-more" href="https://okt.inf.szte.hu/webtervezes/gyakorlat/fejezet10/">Tovább
                    a
                    teljes anyagra →</a>
            </div>
        </section>


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
    </footer>
</body>

</html>