<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "2mtrade";

    $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Error: " . mysqli_error($conn));
    mysqli_query($conn, "SET NAMES 'utf8'");
    
?>
