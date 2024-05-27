<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="description" content="Efe Gültekinin Blog Web Sitesi">
	<meta name="google-site-verification" content="cqaMsRbuBOIeeHGr1Ok2vu9CLosowt1c3EfROIkPZIo" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Efe Gültekin, Efe Hasan Gültekin, Efe, Gültekin">
    <meta name="mobile-web-app-capable" content="yes">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

	<meta name="apple-mobile-web-app-capable" content="yes">
    <title>EfeGultekin</title>
    <link rel="stylesheet" href="Css komutları/style.css">
    <link rel="short icon" href="Resimler/favicon.ico">
    <script src="Java Script Komutları/Yazi.js"></script>
    
</head>
<body>
    
    <nav>
        <div>
        <ul id="nav">
            <li class="slide-animation"><a href="#Home">Home</a></li>
            <li class="slide-animation"><a href="#About">About</a></li>
            <li class="slide-animation"><a href="#mySkills">Skills</a></li>
            <li class="slide-animation"><a href="#Projects">Projects</a></li>
            <li class="slide-animation"><a href="#Contact">Contact</a></li>
            <li class="slide-animation"><a id="mode-toggle-button" style="width: 151px;">Dark Mode</a></li>
            <li class="slide-animation"><a href="index-tr.php">Tr</a></li>
			<li><a><div class="toogle_btn">
            <i class="fa-solid fa-bars"></i>
            </div></a></li>
            <script src="Java Script Komutları/buton.js"></script>
        </ul>
        </div>
        <div>
        <ul class="dropdown_menu">
            <li class="slide-animation"><a href="#Home">Home</a></li>
            <li class="slide-animation"><a href="#About">About</a></li>
            <li class="slide-animation"><a href="#mySkills">Skills</a></li>
            <li class="slide-animation"><a href="#Projects">Projects</a></li>
            <li class="slide-animation"><a href="#Contact">Contact</a></li>
            <li class="slide-animation"><a href="index-tr.php">Tr</a></li>
            <li class="exitButton"><a>Exit</a></li>
            <script src="Java Script Komutları/buton.js"></script>
        </ul>
        </div>
    </nav>
    <script>
        const toggleBtn = document.querySelector('.toogle_btn')
        const exitBtn = document.querySelector('.exitButton')
        const toggleBtnIcon = document.querySelector('.toogle_btn i')
        const dropDownMenu = document.querySelector('.dropdown_menu')

        toggleBtn.onclick = function (){
            dropDownMenu.classList.toggle('open')
            const isOpen = dropDownMenu.classList.contains('open')

            toggleBtnIcon.classList = isOpen
            ? 'fa-solid fa-xmark'
            : 'fa-solid fa-bars'
        }
        exitBtn.onclick = function (){
            dropDownMenu.classList.remove('open');
            toggleBtnIcon.className = 'fa-solid fa-bars';
        }

    </script>
    <header>

        <div class="animationText"></div>
        <div id="Home" style="bottom: 150px;">
            <a href="https://github.com/EfeHasan" class="guzel-button"  target="_blank">My Github</a>
            <p id="mainText">I Am
                <span
                class="typewrite"
                    data-period="2000"
                    data-words='[" A Student.", " A Software Developer.", " A Game Developer." ,"A Web Developer."]'>
                </span>
                <script src="Java Script Komutları/Yazi.js"></script>
            </p>
        </div>
    </header>
    <article>
        
	<h1 style="text-align: center;"  class="title">About</h1>
        <div id = "About">

            <div class = "box">
                <h2 style="text-align: center ; font-family: 'Courier New', Courier, monospace; color:red;">Songs</h2>
                <p style="text-align: center;">
                    Turkish rock music is my tool for expressing my emotions in their purest form. With its powerful guitar riffs and compelling lyrics, this music genre helps me navigate through my inner world and delve into emotional depths. The state of mind overflowing with the energy of rock music is a symbol of freedom and courage for me.
                </p>
            </div>
            <div class="box">                
                <h2 style="text-align: center ; font-family: 'Courier New', Courier, monospace; color:red;">Who Am I</h2>
                <p style="text-align: center;">
                I am a self-taught programmer from Istanbul, Turkey Currently,
                I am a student in the Information Technology department at İmmib Erkan Avcı Vocational 
                and Technical Anatolian High School. I have surpassed the limits of learning and I am 
                someone who enjoys acquiring new knowledge and constantly improving myself. I like to 
                read books that involve science fiction, psychology, history, and science.
                </p>
            </div>
            <div class="box">
                <h2 style="text-align: center ; font-family: 'Courier New', Courier, monospace; color:red;">Passion for Coding and Reading Books</h2>
                <p style="text-align: center;">
                    Spending hours in front of a computer screen may not just mean writing code for many people. For me, it is a journey of passion and exploration. Both coding and reading books are two essential elements that nourish me and provide constant opportunities for growth.
                </p>
            </div>
        </div>

		        <h1 style="text-align: center;clear: both;"  class="title">My Skills</h1>

        <div id="mySkills">

            <ul>
                <div class="Skills">
                    <li><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/csharp/csharp-original.svg" width="40" height="40"/><a class="Links" href="https://dotnet.microsoft.com/en-us/apps/aspnet/web-apps" target="_blank" rel="noreferrer">C#</a></li>
                </div>
                <div class="Skills">
                    <li><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg" width="40" height="40"/> </a> <a class="Links" href="https://www.helius.dev/?gclid=Cj0KCQiAgqGrBhDtARIsAM5s0_lXppRC74lXl_2yaGLOLgH9O6dRbOGZ0C1BEy4BFYc0qTPBSnKf8ycaAvc0EALw_wcB" target="_blank" rel="noreferrer">Css3</a></li>
                </div>
                <div class="Skills">
                    <li><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/java/java-original.svg" width="40" height="40"/> </a> <a class="Links" href="https://www.java.com" target="_blank" rel="noreferrer">Java</a></li>
                </div>
                <div class="Skills">
                    <li><img src="https://cdn.worldvectorlogo.com/logos/arduino-1.svg" width="40" height="40"/> </a> <a class="Links" href="https://www.arduino.cc" target="_blank" rel="noreferrer">Arduino</a></li>
                </div>
                <div class="Skills">
                    <li><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg"  width="40" height="40"/> </a> <a class="Links" href="https://html.com" target="_blank" rel="noreferrer">Html</li>
                </div>
                <div class="Skills">
                    <li><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg" width="40" height="40"/><a class="Links" href="https://www.mysql.com" target="_blank" rel="noreferrer">MySql</a></li>
                </div>
                <div class="Skills">
                    <li><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" width="40" height="40"/> <a class="Links" href="https://www.php.net" target="_blank" rel="noreferrer">Php</a></li>
                </div>
                <div class="Skills">
                    <li><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/python/python-original.svg" width="40" height="40"/><a class="Links" href="https://www.python.org" target="_blank" rel="noreferrer">Python</a> </li>
                </div>
                <div class="Skills">
                    <li><img src="https://www.vectorlogo.zone/logos/unity3d/unity3d-icon.svg" width="40" height="40"/>  <a class="Links" href="https://unity.com/" target="_blank" rel="noreferrer">Unity</a></li>
                </div>
                <div class="Skills">
                    <li><img src="Resimler/JavaScript icon.png" width="40" height="40"/>  <a class="Links" href="https://www.w3schools.com/js/" target="_blank" rel="noreferrer">JavaScript</a></li>
                </div>
            </ul>
        </div>
        <h1 style="text-align: center; clear: both; position: relative; top: 230px;" class="title">My Projects</h1>
        <div id="Projects" style="text-align: center;clear: both; top: 150px; position: relative;">          
              <ul>
                <div class="Projects">
                    <li>
                        <div class="boxProject">
                            <h2 style="text-align: center;"><a href="https://github.com/EfeHasan/Kutuphane-Projesi-Wpf" title="Click" class="projectButton"  target="_blank">Library Project</a></h2>
                            <p>This desktop application provides fundamental functionality for a library or book management system. Users can add, delete books, register users, and borrow/return books.</p>
                        </div>
                    </li>
                    <li>
                        <div class="boxProject">
                            <h2 style="text-align: center;"><a href="https://github.com/EfeHasan/JavaGirisSeviyeOrnekler" title="Click" class="projectButton"  target="_blank">Java Introductory Examples</a></h2>
                            <p>This repository is dedicated to helping beginners in Java programming embark on their coding journey with hands-on projects. Whether you're a student, self-learner, or transitioning from another language, these projects are crafted to reinforce fundamental Java concepts while building practical skills.</p>
                        </div>
                       
                    </li>
                    <li>
                        <div class="boxProject">
                            <h2 style="text-align: center;"><a href="https://github.com/EfeHasan/CustomList" class="projectButton" title="Click"  target="_blank">Custom List</a></h2>
                            <p>This C# project contains a customizable generic list class. This List class represents a collection that dynamically grows and can be used to add, remove, and manipulate elements.</p>
                        </div>
                    </li>
                </div>
            </ul>
        </div>
        <div id="Contact"></div>
        <div class="container">
            <h1 class="title">Contact</h1>
            <div class="contact-area">
                <div class="cont-left">
                    <div class="cont-top">
                        <div class="cont-element">
                            <i class="far fa-address-card"></i>
                            <address>Istanbul / Turkey</address>
                        </div>
                        <div class="cont-element">
                            <i class="far fa-envelope"></i>
                            <a href="mailto:efegultrkin4@gmail.com">efegultrkin4@gmail.com
                            </a>
                        </div>
                        <div class="cont-element">
                            <i class="fas fa-phone-alt"></i>
                            <a href="tel:+905384003936">+90(538 400 3936)</a>
                        </div>
                    </div>
                    <div class="cont-bottom">
                        <a href="https://www.facebook.com/profile.php?id=100010358023086&locale=tr_TR"><i class="fab fa-facebook-f"></i></a> 
                        <a href="https://twitter.com/EfeGlte98921045"><i class="fab fa-twitter"></i></a> 
                        <a href="https://www.instagram.com/efegultekinhasan1334/"><i class="fab fa-instagram"></i></a> 
                        <a href="https://www.linkedin.com/in/efe-hasan-g%C3%BCltekin-a80670242/"><i class="fab fa-linkedin-in"></i></a> 
                    </div>
                </div>
                <div class="cont-right">
                    <form action="phpKomutlari/save.php" method="post">
                        <input type="text" name="name" id="text" placeholder="Full Name">
                        <input type="email" name="email" id="email" placeholder="Email">
                        <textarea name="message" id="message" rows="10" placeholder="Message"></textarea>
                        <button name="Send">Send</button>

                    </form>
                </div>
            </div>
        </div>

    </article>
    <footer>
        <div id="end">
        <p style="text-align: center; color: white; font-family: 'Courier New', Courier, monospace;">Thank you for visiting our website! Support us by sharing our content or giving feedback. We look forward to seeing you again. Have a great day!</p>
        <p style="text-align: center; color: white; font-family: 'Courier New', Courier, monospace;">Copyrighted and Made with by EfeGultekin</p>
        </div>
    </footer>


</body>
</html>