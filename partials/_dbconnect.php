<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "loginsystem";

    //connect to database
    $conn = mysqli_connect($server, $username,$password, $database);

        if(!$conn){
            die ("Unable to connect".mysqli_connect_error());
        }
        // else{
        //     echo "connection suceessfull. <br>";
        // }
  
?>