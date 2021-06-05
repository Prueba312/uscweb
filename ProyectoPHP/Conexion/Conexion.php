<?php
function conectar(){
    $servername = "localhost";
    $database = "proyecto";
    $username = "root";
    $password = "";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    $conn->set_charset("utf8");
    // Check connection
    if ($conn->connect_errno) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}
?>