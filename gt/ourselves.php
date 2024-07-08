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
    <link rel="stylesheet" href="style/ourselves.css">
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
                    <li><a href="free.php">Ingyenes</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li class="current-page"><a href="ourselves.php">Rólunk</a></li>
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

        <h1 class="center-pos font-change nav-load">Rólunk</h1>

        <section class="grid-cols-2">
            <div class="bal-div-load div-marg-color signika font-change-small">
                <p class="right-align float-align2 left-pos2 font-change-medium">
                    <strong> Tolnai Tamásnak </strong>hívnak 23 éves vagyokitt szeretnék néhány szót írni magamról, a
                    Szegedi
                    Tudományegyetem TTIK karán programtervező
                    informatikus
                    hallgató vagyok. <br> <br>
                    Korábban egy szoftverfejlesztői OKJ képzést végeztem aminek hála már az egyetem előtt megtudtam
                    ismerkedni a webtervezés alapjaival és magával a szotftverfejlesztéssel. Szabadidőmben szeretek
                    edzőterembe járni, valamint elmenni a barátaimmal kosarazni. Ezt a sportot már gimnáziumban is
                    versenyszerűen űztem és remélem egyetem alatt is lesz rá lehetőségem.
                    <br><br> <br> Továbbá szeretném kifejteni a jövőbeni elképzeléseimet a kurzussal/képzéssel
                    kapcsolatban. Amit
                    eddig gyakorlaton tanultunk sikeresen fel tudtuk használni és remélem a jövőben még jobban el tudunk
                    mélyedni a webtervezés világában, akár a jövőbeni kurzusokon ahol a komplett rendszerfejlesztést is
                    el tudjuk majd sajátítani. Örülök, hogy ezen a szakon a legtöbb informatikával kapcsolatos gyakon
                    mindig valami újat kell alkotni vagy problémát megoldani.
                    Remélem a jövőben sikeresen elvégzem a képzést (még ha nem is a mintatervben előírt idő alatt xd).
                </p>
            </div>

            <div class="jobb-div-load">
                <img class="placeholder-img tamas" src="img/ourselves/tamas2.jpg" alt="" title="">
            </div>
        </section>

        <section class="grid-cols-2">
            <div class="placeholder bal-div-load2">
                <img class="placeholder-img" src="img/ourselves/gabor.jpg" alt="" title="">

            </div>

            <div class="div-marg-color signika font-change-small jobb-div-load2">
                <p class="left-align float-align1 right-pos font-change-medium"><strong> Nagy Gábornak </strong>hívnak,
                    19 éves vagyok, én
                    is szintén a Szegedi Tudományegyetem TTIK karán programtervező informatikus
                    hallgató vagyok, én is mesélek egy keveset magamról. <br> <br>

                    Hasonlóan mint Tamás, én is elvégeztem egy OKJ-s képzést, irodai szoftverekből. Egyetemen
                    megbarátkoztam a webtervezéssel és
                    programozással. Szabadidőmben Tomival járok edzőterembe, és heti szinten röplabdázok.
                    <br> <br> <br>
                    Ezentúl
                    hobbiból programozok is.
                    A programozás és az újonnan tanult webtervezés adta az ötletet, hogy készítsünk egy olyan oldalt,
                    ahol másik is elsajátíthatják ezt a tudást.
                    Igyekszem minél sikeresebben elvégezni egyetemi éveimet, majd diploma után web- és
                    programozás fejlesztéssel kapcsolatos mesterképzést elvégezni, vagy akár dolgozni komolyabban.
                    <br> <br> <strong>
                        De ez
                        mind a jövő dolga, jelenleg az
                        első mérföldkőre koncentrálunk, minél tökéletesebb élményt akarunk nyújtani
                        oktatóinknak.</strong>
                </p>

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