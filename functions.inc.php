<?php

function emptyInputSignup($username, $Email, $userpw1, $userpw2)
{
  $result;
  if(empty($username) || empty($Email) || empty($userpw1) || empty($userpw2))
  {
      $result=true;
  }
  else
  {
      $result=false;
  }
  return $result;
}

function invalidUsername($username)
{
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username))
    {
        $result=true;
    }
    else
    {
        $result=false;
    }
    return $result;
}

function invalidEmail($Email)
{
 $result;
  if(!filter_var($Email, FILTER_VALIDATE_EMAIL))
  {
      $result=true;
  }
  else
  {
      $result=false;
  }
  return $result;
}

function PasswordMatch($userpw1, $userpw2)
{
$result;
  if($userpw1 !== $userpw2)
  {
      $result=true;
  }
  else
  {
      $result=false;
  }
  return $result;
}

function UsernameExists($conn, $username, $Email)
{
    $sql = "SELECT * FROM users WHERE usersName = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("location: ../index.php?error=htmlfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,  "ss",$username, $Email);
    mysqli_stmt_execute($stmt);

    $resultdata = mysqli_stmt_get_result($stmt);
    
    if($row = mysqli_fetch_assoc($resultdata))
    {
        return $row;
    }
    else
    {
        $result= false;
        return $result;
    }
    mysqli_stmt_close($stmt);

}

function createUser($conn, $username, $Email, $userpw1)
{
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?) ;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("location: ../index.php?error=htmlfailed");
        exit();
    }

    $hashedPwd = password_hash($userpw1, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $username, $Email, $userpw1, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../index.php?error=none");
    exit();
}

function emptyInputLogin($username, $userpw)
{
    $result;
    if(empty($username) || empty($userpw))
    {
        $result=true;
    }
    else
    {
        $result=false;
    }
    return $result;
}

function LoginUser($conn, $username, $userpw)
{
    $uidExists = UsernameExists($conn, $username, $username);

    if($uidExists == false)
    {
        header("location: login.php?error=WrongLogin");
        exit(); 
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($userpw, $pwdHashed);

    if($checkPwd == false)
    {
        header("location: login.php?error=WrongPassword");
        exit(); 
    }
    else if($checkPwd == true)
    {
        session_start();
        $_SESSION["Userid"] = $uidExists["usersId"];
        $_SESSION["Username"] = $uidExists["usersName"];
        header("location: ../index.php?error=Success");
        exit(); 
    }

    mysqli_stmt_bind_param($stmt, "ss",$username, $Email);
    mysqli_stmt_execute($stmt);

    $resultdata = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultdata))
    {
        return $row;
    }
    else
    {
        $result= false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}