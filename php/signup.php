<?php
    include("security.php");

    if(login()){
        echo("user already exists?");
    }else{
        if(validate()){
            addUser();
            //log in user using info sent to database (?not connected to database??)
            login();
            header("Location: ../profilePage.php");
        }
        //}else{
        //header("Location: ../profilePage.php");
            //echo("you done fuckt up");
    //}
    //else{header("Location: ../profilePage.php");
    //}
}

?>