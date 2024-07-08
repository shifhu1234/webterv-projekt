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
                    <li><a href="free.php">Ingyenes</a></li>
                    <li class="current-page"><a href="blog.php">Blog</a></li>
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
        <section class="">
            <div class="div-marg-color center-pos alcim-load">
                <p class="font-change">G & T kurzus Blog</p>
                <p class="">Itt naprakész mara dhatsz az aktuális webfejlesztéssel kapcsolatos hírekkel,
                    tippekkel,
                    tanácsokkal és még sok mással.</p>
            </div>
        </section>

        <section class="grid-cols-3">
            <div class="img-anim milyen-az-elet signika">
                <img class="blog-img" src="img/blog/blog1.png" alt="Blog1" title="Blog1">
                <h3>7 JavaScript Projects for Beginners + Source Codes</h3>
                <p>JavaScript is a powerful programming language that is widely used to create interactive and dynamic
                    web pages.
                    As a beginner in JavaScript, it can be challenging to know where to start and what projects to
                    build.
                    In this article, we will introduce you to 7 God Mod JavaScript Projects that you should build to
                    improve your skills and gain valuable experience.
                </p><br>
                <a class="signika read-more"
                    href="https://www.anythingprogramming.com/2023/01/7-god-mode-javascript-projects-for.html">Tovább
                    olvasom →</a>
            </div>

            <div class="img-anim milyen-az-elet signika">
                <img class="blog-img" src="img/blog/blog2.png" alt="Blog2" title="Blog2">
                <h3>Download: CSS Cheat Sheet PDF</h3>
                <p>However, it might be difficult to familiarize yourself with various CSS values, especially if you’re
                    new to the language.
                    To help you out, I am going to share a complete CSS Cheat Sheet that will prove useful for all of
                    your web development projects. </p><br>
                <a class="signika read-more"
                    href="https://www.anythingprogramming.com/2022/02/download-css-cheat-sheet-pdf.html">Tovább olvasom
                    →</a>
            </div>

            <div class="img-anim milyen-az-elet signika">
                <img class="blog-img" src="img/blog/blog3.png" alt="Blog3" title="Blog3">
                <h3>ChatGPT, the AI that Can answer any question</h3>
                <p>Chatbots have been around for a while now, but the new advances in artificial intelligence and
                    natural language processing are making them far more powerful than ever before.</p>
                <br><a class="signika read-more"
                    href="https://www.anythingprogramming.com/2022/12/chatgpt-ai-that-answers-any-question.html">Tovább
                    olvasom →</a>
            </div>
        </section>

        <section class="grid-cols-3">
            <div class="img-anim1 milyen-az-elet signika">
                <img class="blog-img" src="img/blog/blog4.png" alt="Blog4" title="Blog4">
                <h3>How to Gain a Free Computer Science and IT Degree.</h3>
                <p>Are you looking to gain a free computer science and IT degree but don't know where to start? Look no
                    further!
                    In this article, we will provide step-by-step instructions on how to gain a free computer science
                    and IT degree without spending a dime. </p>
                <br><a class="signika read-more"
                    href="https://www.anythingprogramming.com/2022/12/how-to-gain-free-computer-science-and.html">Tovább
                    olvasom →</a>
            </div>

            <div class="img-anim1 milyen-az-elet signika">
                <img class="blog-img" src="img/blog/blog5.png" alt="Blog5" title="Blog5">
                <h3>Top 5 Highest-Paying IT Certifications for 2023: Boost Your Career and Earn More!</h3>
                <p>Welcome to our comprehensive guide on the 5 highest-paying certifications in IT in 2023!
                    If you're a tech enthusiast looking to boost your career and bank account, this is the perfect
                    article for you.
                    We'll be discussing the top google certifications, AWS solution architect certification, and other
                    hot certifications courses that will surely bring in the big bucks. </p>
                <br><a class="signika read-more"
                    href="https://www.anythingprogramming.com/2022/12/top-5-highest-paying-it-certifications.html">Tovább
                    olvasom →</a>
            </div>

            <div class="img-anim1 milyen-az-elet signika">
                <img class="blog-img" src="img/blog/blog6.png" alt="Blog6" title="Blog6">
                <h3>10 Tools to Optimize your Development Skills in 2023</h3>
                <p>As a developer, it's important to stay up-to-date with the latest tools and technologies.
                    But with so many options out there, it can be tough to know which ones are worth your time. </p>
                <br><a class="signika read-more"
                    href="https://www.anythingprogramming.com/2022/12/10-tools-to-optimize-your-development.html">Tovább
                    olvasom →</a>
            </div>
        </section>

        <section class="grid-cols-3">
            <div class="img-anim2 milyen-az-elet signika">
                <img class="blog-img" src="img/blog/blog7.png" alt="Blog7" title="Blog7">
                <h3>Top 30 Open Source Projects( JavaScript ,Java, and more)</h3>
                <p>With the popularity of open source, there is no shortage of projects to get involved. But, with so
                    many options available, it can be difficult to know where to start.
                    To help you get started, we've compiled a list of 30 of the best open source projects across a range
                    of languages, including Python, JavaScript, and Java.</p>
                <br><a class="signika read-more"
                    href="https://www.anythingprogramming.com/2022/11/top-30-open-source-projects-javascript.html">Tovább
                    olvasom →</a>
            </div>

            <div class="img-anim2 milyen-az-elet signika">
                <img class="blog-img" src="img/blog/blog8.png" alt="Blog8" title="Blog8">
                <h3>30+ Programming Interview Questions And Answers</h3>
                <p>All large companies are constantly looking for talented programmers to join their teams. You must
                    acquire as much knowledge as you can in order to be given an opportunity at these large
                    corporations.
                    The developer job interview will inevitably include questions on programming. You will always be
                    required to be familiar with programming basics, regardless of the programming language you use.
                </p>
                <br><a class="signika read-more"
                    href="https://www.anythingprogramming.com/2022/11/30-programming-interview-questions-and.html">Tovább
                    olvasom →</a>
            </div>

            <div class="img-anim2 milyen-az-elet signika">
                <img class="blog-img" src="img/blog/blog9.png" alt="Blog9" title="Blog9">
                <h3>10 Topics you must know if you want to be a web developer - a beginners guide</h3>
                <p>In this article, I will list 10 Topics you must know if you want to be a web developer as a beginner
                    or an advanced developer.
                    These lists are categories of Fronted, Back-end, Web architecture, and some advanced techniques.</p>
                <br><a class="signika read-more"
                    href="https://www.anythingprogramming.com/2022/11/10-topics-you-must-know-if-you-want-to.html">Tovább
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