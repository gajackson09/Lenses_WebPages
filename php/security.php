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
        "password" => null, 
        "firstname" => null,
        "lastname" => null
    ];
    if(validate()){
        $result["username"] = htmlspecialchars($_POST["username"]);
        $result["password"] = htmlspecialchars($_POST["password"]);
        $result["firstname"] = htmlspecialchars($_POST["firstname"]);
        $result["lastname"] = htmlspecialchars($_POST["lastname"]);
    }
}
//connect ot database and set cookie to loggedin
function login(){
    $status = false;
    $result = security_sanitize();
    databaseConnect();
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
    databaseConnect();
    if(!data_verify($result["username"], $result["password"])){ //if user doesnt exist, add to db
        data_addUser($result["username"], $result["password"], $result["firstName"], $result["lastName"]);
    }
    database_close();
}

function deleteUser(){
    $results = security_sanitize();
    databaseConnect();
    data_deleteUser($results["username"], $results["password"]);
}

?>