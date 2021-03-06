﻿<!DOCTYPE html>
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
  <title></title>
</head>



<body id="index-body">
  <div class="container-fluid">
    <div class="ibody"></div>

    <nav class="navbar navbar-inverse sticky-top" style="width:100%" id="main-nav">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Outsource</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#"></a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#"></a></li>
          <li><a href="#intouch">ContactUs</a></li>
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
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>

          <li>
              <a id="login-trigger" href="#">Login</a>
                  <div id="login-content">
                    <form action="dblogin.php" method="POST">
                      <fieldset id="inputs">
                          <input id="username" type="email" name="email" placeholder="Your email address" required>
                          <input id="passwordLogin" type="password" name="password" placeholder="Password" required>
                      </fieldset>
                      <fieldset id="actions">
                          <input type="submit" id="submitLogin" value="Log in" name="loginuser">
                      </fieldset>
                    </form>
                  </div>
            </li>
          <li><a href="signup.php">Register</a></li>
          <li><a href="hire.php">Hiring?</a></li>

        </ul>
      </div>

    </nav>
    <div class="centered">
      <h1 style="font-size:100px;font-weight:700">Welcome</h1>
      <p style="margin-left:50px;font-size:18px">The world's leading Outsourcing app.</p>
      <img src="images/thin-arrowheads-pointing-down (2).png" alt="" style="margin-left:200px;margin-top:100px" id="arrow">
    </div>
  </div>
    <div class="container">
      <div class="row" id="content">
          <p style=" margin-top:80px;margin-left:550px;color:green;font-size:20px;" class="fcontent">---Our Mission--- </P>
            <p class="fcontent" style=" margin-top:10px;margin-left:500px"><em>"Dedicated to creating a global village"</em></p>
          <p class="fcontent" id="about" style=" margin-top:40px;margin-left:570px;color:green;font-size:20px;">ABOUT</P>
            <p class="fcontent"  style="margin-left:100px;margin-top:50px;">Outsourcers is a world class app that strives to connect millions of developers to employers
              who offer world class jobs with good remuneration.By signing up to our app you are guaranteed exposure to thousands of employers all over the globe.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
    <div class="container">
      <div class="row">
        <h2 class="fcontent" style="margin-left:500px;color:green;margin-top:80px;">Testimonials</h2>
      </div>
      <div class="row">
        <div class="col-md-4">
           <img src="images/testimonial.jpeg" alt="Avatar" style="width:225px;margin-left:90px;" class="testimonial">
           <p class="fcontent" style="margin-left:100px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-4">
          <img src="images/testimonial1.jpeg" alt="Avatar" style="width:200px;margin-left:90px;" class="testimonial">
        <p class="fcontent" style="margin-left:100px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-4">
          <img src="images/testimonial1.jpeg" alt="Avatar" style="width:200px;margin-left:90px;" class="testimonial">

            <p class="fcontent" style="margin-left:100px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
	  <div>
        
   <div class="row">
   <div class="col-md-12">
       <footer>
           <p style="margin-left:450px">Copyright © 2018</p>
	
       
       </footer>
       </div>
  </div>
        </div>
</div>
  
</body>

</html>
