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
        echo("you done fuckt up");
    }

?>