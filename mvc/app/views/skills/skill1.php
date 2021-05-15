<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/skivi2.css" type="text/css">
    <link rel="stylesheet" href="../styles/header.css" type="text/css">
    <link rel="stylesheet" href="../styles/skiviskill.css" type="text/css">
    <title>Learn a Skill</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#contact" class="contact--button">Contact</a></li>
            </ul>
            <div><img class="logo" src="../assets/img/logo.png" alt="logo"></div>
            <div class="openMenu"><img class="hamburger--menu" src="../assets/img/menu.png" alt="menu button"></div>
            <ul class="mainMenu">
                <li><a href="main.html">Learn</a></li>
                <li><a href="myaccount.html">My Account</a></li>
                <li><a href="signup.html">Sign Up</a></li>
                <li><a href="login.html">Log In</a></li>
                <li class="closeMenu"><img class="hamburger--menu" src="../assets/img/close-button.png" alt="close button"></li>
            </ul>
        </nav>
    </header>


    <main>
        <a href="#" class="to-top">Back to top</a>
        <div class="title">
            <h1>Title</h1>
        </div>
        <div class="course--details">

            <div class="course--description--image">
                <img class="course--img" src="../assets/img/Layer.jpg" alt="man reading">
                <div class="course--description">
                    <h2>Course Description</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>
            </div>
            <div class="course--content--needs">
                <div class="course--content">
                    <h2>This Course Contains</h2>
                    <ul>
                        <li> 10 ore de viziorane</li>
                        <li>40 de videoclipuri </li>
                        <li>10 lectii pentru acasa:))</li>
                    </ul>
                </div>
                <div class="course--content">
                    <h2>For this course you will need</h2>
                    <ul>
                        <li>ceva</li>
                        <li>altceva</li>
                        <li>nu stiu </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="courses">
            <div class="dropdowns">
                <div onclick="drop1()" class="dropbtn--course">
                    <h2>Course 1</h2> <img class="down-arrow" src="../assets/img/down-arrow.png" alt="down-arrow">
                </div>
                <div id="course--dropdown" class="dropdown--course">
                    <div class="drop--bg">
                        <iframe allow="fullscreen" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                        <p class="course--txt"> <img src="../assets/img/exclamation.png" alt="exclamation" class="info"> After you finish the course please click the "Done" button from the right.</p>
                        <button class="btn--done" type="submit"> Done </button>
                    </div>
                </div>
            </div>
            <div class="dropdowns">
                <div onclick="drop2()" class="dropbtn--course">
                    <h2>Course 2</h2> <img class="down-arrow" src="../assets/img/down-arrow.png" alt="down-arrow">
                </div>
                <div id="course--dropdown2" class="dropdown--course">
                    <div class="drop--bg">
                        <iframe allow="fullscreen" src="https://www.youtube.com/embed/watch?v=9ZSorY3ZxWc">
                        </iframe>
                        <p class="course--txt"> <img src="../assets/img/exclamation.png" alt="exclamation"> After you finish the course please click the "Done" button from the right.</p>
                        <button class="btn--done" type="submit"> Done </button>
                    </div>
                </div>
            </div>
            <div class="dropdowns">
                <div onclick="drop3()" class="dropbtn--course">
                    <h2>Course 3</h2> <img class="down-arrow" src="../assets/img/down-arrow.png" alt="down-arrow">
                </div>
                <div id="course--dropdown3" class="dropdown--course">
                    <div class="drop--bg">
                        <iframe allow="fullscreen" src="https://www.youtube.com/embed/watch?v=kxk9cijdpyY">
                        </iframe>
                        <p class="course--txt"> <img src="../assets/img/exclamation.png" alt="exclamation"> After you finish the course please click the "Done" button from the right.</p>
                        <button class="btn--done" type="submit"> Done </button>
                    </div>
                </div>
            </div>
            <div class="dropdowns">
                <div onclick="drop4()" class="dropbtn--course">
                    <h2>Course 4</h2> <img class="down-arrow" src="../assets/img/down-arrow.png" alt="down-arrow">
                </div>
                <div id="course--dropdown4" class="dropdown--course">
                    <div class="drop--bg">
                        <iframe allow="fullscreen" src="https://www.youtube.com/embed/watch?v=lPKc4NmVd0Q">
                        </iframe>
                        <p class="course--txt"> <img src="../assets/img/exclamation.png" alt="exclamation"> After you finish the course please click the "Done" button from the right.</p>
                        <button class="btn--done" type="submit"> Done </button>
                    </div>
                </div>
            </div>
            <div class="dropdowns">
                <div onclick="drop5()" class="dropbtn--course">
                    <h2>Course 5</h2> <img class="down-arrow" src="../assets/img/down-arrow.png" alt="down-arrow">
                </div>
                <div id="course--dropdown5" class="dropdown--course">
                    <div class="drop--bg">
                        <iframe allow="fullscreen" src="https://www.youtube.com/embed/watch?v=JihVUdp3HHI">
                        </iframe>
                        <div class="done--course">
                            <p class="course--txt"> <img src="../assets/img/exclamation.png" alt="exclamation"> After you finish the course please click the "Done" button from the right.</p>
                            <button class="btn--done" type="submit"> Done </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>
    <footer id="contact">
        <div class="footer--contact">
            <div class="mail--creators"> Contact creators </div>
            <div class="contact--list">
                <p class="mail--creators">Mosoiu Alexandra : alexandramosoiu19@gmail.com</p>
                <p class="mail--creators">Iordan Cosmina: cosmina.iordan03@gmail.com</p>
            </div>
        </div>
        <div class="footer--contact footer--sourcecode">
            Source-Code: <a class="footer-code" href="https://github.com/Serithipithy/SkiVI-Skill-Virtual-Instructor-">GitHub</a>
        </div>
    </footer>
    <section class="project">
        <h5>Web Technologies project | 2021</h5>
    </section>


    <script src="../scripts/navbar.js"></script>
    <script src="../scripts/script-skill.js"></script>


</body>

</html>