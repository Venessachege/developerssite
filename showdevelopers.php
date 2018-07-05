<!DOCTYPE html>
<html>
<title></title>
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
      
  </head>

  <body >
  

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

          
              
              
          <li><a href="signup.php">Register</a></li>
          <li class="active"><a href="#">Hiring?</a></li>

        </ul>
      </div>

    </nav>
      <?php
        require_once('connection.php');


        //get results from database
            if(isset($_GET['lang'])){
                $language = urlencode($_GET['lang']);

                $result =$mysqli->query("SELECT first_name,last_name,email,location,languages,skill FROM developers WHERE languages = '$language';") OR die($mysqli->error);
                $all_property = array();  //declare an array for saving property

                //showing property
                
                echo '<table class="data-table table table-stripped ">
                        <thead class="data-heading">';  //initialize table tag
                while ($property = mysqli_fetch_field($result)) {
                    echo '<td> ' . $property->name . '</td>';  //get field name for header
                    array_push($all_property, $property->name);  //save those to array
                }
                echo '</thead>';
                //showing all data
                echo '<tbody>';
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    foreach ($all_property as $item) {
                        echo '<td>' . $row[$item] . '</td>'; //get items using property value
                    }
                    echo '</tr>';
                }
                echo '</tbody>';
                echo "</table>";
            }

        ?>
      
      </div>
      <script>
          
      </script>
</body>

</html>
      
	