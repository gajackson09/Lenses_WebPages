<?php
include("database.php");

function validate(){
    $status = false;
    if(isset($_POST["username"]) and isset($_POST["password"])){
        $status = true;
    }
    return $status;
}
//sets username and password as nonspecial chararcters
function security_sanitize(){
    $result = [
        "username" => null,
        "password" => null
    ];
    if(validate()){
        $result["username"] = htmlspecialchars($_POST["username"]);
        $result["password"] = htmlspecialchars($_POST["password"]);
    }
}
//connect ot database and set cookie to loggedin
function login(){
    $status = false;
    $result = security_sanitize();
    database_connect();
    $status=data_verify($result["username"], $result["password"]);
    database_close();
    if($status){
        setcookie("login", "yes");
    }
}
//checks for cookie
function loggedin(){
    return isset($_COOKIE["login"]);
}
//removes cookie
function logout(){
    setcookie("login", "yes", time()-10);
}

//checks if user exists and adds user
function addUser(){
    $result = security_sanitize();
    database_connect();
    if(!data_verify($result["username"], $result["password"])){
        data_addUser($result["username"], $result["password"]);
    }
    database_close();
}

function deleteUser(){
    $results = security_sanitize();
    database_connect();
    data_deleteUser($results["username"], $results["password"]);
}

?>