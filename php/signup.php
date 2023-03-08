<?php
    include("security.php");

    //if(login()){
    //    echo("user already exists?");
    //}else{echo()}

    if(validate()){
        addUser();
        header("Location: ../profilePage.html");
        echo("Welcome new user!");
    }else{
        echo("you done fuckt up");
    }

?>