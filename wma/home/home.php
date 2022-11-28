<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../home/home.css">
    <script src="/home/home.js"></script>
    <title>HOME</title>
</head>

<body>
    <!-- NAVIGATION BAR -->
    <div id="navbar">
        <div id="nav-container">
            <!-- NAVIGATION BAR - LOGO BUTTON -->
            <div class="nav-left">
                <a id="logo" href="https://westmigrationagency.com/">
                    <img src="../photos/wma-logo.png" id="logo-img">
                </a>
            </div>

            <div class="nav-right">
                <!-- NAVIGATION BAR - HOVER BUTTONS -->
                <div class="dropdown">
                    <button class="dropbtn">
                        About Us
                    </button>
                    <div class="dropdown-content">
                        <a href="../company/company.php">
                            Our Company
                        </a>
                        <a href="../company2/company2.php">
                            Specializations
                        </a>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="dropbtn" onClick="location.href='../application/application.php'">
                        Application
                    </button>
                </div>

                <div class="dropdown">
                    <button class="dropbtn" onClick="location.href='../contact/contact.php'">
                        Contact Us
                    </button>
                </div>

            </div>
        </div>
    </div>
    <!-- INTRO SECTION -->
    <section>
        <div class="section-container">
            <div class="image-container" id="image-container">
                <div class="logo_title">
                    <img src="../photos/wma-logo.png" alt="">
                </div>
            </div>
            <div class="title_container" id="title_container">
                <div class="text_title">
                    <h1>We Want You!</h1>
                    <h3>Are you ready for an Opportunity?</h3>
                    <a href="../disclaimer/disclaimer.php">Apply Now!</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CARD ARTICLES -->
    <article>
        <div class="article-container">
            <div class="article-subcontainer">
                <div class="article-title" id="article-title">
                    <h1 id="art_title">West Migration Agency</h1>
                </div>
                <div class="article-subtitle" id="article-subtitle">
                    <p id="art-subtitle">
                        West Migration Agency ("WMA") is a women-owned, operated, and managed corporation based in california. The founders lead our diverse and dynamic business, bringing their years of legal credentials along with their recruiting and consulting needs.
                    </p>
                </div>
            </div>
        </div>
        <div class="article-cards">
            <!-- ARTICLE CARD 1 -->
            <div class="article-card1" id="article-card1">
                <div class="card-con" id="card-con1">
                    <div class="con1-title" id="con1-title">
                        <h1>Lorem Ipsum</h1>
                    </div>
                    <div class="con1-logo" id="con1-logo">
                    </div>
                    <div class="con1-subtitle" id="con1-subtitle">
                        <p class="card1-sub" id="card1-sub">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ARTICLE CARD 2 -->
            <div class="article-card2" id="article-card2">
                <div class="card-con" id="card-con2">
                    <div class="con2-title" id="con2-title">
                        <h1>Lorem Ipsum</h1>
                    </div>
                    <div class="con2-logo" id="con2-logo">
                    </div>
                    <div class="con2-subtitle" id="con2-subtitle">
                        <p class="card2-sub" id="card2-sub">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ARTICLE CARD 3 -->
            <div class="article-card3" id="article-card3">
                <div class="card-con" id="card-con3">
                    <div class="con3-title" id="con3-title">
                        <h1>Lorem Ipsum</h1>
                    </div>
                    <div class="con3-logo" id="con3-logo">
                    </div>
                    <div class="con3-subtitle" id="con3-subtitle">
                        <p class="card3-sub" id="card3-sub">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </article>

    <!-- ------------------------------------- -->
    <!-- FOOTER BAR -->
    <footer>
        <div class="foot-container">
            <div class="foot-subcontainer">
                <!-- LOGO SECTION -->
                <div class="left-foot">
                    <div class="foot-logo">
                        <a id="foot-logo" href="https://westmigrationagency.com/">
                            <img src="../photos/wma-logo.png" id="logo-img">
                        </a>
                        <p>
                            © (YEAR) West Migration Agency
                            All Rights Reserved
                        </p>
                    </div>
                </div>

                <!-- PAGE BUTTON SECTION -->
                <div class="mid-foot">
                    <div class="page-buttons">
                        <a href="../company/company.php">
                            ABOUT US
                        </a>
                        <a href="../contact/contact.php">
                            CONTACT US
                        </a>
                        <a href="../application/application.php">
                            REQUIREMENTS
                        </a>
                        <a href="../admin/login.php">
                            ADMIN ACCESS
                        </a>
                    </div>
                </div>

                <!-- SOCIAL MEDIA BUTTONS -->
                <div class="socials">
                    <!-- <div class="socials-title">
                        <h2>Check us out!</h2>
                    </div> -->
                    <div class="socials-container">
                        <div>
                            <a href="https://www.facebook.com/profile.php?id=100087001537840" id="socialButton1">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </div>
                        <div>
                            <a href="#" id="socialButton3">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                        <div class="email_button">
                            <button id="socialButton5" onclick="copyToClipboard()">
                                <i class="fa-solid fa-envelope"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>