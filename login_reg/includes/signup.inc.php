<?php

if (issest($_POST['signup-button'])){

    require_once 'dbh.inc.php';

    $username = $_POST['userID'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $confirmPWD = $_POST['pwd-confirm'];

    if (empty($username) || empty($email) || empty($password) || empty($confirmPWD)){
        header("Location: ../signup.php");
        exit();
    }
} 

//?error=emptyfields&userID=".$username."&mail=".$email