<!DOCTYPE html>

<html>

  <head>
   
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Source+Code+Pro:700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cormorant+Unicase" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Fredoka+One" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <script src="jquery-3.3.1.js" charset="utf-8"></script>
  <script src="scripts.js" charset="utf-8"></script>
  <link href="bootstrap.css" rel="stylesheet" type="text/css">
      <style>
          html,body{
              overflow: hidden;
          }
      
      </style>


 
 <link rel="stylesheet" href="styles.css">
   
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
          <li><a href="postjobs.php">ContactUs</a></li>
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
          <li class="active"><a href="#">Hiring?</a></li>

        </ul>
      </div>

    </nav>
	
      <p style="color:white;position:relative;left:67%;top:50px;font-size:20px;font-weight:700">Developer SignUp</p>
  
    <div class="row" style="margin-top:50px;">
        
      <div class="col-md-6" style="width:50%; padding:0;">
    
        <img src="images/signupimage.jpeg" alt="" style="float:right;">
     
      </div>

     
      <div class="col-md-6" style="padding:10px 10px 10px 35px;width:500px;">

      
        <form action="dbConfig.php" method="post" class="sign">
            
          <div class="row">
            <div class="col">
                        
              <input type="text" class="form-control" placeholder="First name" name="first_name" required="required" size="35"><br>
              
            </div>
              
            <div class="col">
              <input type="text" class="form-control" placeholder="Last name" name="last_name"  required="required"><br>
           </div>
             
            <div class="col">
              <input type="email" class="form-control" placeholder="Email" name="email"  required="required"><br>
            </div>
                      
            <div class="col">
              <input type="text" class="form-control" placeholder="Location" name="location"  required="required"><br>
            </div>
              
            <div class="col">
              <select class="form-control" name="languages"  required="required">
                <option value="">Choose your languages</option>
                <option value="Java">Java</option>
                <option value="C">C</option>
                <option value="c#">c#</option>
                <option value="python">Python</option>
                <option value="Ruby">Ruby</option>
                <option value="c++">c++</option>
                <option value="PHP">PHP</option>
                <option value="Javascript">javascript</option>
                <option value="perl">Perl</option>
                <option value="shell">Shell</option>
                <option value="swift">Swift</option>
              </select><br>
            </div>

            <div class="col">
              <select class="form-control" name="skill"  required="required">
                <option value="">Choose your skill level</option>
                <option value="Beginner">Beginner</option>
                <option value="Intermediate">Intermediate</option>
                <option value="Proficient">Proficient</option>
              </select><br>
            </div>

            <div class="col">
              <input type="password" class="form-control" placeholder="Enter your password" name="password" id="password"  required="required"><br>
            </div>

            <div class="col">
              <input type="password" class="form-control" placeholder="Confirm password" name="confirmpassword" id="confirmpassword"  required="required"> <span id="message" style="z-index:0;"></span><br>
            </div>
              <div class="row" style="padding:0 0 0 200px">
            <button type="submit" value="submit" name="save"  class="btn btn-success" id="submit">SignUp</button>
              </div>
          </div>
        </form>

       </div>
    </div>

   </div>


  </body>
</html>
