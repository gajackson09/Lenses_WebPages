<?php
include ("security.php");

if(loggedin()){
    echo("<a href='Lenses_WebPages/discoverPageLoginedIn.html'>Loggedin</a>");
}else{
    header("<Location:../Lenses_WebPages/discoverPageNotLoggedIn.html");
}


?>