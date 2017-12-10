<!doctype html>
<html ng-app="app">
    <head>
        <meta charset="utf-8">
        <title>Portfolio-Adrian Ciejka</title>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link href="bootstrap/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">-->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--<script src="bootstrap/bootstrap-3.3.7-dist/js/bootstrap.js"></script>-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
		<!--<script src="js/angular.js"></script>-->
        <script src="js/script.js"></script>
        <script src="js/controller.js"></script>
    </head>
    <body onscroll="scrolling()"  ng-controller="baseCtrl" ng-init="getLikes()">
    <div class="containerWrap">
	<div class="navigationContainer">
        <div class="navigationMobile" style="position:fixed;">
            <div class="navigationAlt">
                <ul class="nav navbar-nav" style="margin-top: 65px">
                    <li class="nav-item"><a href="#" onclick="goToHome()"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li class="nav-item"><a href="#" onclick="goToAbout()"><span class="glyphicon glyphicon-user"></span> O mnie</a></li>
                    <li class="nav-item"><a href="#" onclick="goToSkills()"><span class="glyphicon glyphicon-phone"></span> Umiejętności</a></li>
                    <li class="nav-item"><a href="#" onclick="goToProjects()"><span class="glyphicon glyphicon-list"></span> Projekty</a></li>
                    <li class="nav-item"><a href="#" onclick="goToContacts()"><span class="glyphicon glyphicon-envelope"></span> Kontakt</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="banner">
        <div class="photo">
            <p>"Większość programistów programuje nie dlatego, że spodziewają się zapłaty lub uwielbienia tłumów, ale dlatego, że programowanie jest dla nich zabawą."</p>
            <p>- Linus Torvalds</p>
        </div>
        <span class="bannerText text-center">Junior Front-End Developer</span>
        <img id="banner1" src="img/banner3.png" width="100%"/>
		<img id="banner2" src="img/banner3.jpg" width="100%" />
        <div class="arrowDown">
            <span class="glyphicon glyphicon-hand-down"></span>
        </div>
    </div>
        <div class="mobileBar">
            <span class="barText text-center">Junior Front-End Developer</span>
            <div class="pull-left">
                    <span class="glyphicon glyphicon-globe" style="font-size: 40px; color:rgba(250,250,150,0.5)"></span>
            </div>
            <div class="pull-right" onclick="showMobileMenu()">
                <span style="color: white;" class="icon-bar"></span>
                <i class="material-icons" id="mobile1"  style="font-size: 50px;">menu</i>
                <i class="material-icons" id="mobile2"  style="font-size: 50px;">close</i>
            </div>
        </div>
        <div id="navigation">
            <div id="navbar" class="nav">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a href="#" onclick="goToHome()"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li class="nav-item"><a href="#" onclick="goToAbout()"><span class="glyphicon glyphicon-user"></span> O mnie</a></li>
                    <li class="nav-item"><a href="#" onclick="goToSkills()"><span class="glyphicon glyphicon-phone"></span> Umiejętności</a></li>
                    <li class="nav-item"><a href="#" onclick="goToProjects()"><span class="glyphicon glyphicon-list"></span> Projekty</a></li>
                    <li class="nav-item"><a href="#" onclick="goToContacts()"><span class="glyphicon glyphicon-envelope"></span> Kontakt</a></li>
                </ul>
            </div>
        </div>
            <div class="about col-md-12 col-xs-12 col-sm-12">
                <div class="text-center" style="border-bottom: 4px solid black">
                    <p id="heading1" class="headingText">O mnie</p>
                </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="myPanel">
                                <p class="text-justify">Witam! Mam na imię Adrian i interesuje się programowaniem od ponad roku. Naukę programowania rozpocząłem
                                    jeszcze na studia uświadamiając sobie, iż tą drogą chcę podążać na mojej dalszej ścieżce kariery zawodowej.
                                    Nie mam zbyt dużego doświadczenia komercyjnego, mam na koncie jedynie jeden projekt komercyjny oraz 3 własne
                                    projekty. Pragnę się rozwijać oraz zdobywać nową więdzę. Jestem skrupulatny, głodny wiedzy oraz skory do nauki nowych technologii.
                                    Poznawanie nowych trendów nie jest dla mnie problemem gdyż z dużą łatwością przychodzi mi nauka.
                                </p>
                            </div>
                    </div>
                    <div id="informations" class="col-md-4 col-sm-4 col-xs-12 ">
                        <div class="myPhoto text-center">
                            <img id="myIMG" src="img/myphoto2.jpg" alt="doesn't work" width="256px" />
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="download text-center">
                            <a href="download.php" style="position:relative; z-index: 2000;">
                                <div class="containerBut">
                                    <div class="button">
                                        <div class="icon">
                                            <span class="glyphicon glyphicon-floppy-save"></span>
                                        </div>
                                    </div>
                                    <p style="font-size: 30px; color: black">Pobierz CV</p>
                                </div>
                            </a>
                        </div>
                    </div>
            </div>
            <div class="skills col-md-12 col-xs-12 col-sm-12 text-center">
                <div class="text-center col-md-12" style="border-bottom: 4px solid black">
                    <p class="headingText">Umiejętności</p>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 skillContainer">
                    <div id="skill1" class="col-md-6 col-sm-6 col-xs-12 skill one">
                        <div class="skillCircle" id="circle1">
                            <div class="col-md-8 col-sm-6 col-xs-6">
                                <figure>
                                    <img class="skillPhoto" src="img/html.png" alt="Don't work" width="150px" height="150px"/>
                                </figure>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 text-left" style="margin-top:20px;">
                                <p>HTML5</p>
                                <div class="progress" style=" margin: auto; width:100%;">
                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width:80%">80%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="skill2" class="col-md-6 col-sm-6 col-xs-12 skill two">
                       <div class="skillCircle" id="circle2">
                           <div class="col-md-4 col-sm-6 col-xs-6 text-right" style="margin-top:20px;">
                               <p>CSS3</p>
                               <div class="progress" style=" margin: auto; width:100%;">
                                   <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70"
                                        aria-valuemin="0" aria-valuemax="100" style="width:80%">80%
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-8 col-sm-6 col-xs-6">
                               <figure>
                                   <img class="skillPhoto" src="img/css.png" alt="Don't work" width="150px" height="150px"/>
                               </figure>
                           </div>
                       </div>
                    </div>
                    <div id="skill3" class="col-md-6 col-sm-6 col-xs-12 skill one">
                       <div class="skillCircle" id="circle3">
                           <div class="col-md-8 col-sm-6 col-xs-6">
                               <figure>
                                   <img class="skillPhoto" src="img/css-pre.png" alt="Don't work" width="150px" height="150px"/>
                               </figure>
                           </div>
                           <div class="col-md-4 col-sm-6 col-xs-6 text-left" style="margin-top:20px;">
                               <p>Sass/Less</p>
                               <div class="progress" style=" margin: auto; width:100%;">
                                   <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70"
                                        aria-valuemin="0" aria-valuemax="100" style="width:60%">60%
                                   </div>
                               </div>
                           </div>
                       </div>
                    </div>
                    <div id="skill4" class="skill col-md-6 col-sm-6 col-xs-12 two">
                       <div class="skillCircle" id="circle4">
                           <div class="col-md-4 col-sm-6 col-xs-6 text-right" style="margin-top:20px;">
                               <p>JavaScript</p>
                               <div class="progress" style=" margin: auto; width:100%;">
                                   <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70"
                                        aria-valuemin="0" aria-valuemax="100" style="width:70%">70%
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-8 col-sm-6 col-xs-6">
                               <figure>
                                   <img class="skillPhoto" src="img/js.png" alt="Don't work" width="150px" height="150px"/>
                               </figure>
                           </div>
                       </div>
                    </div>
                    <div id="skill5" class="skill col-md-6 col-sm-6 col-xs-12 one">
                        <div class="skillCircle" id="circle5">
                            <div class="col-md-8 col-sm-6 col-xs-6">
                                <figure>
                                    <img class="skillPhoto" src="img/jquery.png" alt="Don't work" width="150px" height="150px"/>
                                </figure>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 text-left" style="margin-top:20px;">
                                <p>jQuery</p>
                                <div class="progress" style=" margin: auto; width:100%;">
                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width:70%">70%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="skill6" class="skill col-md-6 col-sm-6 col-xs-12 two">
                       <div class="skillCircle" id="circle6">
                           <div class="col-md-4 col-sm-6 col-xs-6 text-right" style="margin-top:20px;">
                               <p>RWD</p>
                               <div class="progress" style=" margin: auto; width:100%;">
                                   <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70"
                                        aria-valuemin="0" aria-valuemax="100" style="width:70%">70%
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-8 col-sm-6 col-xs-6">
                               <figure>
                                   <img class="skillPhoto" src="img/rwd.png" alt="Don't work" width="150px" height="150px"/>
                               </figure>
                           </div>
                       </div>
                    </div>
                    <div id="skill7" class="skill col-md-6 col-sm-6 col-xs-12 one" >
                        <div class="skillCircle" id="circle7">
                            <div class="col-md-8 col-sm-6 col-xs-6">
                                <figure>
                                    <img class="skillPhoto" src="img/Bootstrap.png" alt="Don't work" width="150px" height="150px"/>
                                </figure>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-6 text-left" style="margin-top:20px;">
                                <p>Bootstrap</p>
                                <div class="progress" style=" margin: auto; width:100%;">
                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width:70%">70%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="skill8" class="skill col-md-6 col-sm-6 col-xs-12 two">
                        <div class="skillCircle" id="circle8">
                            <div class="col-md-4 col-sm-6 col-xs-6 text-right" style="margin-top:20px;">
                                <p>AngularJS</p>
                                <div class="progress" style=" margin: auto; width:100%;">
                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width:60%">60%
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-6 col-xs-6">
                                <figure>
                                    <img class="skillPhoto" src="img/AG.png" alt="Don't work" width="150px" height="150px"/>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div id="skill9" class=" skill col-md-6 col-sm-6 col-xs-12 one">
                        <div class="skillCircle" id="circle9">
                            <div class="col-md-8 col-sm-6 col-xs-6">
                                <figure>
                                    <img class="skillPhoto" src="img/php.png" alt="Don't work" width="150px" height="150px"/>
                                </figure>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 text-left" style="margin-top:20px;">
                                <p>PHP5</p>
                                <div class="progress" style=" margin: auto; width:100%;">
                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width:60%">60%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="skill10" class="skill col-md-6 col-sm-6 col-xs-12 two">
                       <div class="skillCircle" id="circle10">
                           <div class="col-md-4 col-sm-6 col-xs-6 text-right" style="margin-top:20px;">
                               <p>MySQL</p>
                               <div class="progress" style=" margin: auto; width:100%;">
                                   <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70"
                                        aria-valuemin="0" aria-valuemax="100" style="width:60%">60%
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-8 col-sm-6 col-xs-6">
                               <figure>
                                   <img class="skillPhoto" src="img/sql.png" alt="Don't work" width="150px" height="150px"/>
                               </figure>
                           </div>
                       </div>
                    </div>
                    <div id="skill11" class="skill col-md-6 col-sm-6 col-xs-12 one">
                        <div class="skillCircle" id="circle11">
                            <div class="col-md-8 col-sm-6 col-xs-6">
                                <figure>
                                    <img class="skillPhoto" src="img/sym.png" alt="Don't work" width="150px" height="150px"/>
                                </figure>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 text-left" style="margin-top:20px;">
                                <p>Symfony2</p>
                                <div class="progress" style=" margin: auto; width:100%;">
                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width:50%">50%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="skill12" class="skill col-md-6 col-sm-6 col-xs-12 two">
                        <div class="skillCircle" id="circle12">
                            <div class="col-md-4 col-sm-6 col-xs-6 text-right" style="margin-top:20px;">
                                <p>GIT</p>
                                <div class="progress" style=" margin: auto; width:100%;">
                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width:60%">60%
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-6 col-xs-6">
                                <figure>
                                    <img class="skillPhoto" src="img/git.png" alt="Don't work" width="150px" height="150px"/>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="projects col-md-12 col-sm-12 col-xs-12" style="margin-top: 30px;">
                <div id="projects">
                    <div class="text-center" style="border-bottom: 4px solid black">
                        <p class="headingText">Projekty</p>
                    </div>
                        <div id="imgProject1" class="project col-md-6 col-sm-12 text-center">
                            <div class="hover" id="hover1">
                                <a href="http://sportlife.5v.pl/" >
                                    <div class="show row" >
                                        <span id="globe2" class="glyphicon glyphicon-globe"></span>
                                    </div>
                                </a>
                                <a href="">
                                    <div class="show" ng-click="addLike(1)">
                                        <span class="glyphicon glyphicon-ok" ></span>
                                    </div>
                                </a>
                                <div class="show">
                                    <label style="font-size: 20px; color: white">{{likes1}}</label>
                                </div>
                            </div>
                        </div>
                    <div id="infoBmi" class="info">
                        <h1>SportLife</h1>
                             </div>
                        <div id="imgProject2" class="project col-md-6 col-sm-12 text-center">
                            <div class="hover" id="hover2">
                                <a href="http://shopbox.5v.pl/" >
                                    <div class="show">
                                        <span id="globe" class="glyphicon glyphicon-globe"></span>
                                    </div>
                                </a>
                                <a href="">
                                    <div class="show" ng-click="addLike(2)">
                                        <span class="glyphicon glyphicon-ok"></span>
                                    </div>
                                </a>
                                <div class="show">
                                    <label style="font-size: 20px; color:white" >{{likes2}}</label>
                                </div>
                            </div>
                        </div>
                    <div id="infoShop" class="info">
                        <h1>ShopBox</h1>
                        <p class="infoP">Aplikacja internetowa stanowiąca imitację sklepu internetowego. Cele utworzenia było uzyskanie funkcjonalnosći zbliżonej do zwykłego sklepu internetowego.</p>
                        <p class="infoP">Użyte technologie: HTML, CSS, Sass, PHP, JavaScript, AngularJS, RWD, BootStrap</p>
                    </div>
					 <div id="imgProject3" class="project col-md-6 col-sm-12 text-center">
                            <div class="hover" id="hover3">
                                <a href="#" >
                                    <div class="show">
                                        <span id="globe" class="glyphicon glyphicon-globe"></span>
                                    </div>
                                </a>
                                <a href="">
                                    <div class="show" ng-click="addLike(3)">
                                        <span class="glyphicon glyphicon-ok"></span>
                                    </div>
                                </a>
                                <div class="show">
                                    <label style="font-size: 20px; color:white" >{{likes3}}</label>
                                </div>
                            </div>
                        </div>
                    <div id="infoForum" class="info">
                        <h1>Forum</h1>
                        <p class="infoP">Aplikacja internetowa działająca jako forum dyskusyjne. Użytkownik ma możliwość zakładania tematów rozmów oraz porozumiewanai sie z innymi użytkownikami w celu rozwiązania problemu.</p>
                        <p class="infoP">Użyte technologie: HTML, CSS, SCSS, PHP, JavaScript, RWD, BootStrap, całość napisana we frameworku Symfony2</p>
                    </div>
    </div>

            </div>
            <div class="contacts text-center col-md-12 col-sm-12 col-xs-12">
                <div class="text-center" style="border-bottom: 4px solid black">
                    <p class="headingText">Kontakt</p>
                </div>
                <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <div class="col-md-4 col-sm-2">
                                <label>Subject:</label>
                            </div>
                            <div class="col-md-8 col-sm-10">
                                <input name="subject" type="text" class="form-control" placeholder="Subject" ng-model="newMessage.subject"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 col-sm-2">
                                <label>Email:</label>
                            </div>
                            <div class="col-md-8 col-sm-10">
                                <input name="email" type="text" class="form-control" placeholder="Email" ng-model="newMessage.email"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 col-sm-2">
                                <label>Message:</label>
                            </div>
                            <div class="col-md-8 col-sm-10">
                                <textarea name="message" class="form-control" placeholder="Message"  ng-model="newMessage.message"></textarea>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-info" type="button" ng-click="addMessage(newMessage)">Send</button>
                        </div>
                    </form>
                    <div class="well" ng-show="addMessage">
                        <p style="font-size: 20px;" class="bg-success">{{addMessage}}</p>
                    </div>
                </div>
            </div>
        <div class="footer col-md-12 col-sm-12 col-xs-12">
            <div class="text-center copyright" style="position:relative; color:black;  top:40px; margin-top:30px;">Copyright <span class="glyphicon glyphicon-copyright-mark"></span> 2017 Wszelkie prawa zastrzeżone</div>
            <div class="pull-right">
                <a href="https://www.facebook.com/adr.ian.395017"><span id="facebook" style="margin-left: 10px;"> <img src="img/face2.png" alt="doesn't work" width="40px"/></span></a>
                <a href=""><span id="twitter" style="margin-left: 10px;"><img src="img/twit2.png" alt="doesn't work" width="40px"/></span></a>
                <a href=""><span id="instagram" style="margin-left: 10px;"><img src="img/insta.png" alt="doesn't work" width="40px"/></span></a>
            </div>
            <div class="pull-left contactInfo text-left" style="position:absolute; bottom: 0; color: white;">
                <p class="footP">Kontakt:</p>
                <p class="footP">Adrian.ca1971@gmail.com</p>
                <p class="footP">tel.609-207-923</p>
            </div>
        </div>
    </div>
	

    <script>

        document.getElementById('imgProject1').addEventListener('mouseover',function () {
            document.getElementById('hover1').style.display='block';
        });
        document.getElementById('imgProject1').addEventListener('mouseleave',function () {
            document.getElementById('hover1').style.display='none';
        });
        document.getElementById('imgProject2').addEventListener('mouseover',function () {
            document.getElementById('hover2').style.display='block';
        });
        document.getElementById('imgProject2').addEventListener('mouseleave',function () {
            document.getElementById('hover2').style.display='none';
        });
        document.getElementById('imgProject3').addEventListener('mouseover',function () {
            document.getElementById('hover3').style.display='block';
        });
        document.getElementById('imgProject3').addEventListener('mouseleave',function () {
            document.getElementById('hover3').style.display='none';
        });
    </script>
    </body>
</html>
