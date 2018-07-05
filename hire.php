<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Source+Code+Pro:700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Cormorant+Unicase" rel="stylesheet">

      <link rel="stylesheet" href="styles.css">
      <script src="jquery-3.3.1.js" charset="utf-8"></script>
      <script src="scripts.js" charset="utf-8"></script>
      <link href="bootstrap.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
      
<!--      Cool buttons -->
      <link rel="stylesheet" type="text/css" href="cool-buttons/css/normalize.css" />
      <link rel="stylesheet" type="text/css" href="cool-buttons/css/main.css" />
      
      <title></title>
  </head>
  <body class="hirebody">
   <div class="container-fluid">
   

    <nav class="navbar navbar-inverse sticky-top" style="width:100%" id="main-nav">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Outsource</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="#"></a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#"></a></li>
          <li><a href="hire.html">ContactUs</a></li>
          <li><a href="#"></a></li>
          <li><a href="contactus.html"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>

          <li><a id="login-trigger" href="#">Login
          <div id="login-content">
                  <form action="dblogin.php" method="POST">
                      <fieldset id="inputs">
                          <input id="username" type="email" name="email" placeholder="Your email address" required>
                          <input id="password" type="password" name="password" placeholder="Password" required>
                      </fieldset>
                      <fieldset id="actions">
                          <input type="submit" id="submit" value="Log in" name="loginuser"></a></li>
          <li><a href="signup.php">Register</a></li>
          <li class="active"><a href="#">Hiring?</a></li>

        </ul>
      </div>

    </nav>
  <div class="container">
    <h1>Service box</h1>
    <div class="row">
        <div class="col-md-3 col-sm-6 ">
            <div class="service-box">
                <div class="service-icon yellow">
                    <div class="front-content">
                        <i class="fab fa-java" style="font-size:150px"></i>
                        
<!--                        <h3>JAVA</h3>-->
                        
                    </div>
                </div>
                <div class="service-content">
                    <h3>JAVA</h3>
                    <p>Design is mostly about the desire to help people.</p>
                   <section class="section">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
                            <defs>
                                <filter id="filter-goo-1">
                                    <feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
                                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                    <feComposite in="SourceGraphic" in2="goo" />
                                </filter>
                            </defs>
                        </svg>
                       <button id="component-1" class="button button--1" > <a href='showdevelopers.php?lang=java'>Java</a>
                            <span class="button__container">
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="button__bg"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                            </span>
                           
                        </button> 
                    </section>
<!--					<button class="btn btn-success"><a href='showdevelopers.php?lang=java'>Java Developers</a></button>-->
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 ">
            <div class="service-box">
                <div class="service-icon orange">
                    <div class="front-content">
                        <img src="images/c++%20icon.png" width="150px" height="150">
                       
                    </div>
                </div>
                <div class="service-content">
                    <h3>C++</h3>
                    <p>C++ is mostly about getting things done.  Working with databases and user input.</p>
                     <section class="section">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
                            <defs>
                                <filter id="filter-goo-1">
                                    <feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
                                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                    <feComposite in="SourceGraphic" in2="goo" />
                                </filter>
                            </defs>
                        </svg>
                        <a href='showdevelopers.php?lang=java'><button id="component-1" class="button button--1" >
                            C++
                            <span class="button__container">
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="button__bg"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                            </span>
                        </button></a> 
                    </section>
					<button><a href="showdevelopers.php?lang=c++">C++ Developers</a></button>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="service-box ">
                <div class="service-icon red">
                    <div class="front-content">
                        <img src="images/csharp.png" width="190px" height="190px">
                       
                    </div>
                </div>
                <div class="service-content">
                    <h3>C#</h3>
                    <p>C#  If a motrcylce were a website, , telling how much fuel you have etc.</p>
                     <section class="section">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
                            <defs>
                                <filter id="filter-goo-1">
                                    <feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
                                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                    <feComposite in="SourceGraphic" in2="goo" />
                                </filter>
                            </defs>
                        </svg>
                        <a href='showdevelopers.php?lang=java'><button id="component-1" class="button button--1" >
                            C#
                            <span class="button__container">
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="button__bg"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                            </span>
                        </button></a> 
                    </section>
					<button><a href='showdevelopers.php?lang=c%23'>C# Developers</a></button>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="service-box">
                <div class="service-icon grey">
                    <div class="front-content">
                        <i class="fab fa-js" style="font-size:150px"></i>
<!--                        <i class="fa fa-paper-plane-o"></i>-->
<!--                        <h3>javascript</h3>-->
                    </div>
                </div>
                <div class="service-content">
                    <h3>java scriptUser Experience</h3>
                    <p>UX = User Experience. If a website were a motorcycle, the UX would  seats tothe rider etc.</p>
                     <section class="section">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
                            <defs>
                                <filter id="filter-goo-1">
                                    <feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
                                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                    <feComposite in="SourceGraphic" in2="goo" />
                                </filter>
                            </defs>
                        </svg>
                        <a href='showdevelopers.php?lang=java'><button id="component-1" class="button button--1" >
                            Javascript
                            <span class="button__container">
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="button__bg"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                            </span>
                        </button></a> 
                    </section>
                </div>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-md-3 col-sm-6 ">
            <div class="service-box">
                <div class="service-icon yellow">
                    <div class="front-content">
                      
                        <i class="fab fa-php" style="font-size:150px"></i>
                    </div>
                </div>
                <div class="service-content">
                    <h3>PHP</h3>
                    <p>Design is mostly about the desire to help people.</p>
                     <section class="section">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
                            <defs>
                                <filter id="filter-goo-1">
                                    <feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
                                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                    <feComposite in="SourceGraphic" in2="goo" />
                                </filter>
                            </defs>
                        </svg>
                        <a href='showdevelopers.php?lang=java'><button id="component-1" class="button button--1" >
                       PHP
                            <span class="button__container">
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="button__bg"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                            </span>
                        </button></a> 
                    </section>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 ">
            <div class="service-box">
                <div class="service-icon orange">
                    <div class="front-content">
                       <img src="images/swift.png" width="150px" height="150px">
                       
                    </div>
                </div>
                <div class="service-content">
                    <h3>Swift Development</h3>
                    <p>Swift is mostly about getting things done.  Working with databases and user input.</p>
                     <section class="section">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
                            <defs>
                                <filter id="filter-goo-1">
                                    <feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
                                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                    <feComposite in="SourceGraphic" in2="goo" />
                                </filter>
                            </defs>
                        </svg>
                        <a href='showdevelopers.php?lang=java'><button id="component-1" class="button button--1" >
                            Swift
                            <span class="button__container">
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="button__bg"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                            </span>
                        </button></a> 
                    </section>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="service-box ">
                <div class="service-icon red">
                    <div class="front-content">
                    <img src="images/perl.png" width="200px" height="200px">
                       
                    </div>
                </div>
                <div class="service-content">
                    <h3>Perl Development</h3>
                    <p>Perl.  If a motrcylce were a website, U the throttle, shifting gears, telling how much fuel you have etc.</p>
                     <section class="section">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
                            <defs>
                                <filter id="filter-goo-1">
                                    <feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
                                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                    <feComposite in="SourceGraphic" in2="goo" />
                                </filter>
                            </defs>
                        </svg>
                        <a href='showdevelopers.php?lang=java'><button id="component-1" class="button button--1" >
                         Perl
                            <span class="button__container">
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="button__bg"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                            </span>
                        </button></a> 
                    </section>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="service-box">
                <div class="service-icon grey">
                    <div class="front-content">
                       <i class="fab fa-python" style="font-size:150px"></i>
                       
                    </div>
                </div>
                <div class="service-content">
                    <h3>Python</h3>
                    <p>Python . If a website were a motorcycle, the  that went through the seats tothe rider etc.</p>
                     <section class="section">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
                            <defs>
                                <filter id="filter-goo-1">
                                    <feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
                                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                    <feComposite in="SourceGraphic" in2="goo" />
                                </filter>
                            </defs>
                        </svg>
                        <a href='showdevelopers.php?lang=java'><button id="component-1" class="button button--1" >
                            Python
                            <span class="button__container">
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="button__bg"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                            </span>
                        </button></a> 
                    </section>
                </div>
            </div>

        </div>

    </div>
	<div class="row">
        <div class="col-md-3 col-sm-6 ">
            <div class="service-box">
                <div class="service-icon yellow">
                    <div class="front-content">
                       <img src="images/ruby1.png" width="150px" height="150px">
                    </div>
                </div>
                <div class="service-content">
                    <h3>Design</h3>
                    <p>Design is mostly about the desire to help people.</p>
                     <section class="section">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
                            <defs>
                                <filter id="filter-goo-1">
                                    <feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
                                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                    <feComposite in="SourceGraphic" in2="goo" />
                                </filter>
                            </defs>
                        </svg>
                        <a href='showdevelopers.php?lang=java'><button id="component-1" class="button button--1" >
                            Java
                            <span class="button__container">
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="button__bg"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                            </span>
                        </button></a> 
                    </section>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 ">
            <div class="service-box">
                <div class="service-icon orange">
                    <div class="front-content">
                        <i class="fa fa-anchor"></i>
                        <h3>PHP</h3>
                    </div>
                </div>
                <div class="service-content">
                    <h3>PHP Development</h3>
                    <p>PHP is mostly about getting things done.  Working with databases and user input.</p>
                     <section class="section">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
                            <defs>
                                <filter id="filter-goo-1">
                                    <feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
                                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                    <feComposite in="SourceGraphic" in2="goo" />
                                </filter>
                            </defs>
                        </svg>
                        <a href='showdevelopers.php?lang=java'><button id="component-1" class="button button--1" >
                            Java
                            <span class="button__container">
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="button__bg"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                            </span>
                        </button></a> 
                    </section>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="service-box ">
                <div class="service-icon red">
                    <div class="front-content">
                        <i class="fa fa-trophy"></i>
                        <h3>UI</h3>
                    </div>
                </div>
                <div class="service-content">
                    <h3>UI Development</h3>
                    <p>UI = User Interface.  If a motrcylce were a website, UI woul fuel you have etc.</p>
                     <section class="section">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
                            <defs>
                                <filter id="filter-goo-1">
                                    <feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
                                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                    <feComposite in="SourceGraphic" in2="goo" />
                                </filter>
                            </defs>
                        </svg>
                        <a href='showdevelopers.php?lang=java'><button id="component-1" class="button button--1" >
                            Java
                            <span class="button__container">
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="button__bg"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                            </span>
                        </button></a> 
                    </section>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="service-box">
                <div class="service-icon grey">
                    <div class="front-content">
                        <i class="fa fa-paper-plane-o"></i>
                        <h3>UX</h3>
                    </div>
                </div>
                <div class="service-content">
                    <h3>java scriptUser Experience</h3>
                    <p>UX = User Experience. If a website were a motorcycle, that went through the seats tothe rider etc.</p>
                     <section class="section">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
                            <defs>
                                <filter id="filter-goo-1">
                                    <feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
                                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                    <feComposite in="SourceGraphic" in2="goo" />
                                </filter>
                            </defs>
                        </svg>
                        <a href='showdevelopers.php?lang=java'><button id="component-1" class="button button--1" >
                            Java
                            <span class="button__container">
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="circle top-left"></span>
                                <span class="button__bg"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                                <span class="circle bottom-right"></span>
                            </span>
                        </button></a> 
                    </section>
                </div>
            </div>
</div>

</div>
      
<!--   Cool buttons scripts-->
      <script src="cool-buttons/js/TweenMax.min.js"></script>
      <script src="cool-buttons/js/main.js"></script>

  </body>
</html>
