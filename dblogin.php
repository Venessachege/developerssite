<?php
    session_start();
    if (isset($_POST["loginuser"])) {
        include_once 'connection.php';
        
    if (array_key_exists("loginuser",$_POST)  AND isset($_POST['loginuser'])) {
            $email = $mysqli->real_escape_string($_POST['email']);
            $password = $mysqli->real_escape_string($_POST['password']);

            $query="SELECT * FROM developers where `email` ='$email';";
            $result = $mysqli->query($query) OR die($mysqli->error);
            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                $pass = $row['password'];
                $match = password_verify($password,$pass);
                if($match){
                    $_SESSION['id'] = $row['ID'];
                    $_SESSION['userEmail'] = $row['email'];
                    $_SESSION['loggedIn'] = true;
                    
                    header('Location: dashboard.php');
                }
                else{
                    echo "Passwords do not match";
                }
            }
        }
    }
?>