<?php
    include("security.php");

    //if(login()){
    //    echo("user already exists?");
    //}else{echo()}


    if(validate()){
        addUser();
        // echo()
        header("Location: ../profilePage.php");
        
    }else{
        header("Location: ../profilePage.php");
        echo("you done fuckt up");
    }

?>