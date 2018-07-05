<?php
    session_start();

    $applicantEmail = $_SESSION['userEmail'];
    $response="";
    
    $posterId = (int) filter_var(($_POST['poster']), FILTER_SANITIZE_NUMBER_INT);

//Fetch email address
    $mysqli = new mysqli("localhost", "root", "", "webproject");

    // Check connection
    if($mysqli === false){
        die("ERROR: Could not connect. " . $mysqli->connect_error);
    }
    $query = "SELECT email,first_name from developers WHERE ID='$posterId';";
    $result = $mysqli->query($query);
    $row = mysqli_fetch_assoc($result);
    $posterEmail = $row['email'];
    $posterName = $row['first_name'];

//Send the email
    require_once('sendemail.php');
    
    $message = "Hello ".$posterName.", 
                There is a new applicant for a job you posted on our forum.
                You can contact them at ".$posterEmail." 
                Thank you for using our services.";

    $mail-> setFrom('noreply@outsource.com', 'OUTSOURCE');
    $mail->addAddress($posterEmail);
    $mail->Subject = "NEW APPLICANT";
    $mail->Body = $message;

    if($mail->send()){
        $response = "Application sent";
    }else{
        $response = "There is an issue, try again later";
    }
    echo $response;
    
?>