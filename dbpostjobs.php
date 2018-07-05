<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "webproject");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
 //Escape user inputs for security
$jobtitle = $mysqli->real_escape_string($_REQUEST['jobtitle']);
$description = $mysqli->real_escape_string($_REQUEST['description']);
$minimumsalary = $mysqli->real_escape_string($_REQUEST['minimumsalary']);
$maximumsalary = $mysqli->real_escape_string($_REQUEST['maximumsalary']);
$experience = $mysqli->real_escape_string($_REQUEST['experience']);
$qualification = $mysqli->real_escape_string($_REQUEST['qualification']);


	$sql = "INSERT INTO jobs (jobtitle,description,minimumsalary,maximumsalary,experience,qualification) VALUES ('$jobtitle','$description','$minimumsalary','$maximumsalary','$experience','$qualification')";
 if($mysqli->query($sql) === true){
   echo "Records inserted successfully.";
 } else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

?>



 