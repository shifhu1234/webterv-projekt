<?php
	if(!isset($_SESSION)){session_start();}
?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <title>G & T kurzus | Online videós webfejlesztő kurzusok</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="img/logo2.png">

    <link rel="stylesheet" media="print" href="style/print.css" />
</head>

<body>
    <header>
        <section class="menu-bar">
            <div class="alcim-load logo current-page nav-list1">
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

        <section class="grid-cols-2">
            <div class="div-marg img-div">
                <h1 class="div-marg-color left-pos">Készíts sikeres weboldalt</h1>


                <span id="name"></span><br><br><br>

                <script src="script/script.js"></script>
                <p class=" eloszo right-pos"><br>
                    Online képzéseinken megtanítjuk a
                    <strong> webdesign, webszövegírás és honlap építés</strong> <br> mesterségét egyszerű,
                    hatékony, de profi eszközök segítségével.
                    <br><br>

                    <i> Nem szükséges programozói tudás vagy grafikusi előképzettség.</i>
                </p>
                <br><a class="free-format ingyenes" href="free.php">INGYENES TANANYAG</a>
                <a class="free-format ingyenes2" href="ourselves.php">RÓLUNK</a>


            </div>

            <div class="div-marg">
                <img class="img-anim" src="img/index/start2.png" alt="Start" title="Start">
            </div>
        </section>
    </header>


    <main>
        <h1 class="font-change nav-load">Milyen az élet, ha weboldalt építenél?</h1>

        <section class="grid-cols-2">

            <div class="bal-div-load milyen-az-elet">
                <p class="div-cimek">Egyedül</p>
                <p class="bigger-size">Folyamatos keresgélés blogokon és YouTubeon, útvesztő, frusztráció, <br>
                    barkácsolt hatás,
                    hibák
                    tömkelege.</p>
                <img class="" src="img/index/egyedul2.png" alt="Egyedul" title="Egyedul">
            </div>

            <div class="jobb-div-load milyen-az-elet">
                <p class="div-cimek">G & T kurzussal</p>
                <p class="bigger-size">Egyszerűen követhető, pontos lépések, sablonok, munkafüzetek, csekklisták –
                    <br> térkép,
                    aminek a
                    végén megleled új weboldalad.
                </p>
                <img class="" src="img/index/kurzussal2.png" alt="Kurzussal" title="Kurzussal">
            </div>
        </section>

        <section class="grid-cols-2">
            <div class="bal-div-load2 milyen-az-elet">
                <p class="div-cimek div-balra">Kedvenc eszközeink, melyek <br> segítségével honlapokat készítünk</p>
                <br>
                <p class="left-pos2 bigger-size">Igaz, hogy G & T kurzus a nevünk, de mára sokkal több lettünk, mint
                    WordPress oktatás.</p> <br>
                <p class="left-pos2 bigger-size">A leghatékonyabb szoftverekkel dolgozunk, és ezeket tanítjuk is
                    <strong> képszerkesztés, UI design, szövegírás, vállalkozás</strong> témákban.
                </p> <br>
                <p class="center-pos bigger-size">Te is megtanulnád őket, hogy magasabb szintre lépj?</p>
                <a class="free-format ingyenestanfolyam free-format2 amit-hasznalunk"
                    href="courses.php">TANFOLYAMOK</a>
            </div>
            <div class="html-css-php">
                <img class="test-load1" src="img/index/html.png" alt="HTML" title="HTML">
                <img class="test-load2" src="img/index/css.png" alt="CSS" title="CSS">
                <img class="test-load3" src="img/index/php.png" alt="PHP" title="PHP">
            </div>


        </section>

        <section class="grid-cols-2">
            <div class="bal-div-load3 milyen-az-elet">
                <h1 class=" div-cimek div-balra2">A készítők</h1><br>

                <p class="left-pos3 bigger-size">Nagy Gábor és Tolnai Tamás, mi vagyunk a készítők, a mi fejünkből
                    pattant ki a G & T kurzus gondolata. Szerelem volt első látásra, amikor elkezdtünk tanulni az online
                    marketingről, vállalkozásokról és weboldalakról.
                    Amikor már az ismerőseinknek próbáltuk átadni a tudásunkat, rátaláltunk az igazi célunkra.</p>
                <br>
                <p class="left-pos3 bigger-size"> <strong> Elhatároztuk, hogy létrehozunk egy weboldalt, ahol a hozzánk
                        hasonló
                        átlagos felhasználók minden fontos infót elérhetnek ahhoz,
                        hogy a létező legegyszerűbb módon a lehető legtöbbet hozhassák ki a saját honlapjukból.</strong>
                </p>
                <br>
                <p class="left-pos3 bigger-size">Csapatunk jelenleg kettőnkből áll, azonban nem titok, hogy a jó
                    weboldal titka, a sok gyakorlás, tesztelés és új ötletek bevezetése.
                </p><br>
                <p class="center-pos bigger-size"><i>Ha hosszabban is kíváncsi vagy a sztorinkra, olvass tovább… </i>
                </p>
                <a class="free-format ingyenestanfolyam free-format3 amit-hasznalunk" href="ourselves.php">RÓLUNK</a>
            </div>
            <div class="porgeteshez">
                <img class="test-load4 infinite-circle" src="img/index/mi2.png" alt="Rólunk" title="Rólunk">
            </div>
        </section><br>

        <h1 class="div-cimek center-pos nav-load2">Blog</h1>
        <section class="grid-cols-3">
            <div class="nav-load2">
                <img class="blog-img" src="img/blog/blog1.png" alt="Blog1" title="Blog1">
                <br>
                <h3 class="signika bigger-size center-pos">7 JavaScript Projects for Beginners + Source Codes</h3>
                <br>
                <p class="signika">JavaScript is a powerful programming language that is widely used to create
                    interactive and
                    dynamic web pages.
                    As a beginner in JavaScript, it can be challenging to know where to start and what projects to
                    build.
                    In this article, we will introduce you to 7 God Mod JavaScript Projects that you should build to
                    improve your skills and gain valuable experience.
                </p>
                <a class="signika read-more"
                    href="https://www.anythingprogramming.com/2023/01/7-god-mode-javascript-projects-for.html">Tovább
                    olvasom →</a>
            </div>

            <div class="nav-load2">
                <img class="blog-img" src="img/blog/blog2.png" alt="Blog2" title="Blog2">
                <br>
                <h3 class="signika bigger-size center-pos">Download: CSS Cheat Sheet PDF</h3>
                <br>
                <p class="signika">However, it might be difficult to familiarize yourself with various CSS values,
                    esmorepecially
                    if you’re new to the language.
                    To help you out, I am going to share a complete CSS Cheat Sheet that will prove useful for all of
                    your web development projects. </p><br>
                <a class="signika read-more"
                    href="https://www.anythingprogramming.com/2022/02/download-css-cheat-sheet-pdf.html">Tovább
                    olvasom →</a><br> <br>
                <a class="read-more signika bigger-size right-pos1" href="blog.php">MÉG TÖBB CIKK</a>
            </div>

            <div class="nav-load2">
                <img class="blog-img" src="img/blog/blog3.png" alt="Blog3" title="Blog3">
                <br>
                <h3 class="signika bigger-size center-pos">ChatGPT, the AI that Can answer any question</h3>
                <br>
                <p class="signika">Chatbots have been around for a while now, but the new advances in artificial
                    intelligence
                    and natural language processing are making them far more powerful than ever before.</p>
                <br><br><a class="signika read-more"
                    href="https://www.anythingprogramming.com/2022/12/chatgpt-ai-that-answers-any-question.html">Tovább
                    olvasom →</a>
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