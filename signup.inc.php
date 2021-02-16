<?php

if (isset($_POST["button"])) 
{
    
    $username = $_POST["username"];
    $Email = $_POST["Email"];
    $userpw1 = $_POST["userpw1"];
    $userpw2 = $_POST["userpw2"];

    require_once 'databaseholder.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($username, $Email, $userpw1, $userpw2) !== false)
    {
        header("location: ../index.php?error=EmptyInput");
        exit();
    }

    if(invalidUsername($username) !== false)
    {
        header("location: ../index.php?error=InvalidUsername");
        exit();
    }

    if(invalidEmail($Email) !== false)
    {
        header("location: ../index.php?error=InvalidEmail");
        exit();
    }

    if(PasswordMatch($userpw1, $userpw2) !== false)
    {
        header("location: ../index.php?error=PasswordNotMatch");
        exit();
    }    

    if(UsernameExists($conn, $username, $Email) !== false)
    {
        header("location: ../index.php?error=UsernameTaken");
        exit();
    }    

    createUser($conn, $username, $Email, $userpw1);

}
else{
    header("location: ../index.php");
    exit();
}