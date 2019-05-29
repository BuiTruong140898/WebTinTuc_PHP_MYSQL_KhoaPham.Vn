<?php

// $con = mysqli_connect('localhost:3306', 'root', '');
// mysqli_select_db($con, 'db_tintuc');
// mysqli_query($con, "SET NAMES 'utf8'");
function myConnect() {
    $servername = "127.0.0.1:3306";
    $username = "root";
    $password = "";
    $dbname = "db_tintuc";
    $conn = mysqli_connect($servername, $username, $password);
    mysqli_select_db($conn, $dbname);
    // mysqli_query($conn, "SET NAME 'utf8'");
    mysqli_set_charset($conn, 'UTF8');
    return $conn;
}

?>