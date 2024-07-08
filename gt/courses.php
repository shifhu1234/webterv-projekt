<?php
	if(!isset($_SESSION)){session_start();}
?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <title>Tanfolyamok, kurzusok, csomagok | G & T kurzus</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                    <li class="current-page"><a href="courses.php">Tanfolyamok</a></li>
                    <li><a href="free.php">Ingyenes</a></li>
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

    <main class="">
        <div class="div-marg">
            <section class="div-marg-color center-pos">
                <p class="font-change alcim-load csomagok">Csomagok</p>
                <p class="alcim-load">A tanfolyamaink modulárisan működnek és különböző csomagokban lehet őket
                    megszerezni
                </p>
            </section>
        </div>
        <section class="grid-cols-2">


            <div class="bal-div-load milyen-az-elet ul-cim ">
                <img class="course-img1" src="img/courses/htmlcssphp.png" alt="Nyelvek" title="Nyelvek"><br>
                <p class="csomagok-cim">Kezdő csomag</p>
                <p class="signika font-change">69.900 Ft</p>
                <p class="list-cim left-pos font-change-medium">KURZUSOK</p>
                <ul class="kurzusok">
                    <li><img class="include" src="img/checkmark.png" alt=""> HTML</li>
                    <li><img class="include" src="img/checkmark.png" alt=""> CSS</li>
                    <li><img class="include" src="img/checkmark.png" alt=""> PHP</li>
                </ul>
                <ul class="kurzusok">
                    <li><img class="include" src="img/xmark.png" alt=""> Angular</li>
                    <li><img class="include" src="img/xmark.png" alt=""> Bootstrap</li>
                    <li><img class="include" src="img/xmark.png" alt=""> Javascript</li>
                </ul><br>

                <p class="list-cim2 left-pos font-change-medium">FUNKCIÓK ÉS ELŐNYÖK</p>
                <ul class="kurzusok">
                    <li><img class="include" src="img/checkmark.png" alt=""> Online tananyagok</li>
                    <li><img class="include" src="img/checkmark.png" alt=""> Örökös hozzáférés</li>
                    <li><img class="include" src="img/checkmark.png" alt=""> Későbbi frissítések ingyenesen</li>
                </ul>
                <ul class="kurzusok">
                    <li><img class="include" src="img/checkmark.png" alt=""> Gyakorlati házi feladatok</li>
                    <li><img class="include" src="img/checkmark.png" alt=""> Weboldal elemzés</li>
                    <li><img class="include" src="img/xmark.png" alt=""> Exkluzív tanulói Facebook csoport</li>
                    <li><img class="include" src="img/xmark.png" alt="">12 heti élő webinar</li>
                    <li><img class="include" src="img/xmark.png" alt=""> Élő találkozó</li>
                </ul><br>

                <!-- <a onclick="return kosarba()" class="free-format ingyenes kosarba" href="#">KOSÁRBA</a>
                    --> </div>

            <div class="jobb-div-load milyen-az-elet ul-cim ">
                <img class="blog-img" src="img/courses/angularbootstrap.jpg" alt="Haladó" title="Haladó">

                <p class="csomagok-cim">Hódító csomag</p>
                <p class="signika font-change">149.900 Ft</p>
                <p class="list-cim left-pos font-change-medium">KURZUSOK</p>
                <ul class="kurzusok">
                    <li><img class="include" src="img/checkmark.png" alt=""> HTML</li>
                    <li><img class="include" src="img/checkmark.png" alt=""> CSS</li>
                    <li><img class="include" src="img/checkmark.png" alt=""> PHP</li>
                    <li><img class="include" src="img/checkmark.png" alt=""> Angular</li>
                    <li><img class="include" src="img/checkmark.png" alt=""> Bootstrap</li>
                    <li><img class="include" src="img/checkmark.png" alt=""> Javascript</li>
                </ul><br>

                <p class="list-cim2 left-pos font-change-medium">FUNKCIÓK ÉS ELŐNYÖK</p>
                <ul class="kurzusok">
                    <li><img class="include" src="img/checkmark.png" alt=""> Online tananyagok</li>
                    <li><img class="include" src="img/checkmark.png" alt=""> Örökös hozzáférés</li>
                    <li><img class="include" src="img/checkmark.png" alt=""> Későbbi frissítések ingyenesen</li>
                    <li><img class="include" src="img/checkmark.png" alt=""> Gyakorlati házi feladatok</li>
                    <li><img class="include" src="img/checkmark.png" alt=""> Weboldal elemzés</li>
                    <li><img class="include" src="img/checkmark.png" alt=""> Exkluzív tanulói Facebook csoport</li>
                    <li><img class="include" src="img/checkmark.png" alt="">12 heti élő webinar</li>
                    <li><img class="include" src="img/checkmark.png" alt=""> Élő találkozó</li>
                </ul><br>

                <script src="script/script.js"></script>
            </div>



        </section>

        <section class="container">
            <iframe class="img-anim responsive-iframe" src="table.php"></iframe>
        </section>

        <section class="grid-cols-2">
            <div class="signika bal-div-load milyen-az-elet font-change-small bal-div-load2">
                <img class="kisebb-kep rotate-hover" src="img/courses/garancia2.png" alt="Garancia" title="Garancia">

                <p class="font-change-medium"> <strong> 30 napos pénzvissszafizetési garancia</strong></p>
                <p class="">Annyira hiszünk a tanfolyamaink erejében és abban, hogy bárkinek meg tudjuk tanítani a
                    weboldal készítés mesterségét,
                    hogy ha 30 napon belül bármikor úgy érzed, hogy ez mégsem neked való, egyszerűen csak dobj nekünk
                    egy e-mailt,
                    és mi <strong> kérdés nélkül visszautaljuk a teljes vételárat.</strong></p>
                <p class="">Biztosak vagyunk benne, hogy a kurzusokban olyan tananyagot építettünk fel, amivel <strong>
                        100%-ig</strong>
                    meg leszel elégedve!</p>
            </div>

            <div class="signika jobb-div-load milyen-az-elet font-change-small jobb-div-load2 ">
                <img class="kisebb-kep rotate-hover" src="img/courses/orokos2.png" alt="Örökös" title="Örökös">

                <p class="font-change-medium"> <strong> Folyamatos frissítések, örökös hozzáférés</strong></p>
                <p class="">2015 óta folyamatosan megújítjuk a videóinkat, ha időközben valami megváltozott volna.
                    Ezekhez pedig <strong> örökös hozzáférést </strong>is biztosítunk számodra.</p>
                <p class="">A honlap építési eszközök folyamatosan fejlődnek, amiket mi rendszerint monitorozunk és
                    mindig igyekszünk biztosítani,
                    hogy naprakész anyagból és a legjobb eszközökkel dolgozhassanak tanulóink.</p>
            </div>
        </section>

        <section class="grid-cols-2">
            <div class="bal-div-load3 milyen-az-elet">
                <video controls width="360">
                    <source src="img/courses/webdeveloper.mp4" type="video/mp4">
                    Sajnos a video nem támogatott.
                </video>
                <br>
                <audio controls>
                    <source src="img/courses/webdeveloper.mp3" type="audio/mp3">
                    Sajnos a hang nem támogatott.
                </audio>
            </div>
            <div class="jobb-div-load3 milyen-az-elet font-change-smaller">
                <p class="floatclass1"> Nem tudsz dönteni, <br> hogy biztos webfejlesztő
                    szeretnél lenni? </p>
                <img class="decide" src="img/courses/decide.PNG" alt="">
                <p class="floatclass2">Javaslom akkor ezt a rövid kis videót (vagy ha nem szeretnél
                    adatforgalmat
                    pazarolni akkor
                    az audiót), amiben egy tapasztalt webfejlesztő mondja el,
                    hogy pontosan miből is épül fel egy webfejlesztő munkája és milyen kihívások várhatják.</p>
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