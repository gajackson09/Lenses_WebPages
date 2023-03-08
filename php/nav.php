<?php
include ("security.php");

if(loggedin()){
    echo("<a href='Lenses_WebPages/discoverPageLoginedIn.html'>Loggedin</a>");
}else{
    //echo("User not found");
    header("<Location: /discoverPageNotLoggedIn.html");
}


?>