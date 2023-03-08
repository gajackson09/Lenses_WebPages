<?php
include ("security.php");

if(loggedin()){
    echo("<a href='Lenses_WebPages/discoverPageLoginedIn.html'>Loggedin</a>");
}else{
    echo("Lenses_WebPages/discoverPageNotLoggedIn.html")
;}


?>