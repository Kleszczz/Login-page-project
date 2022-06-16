<?php

if(isset($_POST["button"])) 
{  
    $username = $_POST["username"];
    $userpw = $_POST["userpw"];

    require_once 'databaseholder.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputLogin($username, $userpw) !== false)
    {
        header("location: login.php?error=EmptyInput");
        exit();
    }

    LoginUser($conn, $username, $userpw);
}
else
{
    header("location: login.php");
    exit();
}