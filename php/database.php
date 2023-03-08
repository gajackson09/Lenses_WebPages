<?php
    $connection = null;
    
      function databaseConnect(){
        global $connection;
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "lense";
        
        if($connection == null){
            $connection = mysqli_connect($server, $username, $password, $database);
        }
      }
        //adds user input to database and hashes password 
    function data_addUser($username, $password, $firstName, $lastName) {
        global $connection;
        if ($connection != null) {
            $password = password_hash($password, PASSWORD_DEFAULT);
            mysqli_query($connection, "INSERT INTO users(username, password, firstName, lastName) VALUES ('{$username}', '{$password}', '{$firstName}', '{$lastName}');");
        }
    }
    //matches username with hashed password
    function data_verify($username, $password){
        global $connection;
        $status = false;
        if($connection != null){
            $results = mysqli_query($connection, "SELECT password FROM users WHERE username = '{$username}';");
            $row = mysqli_fetch_assoc($results);
            if($row != null){
                if(password_verify($password, $row["password"])){
                    $status = true;
                }
            }
        }

        return $status;
    }

    function database_close(){
        global $connection;
        if($connection != null){
            mysqli_close($connection);
        }
    }

    function data_deleteUser($username, $password){
        global $connection;
        if($connection != null){
            if(data_verify($username, $password)){
                $deleteData = "DELETE FROM users WHERE username = '{$username}'";
                mysqli_query($connection, $deleteData);
            }
        }
    }
?>