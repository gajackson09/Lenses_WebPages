<?php
include ("security.php");

if(loggedin()){
    header("Location: ../discoverPageLoginedIn.html");
}else{
    //echo("User not found");
    header("Location: ../discoverPageNotLoggedIn.html");
}


?>