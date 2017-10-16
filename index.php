<!doctype html>
<html ng-app="app">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Chewy|Nosifer" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Ribeye+Marrow" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Stalinist+One" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/angular.js"></script>
        <script src="js/script.js"></script>
        <script src="js/controller.js"></script>
    </head>
    <body onscroll="scrolling()" onload="getLikes()" ng-controller="baseCtrl" ng-init="getLikes()">
    <div class="navigationContainer">
        <div class="navigationMobile" style="position:fixed;">
            <div class="navigationAlt">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a href="#" onclick="goToHome()">Home</a></li>
                    <li class="nav-item"><a href="#" onclick="goToAbout()">About</a></li>
                    <li class="nav-item"><a href="#" onclick="goToSkills()">Skills</a></li>
                    <li class="nav-item"><a href="#" onclick="goToProjects()">Projects</a></li>
                    <li class="nav-item"><a href="#" onclick="goToContacts()">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="banner">
        <span class="bannerText text-center">Junior Front-End Developer</span>
        <img src="img/banner3.jpg" width="100%"/>
    </div>
    <nav>
        <button id="mobile" style="position:fixed; top:0; right: 0; z-index: 6;" class="btn btn-default pull-right" onclick="showMobileMenu()"><span class="glyphicon glyphicon-menu-hamburger"></span></button>
        <div id="navigation">
            <div id="navbar" class="nav">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a href="#" onclick="goToHome()">Home</a></li>
                    <li class="nav-item"><a href="#" onclick="goToAbout()">About</a></li>
                    <li class="nav-item"><a href="#" onclick="goToSkills()">Skills</a></li>
                    <li class="nav-item"><a href="#" onclick="goToProjects()">Projects</a></li>
                    <li class="nav-item"><a href="#" onclick="goToContacts()">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="containerWrap">
        <div class="wrapper">
            <div class="about col-md-12 col-xs-12 col-sm-12">
                <div class="text-center" style="border-bottom: 4px solid black">
                    <p id="heading1" class="headingText">About me</p>
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="">
                            <div class="myPanel">
                                <p class="text-justify">Witam! Mam na imię Adrian i interesuje się programowaniem od ponad roku. Naukę programowania rozpocząłem
                                    jeszcze na studia uświadamiając sobie, iż tą drogą chcę podążać na mojej dalszej ścieżce kariery zawodowej.
                                    Nie mam zbyt dużego doświadczenia komercyjnego, mam na koncie jedynie jeden projekt komercyjny oraz 3 własne
                                    projekty. Pragnę się rozwijać oraz zdobywać nową więdzę. Jestem skrupulatny, głodny wiedzy oraz skory do nauki nowych technologii.
                                    Poznawanie nowych trendów nie jest dla mnie problemem gdyż z dużą łatwością przychodzi mi nauka.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="informations" class="col-md-4 col-sm-4 col-xs-12 ">
                        <div class="download text-center">
                            <a href="download.php" ><div id="container" align="center">
                                <button class="big-button">
                                    Download CV
                                </button>
                            </div></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="skills col-md-12 col-sm-12">
                <br/><br/><br/>
                <div class="text-center" style="border-bottom: 4px solid black">
                    <p class="headingText">Skills</p>
                </div>
                <br/>
                <div class="">
                    <div class="skill col-md-3 col-sm-4 text-center ">
                        <figure>
                            <img src="img/html.png" alt="Don't work" width="150px" height="150px"/>
                        </figure>
                        <div class="progress" style=" margin: auto; width:60%;">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                 aria-valuemin="0" aria-valuemax="100" style="width:80%">
                            </div>
                        </div>
                    </div>
                    <div class="skill col-md-3 col-sm-4 text-center">
                        <figure>
                            <img src="img/css.png" alt="Don't work" width="100px" height="150px"/>
                        </figure>
                        <div class="progress" style=" margin: auto; width:60%;">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                 aria-valuemin="0" aria-valuemax="100" style="width:80%">
                            </div>
                        </div>
                    </div>
                    <div class="skill col-md-3 col-sm-4 text-center ">
                        <figure>
                            <img src="img/css-pre.png" alt="Don't work" width="150px" height="150px"/>
                        </figure>
                        <div class="progress" style=" margin: auto; width:60%;">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                 aria-valuemin="0" aria-valuemax="100" style="width:60%">
                            </div>
                        </div>
                    </div>
                    <div class="skill col-md-3 col-sm-4 text-center ">
                        <figure>
                            <img src="img/js.png" alt="Don't work" width="150px" height="150px"/>
                        </figure>
                        <div class="progress" style=" margin: auto; width:60%;">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                 aria-valuemin="0" aria-valuemax="100" style="width:70%">
                            </div>
                        </div>
                    </div>
                    <div class="skill col-md-3 col-sm-4 text-center ">
                        <figure>
                            <img src="img/jquery.png" alt="Don't work" width="150px" height="150px"/>
                        </figure>
                        <div class="progress" style=" margin: auto; width:60%;">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                 aria-valuemin="0" aria-valuemax="100" style="width:70%">
                            </div>
                        </div>
                    </div>
                    <div class="skill col-md-3 col-sm-4 text-center">
                        <figure>
                            <img src="img/rwd.png" alt="Don't work" width="150px" height="150px"/>
                        </figure>
                        <div class="progress" style=" margin: auto; width:60%;">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                 aria-valuemin="0" aria-valuemax="100" style="width:70%">
                            </div>
                        </div>
                    </div>
                    <div class="skill col-md-3 col-sm-4 text-center">
                        <figure>
                            <img src="img/Bootstrap.png" alt="Don't work" width="150px" height="150px"/>
                        </figure>
                        <div class="progress" style=" margin: auto; width:60%;">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                 aria-valuemin="0" aria-valuemax="100" style="width:70%">
                            </div>
                        </div>
                    </div>
                    <div class="skill col-md-3 col-sm-4 text-center">
                        <figure>
                            <img src="img/AG.png" alt="Don't work" width="150px" height="150px"/>
                        </figure>
                        <div class="progress" style=" margin: auto; width:60%;">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                 aria-valuemin="0" aria-valuemax="100" style="width:60%">
                            </div>
                        </div>
                    </div>
                    <div class=" skill col-md-3 col-sm-4 text-center">
                        <figure>
                            <img src="img/php.png" alt="Don't work" width="150px" height="150px"/>
                        </figure>
                        <div class="progress" style=" margin: auto; width:60%;">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                 aria-valuemin="0" aria-valuemax="100" style="width:60%">
                            </div>
                        </div>
                    </div>
                    <div class="skill col-md-3 col-sm-4 text-center ">
                        <figure>
                            <img src="img/sql.png" alt="Don't work" width="150px" height="150px"/>
                        </figure>
                        <div class="progress" style=" margin: auto; width:60%;">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                 aria-valuemin="0" aria-valuemax="100" style="width:60%">
                            </div>
                        </div>
                    </div>
                    <div class="skill col-md-3 col-sm-4 text-center">
                        <figure>
                            <img src="img/sym.png" alt="Don't work" width="150px" height="150px"/>
                        </figure>
                        <div class="progress" style=" margin: auto; width:60%;">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                 aria-valuemin="0" aria-valuemax="100" style="width:40%">
                            </div>
                        </div>
                    </div>
                    <div class="skill col-md-3 col-sm-4 text-center">
                        <figure>
                            <img src="img/git.png" alt="Don't work" width="150px" height="150px"/>
                        </figure>
                        <div class="progress" style=" margin: auto; width:60%;">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                 aria-valuemin="0" aria-valuemax="100" style="width:60%">
                            </div>
                        </div>
                    </div>
                </div>
                <br/><br/><br/>
            </div>

            <div class="projects col-md-12 col-sm-12" style="margin-top: 30px;">
                <div id="projects">
                    <div class="text-center row" style="border-bottom: 4px solid black">
                        <p class="headingText">Projects</p>
                    </div>
                    <br/>
                    <div class="row">
                        <div id="imgProject1" class="project col-md-6 col-sm-12 text-center">
                            <div class="hover" id="hover1">
                                <a href="" >
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
                        <div  id="imgProject2" class="project col-md-6 col-sm-12 text-center">
                            <div class="hover" id="hover2">
                                <a href="" >
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
                    </div>

                </div>

            </div>
            <div class="contacts text-center col-md-12 col-sm-12">
                <br/>
                <div class="text-center" style="border-bottom: 4px solid black">
                    <br/><br/><br/>
                    <p class="headingText">Contact</p>
                </div>
                <br/>
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
                                <textarea name="message" class="form-control" placeholder="Subject"  ng-model="newMessage.message"></textarea>
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
        </div>

        <div class="footer col-md-12 col-sm-12 col-xs-12">
            <div class="text-center copyright" style="color:black;  top:10px; margin-top:30px;">Copyright by Adrian Ciejka <span class="glyphicon glyphicon-copyright-mark"></span></div>
            <div class="pull-right">
                <span id="facebook" style="margin-left: 10px;"> <img src="img/face2.png" alt="doesn't work" width="40px"/></span>
                <span id="twitter" style="margin-left: 10px;"><img src="img/twit2.png" alt="doesn't work" width="40px"/></span>
                <span id="instagram" style="margin-left: 10px;"><img src="img/insta.png" alt="doesn't work" width="40px"/></span>
            </div>
            <div class="pull-left contactInfo" style="font-size: 14px; position:absolute;bottom: 0; color: white;">
                <p>Contact:</p>
                <p>Adrian.ca1971@gmail.com</p>
                <p>tel.609-207-923</p>
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
    </script>
    </body>
</html>
