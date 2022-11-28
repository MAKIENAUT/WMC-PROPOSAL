<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../disclaimer/disclaimer.css">
    <script src="../disclaimer/disclaimer.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <title>Document</title>
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

    <!-- ARTICLE SECTION -->
    <article>
        <div class="article-container">
            <div class="article-subcontainer">
                <div class="article">
                    <!-- <div class="validity-section">
                       
                    </div> -->
                    <div class="disclaimer-section">
                        <div class="disclaimer-title">
                            <h1>Eligibility Requirements:</h1>
                        </div>

                        <ul>
                            <li>
                                <p>
                                    Meet the qualifications for teaching in primary or secondary schools in your home country, working as a teacher in your home country at the time of application, and have at least two years of full-time teaching experience or;
                                </p>
                            </li>
                            <li>
                                <p>
                                    Not working as a teacher at the time of application, but otherwise meet the qualifications for teaching at a primary or secondary school with two years of full-time teaching experience within the past eight years and at the time of application, and have or will have completed an advanced degree in education or related subject matter that you intend to teach;
                                </p>
                            </li>
                            <li>
                                <p>
                                    Have sufficient proficiency in English to participate in the program;
                                </p>
                            </li>
                            <li>
                                <p>
                                    Possess a degree equivalent to a U.S. Bachelor's Degree in either education or the academic subject field in which you intend to teach;
                                </p>
                            </li>
                            <li>
                                <p>
                                    Satisfy the eligibility standards of the U.S. state in which you will teach;
                                </p>
                            </li>
                            <li>
                                <p>
                                    Be of good reputation and character;
                                </p>
                            </li>
                            <li>
                                <p>
                                    Agree to come to the United States temporarily for the purpose of teaching full-time at an accredited primary or secondary school
                                </p>
                            </li>

                            <li>
                                <p>
                                    * There is one exception to this requirement. A teacher who is not working in his or her home country at the time of application, but has or will have completed an advanced degree in education or in an academic subject matter that he or she intends to teach within 12 months of his or her application submission date for the program MAY qualify if they meet all other requirements.
                                </p>
                            </li>
                            <li>
                                <div class="verification">
                                    <div class="apply">
                                        <a href="../apply/interest_form.php" class="application">
                                            Let's Go!
                                        </a>
                                    </div>
                                    <div class="verif-title">
                                        <h1>I'm Legible!</h1>
                                    </div>
                                </div>
                            </li>

                        </ul>
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