<?php 

    // host
    $host = "localhost";

    // db name
    $dbname = "auth-sys";

    // user and password for phpmyadmin
    $user = "root";

    // pass
    $pass = "";

    // conn
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);

    if($conn == true) {
        echo "It's working fine";
    } else {
        echo "connection is wrong: err";
    }
?>