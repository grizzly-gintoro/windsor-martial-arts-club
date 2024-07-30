<?php

    $server_name = "localhost";
    $db_username = "root";
    $db_password = "";

    $db_name = "login_db";

    $conn = mysqli_connect($sname, $db_username, $db_password);

    if(!$conn) {
        echo "Connection Failed";
    }
?>