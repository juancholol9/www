<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat){
    $result = false;
    if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function invalidUid($username){
    $result = false;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result = false;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat){
    $result = false;
    if($pwd !== $pwdRepeat){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function uidExists($con, $username, $email){

    $sql = "SELECT * FROM usuario WHERE usuarioUid = ? OR usuarioEmail = ?;";
    $stmt = mysqli_stmt_init($con);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location:../signup.php?error=stmsfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($con, $name, $email, $username, $pwd){
    $sql = "INSERT INTO usuario (usuarioNombre, usuarioEmail, usuarioUid, usuarioPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($con);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location:../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../signup.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd){
    $result = false;
    if(empty($username) || empty($pwd)) {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function loginUser($con, $username, $pwd){

    $uidExists = uidExists($con, $username, $username);

    if($uidExists === false){
        header("location: ../login.php?eror=wronglogin1");
        exit();
    }

    $pwdHashed = $uidExists["usuarioPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }else if($checkPwd === true){
        session_start();
        $_SESSION["usuarioId"] = $uidExists["usuarioId"];
        $_SESSION["usuarioUid"] = $uidExists["usuarioUid"];
        header("location: ../inventario.php");
        exit();
    }
}