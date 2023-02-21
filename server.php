<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "2MTrade";

    //Create Conection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if(!$conn) {
        die("Connecttion failed" . mysqli_connect_error());
    }

?>