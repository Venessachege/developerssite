<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "webproject");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
 //Escape user inputs for security
$first_name = $mysqli->real_escape_string($_REQUEST['first_name']);
$last_name = $mysqli->real_escape_string($_REQUEST['last_name']);
$email = $mysqli->real_escape_string($_REQUEST['email']);
$location = $mysqli->real_escape_string($_REQUEST['location']);
$languages = $mysqli->real_escape_string($_REQUEST['languages']);
$skill = $mysqli->real_escape_string($_REQUEST['skill']);
$password= $mysqli->real_escape_string($_REQUEST['password']);

$confirmpassword = $mysqli->real_escape_string($_REQUEST['confirmpassword']);

// //validate password
 $hashedpassword=password_hash($password,PASSWORD_BCRYPT);
        $date=mysqli_real_escape_string($mysqli, trim('now()'));
       if($password!=$confirmpassword)
       {
            echo "password not Matched";
        }

	$sql="select * from developers where (email='$email');";
       $res=mysqli_query($mysqli,$sql);
      if (mysqli_num_rows($res) > 0) {
      // output data of each row
      $row = mysqli_fetch_assoc($res);
       
   if($email==$row['email'])
      {
          echo "Email already exists";
      }
     else{
         echo "alright";
     }
	}

 
// // attempt insert query execution
else {
	$sql = "INSERT INTO developers (first_name,last_name,email,location,languages,skill,password) VALUES ('$first_name','$last_name','$email','$location','$languages','$skill','$hashedpassword')";
 if($mysqli->query($sql) === true){
   echo "Records inserted successfully.";
 } else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
}
?>



 